@extends('layouts.main.master')

@section('title')
    <title>Eye Doctor | Forgot Password</title>
@endsection

@section('content')
    <div class="pagetop">
    <div class="container">
        <span>What We Actually Do?</span>
        <h1><span>Eye Doctor</span> Forgot password</h1>
        <ul>
            <li><a href="{{ route('welcome') }}" title="">Home</a></li>
            <li>Forgot password</li>
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
                                <h4>RESET PASSWORD</h4>
                                <span>Fill in the form below to get instant access</span>

                            </div>

                            {{-- Success and Error List --}}
                            @if(session('infoMsg'))
                              <div class="alert info">
                                <span class="closebtn" 
                                      onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>{{ session('infoMsg') }} </strong> 
                              </div>
                            @endif
                                                     
                            <form role="form" method="POST" action="">

                                {{ csrf_field() }}

                                <div class="input-field col s12">
                                    <input id="password"
                                           type="password" 
                                           name="password" 
                                           placeholder="Password" 
                                           required autofocus/>
                                    
                                </div>
                                <div class="input-field col s12">
                                    <input id="password"
                                           type="password" 
                                           name="password_confirmation" 
                                           placeholder="Confirmation Password" 
                                           required/>
                                    
                                </div>
                              
                                <div class="input-field col s12">
                                    
                                    <button type="submit"><i class="fa fa-user-md"></i> Update Password</button>

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
