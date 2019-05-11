<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function dateFormat(){
        $today = Carbon::now();
        return $today->toDateString();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
        $slides = DB::table('padu_slide_image')
                    ->select('padu_slide_image.*')
                    ->orderBy('SLIDE_IMAGE_ID', 'DESC')
                    ->where('ACTIVE_STATUS', '1')
                    ->take(3)
                    ->get();

        //
        $h_messages = DB::table('padu_message')
                    ->join('users', 'users.id', '=', 'padu_message.USER_ID')
                    ->join('bg_designation', 'bg_designation.DESIGNATION_ID', '=', 'users.DESIGNATION_ADMIN')
                    ->select('padu_message.*', 'users.name', 'users.PROFILE_IMAGE_PATH', 'bg_designation.DESIGNATION_NAME')
                    ->where('bg_designation.SHORT_CODE', 'H')
                    ->where('padu_message.ACTIVE_STATUS', '1')
                    ->orderBy('MESSAGE_ID', 'DESC')
                    ->take(1)
                    ->get();

        //
        $c_messages = DB::table('padu_message')
                    ->join('users', 'users.id', '=', 'padu_message.USER_ID')
                    ->join('bg_designation', 'bg_designation.DESIGNATION_ID', '=', 'users.DESIGNATION_ADMIN')
                    ->select('padu_message.*', 'users.name', 'users.PROFILE_IMAGE_PATH', 'bg_designation.DESIGNATION_NAME')
                    ->where('bg_designation.SHORT_CODE', 'C')
                    ->where('padu_message.ACTIVE_STATUS', '1')
                    ->orderBy('MESSAGE_ID', 'DESC')
                    ->take(1)
                    ->get();

        //
        $tours = DB::table('padu_campus_tour')
                    ->select('padu_campus_tour.*')
                    ->orderBy('CAMPUS_TOUR_ID', 'DESC')
                    ->take(1)
                    ->get();

        //
        $large_events = DB::table('padu_event')
                    ->select('padu_event.*')
                    ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                    ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('EVENT_DATE', 'ASC')
                    ->take(1)
                    ->get();

        //
        $small_events = DB::table('padu_event')
                    ->select('padu_event.*')
                    ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                    ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('EVENT_DATE', 'ASC')
                    ->skip(1)
                    ->take(2)
                    ->get();

        //
        $notices = DB::table('padu_notice')
                    ->select('padu_notice.*')
                    ->where('PUBLISH_START_DATE', '<=', $this->dateFormat())
                    ->where('PUBLISH_END_DATE', '>=', $this->dateFormat())
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('PUBLISH_START_DATE', 'DESC')
                    ->take(4)
                    ->get();

        //
        $images = DB::table('padu_image_gallery')
                    ->select('padu_image_gallery.*')
                    ->where('HOME_PAGE_SHOW_FLAG', '1')
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('SL_NO', 'ASC')
                    ->take(8)
                    ->get();

        //
        return view('index')->with('slides', $slides)
                            ->with('h_messages', $h_messages)
                            ->with('c_messages', $c_messages)
                            ->with('tours', $tours)
                            ->with('large_events', $large_events)
                            ->with('small_events', $small_events)
                            ->with('notices', $notices)
                            ->with('images', $images);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function message($id)
    {
        //
        $messages = DB::table('padu_message')
                    ->join('users', 'users.id', '=', 'padu_message.USER_ID')
                    ->join('bg_designation', 'bg_designation.DESIGNATION_ID', '=', 'users.DESIGNATION_ADMIN')
                    ->select('padu_message.*', 'users.name', 'users.PROFILE_IMAGE_PATH', 'bg_designation.DESIGNATION_NAME')
                    ->where('padu_message.MESSAGE_ID', $id)
                    ->get();

        //
        return view('message')->with('messages', $messages);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tour($id)
    {
        //
        $tours = DB::table('padu_campus_tour')
                    ->select('padu_campus_tour.*')
                    ->where('CAMPUS_TOUR_ID', $id)
                    ->get();

        //
        return view('tour-details')->with('tours', $tours);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function menu($id)
    {
        //
        $menus = DB::table('padu_program_category')
                    ->select('padu_program_category.*')
                    ->where('ACTIVE_STATUS', '1')
                    ->orderBy('PROGRAM_CATEGORY_ID', 'DESC')
                    ->get();

        //
        return view('index')->with('menus', $menus);
    }
}
