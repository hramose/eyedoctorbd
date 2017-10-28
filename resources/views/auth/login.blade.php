@extends('layouts.main.master')

@section('title')
Login
@endsection

@section('content')
    <div class="pagetop">
    <div class="container">
        <span>What We Actually Do?</span>
        <h1><span>Eye Doctor</span> Login</h1>
        <ul>
            <li><a href="{{ route('welcome') }}" title="">Home</a></li>
            <li>Login</li>
        </ul>
    </div>
</div>


<section>
    <div class="block">
        <div class="parallax-container"><div data-speed="1" data-bleed="12" class="parallax"><img src="images/resource/parallax6.jpg" alt="" /></div></div>
        <div class="container">
            <div class="row">
                <div class="col offset-l1 l10 m12 s12 column">
                    <div class="registration-page">
                        <div class="theme-form login-form">
                            <div class="white-title">
                                <i class="icon-key"></i>
                                <h4>LOGIN NOW</h4>
                                <span>Fill in the form below to get instant access</span>

                            </div>

                            {{-- Success and Error List --}}
                            @if(session('activationMsg'))
                              <div class="alert info">
                                <span class="closebtn" 
                                      onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>Congratulations </strong> {{ session('activationMsg') }}
                              </div>
                            @endif

                            @if(session('success'))
                              <div class="alert info">
                                <span class="closebtn" 
                                      onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong> {{ session('success') }} </strong>
                              </div>
                            @endif

                            @if(session('error'))
                              <div class="alert danger">
                                <span class="closebtn" 
                                      onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>Oh snap!</strong> {{ session('error') }}
                              </div>
                            @endif

                            @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                  <div class="alert danger">
                                    <span class="closebtn" 
                                          onclick="this.parentElement.style.display='none';">&times;</span> 
                                    <strong>Oh snap!</strong> {{ $error }}
                                  </div>
                                @endforeach
                            @endif
                            
                            <form role="form" method="POST" action="{{ route('doLogin') }}">

                                {{ csrf_field() }}

                                <div class="input-field col s12">
                                    <input id="email"
                                           type="email" 
                                           name="email" 
                                           placeholder="Email Address" 
                                           value="{{ old('email') }}" 
                                           required autofocus/>
                                    
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" 
                                           type="password" 
                                           name="password" 
                                           placeholder="Password" 
                                           required/>
                                </div>
                                <div class="input-field col s12">
                                     <input type="checkbox" 
                                            id="remember_me" 
                                            name="remember_me"/>
                                     <label for="remember_me" 
                                             style="color: white;">
                                             Remember Me</label>
                                </div>

                                <div class="input-field col s12">
                                    
                                    <button type="submit"><i class="fa fa-user-md"></i> Login</button>

                                </div>
                                 <a href="{{ route('forgot-password') }}">I Forgot My Username or Password</a>
                            </form>

                    </div><!-- Registration Popup -->
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection
