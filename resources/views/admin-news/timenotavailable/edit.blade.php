@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Waktu Tidak Bersedia Dosen' }}
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin-news._partials.notifications')
                        <h4 class="card-title">{{ $title }}</h4>

                        {!! Form::model($timenotavailables, ['route' => ['admin.timenotavailable.update', $timenotavailables->id], 'files' => true, 'id' => 'form-register']) !!}
                            @include('admin-news.timenotavailable.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>
@stop