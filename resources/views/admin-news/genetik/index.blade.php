@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Generate Algoritma' }}
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
                    Description Generate Blade.
                </h6>
            </div>
            <div class="col-5 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    
                </div>
            </div>
        </div>

        <div class="row mb-3">
            {!! Form::open(['role' => 'form', 'route' => 'admin.generates.submit', 'id' => 'form-register', 'method' => 'get']) !!}
            <div class="col-lg-6">
                <div class="form-group">
                <label>
                    Kromosom
                </label>
                    {!! Form::select('kromosom', [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ], Input::get('kromosom'), ['class' => 'select2 form-control custom-select required', 'id' => 'kromosom','placeholder' => 'Masukkan Nilai Pembangkitan Kromosom']) !!}
                <label id="kromosom-error" class="error" for="kromosom" style="display: none;">This field is required.</label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                <label>
                    Generasi
                </label>
                    {!! Form::select('generasi', [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ], Input::get('generasi'), ['class' => 'form-control select2 to-select required', 'id' => 'generasi','placeholder' => 'Masukkan Nilai Maksimal Generasi']) !!}
                <label id="generasi-error" class="error" for="generasi" style="display: none;">This field is required.</label>
                </div>
            </div>
            <div class="col-md-6">
            <label>
                Crossover
            </label>
                <div class="form-group">
                {!! Form::text('crossover', Input::get('crossover'), ['class' => 'form-control required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nilai Crossover', 'id' => 'crossover']) !!}
                <label id="crossover-error" class="error" for="crossover" style="display: none;">This field is required.</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>
                    Mutasi
                </label>
                    {!! Form::text('mutasi', Input::get('mutasi'), ['class' => 'form-control required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nilai Mutasi ', 'id' => 'mutasi']) !!}
                    {!! Form::hidden('tabs', Input::get('tabs') ? Input::get('tabs') : 1, ['id' => 'tabs']) !!}
                    <label id="mutasi-error" class="error" for="mutasi" style="display: none;">This field is required.</label>
                </div>
            </div>
            <div class="col-lg-12">
                {!! Form::submit('Generate',['class'=>'btn btn-default btn-block']) !!}
            </div>
            <div class="col-md-12">
                {!! Form::close() !!}
            </div>
        
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@stop
