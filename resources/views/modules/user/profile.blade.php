@extends('layouts.app')
@section('content')

@section('title', 'Dashboard')

@section('css')
@endsection

@component('components.brad-crumbs', [
    'title' => 'User profile',
])
@endcomponent

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <x-notification-component></x-notification-component>
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img height="200px" src="/images/users/{{ $user->image }}" alt="Profile" class="rounded-circle">
                    <h2>{{ $user->f_name . '' . $user->l_name }}</h2>
                    <h3>{{ $user->designation ? $user->designation->name: "" }}</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-change-password">Change Password</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                                temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                                quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">{{ $user->f_name . ' ' . $user->l_name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Company</div>
                                <div class="col-lg-9 col-md-8">GrapView</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Job</div>
                                <div class="col-lg-9 col-md-8">{{$user->designation ? $user->designation->name : ""}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Country</div>
                                <div class="col-lg-9 col-md-8">Bangladesh</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Present Address</div>
                                <div class="col-lg-9 col-md-8">{{ $user->present_address }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Parmanent Address</div>
                                <div class="col-lg-9 col-md-8">{{ $user->permanent_address }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <div class="row mb-3">

                                <div class="col-md-8 col-lg-9 text-center">
                                    <img src="/images/users/{{ $user->image }}" height="150px" alt="Profile">
                                </div>
                            </div>

                            @component('components.form.user', [
                                'edit' => @$user,
                                'designations' => @$designations,
                            ])
                            @endcomponent

                            <!-- End Profile Edit Form -->

                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form method="POST" action="@route('password.change')">
                                @method('PUT')
                                @csrf


                                <div class="form-group row my-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control py-3 @error('password') is-invalid @enderror"
                                            name="old_password" required autocomplete="new-password"
                                            placeholder="password">
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control py-3 @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password"
                                            placeholder="new password">

                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="confirm_password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control py-3 @error('password') is-invalid @enderror"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="cofirm password">

                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
@section('js')
@endsection

@endsection
