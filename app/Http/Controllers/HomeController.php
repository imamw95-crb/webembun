<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Gallery;
use App\Models\Room;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $data = Cache::remember('home_page_data', 3600, function () {
            return [
                'rooms' => Room::available()->featured()->orderBy('sort_order')->take(6)->get()->toArray(),
                'facilities' => Facility::where('is_active', true)->orderBy('sort_order')->get()->toArray(),
                'testimonials' => Testimonial::where('is_active', true)->latest()->take(6)->get()->toArray(),
                'galleries' => Gallery::where('is_featured', true)->latest()->take(12)->get()->toArray(),
            ];
        });

        return view('home', $data);
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
