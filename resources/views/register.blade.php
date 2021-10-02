@extends('layouts.home')

@section('content')
    <form>
        <h4 class="mb-4 text-center">Registeration Form</h4>
        <div class="row">
            <div class="col mb-3">
                <label for="exampleInputFirstName1" class="form-label">First Name</label>
                <input type="text" class="form-control" id="exampleInputFirstName1">
            </div>
            <div class="col mb-3">
                <label for="exampleInputLastName1" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleInputLastName1">
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="submit-btn py-3">
            <button type="submit" class="btn btn-primary submit">Submit</button>
        </div>
    </form>
@endsection