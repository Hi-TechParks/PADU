<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminProgramCategoryController extends Controller
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
        $program_cates = DB::table('padu_program_category')
                    ->select('padu_program_category.*')
                    ->where('CATEGORY_NAME', 'LIKE', '%'.$request->get('category_name').'%')
                    ->orderBy('PROGRAM_CATEGORY_ID', 'DESC')
                    ->paginate(10);

        //
        return view('admin.program_cate_list')->with('program_cates', $program_cates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.program_cate_create');
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
        ]);

        // Primary Key Generator
        $primary_key = DB::table('padu_program_category')
                    ->select('padu_program_category.PROGRAM_CATEGORY_ID')
                    ->max('PROGRAM_CATEGORY_ID');

        if (isset($primary_key)) {
            $procate_id = $primary_key + '1';
        }
        else {
            $procate_id = '20190001';
        }


        $insert = DB::table('padu_program_category')
            ->insert([
                'PROGRAM_CATEGORY_ID' => $procate_id,
                'CATEGORY_NAME' => $request->get('category_name'),
                'SHORT_CODE' => $request->get('short_code'),
                'ACTIVE_STATUS' => '1',
                'ENTERED_BY' => Auth::user()->id,
                'ENTRY_TIMESTAMP' => Carbon::now()
            ]);

        Session::flash('success', 'Program Category Created Successfully!'); 

        //
        return redirect()->route('procate.create');
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
                    ->where('PROGRAM_CATEGORY_ID', $id)
                    ->get();

        //
        return view('admin.program_cate_edit')->with('program_cates', $program_cates);
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
        ]);


        $update = DB::table('padu_program_category')
                ->where('PROGRAM_CATEGORY_ID', $id)
                ->update([
                    'CATEGORY_NAME' => $request->get('category_name'),
                    'SHORT_CODE' => $request->get('short_code'),
                    'UPDATED_BY' => Auth::user()->id,
                    'UPDATE_TIMESTAMP' => Carbon::now()
                ]);

        Session::flash('success', 'Program Category Updated Successfully!'); 

        //
        return redirect()->route('procate.edit', [$id]);
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
        $program_cates = DB::table('padu_program_category')
                ->select('padu_program_category.*')
                ->where('padu_program_category.PROGRAM_CATEGORY_ID', '=', $id)
                ->get();

        foreach( $program_cates as $program_cate ){
            if ($program_cate->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_program_category')
                        ->where('PROGRAM_CATEGORY_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($program_cate->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_program_category')
                        ->where('PROGRAM_CATEGORY_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $program_cates = DB::table('padu_program_category')
                    ->select('padu_program_category.*')
                    ->where('PROGRAM_CATEGORY_ID', $id)
                    ->paginate(1);

        //
        return view('admin.program_cate_list')->with('program_cates', $program_cates);

    }
}
