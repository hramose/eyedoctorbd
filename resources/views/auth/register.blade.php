@extends('layouts.frontend.app')

@section('title')
Register
@endsection

@section('content')
    <div class="pagetop">
    <div class="container">
        <span>What We Actually Do?</span>
        <h1><span>Eye Doctor</span> Registration</h1>
        <ul>
            <li><a href="{{ route('welcome') }}" title="">Home</a></li>
            <li>Registration</li>
        </ul>
    </div>
</div>


<section>
    <div class="block">
        <div class="parallax-container"><div data-speed="1" data-bleed="12" class="parallax"><img src="{{asset('/frontend/images/resource/parallax6.jpg')}}" alt="" /></div></div>
        <div class="container">
            <div class="row">
                <div class="col offset-l1 l10 m12 s12 column">
                    <div class="registration-page">
                        <div class="theme-form login-form">
                            <div class="white-title">
                                <i class="icon-key"></i>
                                <h4>REGISTER NOW</h4>
                                <span>Fill in the form below to get instant access</span>
                            </div>
                             {{-- Success and  Error List --}}
                            @if (session('success'))
                              <div class="alert success">
                                <span class="closebtn" 
                                      onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>Congratulations! </strong>{{ session('success') }}
                              </div>
                            @endif

                            @if(count($errors) > 0)
                                @foreach($errors->all() as $error)
                                  <div class="alert danger">
                                    <span class="closebtn" 
                                          onclick="this.parentElement.style.display='none';">&times;</span> 
                                    <strong>Oh snap! </strong> {{ $error }}
                                  </div>
                                @endforeach
                            @endif


                            <form role="form" method="POST" action="{{ route('doRegister') }}">

                                {{ csrf_field() }}

                                <div class="input-field col s12">
                                    <input id="name" 
                                           type="text" 
                                           name="name" 
                                           placeholder="Enter Full Name" 
                                           value="{{ old('name') }}" 
                                           required autofocus/>
                                 </div>

                                <div class="input-field col s12">
                                    <input type="text" 
                                           name="username" 
                                           id="username" 
                                           placeholder="Choose Your Username"
                                           value="{{ old('username') }}" 
                                           required/>
                                </div>

                                <div class="input-field col s12">
                                    <input id="email" 
                                           type="email" 
                                           name="email" 
                                           placeholder="Email Address" 
                                           value="{{ old('email') }}" 
                                           required />
                                 </div>

                                <div class="input-field col s12">
                                    <input id="password" 
                                           type="password" 
                                           name="password"
                                           placeholder="Password" 
                                           required/>
                                </div>

                                <div class="input-field col s12">
                                    <input id="password-confirm" 
                                           type="password" 
                                           name="password_confirmation" 
                                           placeholder="Confirm Password" 
                                           required/>
                                </div>
                                <input type="hidden" value="doctor" name="role">
                                

                                <div class="input-field col s12">
                                    
                                    <button type="submit"><i class="fa fa-user-md"></i> Register</button>

                                </div>
                            </form>

                    </div><!-- Registration Popup -->
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection
