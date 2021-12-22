@extends('admin.layouts.header')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Course Details</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('courseDetails.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course Name:</strong>
                {{ $courses->course_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Slot:</strong>
                {{ $courses->slot }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Availability of Class:</strong>
                {{ $courses->availability }}
            </div>
        </div>
    </div>
@endsection
