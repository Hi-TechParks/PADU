<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminProgramController extends Controller
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
        $programs = DB::table('padu_program')
                    ->join('padu_program_category', 'padu_program_category.PROGRAM_CATEGORY_ID', 'padu_program.PROGRAM_CATEGORY_ID')
                    ->select('padu_program.*','padu_program_category.CATEGORY_NAME')
                    ->where('padu_program.PROGRAM_NAME', 'LIKE', '%'.$request->get('program_name').'%')
                    ->where('padu_program_category.CATEGORY_NAME', 'LIKE', '%'.$request->get('category_name').'%')
                    ->orderBy('PROGRAM_ID', 'DESC')
                    ->paginate(10);

        //
        return view('admin.program_list')->with('programs', $programs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $program_cates = DB::table('padu_program_category')
                    ->select('padu_program_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();
        //
        return view('admin.program_create')->with('program_cates', $program_cates);
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
            'category_name' => 'required',
            'program_name' => 'required',
        ]);

        // Primary Key Generator
        $primary_key = DB::table('padu_program')
                    ->select('padu_program.PROGRAM_ID')
                    ->max('PROGRAM_ID');

        if (isset($primary_key)) {
            $program_id = $primary_key + '1';
        }
        else {
            $program_id = '20190001';
        }


        $insert = DB::table('padu_program')
            ->insert([
                'PROGRAM_ID' => $program_id,
                'PROGRAM_NAME' => $request->get('program_name'),
                'PROGRAM_CATEGORY_ID' => $request->get('category_name'),
                'SHORT_CODE' => $request->get('short_code'),
                'ACTIVE_STATUS' => '1',
                'ENTERED_BY' => Auth::user()->id,
                'ENTRY_TIMESTAMP' => Carbon::now()
            ]);

        Session::flash('success', 'Program Created Successfully!'); 

        //
        return redirect()->route('program.create');
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
        $program_cates = DB::table('padu_program_category')
                    ->select('padu_program_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->get();

        //
        $programs = DB::table('padu_program')
                    ->select('padu_program.*')
                    ->where('PROGRAM_ID', $id)
                    ->get();

        //
        return view('admin.program_edit')->with('programs', $programs)
                                ->with('program_cates', $program_cates);
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
            'category_name' => 'required',
            'program_name' => 'required',
        ]);


        $update = DB::table('padu_program')
                ->where('PROGRAM_ID', $id)
                ->update([
                    'PROGRAM_NAME' => $request->get('program_name'),
                    'PROGRAM_CATEGORY_ID' => $request->get('category_name'),
                    'SHORT_CODE' => $request->get('short_code'),
                    'UPDATED_BY' => Auth::user()->id,
                    'UPDATE_TIMESTAMP' => Carbon::now()
                ]);

        Session::flash('success', 'Program Updated Successfully!'); 

        //
        return redirect()->route('program.edit', [$id]);
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
        $programs = DB::table('padu_program')
                ->select('padu_program.*')
                ->where('padu_program.PROGRAM_ID', '=', $id)
                ->get();

        foreach( $programs as $program ){
            if ($program->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_program')
                        ->where('PROGRAM_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($program->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_program')
                        ->where('PROGRAM_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $programs = DB::table('padu_program')
                    ->join('padu_program_category', 'padu_program_category.PROGRAM_CATEGORY_ID', 'padu_program.PROGRAM_CATEGORY_ID')
                    ->select('padu_program.*','padu_program_category.CATEGORY_NAME')
                    ->where('PROGRAM_ID', $id)
                    ->paginate(1);

        //
        return view('admin.program_list')->with('programs', $programs);

    }
}
