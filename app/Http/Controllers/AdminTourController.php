<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminTourController extends Controller
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
        $tours = DB::table('padu_campus_tour')
                    ->select('padu_campus_tour.*')
                    ->where('TOUR_TITLE', 'LIKE', '%'.$request->get('tour_title').'%')
                    ->orderBy('CAMPUS_TOUR_ID', 'DESC')
                    ->paginate(10);

        //
        return view('admin.tour_list')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tour_create');
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
            'tour_title' => 'required',
            'content' => 'required',
            'video_id' => 'required',
        ]);

        // Primary Key Generator
        $primary_key = DB::table('padu_campus_tour')
                    ->select('padu_campus_tour.CAMPUS_TOUR_ID')
                    ->max('CAMPUS_TOUR_ID');

        if (isset($primary_key)) {
            $tour_id = $primary_key + '1';
        }
        else {
            $tour_id = '20190001';
        }


        $insert = DB::table('padu_campus_tour')
            ->insert([
                'CAMPUS_TOUR_ID' => $tour_id,
                'TOUR_TITLE' => $request->get('tour_title'),
                'CAMPUS_TOUR_CONTENT' => $request->get('content'),
                'VIDEO_FILE_PATH' => $request->get('video_id'),
                'ACTIVE_STATUS' => '1',
                'ENTERED_BY' => Auth::user()->id,
                'ENTRY_TIMESTAMP' => Carbon::now()
            ]);

        Session::flash('success', 'Tour Created Successfully!'); 

        //
        return redirect()->route('tour.create');
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
        $tours = DB::table('padu_campus_tour')
                    ->select('padu_campus_tour.*')
                    ->where('CAMPUS_TOUR_ID', $id)
                    ->get();

        //
        return view('admin.tour_view')->with('tours', $tours);
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
        $tours = DB::table('padu_campus_tour')
                    ->select('padu_campus_tour.*')
                    ->where('CAMPUS_TOUR_ID', $id)
                    ->get();

        //
        return view('admin.tour_edit')->with('tours', $tours);
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
            'tour_title' => 'required',
            'content' => 'required',
            'video_id' => 'required',
        ]);


        $update = DB::table('padu_campus_tour')
            ->where('CAMPUS_TOUR_ID', $id)
            ->update([
                'TOUR_TITLE' => $request->get('tour_title'),
                'CAMPUS_TOUR_CONTENT' => $request->get('content'),
                'VIDEO_FILE_PATH' => $request->get('video_id'),
                'UPDATED_BY' => Auth::user()->id,
                'UPDATE_TIMESTAMP' => Carbon::now()
            ]);

        Session::flash('success', 'Tour Updated Successfully!'); 

        //
        return redirect()->route('tour.edit', [$id]);
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
        $tours = DB::table('padu_campus_tour')
                ->select('padu_campus_tour.*')
                ->where('padu_campus_tour.CAMPUS_TOUR_ID', '=', $id)
                ->get();

        foreach( $tours as $tour ){
            if ($tour->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_campus_tour')
                        ->where('CAMPUS_TOUR_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($tour->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_campus_tour')
                        ->where('CAMPUS_TOUR_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $tours = DB::table('padu_campus_tour')
                    ->select('padu_campus_tour.*')
                    ->where('CAMPUS_TOUR_ID', $id)
                    ->paginate(1);

        //
        return view('admin.tour_list')->with('tours', $tours);

    }
}
