@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Data-Guru' }}
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
                                
                                <a class="btn waves-effect waves-light btn-info mr-1" tabindex="0" aria-controls="file_export" href="{{ route('admin.lecturer.create') }}"><span>Tambah Data</span></a>
                            </div>
                            <div id="file_export_filter" class="dataTables_filter mr-3">
                                <label>Search Nama Guru:
                                    {!! Form::text('searchname', Input::get('searchname')?: null, ['class' => 'form-control', 'placeholder' => 'Mencari Berdasarkan Nama']) !!}
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
                                        <th scope="col" class="border text-center">Nama Guru</th>
                                        <th scope="col" class="border text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody id="checkall-target">
                                    @foreach($lecturers as $key => $lecturer) 
                                    <tr>
                                        <td class="text-center">{{ ($lecturers->currentpage()-1) * $lecturers->perpage() + $key + 1 }}</td>
                                        <td>{{ $lecturer->name }}</td>
                                        <td class="d-flex justify-content-around">

                                            <a type="button" scope="col-1" class="btn waves-effect waves-light btn-warning" href="{{ route('admin.lecturer.edit', $lecturer->id) }}">Ubah</a>
                                            
                                            {!! Form::model($lecturer, ['route' => ['admin.lecturer.delete', $lecturer->id], 'class' => 'deleteMe', 'data-id' => $lecturer->id]) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::button('
                                            <span class="glyphicon glyphicon-trash" id="sa-confirm">
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
                            {!! $lecturers->appends(Input::all())->render() !!}
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

@section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.deleteMe').on('click', function(e) {
                e.preventDefault();
                swal({
                    buttons: [true, "Hapus!"],
                });
            })
        </script>
@endsection