<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(5);

        return view('admin.testimonial.index',compact('testimonials'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'content' => 'required',
        ]);

        Testimonial::create($inputs);

        return redirect()->route('testimonial.index')
            ->with('success','Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(testimonial $testimonial)
    {
        return view('admin.testimonial.show',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(testimonial $testimonial)
    {
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimonial $testimonial)
    {
        $inputs = \request()->validate([
            'content' => 'required',
        ]);
        $testimonial->update($inputs);
        return redirect()->route('testimonial.index')
            ->with('success','Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('testimonial.index')
            ->with('success','Testimonial deleted successfully');
    }

    public function checking()
    {
        $users1 = User::where('email', '=', 'sagor@gmail.com')->first();
        $users2 = User::where('email', '=', 'krenesa55@gmail.com')->first();
        dd();
    }

}
