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
            <th>Email</th>
            <th>Uniq Id</th>
            <th>Course Name</th>
            <th>Slot</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($studentDetails as $data)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->uniq_id }}</td>
                <td>{{ $data->course_name }}</td>
                <td>{{ $data->slot }}</td>
                <td>
                    <form action="{{ route('courses.destroy',$data->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('courses.show',$data->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('courses.edit',$data->id) }}">Edit</a>

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
            <th>Email</th>
            <th>Uniq Id</th>
            <th>Course Name</th>
            <th>Slot</th>
            <th width="280px">Action</th>
        </tr>
        </tfoot>
    </table>
@endsection
