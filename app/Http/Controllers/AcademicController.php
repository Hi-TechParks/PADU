<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $faculties = DB::table('users')
                    ->join('bg_designation', function ($join) {
                        $join->on('users.DESIGNATION_ACADEMIC', '=', 'bg_designation.DESIGNATION_ID')
                            ->orOn('users.DESIGNATION_ADMIN', '=', 'bg_designation.DESIGNATION_ID');
                    })
                    ->select('users.*', 'bg_designation.DESIGNATION_NAME')
                    ->where('users.name', 'LIKE', '%'.$request->get('full_name').'%')
                    ->where('bg_designation.DESIGNATION_NAME', 'LIKE', '%'.$request->get('designation').'%')
                    ->where('bg_designation.SHORT_CODE', '!=', 'C')
                    ->where('users.USER_TYPE_ID', '1')
                    ->where('users.ACTIVE_STATUS', '1')
                    ->orderBy('name', 'ASC')
                    ->paginate(7);


        //
        $chairmans = DB::table('users')
                    ->join('bg_designation', function ($join) {
                        $join->on('users.DESIGNATION_ACADEMIC', '=', 'bg_designation.DESIGNATION_ID')
                            ->orOn('users.DESIGNATION_ADMIN', '=', 'bg_designation.DESIGNATION_ID');
                    })
                    ->select('users.*', 'bg_designation.DESIGNATION_NAME')
                    ->where('users.name', 'LIKE', '%'.$request->get('full_name').'%')
                    ->where('bg_designation.DESIGNATION_NAME', 'LIKE', '%'.$request->get('designation').'%')
                    ->where('bg_designation.SHORT_CODE', '=', 'C')
                    ->where('users.USER_TYPE_ID', '1')
                    ->where('users.ACTIVE_STATUS', '1')
                    ->orderBy('users.id', 'DESC')
                    ->take(1)
                    ->get();


        //
        $stuffs = DB::table('users')
                    ->join('bg_designation', function ($join) {
                        $join->on('users.DESIGNATION_ACADEMIC', '=', 'bg_designation.DESIGNATION_ID')
                            ->orOn('users.DESIGNATION_ADMIN', '=', 'bg_designation.DESIGNATION_ID');
                    })
                    ->select('users.*', 'bg_designation.DESIGNATION_NAME')
                    ->where('users.USER_TYPE_ID', '2')
                    ->where('users.ACTIVE_STATUS', '1')
                    ->orderBy('users.id', 'DESC')
                    ->get();

        //
        return view('academic')->with('faculties', $faculties)
                            ->with('chairmans', $chairmans)
                            ->with('stuffs', $stuffs);
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
        $profiles = DB::table('users')
                    ->join('bg_designation', function ($join) {
                        $join->on('users.DESIGNATION_ACADEMIC', '=', 'bg_designation.DESIGNATION_ID')
                            ->orOn('users.DESIGNATION_ADMIN', '=', 'bg_designation.DESIGNATION_ID');
                    })
                    ->select('users.*', 'bg_designation.DESIGNATION_NAME')
                    ->where('users.id', $id)
                    ->get();

        return view('profile')->with('profiles', $profiles);
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
