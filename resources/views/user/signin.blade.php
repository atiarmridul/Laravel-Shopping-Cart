@extends('layouts.master')

@section('title')
    Sign In

@endsection


@section('content') 
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1> Sign In </h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('user.signin')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>        

@endsection    