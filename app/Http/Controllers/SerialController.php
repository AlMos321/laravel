<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
     * Show a list of all of the application's selials.
     *
     * @return Response
     */
    public function getSerialBySlug($slug)
    {
        $serial = DB::select('select * from serials WHERE slug = ?', [$slug]);
        if (isset($serial[0])){
            $season = $comments = Serial::find($serial[0]->id)->seasons()->orderBy('number')->get();
            $serial = $serial[0];
        } else {
            abort(404);
        }
        return view('serial.serial', ['serial' => $serial, 'seasons' => $season]);
    }
}
