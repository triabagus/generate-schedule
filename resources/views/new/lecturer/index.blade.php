@extends('new.newtemp')

@section('title')
{{ $title= 'Data Guru' }}
@stop

{{-- @section('style')
<style type="text/css">
    .panel-body{
       width:auto;
       height:auto;
       overflow-x:auto;
    }
</style>
@stop

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            {{ $title }}
                        </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" type="button">
                                <i class="fa fa-minus">
                                </i>
                            </button>
                            <button class="btn btn-box-tool" data-widget="remove" type="button">
                                <i class="fa fa-times">
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            {!! Form::open(['role' => 'form', 'route' => 'admin.lecturers', 'method' =>'get']) !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('searchnidn', Input::get('searchnidn')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan NIDN']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('searchname', Input::get('searchname')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan Nama']) !!}
                                </div>
                            </div>
                            <div class="col-md-12" style="padding-bottom: 15px;">
                                {!! Form::submit('Search',['class'=>'btn btn-default btn-block']) !!}
                            </div>
                            <div class="col-md-12">
                            {!! Form::close() !!}
                            @include('admin._partials.notifications')
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="info">
                                            <th style="text-align:center;">
                                                No.
                                            </th>
                                            <th style="text-align:center;">
                                                Kode Guru
                                            </th>
                                            <th style="text-align:center;">
                                                NIDN
                                            </th>
                                            <th style="text-align:center;">
                                                Nama Guru
                                            </th>
                                            <th style="text-align:center;">
                                                Email
                                            </th>
                                           <th colspan="2" style="text-align:center;">
                                                <a class="btn btn-primary" href="{{ route('admin.lecturer.create') }}">
                                                    <i class="fa fa-plus">
                                                    </i>
                                                    Tambah Data
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lecturers as $key => $lecturer)
                                        <tr>
                                            <td align="center">
                                                {{ ($lecturers->currentpage()-1) * $lecturers->perpage() + $key + 1 }}
                                            </td>
                                             <td>
                                                {{ $lecturer->code_lecturers }}
                                            </td>
                                            <td>
                                                {{ $lecturer->nidn }}
                                            </td>
                                             <td>
                                                {{ $lecturer->name }}
                                            </td>
                                             <td>
                                                {{ $lecturer->email }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.lecturer.edit', $lecturer->id) }}">
                                                        <span class="glyphicon glyphicon-edit">
                                                        </span>
                                                        Ubah
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    {!! Form::model($lecturer, ['route' => ['admin.lecturer.delete', $lecturer->id], 'onclick' => 'return confirm("Anda Yakin?");']) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::button('
                                                    <span class="glyphicon glyphicon-trash">
                                                    </span>
                                                    Hapus', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $lecturers->appends(Input::all())->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop --}}



{{-----------------!!!!!!!!!!!!!!!!!!!!!!!@@@@@@@@@@@@@@@@@@@@@@@@@@@@@!!!!!!!!!!!!!!!!!!!!!!!!!!!!----------------}}
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
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
{{-- -------------------------C O N T E N T---------------------------------- --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card bg-light">
            <div class="card-body">
                <div class="d-flex no-block align-items-center m-b-10">
                    <h4 class="card-title">Data Guru</h4>
                </div>
                <div class="table-responsive">
                    <div id="file_export_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="dt-buttons">
                            
                            <button class="btn waves-effect waves-light btn-info mr-1" tabindex="0" aria-controls="file_export"><span>Tambah Data</span></button>
                        </div>
                        <div id="file_export_filter" class="dataTables_filter">
                            <label>Search NIDN:
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="file_export">
                            </label>
                            <button type="button" class="btn waves-effect waves-light btn-success ml-3">Mencari</button>
                        </div>
                        
                        <div id="file_export_filter" class="dataTables_filter mr-3">
                            <label>Search Nama Guru:
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="file_export">
                            </label>
                        </div>
                        
                        
                        <table id="file_export" class="table bg-white table-bordered nowrap display dataTable no-footer" role="grid" aria-describedby="file_export_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" : activate to sort column descending" style="width: 10px;">No. 
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 183px;"> Nama Guru
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 183px;"> Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 79px;">NIDN
                                    </th>
                                    {{-- <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 69px;">Role</th> --}}
                                    <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Kode Guru
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="file_export" style="width: 30px;" colspan="1" >Opsi      
                                    </th>
                                    
                                </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="even">
                                <td class="sorting_1">
                                     <p class="text-center">2</p>
                                </td>
                                <td>
                                    <a href="javscript:void(0)">
                                        Fauziah, S. Kom. , M.M.S.I.	</a>
                                </td>
                                <td>mtsziah@gmail.com</td>
                                <td>234456789</td>
                                
                                <td>26</td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn waves-effect waves-light btn-warning">Ubah</button>
                                    <button type="button" class="btn waves-effect waves-light btn-danger ">
                                        {{-- <i class="ti-close" aria-hidden="true"></i> --}}
                                        Hapus
                                    </button>
                                    
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1">
                                     <p class="text-center">2</p>
                                </td>
                                <td>
                                    <a href="javscript:void(0)">
                                        Wahyudi, S.Si., M.T	</a>
                                </td>
                                <td>admin15@gmail.com</td>
                                <td>0104090784</td>
                                
                                <td>14</td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn waves-effect waves-light btn-warning">Ubah</button>
                                    <button type="button" class="btn waves-effect waves-light btn-danger ">
                                        {{-- <i class="ti-close" aria-hidden="true"></i> --}}
                                        Hapus
                                    </button>
                                    
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">
                                     <p class="text-center">3</p>
                                </td>
                                <td>
                                    <a href="javscript:void(0)">
                                     Govinda jalan</a>
                                </td>
                                <td>govinda@gmail.com</td>
                                <td>0111130824</td>
                                
                                <td>28</td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn waves-effect waves-light btn-warning">Ubah</button>
                                    <button type="button" class="btn waves-effect waves-light btn-danger ">
                                        {{-- <i class="ti-close" aria-hidden="true"></i> --}}
                                        Hapus
                                    </button>
                                    
                                </td>
                            </tr>
                            </tbody>
                    </table>
                    {{-- <div class="dataTables_info" id="file_export_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div> --}}
                    <div class="dataTables_paginate paging_simple_numbers" id="file_export_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="file_export_previous"><a href="#" aria-controls="file_export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="file_export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item next" id="file_export_next"><a href="#" aria-controls="file_export" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
