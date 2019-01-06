<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapsController extends Controller
{
    function layout() {
        return view('pages.maps')->with('maps', $this->getMaps());
    }

    function getMaps() {
        return DB::SELECT('SELECT Map, count(distinct(Name)) as \'finishes\' FROM record_race GROUP BY Map');
    }
}
