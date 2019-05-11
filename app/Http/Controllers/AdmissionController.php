<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programs = DB::table('padu_program')
                        ->join('padu_program_category', 'padu_program.PROGRAM_CATEGORY_ID', '=', 'padu_program_category.PROGRAM_CATEGORY_ID')
                        ->select('padu_program.*')
                        ->where('padu_program.ACTIVE_STATUS', '1')
                        ->orderBy('padu_program.PROGRAM_ID', 'DESC')
                        ->get();

        //
        return view('program')->with('programs', $programs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function underGraduation()
    {
        //
        $programs = DB::table('padu_program')
                        ->join('padu_program_category', 'padu_program.PROGRAM_CATEGORY_ID', '=', 'padu_program_category.PROGRAM_CATEGORY_ID')
                        ->select('padu_program.*')
                        ->where('padu_program_category.SHORT_CODE', 'U')
                        ->where('padu_program.ACTIVE_STATUS', '1')
                        ->get();

        //
        return view('program')->with('programs', $programs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function graduation()
    {
        //
        $programs = DB::table('padu_program')
                        ->join('padu_program_category', 'padu_program.PROGRAM_CATEGORY_ID', '=', 'padu_program_category.PROGRAM_CATEGORY_ID')
                        ->select('padu_program.*')
                        ->where('padu_program_category.SHORT_CODE', 'G')
                        ->where('padu_program.ACTIVE_STATUS', '1')
                        ->get();

        //
        return view('program')->with('programs', $programs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postGraduation()
    {
        //
        $programs = DB::table('padu_program')
                        ->join('padu_program_category', 'padu_program.PROGRAM_CATEGORY_ID', '=', 'padu_program_category.PROGRAM_CATEGORY_ID')
                        ->select('padu_program.*')
                        ->where('padu_program_category.SHORT_CODE', 'P')
                        ->where('padu_program.ACTIVE_STATUS', '1')
                        ->get();

        //
        return view('program')->with('programs', $programs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mPhill()
    {
        //
        $programs = DB::table('padu_program')
                        ->join('padu_program_category', 'padu_program.PROGRAM_CATEGORY_ID', '=', 'padu_program_category.PROGRAM_CATEGORY_ID')
                        ->select('padu_program.*')
                        ->where('padu_program_category.SHORT_CODE', 'M')
                        ->where('padu_program.ACTIVE_STATUS', '1')
                        ->get();

        //
        return view('program')->with('programs', $programs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function phd()
    {
        //
        $programs = DB::table('padu_program')
                        ->join('padu_program_category', 'padu_program.PROGRAM_CATEGORY_ID', '=', 'padu_program_category.PROGRAM_CATEGORY_ID')
                        ->select('padu_program.*')
                        ->where('padu_program_category.SHORT_CODE', 'PH')
                        ->where('padu_program.ACTIVE_STATUS', '1')
                        ->get();

        //
        return view('program')->with('programs', $programs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admission($id)
    {
        //
        $admissions = DB::table('padu_program_admission')
                        ->join('padu_program', 'padu_program.PROGRAM_ID', '=', 'padu_program_admission.PROGRAM_ID')
                        ->join('padu_program_category', 'padu_program.PROGRAM_CATEGORY_ID', '=', 'padu_program_category.PROGRAM_CATEGORY_ID')
                        ->select('padu_program_admission.*', 'padu_program_category.CATEGORY_NAME')
                        ->where('padu_program.PROGRAM_ID', $id)
                        ->where('padu_program_admission.ACTIVE_STATUS', '1')
                        ->orderBy('padu_program_admission.PROGRAM_ADMISSION_ID', 'DESC')
                        ->take(1)
                        ->get();

        //
        $faqs = DB::table('padu_program_admission_faq')
                        ->join('padu_program_admission', 'padu_program_admission_faq.PROGRAM_ADMISSION_ID', '=', 'padu_program_admission.PROGRAM_ADMISSION_ID')
                        ->join('padu_program', 'padu_program.PROGRAM_ID', '=', 'padu_program_admission.PROGRAM_ID')
                        ->select('padu_program_admission_faq.*')
                        ->where('padu_program.PROGRAM_ID', $id)
                        ->where('padu_program_admission_faq.ACTIVE_STATUS', '1')
                        ->orderBy('padu_program_admission_faq.FAQ_SL_NO', 'ASC')
                        ->get();

        //
        return view('admission')->with('admissions', $admissions)
                                            ->with('faqs', $faqs);
    }

}
