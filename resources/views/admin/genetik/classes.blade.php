@extends('admin.layouts.master')

@section('title')
{{ $title= 'Class Hasil Generate Algoritma' }}
@stop

@section('style')
<style type="text/css">
.panel-body{
        width:auto;
        height:auto;
        overflow:auto;
    }
</style>
@stop

@section('script')
<script type="text/javascript">
    $('#myAction').change(function(){
        var action =  $(this).val();
        window.location = action;
    });

    dataFilter('#teachName');
    dataFilter('#classId');

    function dataFilter(id){
        $(id).on('change', function(e){

            var variable = e.target.value;

            $(id + '-dropdown').submit();

        });
    };

</script>
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
                            <div class="col-md-4" style="padding-bottom: 3%;">
                                <a class="btn btn-warning btn-block" href="{{ route('admin.generates.result', 1) }}">
                                    <span class="glyphicon glyphicon-hand-left">
                                    </span>
                                    Kembali
                                </a>
                            </div>

                            <div class="col-md-4" style="padding-bottom: 3%;">
                            
                            <form name="_token" action="{{ route('admin.generates.filterTeacher', Request::segment(4) ) }}" id="teachName-dropdown" method="get">
                                {{ csrf_field() }}
                                @if(!empty($lecturer))
                                    <select class="form-control select2" id="teachName" name="teachName">
                                    <option value="">--- Pilih Guru ---</option>
                                    @foreach($lecturer as $key => $lecturers)
                                        <option value="{{ $lecturers->id }}">
                                            {{ 
                                                isset($lecturers->name) ? $lecturers->name : '' 
                                            }}
                                        </option>
                                    @endforeach
                                    </select>
                                @endif
                            </form>

                            </div>
                            
                            <div class="col-md-4" style="padding-bottom: 3%;">

                            <form name="_token" action="{{ route('admin.generates.filterClass', Request::segment(4) ) }}" id="classId-dropdown" method="get">
                                {{ csrf_field() }}
                                @if(!empty($schedules))
                                    <select class="form-control select2" id="classId" name="classId">
                                    <option value="">--- Pilih Kelas ---</option>
                                    @foreach($schedules as $key => $schedule)
                                        <option value="{{ $schedule->room->id }}">
                                            {{ 
                                                isset($schedule->room->name) ? $schedule->room->name : '' 
                                            }}
                                        </option>
                                    @endforeach
                                    </select>
                                @endif
                            </form>
                            
                            </div>
                            <div class="col-md-12">
                            
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="info">
                                            <th style="text-align:center;">
                                                No.
                                            </th>
                                            <th style="text-align:center;">
                                                Hari
                                            </th>
                                            <th style="text-align:center;">
                                                Jam
                                            </th>
                                            
                                            <th style="text-align:center;">
                                                Guru Pengampu
                                            </th>
                                            <th style="text-align:center;">
                                                Mata Pelajaran
                                            </th>
                                            <th style="text-align:center;">
                                                Nama Ruangan
                                            </th>
                                            <th style="text-align:center;">
                                                Type
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="valueSearch">
                                    @if(!empty($schedules))
                                    @foreach($schedules as $key => $schedule)
                                        <tr>
                                            <td align="center">
                                                {{ $key + 1 }}
                                            </td>
                                            <td >
                                                {{
                                                    isset($schedule->day->name_day) ? $schedule->day->name_day : ''
                                                }}
                                            </td>
                                            <td >
                                                {{
                                                    isset($schedule->time->range) ? $schedule->time->range : ''
                                                }}
                                            </td>
                                            <td >
                                                {{
                                                    isset($schedule->teach->lecturer->name) ? $schedule->teach->lecturer->name : ''
                                                }}
                                            </td>
                                            <td >
                                                {{
                                                    isset($schedule->teach->course->name) ? $schedule->teach->course->name : ''
                                                }}
                                            </td>
                                            
                                            <td >
                                                {{
                                                    isset($schedule->room->name) ? $schedule->room->name : ''
                                                }}
                                            </td>
                                            <td >
                                                {{
                                                    isset($schedule->room->type) ? $schedule->room->type : ''
                                                }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                {!! $schedules->appends(Input::all())->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
