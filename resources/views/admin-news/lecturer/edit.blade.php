@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'Ubah Dosen' }}
@stop


@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            
            <div class="d-flex align-items-center">

            </div>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Validation with Custom Styles</h4>
            {{-- <form class="needs-validation" novalidate> --}}
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  @include('admin._partials.notifications')
                  {!! Form::model($lecturers, ['route' => ['admin.lecturer.update', $lecturers->id], 'files' => true, 'id' => 'form-register']) !!}
                  @include('admin.lecturer.form')
                  {!! Form::close() !!}
                  
                  
                </div>
              </div>
              
              {{-- <button class="btn btn-primary" type="submit">Submit form</button> --}}
            {{-- </form> --}}
        </div>
    </div>
    </div>  
  </div>  
</div>  
@stop
