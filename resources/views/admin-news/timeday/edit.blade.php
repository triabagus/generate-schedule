@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Manajemen Waktu' }}
@stop


@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin-news._partials.notifications')
                        <h4 class="card-title">{{ $title }}</h4>

                        {!! Form::model($timedays, ['route' => ['admin.timeday.update', $timedays->id], 'files' => true, 'id' => 'form-register']) !!}
                            @include('admin-news.timeday.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>
@stop