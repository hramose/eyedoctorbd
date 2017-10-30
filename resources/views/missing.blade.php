@extends ('layouts.frontend.app')

@section('title')
Error 404
@endsection

@section ('content')
   <div class="pagetop">
    <div class="container">
        <h1><span>Error</span> 404</h1>
    </div>
</div>
<section>
    <div class="block">
        <div class="parallax-container"><div data-speed="1" data-bleed="12" class="parallax"><img src="{{ asset('frontend/images/resource/parallax6.jpg') }}" alt="" /></div></div>
        <div class="container">
            <div class="row">
                <div class="col offset-l1 l10 m12 s12 column">
                    <h1>Oops! The Page you requested was not found! :(</h1>
            </div>
        </div>
    </div>
  </div>
</section>
	
@endsection