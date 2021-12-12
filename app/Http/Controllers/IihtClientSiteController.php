<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Testimonial;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class IihtClientSiteController extends Controller
{
    public function index(){
        $testimonials = Testimonial::first();
        $courses = Courses::all();
        $color = 'blue';

        return view('iihtClientSite.index', compact('testimonials','courses','color'));
    }
}
