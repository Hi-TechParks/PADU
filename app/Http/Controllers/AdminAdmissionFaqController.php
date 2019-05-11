<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminAdmissionFaqController extends Controller
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
        $faqs = DB::table('padu_program_admission_faq')
                    ->join('padu_program_admission', 'padu_program_admission_faq.PROGRAM_ADMISSION_ID', '=', 'padu_program_admission.PROGRAM_ADMISSION_ID')
                    ->select('padu_program_admission_faq.*', 'padu_program_admission.ADMISSION_TITLE')
                    ->where('padu_program_admission_faq.FAQ_Q', 'LIKE', '%'.$request->get('question').'%')
                    ->where('padu_program_admission.ADMISSION_TITLE', 'LIKE', '%'.$request->get('admission_title').'%')
                    ->orderBy('PROGRAM_ADMISSION_ID', 'DESC')
                    ->paginate(10);

        //
        return view('admin.faq_list')->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $admissions = DB::table('padu_program_admission')
                    ->select('padu_program_admission.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();
        //
        return view('admin.faq_create')->with('admissions', $admissions);
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
            'admission_title' => 'required',
            'serial_no' => 'numeric|required',
            'question' => 'required',
            'content' => 'required',
        ]);

        // Primary Key Generator
        $primary_key = DB::table('padu_program_admission_faq')
                    ->select('padu_program_admission_faq.PROGRAM_ADMISSION_FAQ_ID')
                    ->max('PROGRAM_ADMISSION_FAQ_ID');

        if (isset($primary_key)) {
            $faq_id = $primary_key + '1';
        }
        else {
            $faq_id = '20190001';
        }


        $insert = DB::table('padu_program_admission_faq')
            ->insert([
                'PROGRAM_ADMISSION_FAQ_ID' => $faq_id,
                'PROGRAM_ADMISSION_ID' => $request->get('admission_title'),
                'FAQ_SL_NO' => $request->get('serial_no'),
                'FAQ_Q' => $request->get('question'),
                'FAQ_A' => $request->get('content'),
                'ACTIVE_STATUS' => '1',
                'ENTERED_BY' => Auth::user()->id,
                'ENTRY_TIMESTAMP' => Carbon::now()
            ]);

        Session::flash('success', 'FAQ Created Successfully!'); 

        //
        return redirect()->route('faq.create');
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
        $faqs = DB::table('padu_program_admission_faq')
                    ->join('padu_program_admission', 'padu_program_admission_faq.PROGRAM_ADMISSION_ID', '=', 'padu_program_admission.PROGRAM_ADMISSION_ID')
                    ->select('padu_program_admission_faq.*', 'padu_program_admission.ADMISSION_TITLE')
                    ->where('PROGRAM_ADMISSION_FAQ_ID', $id)
                    ->get();

        //
        return view('admin.faq_view')->with('faqs', $faqs);
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
        $admissions = DB::table('padu_program_admission')
                    ->select('padu_program_admission.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();

        //
        $faqs = DB::table('padu_program_admission_faq')
                    ->select('padu_program_admission_faq.*')
                    ->where('PROGRAM_ADMISSION_FAQ_ID', $id)
                    ->get();

        //
        return view('admin.faq_edit')->with('faqs', $faqs)
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
            'admission_title' => 'required',
            'serial_no' => 'numeric|required',
            'question' => 'required',
            'content' => 'required',
        ]);

        $update = DB::table('padu_program_admission_faq')
            ->where('PROGRAM_ADMISSION_FAQ_ID', $id)
            ->update([
                'PROGRAM_ADMISSION_ID' => $request->get('admission_title'),
                'FAQ_SL_NO' => $request->get('serial_no'),
                'FAQ_Q' => $request->get('question'),
                'FAQ_A' => $request->get('content'),
                'UPDATED_BY' => Auth::user()->id,
                'UPDATE_TIMESTAMP' => Carbon::now()
            ]);


        Session::flash('success', 'FAQ Updated Successfully!'); 

        //
        return redirect()->route('faq.edit', [$id]);
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
        $faqs = DB::table('padu_program_admission_faq')
                ->select('padu_program_admission_faq.*')
                ->where('padu_program_admission_faq.PROGRAM_ADMISSION_FAQ_ID', '=', $id)
                ->get();

        foreach( $faqs as $faq ){
            if ($faq->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_program_admission_faq')
                        ->where('PROGRAM_ADMISSION_FAQ_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($faq->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_program_admission_faq')
                        ->where('PROGRAM_ADMISSION_FAQ_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $faqs = DB::table('padu_program_admission_faq')
                    ->join('padu_program_admission', 'padu_program_admission_faq.PROGRAM_ADMISSION_ID', '=', 'padu_program_admission.PROGRAM_ADMISSION_ID')
                    ->select('padu_program_admission_faq.*', 'padu_program_admission.ADMISSION_TITLE')
                    ->where('PROGRAM_ADMISSION_FAQ_ID', $id)
                    ->paginate(1);

        //
        return view('admin.faq_list')->with('faqs', $faqs);

    }
}
