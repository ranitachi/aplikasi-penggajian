@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection
@section('content')
<div class="col-md-12">
	@if(Session::has('alert-success'))
	<div class="alert alert-success">
		<strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
	</div>
	@endif
    <div class="row">
        <div class="col-md-8">
            @include('pages.komponenGaji.data')
        </div>
        <div class="col-md-4">
            @include('pages.komponenGaji.form')
        </div>
    </div>
</div>
@endsection
