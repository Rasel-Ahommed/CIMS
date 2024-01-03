@extends('layout')
@section('title','Registration')


@section('contant')
    <div class="row">
        <div class="contant">
            <div class="card card-body ms-auto me-auto mt-5" style="width:500px">
                <u><h3 class="text-center">Registration</h3></u>

                @if (session('error'))
                    <div class="alert alert-danger">{{section('error')}}</div>
                @endif


                <form action="{{route('register.post')}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}"  placeholder="Enter Email">
                    </div>
                    @error('email')
                       <div class="text-danger">{{$message}}</div>
                    @enderror

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}"  placeholder="Enter Password">
                    </div>
                    @error('password')
                       <div class="text-danger">{{$message}}</div>
                    @enderror

                    {{-- <div class="form-group">
                        <label>Conform Password</label>
                        <input type="password" name="confim-password" class="form-control" placeholder="Enter Conform Password">
                    </div>
                    @error('confim-password')
                       <div class="text-danger">{{$message}}</div>
                    @enderror
                    <br> --}}

                    <a href="/" style="color:red">Already have an accound?</a>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
        </div>
    </div>
    
@endsection