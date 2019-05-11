<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class AlumniController extends Controller
{
    public function dateFormat(){
        $today = Carbon::now();
        return $today->toDateString();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $events = DB::table('padu_alumni_event')
                    ->select('padu_alumni_event.*')
                    ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                    ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('EVENT_DATE', 'ASC')
                    ->take(4)
                    ->get();

        //
        $notices = DB::table('padu_alumni_notice')
                    ->select('padu_alumni_notice.*')
                    ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                    ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('PUBLISH_START_DATE', 'DESC')
                    ->take(4)
                    ->get();

        //
        $alumnis = DB::table('padu_alumni_registration')
                    ->join('padu_job_category', 'padu_job_category.JOB_CATEGORY_ID', '=', 'padu_alumni_registration.JOB_CATEGORY')
                    ->select('padu_alumni_registration.*', 'padu_job_category.CATEGORY_NAME')
                    ->where('padu_alumni_registration.MEMBER_NAME', 'LIKE', '%'.$request->get('alumni_name').'%')
                    ->where('padu_job_category.CATEGORY_NAME', 'LIKE', '%'.$request->get('job_category').'%')
                    ->where('padu_alumni_registration.ACTIVE_STATUS', '1')
                    ->orderBy('ALUMNI_REGISTRATION_ID', 'DESC')
                    ->paginate(12);
        //
        return view('alumni')->with('events', $events)
                            ->with('notices', $notices)
                            ->with('alumnis', $alumnis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
