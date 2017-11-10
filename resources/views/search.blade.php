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
		<form action="{{ route('search') }}" method="POST">
			{{ csrf_field() }}
			<div class="input-field col s12 m3 3">
				<input type="text" 
		                       id="City" 
		                       name="city" 
		                       placeholder="City" 
		                       value="{{ $city }}" 
		                       required>
					</div>

			<div class="input-field col s12 m3 3">
				<input type="text" 
			                       id="Subarea" 
			                       name="subarea" 
			                       placeholder="Subarea" 
			                       value="{{ $subarea }}" 
			                       required>
			</div>
			<div class="input-field col s12 m4 4">
				<input type="text" 
					   name="txt_DocORHosName" 
					   placeholder="Doctor Name or Email">
			</div>
			<div class="input-field col s12 m2 2">
					<button type="submit" name="btn_submit" style="margin-top: auto;"><i class="fa fa-recycle"></i> Check Now</button>
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
													<h3>{{ $doctor->first_name }} {{ $doctor->last_name }}</h3>
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
  	 $( function() {
        var allCity = [
        @foreach ($cities as $city)
          "{{ $city->city_name }}",
        @endforeach
        ];
        $( "#City" ).autocomplete({
          source: allCity
        });
    } );

 $( function() {
    var allSubarea = [
    @foreach ($sub_areas as $subarea)
      "{{ $subarea->name }}",
    @endforeach
    ];
    $( "#Subarea" ).autocomplete({
      source: allSubarea
    });
  } );
  </script>
@endsection