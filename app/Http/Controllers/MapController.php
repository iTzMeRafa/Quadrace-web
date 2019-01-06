<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    function layout($map) {
        if($this->checkIfMapExists($map) > 0) {
            return view('pages.map')
                    ->with('mapTop10', $this->getMapTop10($map))
                    ->with('last10Finishes', $this->getLast10Finishes($map));
        }
        return redirect()->route('maps');
    }

    function checkIfMapExists($map) {
        $map = DB::table('record_race')->where('Map', '=', $map)->count();
        return $map;
    }

    function getMapTop10($map) {
        $mapTop10 = DB::table('record_race')
                    ->selectRaw('Name, min(Time) as Time, Timestamp')
                    ->WHERE('Map', '=', $map)
                    ->GROUPBY('Name')
                    ->ORDERBY('Time')
                    ->LIMIT('10')
                    ->get();

        return $mapTop10;
    }

    function getLast10Finishes($map) {
        $last10Finishes = DB::table('record_race')
                        ->select('Name', 'Timestamp', 'Time')
                        ->WHERE('Map', '=', $map)
                        ->ORDERBY('Timestamp', 'desc')
                        ->LIMIT('10')
                        ->get();

        return $last10Finishes;
    }
}
