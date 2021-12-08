@extends('admin.layouts.header')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Courses List</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success mg-btm-30" href="{{ route('courses.create') }}"> Create New courses</a>
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
            <th>Name</th>
            <th>Cost</th>
            <th>No. of Classes</th>
            <th>Duration(Hrs)</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($courses as $course)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->price }}</td>
            <td>{{ $course->class_no }}</td>
            <td>{{ $course->duration }}</td>
            <td>
                <form action="{{ route('courses.destroy',$course->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('courses.show',$course->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>

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
            <th>Name</th>
            <th>Cost</th>
            <th>No. of Classes</th>
            <th>Duration(Hrs)</th>
            <th width="280px">Action</th>
        </tr>
        </tfoot>
    </table>
    {!! $courses->links() !!}
@endsection
