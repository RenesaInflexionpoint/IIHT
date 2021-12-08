@extends('admin.layouts.header')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Testimonial List</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success mg-btm-30" href="{{ route('testimonial.create') }}"> Create New Testimonial</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Contents</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($testimonials as $testimonial)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $testimonial->content }}</td>
                <td>
                    <form action="{{ route('testimonial.destroy',$testimonial->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('testimonial.show',$testimonial->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('testimonial.edit',$testimonial->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Contents</th>
            <th width="280px">Action</th>
        </tr>
        </tfoot>
    </table>

    {!! $testimonials->links() !!}
@endsection
