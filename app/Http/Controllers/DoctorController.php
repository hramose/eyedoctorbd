<?php

namespace App\Http\Controllers;

use Sentinel;
use App\User;
use Carbon\Carbon;
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
 		return view('doctor.profile',compact('doctor'));
 	}
 	public function profileUpdate(Request $request)
 	{
 		$file = $request->file('avatar');

 		if (isset($file)) {
 			$currentDate = Carbon::now()->toDateString();
	 		$filename = Sentinel::getUser()->username . $currentDate . uniqid() . $file->getClientOriginalName();

	 		if (!file_exists('doctors/avatar')) {
	 			mkdir('doctors/avatar',0777, true);
	 		}

	 		$file->move('doctors/avatar',$filename);

	 		if (!file_exists('doctors/profile')) {
	 			mkdir('doctors/profile',0777, true);
	 		}
	 		$profile = Image::make('doctors/avatar/'. $filename)->resize(362, 459)->save('doctors/profile/'. $filename, 50);

	 		if (!file_exists('doctors/thumb')) {
	 			mkdir('doctors/thumb', 0777, true);
	 		}
	 		$thumb = Image::make('doctors/avatar/'. $filename)->resize(270, 366)->save('doctors/thumb/'. $filename, 50);

 		}else{
 			$filename = Sentinel::getUser()->avatar;

 		}

		$getDoctor = Sentinel::getUser()->id;
 		$doctor = User::find($getDoctor);
 		$doctor->name = $request->txt_FullName;
 		$doctor->mobile_number = $request->txt_MobileNumber;
 		$doctor->avatar = $filename;
 		$doctor->designation = $request->txt_Designation;
 		// $doctor->job_title = $request->txt_JobTitle;
 		$doctor->degrees = $request->txt_Degrees;
 		$doctor->bmdc_number = $request->txt_BMDC;
 		$doctor->department = $request->txt_Department;
 		$doctor->speciality = $request->txt_Specialty;
 		// $doctor->specialty_details = $request->txt_SpecialtyDetails;
 		$doctor->city = $request->opt_City;
 		$doctor->subarea = $request->opt_SubArea;
 		// $doctor->working_address = $request->txt_WorkingAddress;
 		$doctor->hospital_name = $request->txt_HospitalName;
 		$doctor->association = $request->txt_Association;
 		$doctor->gender = $request->opt_Gender;
 		$doctor->date_of_birth = $request->dat_DateofBirth;
 		$doctor->religion = $request->opt_Religion;
 		$doctor->doctor_short_summery = $request->txt_DoctorShortSummery;
 		$doctor->save();
 		return redirect()->back()->with(['success' => 'Your profile has been successfully updated.']);
 	}

 	public function doctorDetail($username)
 	{
		$allDoctors = User::where('role','doctor')->where('status','active')->inRandomOrder()->get();

 		$doctor = User::where('username',$username)->first();
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
