@extends('layouts.auth', ['title' => 'Login'])

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center h-full">

        <div class="col-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" action="{{url('/login')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email_address" class="form-control form-control-user"
                                            id="email_address" aria-describedby="email_address"
                                            placeholder="E-mail Address" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{url('/forgot-password')}}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{url('/register')}}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection