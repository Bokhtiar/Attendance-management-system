@extends('layouts.app')
@section('content')

@section('title', 'Designation details')

@section('css')
@endsection


@component('components.brad-crumbs', [
    'title' => 'Designation information',
])
@endcomponent

<div class="card">
    <div class="card-header">
        <span class="font-weight-bold">Name :</span> {{ $show->user ? $show->user->f_name :""}}
    </div>
    <div class="card-body">
        <div class="col-md-8 col-lg-8 col-sm-12 my-auto">
            <span><strong>Amount:</strong> {!! $show->amount !!} </span> <br>
        </div>
    </div>
</div>

@section('js')
@endsection
@endsection
