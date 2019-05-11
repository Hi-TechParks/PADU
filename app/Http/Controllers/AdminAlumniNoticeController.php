<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminAlumniNoticeController extends Controller
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
        $notices = DB::table('padu_alumni_notice')
                    ->select('padu_alumni_notice.*')
                    ->where('NOTICE_TITLE', 'LIKE', '%'.$request->get('notice_title').'%')
                    ->orderBy('ALUMNI_NOTICE_ID', 'DESC')
                    ->paginate(10);
        //
        return view('admin.alumni_notice_list')->with('notices', $notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.alumni_notice_create');
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
            'notice_title' => 'required',
            'content' => 'required',
            'publish_start' => 'required|date|after_or_equal:today',
            'publish_end' => 'required|date|after_or_equal:publish_start',
        ]);


        // Primary Key Generator
        $primary_key = DB::table('padu_alumni_notice')
                    ->select('padu_alumni_notice.ALUMNI_NOTICE_ID')
                    ->max('ALUMNI_NOTICE_ID');

        if (isset($primary_key)) {
            $notice_id = $primary_key + '1';
        }
        else {
            $notice_id = '20190001';
        }


        //
        $insert = DB::table('padu_alumni_notice')
                    ->insert([
                        'ALUMNI_NOTICE_ID' => $notice_id,
                        'NOTICE_TITLE' => $request->get('notice_title'),
                        'NOTICE_DESC' => $request->get('content'),
                        'PUBLISH_START_DATE' => $request->get('publish_start'),
                        'PUBLISH_END_DATE' => $request->get('publish_end'),
                        'ACTIVE_STATUS' => '1',
                        'ENTERED_BY' => Auth::user()->id,
                        'ENTRY_TIMESTAMP' => Carbon::now()
                    ]);

        Session::flash('success', 'Notice Created Successfully!');


        //
        return redirect()->route('alumni_notice.create');
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
        $notices = DB::table('padu_alumni_notice')
                    ->select('padu_alumni_notice.*')
                    ->where('ALUMNI_NOTICE_ID', $id)
                    ->get();

        //
        return view('admin.alumni_notice_view')->with('notices', $notices);
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
        $notices = DB::table('padu_alumni_notice')
                    ->select('padu_alumni_notice.*')
                    ->where('ALUMNI_NOTICE_ID', $id)
                    ->get();

        //
        return view('admin.alumni_notice_edit')->with('notices', $notices);
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
            'notice_title' => 'required',
            'content' => 'required',
            'publish_start' => 'required|date',
            'publish_end' => 'required|date|after_or_equal:publish_start',
        ]);


        //
        $update = DB::table('padu_alumni_notice')
                    ->where('ALUMNI_NOTICE_ID', $id)
                    ->update([
                        'NOTICE_TITLE' => $request->get('notice_title'),
                        'NOTICE_DESC' => $request->get('content'),
                        'PUBLISH_START_DATE' => $request->get('publish_start'),
                        'PUBLISH_END_DATE' => $request->get('publish_end'),
                        'UPDATED_BY' => Auth::user()->id,
                        'UPDATE_TIMESTAMP' => Carbon::now()
                    ]);


        Session::flash('success', 'Notice Updated Successfully!');


        //
        return redirect()->route('alumni_notice.edit', [$id]);
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
        $notices = DB::table('padu_alumni_notice')
                ->select('padu_alumni_notice.*')
                ->where('padu_alumni_notice.ALUMNI_NOTICE_ID', '=', $id)
                ->get();

        foreach( $notices as $notice ){
            if ($notice->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_alumni_notice')
                        ->where('ALUMNI_NOTICE_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($notice->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_alumni_notice')
                        ->where('ALUMNI_NOTICE_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $notices = DB::table('padu_alumni_notice')
                    ->select('padu_alumni_notice.*')
                    ->where('ALUMNI_NOTICE_ID', $id)
                    ->orderBy('ALUMNI_NOTICE_ID', 'DESC')
                    ->paginate(1);
        //
        return view('admin.alumni_notice_list')->with('notices', $notices);

    }
}
