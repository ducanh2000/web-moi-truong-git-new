@extends('master-layout')
@section('content')

<section class="home-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				@include('menu-left')
			</div>
			<div class="col-md-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>

@endsection