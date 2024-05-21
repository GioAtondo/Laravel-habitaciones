<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TimeController extends Controller
{
    public function getCurrentTime()
    {
        $now = Carbon::now()->setTimezone('-0600');


        // Format the time as HH : MM : A with seconds
        $formattedTime = $now->format('h : i : A') . ' ' . $now->format('s');

        return response()->json(['time' => $formattedTime]);
    }
}
