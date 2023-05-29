@extends('layouts.header')

@extends('layouts.topbar')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-10 col-lg-10">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-gradient-secondary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Activities</h6>
                        <div class="justify-content-end">
                            <a href="" class="btn btn-success btn-sm justify-content-end"  data-bs-toggle="modal" data-bs-target="#drivers"> Add New Driver</a>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        @include('partials.errors')
                        @if($activities->count() > 0)
                            <table class="table table-bordered table-sm">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date Added</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <th>{{ $activity->id }}</th>
                                        <th>{{ $activity->created_at }}</th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class='text-center alert alert-danger'>No Activity Available</h3>
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection