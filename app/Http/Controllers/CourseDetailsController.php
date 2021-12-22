<?php

namespace App\Http\Controllers;

use App\CourseDetails;
use App\Courses;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseDetails = CourseDetails::leftjoin('courses', 'courses.id', '=', 'course_details.course_id')
            ->select('course_details.*',
                'courses.name as course_name')
            ->latest()->paginate(5);

        return view('admin.courseDetails.index',compact('courseDetails'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseList = array('0' => '--Select Course--') + Courses::orderBy('id', 'desc')
        ->pluck('name', 'id')
        ->toArray();
        return view('admin.courseDetails.create', compact('courseList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'course_id' => 'required',
            'availability' => 'required',
            'slot' => 'required',
        ]);
        CourseDetails::create($inputs);

        return redirect()->route('courseDetails.index')
            ->with('success','Course slot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = CourseDetails::leftjoin('courses', 'courses.id', '=', 'course_details.course_id')
            ->select('course_details.*', 'courses.name as course_name')->findOrFail($id);
        return view('admin.courseDetails.show',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courseList = array('0' => '--Select Course--') + Courses::orderBy('id', 'desc')
                ->pluck('name', 'id')
                ->toArray();
        $courses = CourseDetails::leftjoin('courses', 'courses.id', '=', 'course_details.course_id')
            ->select('course_details.*', 'courses.name as course_name')->findOrFail($id);

        return view('admin.courseDetails.edit',compact('courses','courseList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $courses = CourseDetails::findOrFail($id);
        $inputs = \request()->validate([
            'course_id' => 'required',
            'availability' => 'required',
            'slot' => 'required',
        ]);
        $courses->update($inputs);
        return redirect()->route('courseDetails.index')
            ->with('success','Course Details are updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseDetails  $courseDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = CourseDetails::findOrFail($id);
        $courses->delete();

        return redirect()->route('courseDetails.index')
            ->with('success','Course Details are deleted successfully');
    }
}
