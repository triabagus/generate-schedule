@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Waktu' }}
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin-news._partials.notifications')
                        <h4 class="card-title">{{ $title }}</h4>

                        {!! Form::model($times, ['route' => ['admin.time.update', $times->id], 'files' => true, 'id' => 'form-register']) !!}
                            @include('admin-news.time.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>
@stop
