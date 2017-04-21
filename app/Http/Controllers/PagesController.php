<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Auth;
use Storage;
use File;

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
		return view('pages.profileform');
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
		$profile->save();

		return redirect('profile');
	}

	public function displayProfile(){
		$profile = Auth::user()->profile;
		if(Auth::user()->role == 'hiree'){
			return view('pages.profile', compact('profile'));
		}
		else{
			return view('pages.profile', compact('profile'));
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
	
}

	


?>