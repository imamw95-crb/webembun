<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Gallery;
use App\Models\Room;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::available()->featured()->orderBy('sort_order')->take(6)->get();

        $facilities = Facility::where('is_active', true)->orderBy('sort_order')->get();

        $testimonials = Testimonial::where('is_active', true)->latest()->take(6)->get();

        $galleries = Gallery::where('is_featured', true)->latest()->take(12)->get();

        return view('home', compact('rooms', 'facilities', 'testimonials', 'galleries'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
