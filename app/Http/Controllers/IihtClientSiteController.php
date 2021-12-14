<?php

namespace App\Http\Controllers;

use App\Courses;
use App\studentDetails;
use App\Testimonial;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class IihtClientSiteController extends Controller
{
    public function index(){
        $testimonials = Testimonial::first();
        $courses = Courses::all();
        $color = 'blue';

        $courseList = array('0' => 'Select') + Courses::orderBy('id', 'desc')
                ->pluck('name', 'id')
                ->toArray();

        return view('iihtClientSite.index', compact('testimonials','courses','color','courseList'));
    }

    public function bookedSeat(Request $request)
    {
        $inputs = [
            'course_id' => $request->course_id,
            'slot_id' => '1',
            'uniq_id' => random_int(100000, 999999),
            'name' => $request->name,
            'email' => $request->email,
        ];

        studentDetails::create($inputs);

    }

    public function getSlot(Request $request)
    {

    }
}
