@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Mata Pelajaran' }}
@stop



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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @include('admin._partials.notifications')
                            
                            <div class="dt-buttons">
                                
                                <button class="btn waves-effect waves-light btn-info mr-1" tabindex="0" aria-controls="file_export" href="{{ route('admin.lecturer.create') }}"><span>Tambah Data</span></button>
                            </div>
                            <div id="file_export_filter" class="dataTables_filter mr-3">
                                <label>Search Mata Pelajaran:
                                    {!! Form::text('searchname', Input::get('searchname')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan Mata Pelajaran']) !!}
                                </label>
                                    <button type="button" class="btn waves-effect waves-light btn-success ml-3">
                                    <span>Search</span>
                                    </button>
                            </div>

                            <div class="tablesaw-bar tablesaw-mode-stack"></div>
                            
                            <table class="tablesaw no-wrap table-bordered table-hover table" data-tablesaw>
                                <thead>
                                    <tr>
                                        <th scope="col" class="border text-center">No.</th>
                                        <th scope="col" class="border text-center">Nama Mata Pelajaran</th>
                                        <th scope="col" class="border text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody id="checkall-target">
                                    @foreach($courses as $key => $course)
                                    <tr>
                                        <td class="text-center">{{ ($courses->currentpage()-1) * $courses->perpage() + $key + 1 }}
                                        </td>
                                        <td>
                                            {{ $course->name }}
                                        </td>
                                        <td class="d-flex justify-content-around">

                                            <a type="button" scope="col-1" class="btn waves-effect waves-light btn-warning" href="{{ route('admin.courses.edit', $course->id) }}">Ubah</a>
                                            
                                            {!! Form::model($course, ['route' => ['admin.courses.delete', $course->id], 'onclick' => 'return confirm("Anda Yakin?");']) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::button('
                                                    <span class="glyphicon glyphicon-trash">
                                                    </span>
                                                    Hapus', ['type' => 'submit', 'class' => 'btn waves-effect waves-light btn-danger']) !!}
                                                {!! Form::close() !!}
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
