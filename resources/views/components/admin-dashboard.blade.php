<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Employee</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $total_employee }}</h6>
                                    <span class="text-success small pt-1 fw-bold"></span> <span
                                        class="text-muted small pt-2 ps-1">total employee</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>

                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Department</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $total_department }}</h6>
                                    <span class="text-success small pt-1 fw-bold"></span> <span
                                        class="text-muted small pt-2 ps-1">Total Department</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Designation</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $total_designation }}</h6>
                                    <span class="text-danger small pt-1 fw-bold"></span> <span
                                        class="text-muted small pt-2 ps-1">total designation</span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->



                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <!-- table resource show componemts -->
                        @component('components.table.table', [
                            'title' => 'List of attendances',
                            'data' => $attendances,
                            'id' => 'attendance_id',
                            'route' => 'attendance',
                            'status' => false,
                        
                            'thead1' => 'Employee', //if you want reletion another table must be assign in thead 1,2,3
                            'reletion1' => 'user', //easir loading reletion name
                            'reletion1Field_name' => 'f_name', //this is reletion field thatway i am not use tdata1
                        
                            'thead2' => 'PunchIn',
                            'tdata2' => 'in',
                        
                            'thead3' => 'PunchOut',
                            'tdata3' => 'out',
                        
                            'thead4' => 'Date',
                            'tdata4' => 'created_at',
                        ])
                        @endcomponent


                    </div>
                </div><!-- End Recent Sales -->

            </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

         

            <!-- News & Updates Traffic -->
            <div class="card">


                <div class="card-body pb-0">
                    <h5 class="card-title">News &amp; Updates <span></span></h5>

                    <div class="news">
                        @foreach ($notices as $notice)
                        <div class="post-item clearfix">
                            <a href="@route('notice.show', $notice->notice_id)">
                            <img src="/images/notice/{{ $notice->image }}" alt="">
                            <h4>{{$notice->title}}</h4>
                            <p>{{$notice->short_des}}</p>
                        </a>
                        </div>
                        @endforeach
                    </div><!-- End sidebar recent posts-->

                </div>
            </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

    </div>
</section>
