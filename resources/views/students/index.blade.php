@extends('students/layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{route('students.create')}}" > Create New Student</a>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Rooms</th>
        <th>created_at</th>
        <th>Actions</th>
    <tr>
       <?php $i = 1; ?>
    @foreach($students as $student)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->rooms_id}}</td>
        <td>{{$student->created_at}}</td>
        <td>
            {{-- <a class="btn btn-info" href="{{route('students.show' , $student->id)}}" >Show</a> --}}
            <a class="btn btn-primary" href="{{route('students.edit' , $student->id)}}" >Edit</a>
            <form action="{{route('students.destroy' , $student->id)}}" method="POST" style="display: initial;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>

    @endforeach


</table>





@endsection