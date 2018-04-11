@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection
@section('content')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            @include('pages.bank.data')
        </div>
        <div class="col-md-4">
            @include('pages.bank.form')
        </div>
    </div>
</div>
@endsection
