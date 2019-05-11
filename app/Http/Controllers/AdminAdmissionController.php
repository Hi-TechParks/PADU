<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminAdmissionController extends Controller
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
        $admissions = DB::table('padu_program_admission')
                    ->join('padu_program', 'padu_program.PROGRAM_ID', '=', 'padu_program_admission.PROGRAM_ID')
                    ->select('padu_program_admission.*', 'padu_program.PROGRAM_NAME')
                    ->where('padu_program_admission.ADMISSION_TITLE', 'LIKE', '%'.$request->get('admission_title').'%')
                    ->where('padu_program.PROGRAM_NAME', 'LIKE', '%'.$request->get('program_name').'%')
                    ->orderBy('PROGRAM_ADMISSION_ID', 'DESC')
                    ->paginate(10);

        //
        return view('admin.admission_list')->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $programs = DB::table('padu_program')
                    ->select('padu_program.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();
        //
        return view('admin.admission_create')->with('programs', $programs);
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
            'program_name' => 'required',
            'admission_title' => 'required',
            'content' => 'required',
        ]);

        // Primary Key Generator
        $primary_key = DB::table('padu_program_admission')
                    ->select('padu_program_admission.PROGRAM_ADMISSION_ID')
                    ->max('PROGRAM_ADMISSION_ID');

        if (isset($primary_key)) {
            $admission_id = $primary_key + '1';
        }
        else {
            $admission_id = '20190001';
        }


        $insert = DB::table('padu_program_admission')
            ->insert([
                'PROGRAM_ADMISSION_ID' => $admission_id,
                'ADMISSION_TITLE' => $request->get('admission_title'),
                'ADMISSION_DETAILS' => $request->get('content'),
                'PROGRAM_ID' => $request->get('program_name'),
                'ACTIVE_STATUS' => '1',
                'ENTERED_BY' => Auth::user()->id,
                'ENTRY_TIMESTAMP' => Carbon::now()
            ]);

        Session::flash('success', 'Admission Created Successfully!'); 

        //
        return redirect()->route('admission.create');
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
        $admissions = DB::table('padu_program_admission')
                    ->join('padu_program', 'padu_program.PROGRAM_ID', '=', 'padu_program_admission.PROGRAM_ID')
                    ->select('padu_program_admission.*', 'padu_program.PROGRAM_NAME')
                    ->where('PROGRAM_ADMISSION_ID', $id)
                    ->get();

        //
        return view('admin.admission_view')->with('admissions', $admissions);
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
        $programs = DB::table('padu_program')
                    ->select('padu_program.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();

        //
        $admissions = DB::table('padu_program_admission')
                    ->select('padu_program_admission.*')
                    ->where('PROGRAM_ADMISSION_ID', $id)
                    ->get();

        //
        return view('admin.admission_edit')->with('programs', $programs)
                                        ->with('admissions', $admissions);
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
            'program_name' => 'required',
            'admission_title' => 'required',
            'content' => 'required',
        ]);

        $update = DB::table('padu_program_admission')
            ->where('PROGRAM_ADMISSION_ID', $id)
            ->update([
                'ADMISSION_TITLE' => $request->get('admission_title'),
                'ADMISSION_DETAILS' => $request->get('content'),
                'PROGRAM_ID' => $request->get('program_name'),
                'UPDATED_BY' => Auth::user()->id,
                'UPDATE_TIMESTAMP' => Carbon::now()
            ]);


        Session::flash('success', 'Admission Updated Successfully!'); 

        //
        return redirect()->route('admission.edit', [$id]);
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
        $admissions = DB::table('padu_program_admission')
                ->select('padu_program_admission.*')
                ->where('padu_program_admission.PROGRAM_ADMISSION_ID', '=', $id)
                ->get();

        foreach( $admissions as $admission ){
            if ($admission->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_program_admission')
                        ->where('PROGRAM_ADMISSION_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($admission->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_program_admission')
                        ->where('PROGRAM_ADMISSION_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $admissions = DB::table('padu_program_admission')
                    ->join('padu_program', 'padu_program.PROGRAM_ID', '=', 'padu_program_admission.PROGRAM_ID')
                    ->select('padu_program_admission.*', 'padu_program.PROGRAM_NAME')
                    ->where('PROGRAM_ADMISSION_ID', $id)
                    ->paginate(1);

        //
        return view('admin.admission_list')->with('admissions', $admissions);

    }
}
