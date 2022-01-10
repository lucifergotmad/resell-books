@extends('auth.index', ['title' => 'ReSeLL - Register'])

@section('content')
<div class="container">

    <div class="row justify-content-center align-items-center h-full">

    <div class="col-6">

    <div class="card o-hidden border-0 shadow-lg my-5 ">
        <div class="card-body p-0 align-items-center ">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="{{url('/api/register')}}" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="first_name" class="form-control form-control-user" id="first_name"
                                        placeholder="First Name">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="last_name" class="form-control form-control-user" id="last_name"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email_address" class="form-control form-control-user" id="email_address"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="password" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="repeat_password" class="form-control form-control-user"
                                        id="repeat_password" placeholder="Repeat Password">
                                </div>
                            </div>
                            <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{url('/login')}}">Already have an account? Login!</a>
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