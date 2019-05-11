<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use DB;

class AdminPublicationController extends Controller
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
        $publications = DB::table('padu_journal_publication')
                    ->select('padu_journal_publication.*')
                    ->where('PUBLICATION_TITLE', 'LIKE', '%'.$request->get('publication_title').'%')
                    ->orderBy('JOURNAL_PUBLICATION_ID', 'DESC')
                    ->paginate(10);
        //
        return view('admin.publication_list')->with('publications', $publications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.publication_create');
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
            'publication_title' => 'required',
            'author' => 'required',
            'journal_name' => 'required',
            'publication_date' => 'required|date',
            'publication_file' => 'required',
            'volume' => 'required',
        ]);


        // Primary Key Generator
        $primary_key = DB::table('padu_journal_publication')
                    ->select('padu_journal_publication.JOURNAL_PUBLICATION_ID')
                    ->max('JOURNAL_PUBLICATION_ID');

        if (isset($primary_key)) {
            $publication_id = $primary_key + '1';
        }
        else {
            $publication_id = '20190001';
        }

        
        // image upload, fit and store inside public folder 
        if($request->hasFile('publication_file')){
            $filenameWithExt = $request->file('publication_file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('publication_file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Move File inside public/uploads/images/resource folder
            $path = $request->file('publication_file')->move('uploads/images/publication/', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg'; // if no image selected this will be the default image
        }


        //
        $insert = DB::table('padu_journal_publication')
                    ->insert([
                        'JOURNAL_PUBLICATION_ID' => $publication_id,
                        'PUBLICATION_TITLE' => $request->get('publication_title'),
                        'AUTHORS' => $request->get('author'),
                        'JOURNAL_NAME' => $request->get('journal_name'),
                        'PUBLICATION_DATE' => $request->get('publication_date'),
                        'FILE_PATH' => $fileNameToStore,
                        'VOLUME' => $request->get('volume'),
                        'ACTIVE_STATUS' => '1',
                        'ENTERED_BY' => Auth::user()->id,
                        'ENTRY_TIMESTAMP' => Carbon::now()
                    ]);

        Session::flash('success', 'Publication Created Successfully!');


        //
        return redirect()->route('publication.create');
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
        $publications = DB::table('padu_journal_publication')
                    ->select('padu_journal_publication.*')
                    ->where('JOURNAL_PUBLICATION_ID', $id)
                    ->get();

        //
        return view('admin.publication_view')->with('publications', $publications);
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
        $publications = DB::table('padu_journal_publication')
                    ->select('padu_journal_publication.*')
                    ->where('JOURNAL_PUBLICATION_ID', $id)
                    ->get();

        //
        return view('admin.publication_edit')->with('publications', $publications);
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
            'publication_title' => 'required',
            'author' => 'required',
            'journal_name' => 'required',
            'publication_date' => 'required|date',
            'publication_file' => 'nullable',
            'volume' => 'required',
        ]);

        
        // image upload, fit and store inside public folder 
        if($request->hasFile('publication_file')){
            $filenameWithExt = $request->file('publication_file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('publication_file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Move File inside public/uploads/images/resource folder
            $path = $request->file('publication_file')->move('uploads/images/publication/', $fileNameToStore);

            //
            $update = DB::table('padu_journal_publication')
                        ->where('JOURNAL_PUBLICATION_ID', $id)
                        ->update([
                            'PUBLICATION_TITLE' => $request->get('publication_title'),
                            'AUTHORS' => $request->get('author'),
                            'JOURNAL_NAME' => $request->get('journal_name'),
                            'PUBLICATION_DATE' => $request->get('publication_date'),
                            'FILE_PATH' => $fileNameToStore,
                            'VOLUME' => $request->get('volume'),
                            'UPDATED_BY' => Auth::user()->id,
                            'UPDATE_TIMESTAMP' => Carbon::now()
                        ]);
        }
        else{
            
            //
            $update = DB::table('padu_journal_publication')
                        ->where('JOURNAL_PUBLICATION_ID', $id)
                        ->update([
                            'PUBLICATION_TITLE' => $request->get('publication_title'),
                            'AUTHORS' => $request->get('author'),
                            'JOURNAL_NAME' => $request->get('journal_name'),
                            'PUBLICATION_DATE' => $request->get('publication_date'),
                            'VOLUME' => $request->get('volume'),
                            'UPDATED_BY' => Auth::user()->id,
                            'UPDATE_TIMESTAMP' => Carbon::now()
                        ]);

        }


        Session::flash('success', 'Publication Updated Successfully!');


        //
        return redirect()->route('publication.edit', [$id]);
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
        $publications = DB::table('padu_journal_publication')
                ->select('padu_journal_publication.*')
                ->where('padu_journal_publication.JOURNAL_PUBLICATION_ID', '=', $id)
                ->get();

        foreach( $publications as $publication ){
            if ($publication->ACTIVE_STATUS == '1') {
                $update = DB::table('padu_journal_publication')
                        ->where('JOURNAL_PUBLICATION_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '0'
                        ]);
            }
            elseif ($publication->ACTIVE_STATUS == '0') {
                $update = DB::table('padu_journal_publication')
                        ->where('JOURNAL_PUBLICATION_ID', '=', $id)
                        ->update([
                            'ACTIVE_STATUS' => '1'
                        ]);
            }
        }


        //
        $publications = DB::table('padu_journal_publication')
                    ->select('padu_journal_publication.*')
                    ->where('JOURNAL_PUBLICATION_ID', $id)
                    ->orderBy('JOURNAL_PUBLICATION_ID', 'DESC')
                    ->paginate(1);
        //
        return view('admin.publication_list')->with('publications', $publications);

    }
}
