<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $workout;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Workout $workout)
    {
        //$this->middleware('auth');
        $this->workout = $workout;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function history()
    {
        return view('site.history');
    }

    public function workouts()
    {

        return view('site.workouts');
    }

    public function workoutSingle($id)
    {
        return view('site.workoutSingle');
    }

    public function exerciseSingle($id)
    {
        return view('site.exercise');
    }
}
