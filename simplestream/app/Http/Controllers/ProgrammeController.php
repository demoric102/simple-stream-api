<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function show($channel_uuid, $date, $timezone)
    {
        return Programme::where('channel_uuid', $channel_uuid)->where('date', $date)->where('timezone',$timezone)->get();
    }
}
