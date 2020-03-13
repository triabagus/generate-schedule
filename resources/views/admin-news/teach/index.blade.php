@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Kegiatan' }}
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
        <div class="col align-self-center">
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
            <div class="col align-self-center">
                <h6 class="card-subtitle">
                    Description Teach Blade.
                </h6>
                <a class="btn waves-effect waves-light btn-info mr-1" href="{{ route('admin.teach.create') }}">
                    <i class="fa fa-plus">
                    </i>
                    Tambah Data
                </a>
            </div>
            
        </div>

        <table class="no-wrap table-bordered table-hover table" data-tablesaw>
            <thead class="bg-info text-white">
                <tr>
                    <th scope="col" class="border">No</th>
                    <th scope="col" class="border text-center">Nama Guru</th>
                    <th scope="col" class="border text-center">pelajaran</th>
                    <th scope="col" class="border text-center">Kelas</th>
                    <th scope="col" class="border text-center">Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($teachs as $key => $teach)
                <tr>
                    <td>{{ ($teachs->currentpage()-1) * $teachs->perpage() + $key + 1 }}</td>
                    <td>{{ $teach->lecturer->name }}</td>
                    <td>{{ $teach->course->name }}</td>
                    <td>{{ $teach->room->name }}</td>
                    <td class="d-flex justify-content-around">
                        {{-- <div class="button-group"> --}}
                            <a class="btn waves-effect waves-light btn-warning mr-3" href="{{ route('admin.teach.edit', $teach->id) }}">
                                <i class="ti-pencil">
                                </i>
                                Ubah
                            </a>

                            {!! Form::model($teach, ['route' => ['admin.teach.delete', $teach->id], 'id'=> 'delete-'.$teach->id, 'class'=> 'deleteedition']) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::button('
                            <i class="ti-trash"></i>
                            Hapus', ['type' => 'submit', 'class' => 'btn waves-effect waves-light btn-danger ml-3 sa-removeData', 'data-file'=> 'delete-'.$teach->id]) !!}
                            {!! Form::close() !!}

                        {{-- </div> --}}
                    </td>
                </tr>
            @endforeach    
            </tbody>
        </table>
            
        {!! $teachs->appends(Input::all())->render() !!}
        
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@stop
