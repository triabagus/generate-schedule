@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Data Waktu' }}
@stop

@section('style')
<link href="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw.css') }}" rel="stylesheet">
@stop

@section('script')

<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw.jquery.js') }}"></script>
<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw-init.js') }}"></script>
@stop

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">{{ $title }}</h4>
            <div class="d-flex align-items-center">

            </div>
        </div>

    <div class="col-7 align-self-center">
        <div class="d-flex no-block justify-content-end align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </nav>
        </div>
    </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    @include('admin-news._partials.notifications')
    <div class="card">
        <div class="card-body">

        <table class="no-wrap table-bordered table-hover table" data-tablesaw>
            <thead class="bg-info text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Waktu Mulai</th>
                    <th scope="col">Waktu Selesai</th>
                    <th scope="col">Range</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($times as $key => $time)
                <tr>
                    <td>{{ ($times->currentpage()-1) * $times->perpage() + $key + 1 }}</td>
                    <td>{{ $time->time_begin }}</td>
                    <td>{{ $time->time_finish }}</td>
                    <td>{{ $time->range }}</td>
                    <td>
                        <div class="button-group">
                            <a class="btn btn-primary" href="{{ route('admin.time.edit', $time->id) }}">
                                <i class="ti-pencil">
                                </i>
                                Ubah
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach    
            </tbody>
        </table>
            
        {!! $times->appends(Input::all())->render() !!}
        
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@stop
