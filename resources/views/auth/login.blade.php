@extends('layout')
@section('title')
@endsection
@section('content')
    <div class="row align-item-center justify-content-center" style="background: black">
        <img style="width: 500px" src="{{ asset('assets/images/logo-rcvn.png') }}" alt="">
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="login-form">
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                        <p class="error-text">Erorr</p>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">

                    <div class="row">
                        <div class="col-6">

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
