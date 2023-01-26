@extends('layouts.app')
@section('content')

@section('title', 'Dashboard')

@section('css')
@endsection

@component('components.brad-crumbs', [
    'title' => 'User Create',
])
@endcomponent

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Leave application</h5>

            @component('components.form.leave-application', [
                'edit' => @$edit,
            ])
            @endcomponent

        </div>
    </div>
</section>

@section('js')
@endsection

@endsection
