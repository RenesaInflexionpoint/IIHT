<?php

namespace App\Http\Controllers;

use App\Courses;
use App\CourseDetails;
use App\StudentDetails;
use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    public function index(){

        $studentDetails = StudentDetails::leftjoin('courses', 'courses.id', '=', 'student_details.course_id')
            ->leftjoin('course_details', 'course_details.id', '=', 'student_details.slot_id')
            ->select('student_details.id', 'student_details.name', 'student_details.email', 'student_details.uniq_id',
                'course_details.slot as slot', 'courses.name as course_name')->get();

        return view('admin.studentDetails.index', compact('studentDetails'))
            ->with('i');
    }

}
