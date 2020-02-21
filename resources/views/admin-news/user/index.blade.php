@extends('admin-news.layouts.master')

@section('title')
{{ $title = 'User' }}
@stop

@section('style')
<link href="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw.css') }}" rel="stylesheet">
<link href="{{ asset('new_template/assets/libs/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

<style>
    form.deleteedition{
        display:inline-block;
    }
</style>
@stop

@section('script')

<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw.jquery.js') }}"></script>
<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw-init.js') }}"></script>
<script src="{{ asset('new_template/assets/libs/sweetalert2/dist/sweetalert2.all.min.js') }}" aria-hidden="true"></script>
<script src="{{ asset('new_template/assets/libs/sweetalert2/sweet-alert.init.js') }}" aria-hidden="true"></script>
@stop

@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">{{ $title }}</h4>
            <div class="d-flex align-items-center">

            </div>
        </div>

        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    @include('admin-news._partials.notifications')
    <div class="card">
        <div class="card-body">
        <div class="row mb-3">
            <div class="col-7 align-self-center">
                <h6 class="card-subtitle">
                    Description User Blade.
                </h6>
                <a class="btn btn-sm btn-success" href="{{ route('admin.user.create') }}">
                    <i class="ti-plus">
                    </i>
                    Tambah
                </a>
            </div>
            <div class="col-5 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    
                </div>
            </div>
        </div>

        <table class="no-wrap table-bordered table-hover table" data-tablesaw>
            <thead class="bg-info text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ ($users->currentpage()-1) * $users->perpage() + $key + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="button-group">
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.user.edit', $user->id) }}">
                                <i class="ti-pencil">
                                </i>
                                Ubah
                            </a>

                            {!! Form::model($user, ['route' => ['admin.user.delete', $user->id], 'id'=> 'delete-'.$user->id, 'class'=> 'deleteedition']) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::button('
                            <i class="ti-trash"></i>
                            Hapus', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm sa-removeData', 'data-file'=> 'delete-'.$user->id]) !!}
                            {!! Form::close() !!}

                        </div>
                    </td>
                </tr>
            @endforeach    
            </tbody>
        </table>
            
        {!! $users->appends(Input::all())->render() !!}
        
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@stop