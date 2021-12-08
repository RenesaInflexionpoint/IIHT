@extends('admin.layouts.header')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Testimonial</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('testimonial.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Testimonial Details:</strong>
                {{ $testimonial->content }}
            </div>
        </div>
    </div>
@endsection
