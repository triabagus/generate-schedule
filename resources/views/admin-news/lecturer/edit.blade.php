@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Dosen' }}
@stop


@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          @include('admin-news._partials.notifications')
              <h4 class="card-title">Validation with Custom Styles</h4>
              {!! Form::model($lecturers, ['route' => ['admin.lecturer.update', $lecturers->id], 'files' => true, 'id' => 'form-register']) !!}
              @include('admin-news.lecturer.form')
              {!! Form::close() !!}
        </div>
    </div>
    </div>  
  </div>  
</div>  
@stop
