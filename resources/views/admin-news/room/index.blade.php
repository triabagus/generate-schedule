@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Kelas' }}
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
                            <a href="#"></a>
                        </li>
                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Active user - project- visitors -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    @include('admin._partials.notifications')
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="dt-buttons">
                        
                        <a class="btn waves-effect waves-light btn-info mr-1" tabindex="0" aria-controls="file_export" href="{{ route('admin.room.create') }}"><span>Tambah Data</span></a>
                    </div>
                    <div id="file_export_filter" class="dataTables_filter mr-3">
                        <label>Search Nama Guru:
                            {!! Form::text('searchname', Input::get('searchname')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan Nama Kelas']) !!}
                        </label>
                            <button type="button" class="btn waves-effect waves-light btn-success ml-3">
                            <span>Search</span>
                            </button>
                    </div>

                    <div class="tablesaw-bar tablesaw-mode-stack"></div>
                    
                    <table class="tablesaw no-wrap table-bordered table-hover table" data-tablesaw>
                        <thead>
                            <tr>
                                <th scope="col" class="border text-center">No.</th>
                                <th scope="col" class="border text-center">Nama Kelas</th>
                                <th scope="col" class="border text-center">Jenis </th>
                                <th scope="col" class="border text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody id="checkall-target">
                            @foreach($rooms as $key => $room) 
                            <tr>
                                <td class="text-center">{{ ($rooms->currentpage()-1) * $rooms->perpage() + $key + 1 }}</td>
                                <td>{{ $room->name }}</td>
                                <td>
                                    {{ $room->type }}
                                </td>
                                <td class="d-flex justify-content-around">

                                    <a type="button" scope="col-1" class="btn waves-effect waves-light btn-warning" href="{{ route('admin.room.edit', $room->id) }}">Ubah</a>
                                    
                                    {!! Form::model($room, ['route' => ['admin.room.delete', $room->id], 'onclick' => 'return confirm("Anda Yakin?");']) !!}
                                    
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                    {!! Form::button('
                                    <span class="glyphicon glyphicon-trash">
                                    </span>
                                    Hapus', ['type' => 'submit', 'class' => 'btn waves-effect waves-light btn-danger']) !!}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                            <tr>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $rooms->appends(Input::all())->render() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
@stop
