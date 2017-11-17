<?php

namespace App\Http\Controllers;

use App\User;
use Sentinel;
use App\Hospital;
use Carbon\Carbon;
use App\Model\City;
use App\Model\Sub_area;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DoctorController extends Controller
{
 	public function dashboard()
 	{
 		return view('doctor.dashboard');
	 }
	 public function status(Request $request)
	 {
		$getDoctor = Sentinel::getUser()->id;
		$doctor = User::find($getDoctor);
		$doctor->status = $request->status;
		$doctor->save();
		return response(['message'=>'Your Status Successfully Update']);
	 }
 	public function profile()
 	{
		 $doctor  = Sentinel::getUser();
		 $cities = City::all();		 
		 $sub_areas = Sub_area::all();
		 $hospitals = Hospital::all();

 		return view('doctor.profile',compact('doctor','cities','sub_areas','hospitals'));
 	}
 	public function profileUpdate(Request $request)
 	{
 		$file = $request->file('avatar');

 		if (isset($file)) {
 			$currentDate = Carbon::now()->toDateString();
	 		$filename = Sentinel::getUser()->username . $currentDate . uniqid() . $file->getClientOriginalName();

	 		if (!file_exists('upload/doctors/original')) {
	 			mkdir('upload/doctors/original',0777, true);
	 		}

			 $file->move('upload/doctors/original',$filename);
			 
			 if (!file_exists('upload/doctors/avatar')) {
				 mkdir('upload/doctors/avatar',0777, true);
			 }
			 $avatar = Image::make('upload/doctors/original/' . $filename)->resize(500,500)->save('upload/doctors/avatar/'. $filename, 50);
			 
	 		if (!file_exists('upload/doctors/profile')) {
	 			mkdir('upload/doctors/profile',0777, true);
	 		}
	 		$profile = Image::make('upload/doctors/original/'. $filename)->resize(362, 459)->save('upload/doctors/profile/'. $filename, 50);

	 		if (!file_exists('upload/doctors/thumb')) {
	 			mkdir('upload/doctors/thumb', 0777, true);
	 		}
	 		$thumb = Image::make('upload/doctors/original/'. $filename)->resize(270, 366)->save('upload/doctors/thumb/'. $filename, 50);

 		}else{
 			$filename = Sentinel::getUser()->avatar;

 		}

		$getDoctor = Sentinel::getUser()->id;
 		$doctor = User::find($getDoctor);
 		$doctor->name = $request->name;
		$doctor->username = $request->username;
		$doctor->slug = title_case(str_slug($request->name)); 
 		$doctor->mobile_number = $request->txt_MobileNumber;
 		$doctor->avatar = $filename;
 		$doctor->designation = $request->txt_Designation;
 		// $doctor->job_title = $request->txt_JobTitle;
 		$doctor->degrees = $request->txt_Degrees;
 		$doctor->bmdc_number = $request->txt_BMDC;
 		$doctor->department = $request->txt_Department;
 		$doctor->speciality = $request->txt_Specialty;
 		// $doctor->specialty_details = $request->txt_SpecialtyDetails;
 		$doctor->city_id = $request->opt_City;
 		$doctor->sub_area_id = $request->opt_SubArea;
 		// $doctor->working_address = $request->txt_WorkingAddress;
 		$doctor->hospital_id = $request->opt_Hospital;
 		$doctor->association = $request->txt_Association;
 		$doctor->gender = $request->opt_Gender;
 		$doctor->date_of_birth = $request->dat_DateofBirth;
 		$doctor->religion = $request->opt_Religion;
 		$doctor->doctor_short_summery = $request->txt_DoctorShortSummery;
 		$doctor->save();
 		return redirect()->back()->with(['success' => 'Your profile has been successfully updated.']);
 	}

 	public function doctorDetail($slug)
 	{
		$allDoctors = User::where('role','doctor')->where('slider2',1)->inRandomOrder()->get();
 		$doctor = User::where('slug',$slug)->first();
 		$chambers = User::find($doctor->id)->chambers;
 		return view('doctorDetail', compact('doctor','chambers','allDoctors'));
 	}

 	public function allDoctors()
 	{
		 $allDoctors = User::where('role','doctor')->where('status','active')->inRandomOrder()->paginate(10);
		 $allDoctorsCount= $allDoctors->count();

		 if($allDoctorsCount >= 1){
			 return view('alldoctors', compact('allDoctors'));
		}else{
			return view('alldoctors',['msg'=>'Opps, no doctor found :)']);
		}
 	}

}
