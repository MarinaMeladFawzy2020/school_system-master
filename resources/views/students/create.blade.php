@extends('students/layout')

@section('content')

<div class="container">
    <br><br><br>
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Add New Student</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert"> 
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('students.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Enter Your Name">
                           @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="email">Student Email</label>
                            <input type="email" class="form-control" name="email"  placeholder="Enter Your Email">
                           @error('email')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="rooms_id">No Room</label>
                            <input type="number" class="form-control" name="rooms_id"  placeholder="Enter Your Room">
                           @error('rooms_id')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                          </div>

                       
                        <button type="submit" class="btn btn-success">Save</button>
                        <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>

                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection