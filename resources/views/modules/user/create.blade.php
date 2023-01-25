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
            <h5 class="card-title">Employee Create</h5>

            @component('components.form.user', [
                'edit' => @$edit,
                'designations' => @$designations
            ])
            @endcomponent

        </div>
    </div>
</section>

@section('js')
@endsection

@endsection
