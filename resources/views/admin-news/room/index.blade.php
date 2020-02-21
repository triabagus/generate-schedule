@extends('admin.layouts.master')

@section('title')
{{ $title= 'Kelas' }}
@stop

@section('style')
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
                        {!! Form::open(['role' => 'form', 'route' => 'admin.rooms', 'method' =>'get']) !!}
                            <div class="col-md-6">
                                <div class="form-group">
                                {!! Form::text('searchname', Input::get('searchname')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan Nama Kelas']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                    {!! Form::submit('Search',['class'=>'btn btn-default btn-block']) !!}
                                </div>
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
                                                Nama Kelas
                                            </th>
                                            <th style="text-align:center;">
                                                Jenis
                                            </th>
                                           <th colspan="2" style="text-align:center;">
                                                <a class="btn btn-primary" href="{{ route('admin.room.create') }}">
                                                    <i class="fa fa-plus">
                                                    </i>
                                                    Tambah Data
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rooms as $key => $room)
                                        <tr>
                                            <td align="center">
                                                {{ ($rooms->currentpage()-1) * $rooms->perpage() + $key + 1 }}
                                            </td>
                                            <td>
                                                {{ $room->name }}
                                            </td>
                                            <td>
                                                {{ $room->type }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.room.edit', $room->id) }}">
                                                        <span class="glyphicon glyphicon-edit">
                                                        </span>
                                                        Ubah
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    {!! Form::model($room, ['route' => ['admin.room.delete', $room->id], 'onclick' => 'return confirm("Anda Yakin?");']) !!}
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
                                {!! $rooms->appends(Input::all())->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
