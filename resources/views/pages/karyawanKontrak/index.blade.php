@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12" style="background:#fff;">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-md-8">
                    @include('pages.karyawanKontrak.data')
                </div>
                <div class="col-md-4">
                    @include('pages.karyawanKontrak.form')
                </div>
            </div>
        </div>
    </div>
@endsection
