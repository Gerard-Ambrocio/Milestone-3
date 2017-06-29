<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Auth;
use Storage;
use File;
use App\City;
use App\Job;
use App\User;

class PagesController extends Controller {

	public function getIndex(){
		#process variable or params
		#talk to the model 
		#recieve the model 
		#compile or process data from the model if needed 
		#pass the data to the correct view
		return redirect('login');
	}
	public function getAbout(){
		
		$first = 'una';
		$last = 'huli';

		$fullname = $first. " ". $last;
		$email ='dfjgnjdgn@fsdf.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}
	public function getContact(){
		return view('pages.contact');
	}

	public function getProfileform(){
		$cities = City::all();
		return view('pages.profileform', compact('cities'));
	}

	public function postProfileform(Request $request){
		$profile = new Profile();
		$profile->first_name = ucfirst($request->first_name);
		$profile->last_name = ucfirst($request->last_name);
		$profile->job_description = $request->job_description;

		$profile->location = $request->location;

		$profile->description = $request->description;
		$profile->rates = $request->rates;
		$profile->role = Auth::user()->role;
		$profile->user_id = Auth::user()->id;
		$profile->avatar = 'default.png';
		$profile->save();

		return redirect('profile');
	}

	public function displayProfile(){
		$profiles = Auth::user()->profile;
		if(Auth::user()->role == 'hiree'){
			$cities = City::all();
			$jobs = Auth::user()->hired;
			return view('pages.profile', compact('profiles','cities','jobs'));
		}

		elseif(Auth::user()->role == 'hirer'){
			//dd(Job::find(10)->pending_applications);
			$cities = City::all();
			$jobs = Job::where('hirer', Auth::user()->id)->get();
			return view('pages.profile-hirer', compact('profiles','cities','jobs'));
	
		}		
		else{
			$profiles = Profile::all();
			$jobs = Job::all();
			$users = User::all();
			return view('pages.profile-admin', compact('profiles','jobs','users'));
		}
	}

	public function editJobDescription(Request $request){
		$profile = Auth::user()->profile;
		if($request->display_name == 'full'){
			$profile->display_name = $profile->first_name." ".$profile->last_name;
		} else {
			$profile->display_name = $profile->first_name[0].". ".$profile->last_name;
		}
		$profile->job_description = $request->job_description;
		$profile->location = $request->location;
		$profile->rates = $request->rates;
		$profile->description = $request->description;







		$profile->save();

		return redirect()->back();
	}

	public function editAvatar(Request $request)
    {
        $avatar = $request->file('avatar');
        $ext = $avatar->guessClientExtension();
        $filename = 'avatar'.Auth::user()->id.".$ext";

        if($avatar) {
            Storage::disk('local')->put($filename, File::get($avatar));
            $user_profile = Auth::user()->profile;
            $user_profile->avatar = $filename;
            $user_profile->save();
        }

        return redirect('profile');
        
    }

    	public function postJob(Request $request){
    	$job = new Job();
		$job->job_name = ucfirst($request->job_name);
		$job->job_description = $request->job_description;
		$job->job_location = $request->job_location;
		$job->job_price = $request->job_price;
		$job->hirer = Auth::user()->id;
		// if($request->status == 'active'){
		// 	$job->status = "active";
		// } else {
		// 	$job->status ="inactive";
		// }	
		if($request->job_scheme == "hour"){
			$job->job_scheme = "/hour";
		} else {
			$job->job_scheme ="fixed";
		}		
		$job->save();

		return redirect('profile');

    }	

    	public function deleteJob($id){

    	$jobtbd = Job::find($id);
    	$jobtbd->delete();

//    	Job::destroy($id);
		
		

		return redirect('profile');

    }	


    	public function deleteUser($id){
    		$usertbd = User::find($id);
    		// dd($usertbd);
    		foreach ($usertbd->profile->jobs as $job) {
    			$job->delete();
    		}
    		$usertbd->profile->delete();
	    	$usertbd->delete();
		    	
			return redirect('profile');
	    }	

    	
    	public function displayMarket(){
    	$jobs = Job::all();
    	return view('pages.market', compact('jobs'));	
    	}

 

    	public function applyJob($id){
    	Auth::user()->create_application($id);
    	return redirect('market');
    	}


    	public function hireApplicant($user_id,$job_id){
    	Job::find($job_id)->hire_an_applicant($user_id);
    	
    	return redirect('profile');
    	}


	
}

	


?>