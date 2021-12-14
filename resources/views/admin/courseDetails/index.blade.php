@extends('admin.layouts.header')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Course Slot Details</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success mg-btm-30" href="{{ route('courseDetails.create') }}"> Add Slot to Course</a>
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
            <th>Course Name</th>
            <th>Slot</th>
            <th>Availability</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($courseDetails as $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->course_id  }}</td>
                <td>{{ $item->slot }}</td>
                <td>{{ $item->availability }}</td>
                <td>
                    <form action="{{ route('courses.destroy',$item->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('courseDetails.show',$item->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('courseDetails.edit',$item->id) }}">Edit</a>

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
            <th>Course Name</th>
            <th>Slot</th>
            <th>Availability</th>
            <th width="280px">Action</th>
        </tr>
        </tfoot>
    </table>
    {!! $courseDetails->links() !!}
@endsection
