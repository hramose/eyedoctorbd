@extends('layouts.frontend.app')

@section('title')
Search Result
@endsection

@section('csslink')
 <!-- AutoComplete -->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('content')
<div class="pagetop">
	<div class="container">
		<h1><span>EYE</span> DOCTOR BD</h1>

		<div class="row">
		<form id="search_form" action="{{ route('search') }}" method="POST">
                        
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12 m3 3">
                                   <select name="city" id="city">
                                  <option value="" disabled selected>Select Your City</option>
                                    @foreach ($cities as $city)
                                      <option value="{{ $city->slug }}" 
                                        {{ $citySlug === ($city->slug) ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                    {{ $city->city_name }}
                                    @endforeach
                                  </select>
                                </div>
                                <div class="input-field col s12 m3 3">
                                    <select name="subarea" id="subarea">
                                    	<option value="" disabled selected>Select Your Sub-area</option>
                                      @foreach ($sub_areas as $subarea)
                                        <option value="{{ $subarea->slug }}"   
                                        {{ $subareaSlug === ($subarea->slug) ? 'selected' : '' }} >{{ $subarea->name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="input-field col s12 m4 4">
                                  <select name="hospital" id="hospital">
                                    <option value="" disabled selected>Search by Hospital</option>
                                    @foreach ($hospitals as $hospital)
                                      <option value="{{ $hospital->slug }}"    
                                      {{ $hospitalSlug === ($hospital->slug) ? 'selected' : '' }} >{{ $hospital->hospital_name }}</option>
                                    @endforeach
                                  </select>
                                </div>


                                {{--  <div class="col s12">
                                    <p>Search with Place or Doctor name</p>
                                </div>  --}}
                                <div class="input-field col s12 m2 2">
                                    <button type="button" onclick="route();" style="float: none; margin-top: auto;"><i class="fa fa-search" aria-hidden="true"></i></i> Search</button>
                                </div>
                            </div>
                     </form>
			<h1><span>{{ $doctorCount }}  </span> Doctor(s) Found.</h1>
		</div>
	</div>
	</div>
<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col column s12 m12 l12">
				<div class="all-surgeons">
					<div class="row">
						<div id="test-list"> 
							<div class="list">

							@foreach ($doctors as $doctor)
								<div class="name col s12 m6 l3">
									<div class="surgeon">
										<a href="{{ route('profile',$doctor->slug) }}" title="">
											<img src="/upload/doctors/thumb/{{ $doctor->avatar }}" alt="profile image"/>
											<div class="surgeon-info">
												<div class="surgeon-name">
													<h3>{{ $doctor->name }}</h3>
												<span>{{ $doctor->designation }}</span>
											</div>
										  </div>
										</a>
									</div><!-- Surgeon -->
								</div>

							@endforeach

							 </div>
								<ul class="pagination theme-pagi">
									{{ $doctors->links() }}
								</ul><!-- Pagination -->	
						 </div>

						</div>
					</div><!-- All Surgeons -->
									
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('jslink')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
	 function route (){
       event.preventDefault();       
      if ($.trim($("#city").val()) == "" && $.trim($("#subarea").val()) == "" && $.trim($("#hospital").val()) == "") {
          console.log('all empty');
          swal(
                'Oops...One condition required.',
                'Search with one condition City and Sub Area Or Doctor Name and Hospital Name',
                'error'
                );
    }else if($.trim($("#city").val()) == "" && $.trim($("#hospital").val()) == "" && $.trim($("#subarea").val()) !== ""){
         swal(
                'Oops...',
                'You can not search only with sub area :(',
                'error'
                );
    }else{
        document.getElementById('search_form').submit();
    }
  }
  </script>
@endsection