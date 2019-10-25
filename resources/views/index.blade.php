@extends('layouts.app')

@section('content')
<a href="{{route('student.create')}}" class="btn btn-outline-primary">CREATE</a>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
    </tr>
    </thead>
    @foreach($students as $key => $student)
        <tbody>
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->city}}</td>
            <td><a href="{{route('student.delete',$student->id)}}" onclick="return confirm('delete')"
                   class="btn btn-danger">DELETE</a></td>
            <td><a href="{{route('student.edit',$student->id)}}"
                   class="btn btn-light">EDIT</a></td>
        </tr>
        </tbody>
    @endforeach
</table>
@endsection
