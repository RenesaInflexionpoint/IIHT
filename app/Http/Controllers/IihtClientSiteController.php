<?php

namespace App\Http\Controllers;

use App\Courses;
use App\CourseDetails;
use App\StudentDetails;
use DB;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            'slot_id' => $request->slot_id,
            'uniq_id' => random_int(100000, 999999),
            'name' => $request->name,
            'email' => $request->email,
        ];
        $user_name = $request->name;
        $user_email = $request->email;
        StudentDetails::create($inputs);

        Mail::send('iihtClientSite.confirmStudentMail', $inputs, function ($message) use($user_name, $user_email) {
            $message->to($user_email,$user_name)->subject("Approval Notice for Booked Seat")
            ->from("inflexionpointbd@gmail.com");
        });
        return redirect()->back();

    }

    public function getSlot(Request $request)
    {
        $slotList = ['0' => __('Select')] + CourseDetails::join('courses', 'courses.id', '=', 'course_details.course_id')
                ->where('course_details.course_id', $request->course_id)
                ->select(DB::raw('CONCAT(course_details.slot, course_details.availability) AS slot_details'),'course_details.id')
                ->pluck('slot_details', 'course_details.id')->toArray();


        $html = view('iihtClientSite.slotShow', compact('slotList'))->render();

        return response()->json(['html' => $html]);
    }

}
