<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminRegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $alumnis = DB::table('padu_alumni_registration')
                    ->join('padu_job_category', 'padu_job_category.JOB_CATEGORY_ID', '=', 'padu_alumni_registration.JOB_CATEGORY')
                    ->select('padu_alumni_registration.*', 'padu_job_category.CATEGORY_NAME')
                    ->where('padu_alumni_registration.MEMBER_NAME', 'LIKE', '%'.$request->get('alumni_name').'%')
                    ->where('padu_job_category.CATEGORY_NAME', 'LIKE', '%'.$request->get('job_category').'%')
                    ->orderBy('ALUMNI_REGISTRATION_ID', 'DESC')
                    ->paginate(10);
        //
        return view('admin.alumni_list')->with('alumnis', $alumnis);
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
        return view('admin.alumni_create')->with('job_cates', $job_cates);
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
                        'ACTIVE_STATUS' => '1',
                    ]);

        Session::flash('success', 'Alumni Created Successfully!');


        //
        return redirect()->route('alumni.create');
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
        $alumnis = DB::table('padu_alumni_registration')
                    ->join('padu_job_category', 'padu_job_category.JOB_CATEGORY_ID', '=', 'padu_alumni_registration.JOB_CATEGORY')
                    ->select('padu_alumni_registration.*', 'padu_job_category.CATEGORY_NAME')
                    ->where('ALUMNI_REGISTRATION_ID', $id)
                    ->get();

        //
        return view('admin.alumni_view')->with('alumnis', $alumnis);
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
        $alumnis = DB::table('padu_alumni_registration')
                    ->select('padu_alumni_registration.*')
                    ->where('ALUMNI_REGISTRATION_ID', $id)
                    ->get();

        //
        $job_cates = DB::table('padu_job_category')
                    ->select('padu_job_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();

        //
        return view('admin.alumni_edit')->with('alumnis', $alumnis)
                                        ->with('job_cates', $job_cates);
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
        $request->validate([
            'alumni_name' => 'required',
            'batch_no' => 'required',
            'birth_date' => 'required|date|before_or_equal:today',
            'alumni_image' => 'nullable|image',
            'job_category' => 'required',
            'designation' => 'required',
            'email' => 'email',
            'phone' => 'required',
        ]);

        
        // image upload, fit and store inside public folder 
        if($request->hasFile('alumni_image')){
            $filenameWithExt = $request->file('alumni_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('alumni_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Resize And Crop as Fit image here (200 width, 200 height)
            $thumbnailpath = 'uploads/images/alumni/'.$fileNameToStore;
            $img = Image::make($request->file('alumni_image')->getRealPath())->fit(200, 200, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);

            //
            $update = DB::table('padu_alumni_registration')
                        ->where('ALUMNI_REGISTRATION_ID', $id)
                        ->update([
                            'MEMBER_NAME' => $request->get('alumni_name'),
                            'BATCH_NO' => $request->get('batch_no'),
                            'DOB' => $request->get('birth_date'),
                            'PROFILE_IMAGE_PATH' => $fileNameToStore,
                            'JOB_CATEGORY' => $request->get('job_category'),
                            'DESIGNATION' => $request->get('designation'),
                            'MAIL_ID' => $request->get('email'),
                            'CONTACT_PHONE' => $request->get('phone'),
                        ]);
        }
        else{
            
            //
            $update = DB::table('padu_alumni_registration')
                        ->where('ALUMNI_REGISTRATION_ID', $id)
                        ->update([
                            'MEMBER_NAME' => $request->get('alumni_name'),
                            'BATCH_NO' => $request->get('batch_no'),
                            'DOB' => $request->get('birth_date'),
                            'JOB_CATEGORY' => $request->get('job_category'),
                            'DESIGNATION' => $request->get('designation'),
                            'MAIL_ID' => $request->get('email'),
                            'CONTACT_PHONE' => $request->get('phone'),
                        ]);

        }


        Session::flash('success', 'Alumni Updated Successfully!');


        //
        return redirect()->route('alumni.edit', [$id]);
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


    public function status(Request $request, $id)
    {
        //
        $alumnis = DB::table('padu_alumni_registration')
                ->select('padu_alumni_registration.*')
                ->where('padu_alumni_registration.ALUMNI_REGISTRATION_ID', '=', $id)
                ->get();

        foreach( $alumnis as $alumni ){
            if ($alumni->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_alumni_registration')
                        ->where('ALUMNI_REGISTRATION_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($alumni->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_alumni_registration')
                        ->where('ALUMNI_REGISTRATION_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $alumnis = DB::table('padu_alumni_registration')
                    ->join('padu_job_category', 'padu_job_category.JOB_CATEGORY_ID', '=', 'padu_alumni_registration.JOB_CATEGORY')
                    ->select('padu_alumni_registration.*', 'padu_job_category.CATEGORY_NAME')
                    ->where('ALUMNI_REGISTRATION_ID', $id)
                    ->orderBy('ALUMNI_REGISTRATION_ID', 'DESC')
                    ->paginate(1);
        //
        return view('admin.alumni_list')->with('alumnis', $alumnis);

    }
}
