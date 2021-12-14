@extends('admin.layouts.header')
@section('content')
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Course Slot</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('courseDetails.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('courseDetails.store') }}" method="POST" >
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class = "d-flex">
                <div class="form-group">
                    <strong>Course Name:</strong>
                    <select class="form-select m-3 mr-5" id='courseId' name='course_id' >
                        @foreach ($courseList as $key => $value)
                            <option value='{{$key}}'>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                        <strong>Status:</strong>
                        <select class="form-select m-3"name="availability" id="availability">
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                </div>
            </div>
        </div>
        <div class="form-group col-xs-4 col-sm-4 col-md-4">
            <strong>Time Slot:</strong>
            <input type="text" name="slot" class="form-control mt-3" placeholder="Slot Details">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>

</form>
@endsection
