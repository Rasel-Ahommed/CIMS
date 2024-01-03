@extends('layout')
@section('title','login')

@section('contant')
    <div class="row">
        <div class="contant">
            <div class="card card-body ms-auto me-auto mt-5 " style="width:500px">
                <u><h3 class="text-center">Log In</h3></u>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                
                <form action="{{route('login.post')}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Enter email">
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}"  placeholder="Password">
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group form-check">
                    <input type="checkbox" name="chackBox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <br>

                    <a href="{{route('register')}}" style="color: red">Registration</a><br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </div>
    </div>
    
@endsection

{{-- <li><a href="{{route('logout')}}">Log Out</a></li> --}}