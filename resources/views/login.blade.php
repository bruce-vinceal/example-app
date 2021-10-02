@extends('layouts.home')

@section('content')
    <form>
        <h4 class="mb-4 text-center">Welcome</h4>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="submit-btn py-3">
            <button type="submit" class="btn btn-primary submit">Log In</button>
        </div>
        <p class="my-3 text-center">Not a Member? <a href="/register">Register here.</a></p>
    </form>
@endsection