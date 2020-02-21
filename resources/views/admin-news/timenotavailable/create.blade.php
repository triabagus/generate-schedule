@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Tambah Waktu Berhalangan' }}
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin-news._partials.notifications')
                        <h4 class="card-title">{{ $title }}</h4>

                        {!! Form::open(['role' => 'form', 'files' => true, 'id' => 'form-register']) !!}
                            @include('admin-news.timenotavailable.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>
@stop
