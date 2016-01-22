<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Serial;
use DB;

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
        $serial = Serial::paginate(10);
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
        return view('serial.serial', ['serial' => $serial]);
    }
}
