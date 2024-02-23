<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function new()
    {
        return view('admin.workouts.new');
    }
}
