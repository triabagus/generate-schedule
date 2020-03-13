@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Mata Pelajaran' }}
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


@section('content')    
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
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Active user - project- visitors -->
            <!-- ============================================================== -->
            @include('admin._partials.notifications')
            <div class="card">
                <div class="card-body">
                <div class="row mb-3">
                    <div class="col align-self-center">
                            
                        <h6 class="card-subtitle">
                            Description Time blade.
                        </h6>
                    
                        
                        <a class="btn waves-effect waves-light btn-info mr-1" tabindex="0" aria-controls="file_export" href="{{ route('admin.courses.create') }}">
                            <i class="fa fa-plus">
                            </i>
                            Tambah Data
                        </a>
                    </div>
                    <div id="file_export_filter"    class="dataTables_filter ml-2">
                        {!! Form::open(['role' => 'form', 'route' => 'admin.courses', 'method' =>'get']) !!}
                        <label>
                            {!! Form::text('searchname', Input::get('searchname')?: null, ['class' => 'form-control mt-3', 'placeholder' => 'Mencari Pelajaran']) !!}
                        </label>
                            <button type="submit" class="btn waves-effect waves-light btn-success ml-3">
                            <span>Search</span>
                            </button>
                            {!! Form::close() !!}
                    </div>
                </div>                    
                        <table class="no-wrap table-bordered table-hover table" data-tablesaw>
                            <thead class="bg-info text-white">
                                <tr>
                                    <th scope="col" class="border text-center">No.</th>
                                    <th scope="col" class="border text-center">Pelajaran</th>
                                    <th scope="col" class="border text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody id="checkall-target">
                                @foreach($courses as $key => $course)
                                <tr>
                                    <td>{{ ($courses->currentpage()-1) * $courses->perpage() + $key + 1 }}
                                    </td>
                                    <td>
                                        {{ $course->name }}
                                    </td>
                                    <td class="d-flex justify-content-around">
                                        <div class="button-group">
                                        <a class="btn waves-effect waves-light btn-warning mr-3" href="{{ route('admin.courses.edit', $course->id) }}">
                                            <i class="ti-pencil">
                                            </i>
                                            Ubah
                                        </a>
                                        
                                        {!! Form::model($course, ['route' => ['admin.courses.delete', $course->id], 'id'=> 'delete-'.$course->id, 'class'=> 'deleteedition']) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::button('
                                        <i class="ti-trash"></i>
                                        Hapus', ['type' => 'submit', 'class' => 'btn waves-effect waves-light btn-danger ml-3 sa-removeData', 'data-file'=> 'delete-'.$course->id]) !!}
                                        {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {!! $courses->appends(Input::all())->render() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
@stop
