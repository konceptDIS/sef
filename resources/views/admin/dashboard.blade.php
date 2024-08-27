@extends('admin.layouts.app')

@section('content')
    <!--start content-->
    <main class="page-content">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Views</p>
                                <h4 class="mb-0">{{$views ?? '0'}}</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>All time</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-primary text-white">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Posts</p>
                                <h4 class="mb-0">{{count($posts) ?? '0'}}</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>All time</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-success text-white">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Subsidiaries</p>
                                <h4 class="mb-0">0</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>All time</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-orange text-white">
                                <i class="bi bi-emoji-heart-eyes"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Users</p>
                                <h4 class="mb-0">{{count($users) ?? '0'}}</h4>
                                <p class="mb-0 mt-2 font-13"><i class="bi bi-arrow-up"></i><span>All time</span></p>
                            </div>
                            <div class="ms-auto widget-icon bg-info text-white">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->

    </main>
    <!--end page main-->
@endsection
