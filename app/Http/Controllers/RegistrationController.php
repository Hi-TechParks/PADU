<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Image;
use Auth;
use DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $job_cates = DB::table('padu_job_category')
                    ->select('padu_job_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();

        //
        return view('registration')->with('job_cates', $job_cates);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'alumni_name' => 'required',
            'batch_no' => 'required',
            'birth_date' => 'required|date|before_or_equal:today',
            'alumni_image' => 'required|image',
            'job_category' => 'required',
            'designation' => 'required',
            'email' => 'email',
            'phone' => 'required',
        ]);


        // Primary Key Generator
        $primary_key = DB::table('padu_alumni_registration')
                    ->select('padu_alumni_registration.ALUMNI_REGISTRATION_ID')
                    ->max('ALUMNI_REGISTRATION_ID');

        if (isset($primary_key)) {
            $alumni_id = $primary_key + '1';
        }
        else {
            $alumni_id = '20190001';
        }

        
        // image upload, fit and store inside public folder 
        if($request->hasFile('alumni_image')){
            $filenameWithExt = $request->file('alumni_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('alumni_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Resize And Crop as Fit image here (200 width, 200 height)
            $thumbnailpath = 'uploads/images/alumni/'.$fileNameToStore;
            $img = Image::make($request->file('alumni_image')->getRealPath())->fit(200, 200, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
        }
        else{
            $fileNameToStore = 'noimage.jpg'; // if no image selected this will be the default image
        }


        //
        $insert = DB::table('padu_alumni_registration')
                    ->insert([
                        'ALUMNI_REGISTRATION_ID' => $alumni_id,
                        'MEMBER_NAME' => $request->get('alumni_name'),
                        'BATCH_NO' => $request->get('batch_no'),
                        'DOB' => $request->get('birth_date'),
                        'PROFILE_IMAGE_PATH' => $fileNameToStore,
                        'JOB_CATEGORY' => $request->get('job_category'),
                        'DESIGNATION' => $request->get('designation'),
                        'MAIL_ID' => $request->get('email'),
                        'CONTACT_PHONE' => $request->get('phone'),
                        'ACTIVE_STATUS' => '0',
                    ]);

        Session::flash('success', 'Alumni Registered Successfully!');


        //
        return redirect()->route('registration.create');
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
