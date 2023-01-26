@extends('layouts.app')
@section('content')

@section('title', 'Notice details')

@section('css')
@endsection


@component('components.brad-crumbs', [
    'title' => 'Notice information',
])
@endcomponent

<div class="card">
    <div class="card-header">
        <span class="font-weight-bold">Title :</span> {{ $show->title}}
    </div>
    <div class="card-body">
        <div class="">
            <img height="200px" src="/images/notice/{{ $show->image }}" alt="Profile" class="">
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12 my-auto">
            <span><strong>Short Description:</strong> {!! $show->short_des !!} </span> <br>
            <span><strong>Description:</strong> {!! $show->long_des !!} </span> <br>
        </div>
    </div>
</div>

@section('js')
@endsection
@endsection
