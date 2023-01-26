@extends('layouts.app')
@section('content')

@section('title', 'Designation List')

@section('css')
@endsection

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Designation Store or updated</h5>
            @component('components.form.notice', [
                'edit' => @$edit,
            ])
            @endcomponent
        </div>
    </div>
    @section('js')
    @endsection
@endsection
