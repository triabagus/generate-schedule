@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Kelas' }}
@stop


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
              @include('admin._partials.notifications')
              <h4 class="card-title">{{ $title }}</h4>
              {!! Form::model($rooms, ['route' => ['admin.room.update', $rooms->id], 'files' => true, 'id' => 'form-register']) !!}
              @include('admin-news.room.form')
              {!! Form::close() !!}
        </div>
    </div>
    </div>  
  </div>  
</div>  
@stop
