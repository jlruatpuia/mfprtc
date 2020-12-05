<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function photo_gallery() {
        $photos = Photo::all();
        return view('front.photo_gallery')->with('photos', $photos);
    }

    public function apply_training() {
        $trainings = Training::where('isActive', true)->get();
        return view('front.training_application') -> with ('trainings', $trainings);
    }
}
