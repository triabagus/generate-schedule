@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Hasil Generate Algoritma' }}
@stop

@section('style')
<link href="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw.css') }}" rel="stylesheet">
<link href="{{ asset('new_template/assets/libs/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

<style>
    form.deleteedition{
        display:inline-block;
    }
</style>
@stop

@section('script')

<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw.jquery.js') }}"></script>
<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw-init.js') }}"></script>
<script src="{{ asset('new_template/assets/libs/sweetalert2/dist/sweetalert2.all.min.js') }}" aria-hidden="true"></script>
<script src="{{ asset('new_template/assets/libs/sweetalert2/sweet-alert.init.js') }}" aria-hidden="true"></script>
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
        <div class="row mb-3">
            <div class="col-7 align-self-center">
                <h6 class="card-subtitle">
                    Description Hasil Generate Blade.
                </h6>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4 align-self-center">
                <a class="btn btn-warning btn-block" href="{{ route('admin.generates', Input::all()) }}">
                    <span class="glyphicon glyphicon-hand-left">
                    </span>
                    Kembali
                </a>
            </div>

            <div class="col-4 align-self-center">
                <a class="btn btn-info btn-block" href="{{ route('admin.generates.excel', $id) }}">
                    <span class="glyphicon glyphicon-download">
                    </span>
                    Export Excel Data Ini
                </a>
            </div>

            <div class="col-4 align-self-center">
                @if(!empty($data_kromosom))
                    <select class="select form-control custom-select" id="myAction">
                    @foreach ($data_kromosom as $key => $kromosom)
                        <option value="{{ $key+1 }}"
                        @if ($id == ($key+1))
                            selected="selected">
                        @else
                            >
                        @endif
                        
                        @if ($kromosom['value_schedules'] == 1)
                            Jadwal Terbaik
                        @else
                            Jadwal {{ $key+1 }}
                        @endif
                        </option>
                    @endforeach
                    </select>
                @endif
                </div>
        </div>

        <div class="row mb-3">

                <div class="col-md-12 align-self-center">
                
                @if(!empty($data_kromosom))
                <ul class="nav nav-tabs nav-justified">
                    @foreach ($data_kromosom as $key => $kromosom)
                        @if ($id == ($key+1))
                            <li role="presentation" class="active">
                        @else
                            <li role="presentation">
                        @endif
                            <a href="{{ URL::Route('admin.generates.classes', $key+1) }}">
                                @if ($kromosom['value_schedules'] == 1)
                                    Jadwal Terbaik
                                @else
                                    Jadwal {{ $key+1 }}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
                @endif

                <br>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
                        ×
                    </button>
                    <h4>
                        Nilai Fitness : 1 / 1 + ( 0 {{ $value_schedule->value_process }} ) = {{ $value_schedule->value }}
                        <br>
                    </h4>
                    <h4>
                        Crossover:  
                        
                        @if($crossover == null)
                            0
                        @else
                            {{ $crossover->value }} 
                        @endif

                        <br>
                    </h4>
                    <h4>
                        Mutasi : 

                        @if($mutasi == null)
                            0
                        @else
                            {{ $mutasi->value }}
                        @endif
                        <br>
                    </h4>
                </div>
        

            <div class="col-5 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    
                </div>
            </div>
        </div>

    </div>
        

        <table class="no-wrap table-bordered table-hover table" data-tablesaw>
            <thead class="bg-info text-white">
                <tr class="info">
                    <th scope="col" style="text-align:center;">
                        No.
                    </th>
                    <th scope="col" style="text-align:center;">
                        Hari
                    </th>
                    <th scope="col" style="text-align:center;">
                        Jam
                    </th>
                    <th scope="col" style="text-align:center;">
                        Kelas
                    </th>
                    <th scope="col" style="text-align:center;">
                        Asrama
                    </th>
                    <th scope="col" style="text-align:center;">
                        Mata Pelajaran
                    </th>
                    <th scope="col" style="text-align:center;">
                        Guru 
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($schedules as $key => $schedule    )
                <tr>
                    <td align="center">
                        {{ $key + 1 }}
                    </td>
                    <td align="center">
                        {{
                            isset($schedule->day->name_day) ? $schedule->day->name_day : ''
                        }}
                    </td>
                    <td align="center">
                        {{
                            isset($schedule->time->range) ? $schedule->time->range : ''
                        }}
                    </td>
                    <td align="center">
                        {{
                            isset($schedule->room->name) ? $schedule->room->name : ''
                        }}
                    </td>
                    <td align="center">
                        {{
                            isset($schedule->room->type) ? $schedule->room->type : ''
                        }}
                    </td>
                    <td align="center">
                        {{
                            isset($schedule->teach->course->name) ? $schedule->teach->course->name : ''
                        }}
                    </td>
                    <td align="center">
                        {{
                            isset($schedule->teach->lecturer->name) ? $schedule->teach->lecturer->name : ''
                        }}
                    </td>
                </tr>
            @endforeach    
            </tbody>
        </table>
            
        {!! $schedules->appends(Input::all())->render() !!}
        
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@stop

