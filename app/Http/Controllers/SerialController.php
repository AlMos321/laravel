<?php

namespace App\Http\Controllers;

use App\Epizod;
use App\Http\Requests;
use App\Season;
use App\Serial;
use DB;
use Illuminate\Support\Facades\Auth;

class SerialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show a list of all of the application's selials.
     *
     * @return Response
     */
    public function getSerials()
    {
        $serial = Serial::paginate(20);
        return view('serial.index', ['users' => $serial]);
    }


    /**
     * Show a application's selial and seasons.
     *
     * @return Response
     */
    public function getSerialBySlug($slug)
    {
        $serial = DB::select('select * from serials WHERE slug = ?', [$slug]);
        if (isset($serial[0])){
            $seasons = Serial::find($serial[0]->id)->seasons()->orderBy('number')->get();
            $serial = $serial[0];
        } else {
            abort(404);
        }

        $idSesons = [];

        if (isset($seasons)) {
            foreach ($seasons as $seson) {
                $idSesons[] = $seson->id;
            }
        }

        $epizodes = DB::table('epizodes')->whereIn('season_id', $idSesons )->get();
        $arrayEpizodes = [];
        foreach ($epizodes as $epizod){
            $arrayEpizodes[$epizod->season_id][] = $epizod;
        }
        return view('serial.serial', ['serial' => $serial, 'seasons' => $seasons, 'epizodes' => $arrayEpizodes]);
    }

    /**
     * Show epizod.
     *
     * @return Response
     */
    public function getEpizodBySlug($slug)
    {
        $epizod = DB::select('select * from epizodes WHERE slug = ?', [$slug]);

        if (isset($epizod[0])){
            $epizod = $epizod[0];
        } else {
            abort(404);
        }
        return view('serial.epizod', ['epizod' => $epizod]);
    }

}
