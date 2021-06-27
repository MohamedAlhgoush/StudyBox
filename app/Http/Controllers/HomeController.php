<?php

namespace App\Http\Controllers;

use App\Upload;
use App\University;
use App\UserDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Khill\Lavacharts\Lavacharts;
use Lava;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($uni_id)
    {

        $university=University::find($uni_id);
        $downloads=UserDownload::all();
        return view('home',compact('university','downloads'));
    }

    public function charts()
    {

        //Fetch data from user downloads table and join uploads table then group all returned data by upload name
        $data = DB::table('user_downloads')
            ->join('uploads', 'user_downloads.upload_id', '=', 'uploads.id')
            ->select('name', DB::raw('count(*) as total_download'))
            ->groupBy('name')
            ->take(5)->get()->toArray();

        /**
         * Loop over the data and push values ro $chartData above cause Lava charts only takes single object as array
         * so we have multidimensional array
         */
        $chartData = [];
        foreach ($data as $key => $d) {
            if($key < 5){
                array_push($chartData, array($d->name, $d->total_download));

            }

        }

        return response()->json($data);
    }

    public function charts1()
    {

        //Fetch data from user votes table and join uploads table then group all returned data by upload name
        $data1 = DB::table('user_votes')
            ->join('uploads', 'user_votes.upload_id', '=', 'uploads.id')
            ->select('name', DB::raw('count(*) as total_download'))->where('helpfull',1)
            ->groupBy('name')
            ->get()->toArray();
            // {{count(App\InstructorVotes::where('instructor_id',$user->id)->where('like',1)->get())}}

        $chartData = [];
        foreach ($data1 as $key1 => $d) {
            if($key1 < 5){
                array_push($chartData, array($d->name, $d->total_download));

            }
        }
        return response()->json($data1);
    }

}
