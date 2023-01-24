@extends('layouts.app')
@section('content')

@section('title', 'Dashboard')

@section('css')
@endsection

@component('components.brad-crumbs',[
    'title' => "Dashboard"
])
    
@endcomponent

<div>
    Home page
</div>

@section('js')
@endsection

@endsection
