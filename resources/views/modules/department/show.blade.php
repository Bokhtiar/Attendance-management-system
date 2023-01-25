@extends('layouts.app')
@section('content')

@section('title', 'Department details')

@section('css')
@endsection


@component('components.brad-crumbs', [
    'title' => 'Department information',
])
@endcomponent

<div class="card">
    <div class="card-header">
        <span class="font-weight-bold">Name :</span> {{ $show->name }}
    </div>
    <div class="card-body">
        <div class="col-md-8 col-lg-8 col-sm-12 my-auto">
            <span><strong>Department name:</strong> {!! $show->name !!} </span> <br>
        </div>
    </div>
</div>

@section('js')
@endsection
@endsection
