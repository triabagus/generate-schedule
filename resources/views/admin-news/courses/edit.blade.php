@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Mata Pelajaran' }}
@stop


@section('content')
<div class="container-fluid">
  <div class="row"> 
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          @include('admin._partials.notifications')
          <h4 class="card-title">{{ $title }}</h4>
            {!! Form::model($courses, ['route' => ['admin.courses.update', $courses->id], 'files' => true, 'id' => 'form-register']) !!}
            @include('admin-news.courses.form')
            {!! Form::close() !!}
        </div>
    </div>
    </div>  
  </div>  
</div>  
@stop
