<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CarouselImage;
use App\Models\Testimony;
use Illuminate\Http\Request;

class FrontsideController extends Controller
{
    public function index()
    {
        $data['hero'] = CarouselImage::where('is_active', true)->get();
        $data['books'] = Book::latest()->get();
        $data['testimonials'] = Testimony::get();
        // return $data;
        return view('index', $data);
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
