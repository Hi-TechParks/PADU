<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminJobCategoryController extends Controller
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
        $job_cates = DB::table('padu_job_category')
                    ->select('padu_job_category.*')
                    ->where('CATEGORY_NAME', 'LIKE', '%'.$request->get('category_title').'%')
                    ->orderBy('JOB_CATEGORY_ID', 'DESC')
                    ->paginate(10);

        //
        return view('admin.job_cate_list')->with('job_cates', $job_cates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.job_cate_create');
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
            'category_title' => 'required',
        ]);

        // Primary Key Generator
        $primary_key = DB::table('padu_job_category')
                    ->select('padu_job_category.JOB_CATEGORY_ID')
                    ->max('JOB_CATEGORY_ID');

        if (isset($primary_key)) {
            $job_cate_id = $primary_key + '1';
        }
        else {
            $job_cate_id = '20190001';
        }


        $insert = DB::table('padu_job_category')
            ->insert([
                'JOB_CATEGORY_ID' => $job_cate_id,
                'CATEGORY_NAME' => $request->get('category_title'),
                'SHORT_CODE' => $request->get('short_code'),
                'ACTIVE_STATUS' => '1',
                'ENTERED_BY' => Auth::user()->id,
                'ENTRY_TIMESTAMP' => Carbon::now()
            ]);

        Session::flash('success', 'Job Category Created Successfully!'); 

        //
        return redirect()->route('jobcate.create');
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
        $job_cates = DB::table('padu_job_category')
                    ->select('padu_job_category.*')
                    ->where('JOB_CATEGORY_ID', $id)
                    ->get();

        //
        return view('admin.job_cate_edit')->with('job_cates', $job_cates);
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
            'category_title' => 'required',
        ]);


        $update = DB::table('padu_job_category')
                ->where('JOB_CATEGORY_ID', $id)
                ->update([
                    'CATEGORY_NAME' => $request->get('category_title'),
                    'SHORT_CODE' => $request->get('short_code'),
                    'UPDATED_BY' => Auth::user()->id,
                    'UPDATE_TIMESTAMP' => Carbon::now()
                ]);

        Session::flash('success', 'Job Category Updated Successfully!'); 

        //
        return redirect()->route('jobcate.edit', [$id]);
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
        $job_cates = DB::table('padu_job_category')
                ->select('padu_job_category.*')
                ->where('padu_job_category.JOB_CATEGORY_ID', '=', $id)
                ->get();

        foreach( $job_cates as $job_cate ){
            if ($job_cate->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_job_category')
                        ->where('JOB_CATEGORY_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($job_cate->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_job_category')
                        ->where('JOB_CATEGORY_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $job_cates = DB::table('padu_job_category')
                    ->select('padu_job_category.*')
                    ->where('JOB_CATEGORY_ID', $id)
                    ->paginate(1);

        //
        return view('admin.job_cate_list')->with('job_cates', $job_cates);

    }
}
