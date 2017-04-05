<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\feedback;
use DB;

class feedbackController extends Controller
{
    public function get_parents(){
    	return view('parents');
    }
    public function get_confirm(){
    	return view('confirm');
    }
    public function post_otp(Request $request){
    	if($request->get('phNo') < 1000000000 || $request->get('phNo') > 9999999999){
    		return redirect('/parents')
    		->with('Error', 'Phone number is invalid');
    	}else{
    		$user = New User;
    		$user->phNo = $request->get('phNo');
    		$user->PIN = rand(100000, 999999);
    		if($user->save()){
    			return redirect('/confirm')->with('phoneNo', $user->phNo);
    		}else{
    			return redirect('/parents')
    			->with('Error', 'There is some problem with the connection');
    		}
    	}
    }
    public function post_confirm(Request $request){
    	$number= User::where('phNo', '=', $request->get('phNo'))->pluck('PIN');
    	if($number[0] == $request->get('otp')){
    		DB::table('users')->where('phNo',$request->get('phNo'))->delete();
    		return redirect('/feedback')
    		->with('phoneNo', $request->get('phNo'));
    	}else{
    		return redirect('/confirm')
    		->with('Error', 'Mismatch otp')
    		->with('phoneNo', $request->get('phNo'));
    	}
    }
    public function get_feedback(){
    	return view('feedback');
    }
    public function post_giveFeedback(Request $request){
    	$feedback = New feedback;
    	$feedback->phNo = $request->get('phNo');
    	$feedback->name = $request->get('name');
    	$feedback->title = $request->get('title');
    	$feedback->content = $request->get('content');
    	$feedback->rating = $request->get('rating-input-1');
    	if($feedback->save()){
    		return "Thank you for your feedback";
    	}else{
    		return redirect('/feedback')->with('Error', 'Sorry! Some connection problem occurs');
    	}
    }
}
