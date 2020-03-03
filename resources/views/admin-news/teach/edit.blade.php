@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Kegiatan' }}
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin-news._partials.notifications')
                        <h4 class="card-title">{{ $title }}</h4>

                        {!! Form::model($teachs, ['route' => ['admin.teach.update', $teachs->id], 'files' => true, 'id' => 'form-register']) !!}
                            @include('admin-news.teach.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>
@stop
