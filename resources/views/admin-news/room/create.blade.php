@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Tambah Kelas' }}
@stop

@section('content')

<div class="container-fluid">
  <div class="row"> 
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          
                @include('admin._partials.notifications')
                <h4 class="page-title">{{ $title }}</h4>
                {!! Form::open(['role' => 'form', 'files' => true, 'id' => 'form-register']) !!}
                @include('admin-news.room.form')
                {!! Form::close() !!}
            
        </div>
      </div>
    </div>  
  </div>  
</div>
@stop