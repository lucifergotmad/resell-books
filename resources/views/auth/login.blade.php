@extends('auth.index', ['title' => 'ReSeLL - Login'])

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
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="username" aria-describedby="username"
                                            placeholder="Username" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <a href="{{url('/api/login')}}" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
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