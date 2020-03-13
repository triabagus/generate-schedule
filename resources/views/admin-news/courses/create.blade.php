@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Tambah Mata Pelajaran' }}
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin._partials.notifications')
                        {!! Form::open(['role' => 'form', 'files' => true, 'id' => 'form-register']) !!}
                        @include('admin.courses.form')
                        {!! Form::close() !!}
                    </div>  
                   </div>
                </div>
            </div>
        </div>
        
@stop