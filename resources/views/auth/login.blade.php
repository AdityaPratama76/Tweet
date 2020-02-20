@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control bg-light" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control bg-light" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{route('password.request')}}">
                        {{_('Forgot Your Password?')}}
                        </a>
                        @endif
                        <br>
                        <br>
                        <div clas="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{_('Login' )}}
                                </button>
                            </div>
                        </div>
                </form>

            </div>
                <div class="card-body bg-light">
                <img src="{{asset('Img/TwitterLogo.png')}}" width="10%" height="10%" style="display: block; margin: auto;" alt="">
                <br>
                <h3 class="text-secondary text-center">She What's Hapening In <br> the world right now</h3>
                <br>
                <a href="http://twitter.com/account/access?flow=signup">
                            <h6 class="font-weight-bold">Join Twitter Today.</h6>
                        </a>
                        <br>
                        <div class="form-group row mb-10">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-md-10">
                                    {{ __('Sign Up') }}
                                </button>    
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