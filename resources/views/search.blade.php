@extends('layouts.main.master')

@section('title')
Search Result
@endsection

@section('csslink')
 
@endsection

@section('content')
<div class="pagetop">
	<div class="container">
		<h1><span>EYE</span> DOCTOR BD</h1>

		<div class="row">
		<form action="{{ route('search') }}" method="POST">
			{{ csrf_field() }}
			<div class="input-field col s3">
				<input type="text" 
                       id="City" 
                       name="city" 
                       placeholder="City" 
                       value="{{ $city }}" 
                       required>
			</div>

			<div class="input-field col s3">
				<input type="text" 
                       id="Subarea" 
                       name="subarea" 
                       placeholder="Subarea" 
                       value="{{ $subarea }}" 
                       required>
			</div>
			<div class="input-field col s4">
				<input type="text" 
					   name="txt_DocORHosName" 
					   placeholder="Doctor Name or Email">
			</div>
			<div class="input-field col s2">
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

							@foreach ($Doctors as $Doctor)
								<div class="name col s12 m6 l3">
									<div class="surgeon">
										<a href="/profile/{{ $Doctor->username }}" title="">
											<img src="/doctors/thumb/{{ $Doctor->avatar }}" alt="profile image"/>
											<div class="surgeon-info">
												<div class="surgeon-name">
													<h3>{{ $Doctor->name }}</h3>
												<span>{{ $Doctor->designation }}</span>
											</div>
										  </div>
										</a>
									</div><!-- Surgeon -->
								</div>

							@endforeach

							 </div>
								<ul class="pagination theme-pagi">
									{{ $Doctors->links() }}
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
  
@endsection