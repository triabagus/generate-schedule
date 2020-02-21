@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Tambah Agen' }}
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('admin-news._partials.notifications')
                        <h4 class="card-title">{{ $title }}</h4>

                        {!! Form::model($users, ['route' => ['admin.user.update', $users->id], 'files' => true, 'id' => 'form-register']) !!}
                            @include('admin-news.user.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>
@stop