<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TrainingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return 'index';
        $trainings = Training::all();
        $apps = collect();
        return view('admin.trainings.applications')
            -> with ('course_id', null)
            -> with ('trainings', $trainings)
            -> with('apps', $apps);
    }

    public function getApplicants(Request $request) {
//        dd($request->all());
        $trainings = Training::all();
        $apps = Application::where('trainings_id', '=', $request->course_id)->get();
        return view('admin.trainings.applications')
            -> with ('trainings', $trainings)
            -> with ('course_id', $request->course_id)
            -> with('apps', $apps);
    }

    public function getApplicants2($id) {
        $trainings = Training::all();
        $apps = Application::where('trainings_id', '=', $id)->get();
        return view('admin.trainings.applications')
            -> with ('trainings', $trainings)
            -> with ('course_id', $id)
            -> with('apps', $apps);
    }

    public function getApplicant($id) {
        $applicant = Application::find($id);
        //dd($applicant->training);
        $trainings = Training::where('id', '=', $applicant->trainings_id)->get();
        //dd($training);
        return view('admin.trainings.applicant')
            -> with('applicant', $applicant)
            -> with('trainings', $trainings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'trainings_id' => 'required',
            'name' => 'required',
            'dob' => 'required',
            'relative_name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'qualification' => 'required',
            'payment_mode' => 'required',
            'passport_photo' => 'nullable|mimes:jpeg,jpg,png,gif|max:2048',
            'document_photo' => 'nullable|mimes:jpeg,jpg,png,gif|max:2048',
        ];

        $customMessage = [
            'trainings_id.required' => 'Please select Course Name',
            'name.required' => 'Please enter your Name',
            'dob.required' => 'Please enter Date of Birth',
            'relative_name.required' => 'Please enter Relative\'s Name',
            'address.required' => 'Please enter your Address',
            'contact.required' => 'Please enter your Phone No',
            'email.required' => 'Please enter your Email',
            'email.email' => 'Please enter a valid Email Address',
            'qualification.required' => 'Please enter Educational Qualification',
            'payment_mode.required' => 'Please select Payment Mode',
            'passport_photo.mimes' => 'File must be of type JPG, PNG or GIF',
            'passport_photo.uploaded' => 'File must be less than 2Mb',
            'document_photo.mimes' => 'File must be of type JPG, PNG or GIF',
            'document_photo.uploaded' => 'File must be less than 2Mb',
        ];

        $this->validate($request, $rules, $customMessage);

        $app = new Application();

        if($files = $request->file('passport_photo')){
            $path = $request->file('passport_photo');
            $img = Image::make($path)->resize(480, 480)->encode();
            $filename = time().'.'.$path->getClientOriginalExtension();
            Storage::put($filename, $img);
            Storage::move($filename, 'public/passport_photo/' . $filename);
            $app->passport_photo = $filename;
        }
        if($files = $request->file('document_photo')){
            $path = $request->file('document_photo');
            $img = Image::make($path)->resize(480, 480)->encode();
            $filename = time().'.'.$path->getClientOriginalExtension();
            Storage::put($filename, $img);
            Storage::move($filename, 'public/document_photo/' . $filename);
            $app->document_photo = $filename;
        }
        $app->trainings_id = $request->trainings_id;
        $app->name = $request->name;
        $app->dob = setDateFromDDMMYYYY($request->dob);
        $app->relative_name = $request->relative_name;
        $app->address = $request->address;
        $app->contact = $request->contact;
        $app->email = $request->email;
        $app->qualification = $request->qualification;
        $app->payment_mode = $request->payment_mode;
        $app->fee_paid = false;
        $app->save();
        return redirect()->route('admin.trainings.applications');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
