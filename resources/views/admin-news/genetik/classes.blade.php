@extends('admin-news.layouts.master')

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
    dataFilter('#className');

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
                        <select class="form-control select" id="teachName" name="teachName">
                        <option value="">--- Pilih Guru ---</option>
                        @foreach($lecturer as $key => $lecturers)
                            <option value="{{ $lecturers->name }}">
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

                <form name="_token" action="{{ route('admin.generates.filterClass', Request::segment(4) ) }}" id="className-dropdown" method="get">
                    {{ csrf_field() }}
                    @if(!empty($rooms))
                        <select class="form-control select" id="className" name="className">
                        <option value="">--- Pilih Kelas ---</option>
                        @foreach($rooms as $key => $room)
                            <option value="{{ $room->name }}">
                                {{ 
                                    isset($room->name) ? $room->name : '' 
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
                                
                            </th>
                            @if(!empty($days))
                                @foreach($days as $d)
                                    <th style="text-align:center;">
                                        {{ $d->name_day }}
                                    </th>
                                @endforeach
                            @endif
                        </tr>
                    </thead>
                    <tbody id="valueSearch">
                    
                        @foreach($times as $t => $t_value)
                        <tr>
                            <td>{{$t_value->range}}</td>
                    
                            @foreach($days as $d)
                                    <td align="center">

                                        @if ( isset($schedules[$t_value->range][$d->name_day]) )
                                            
                                            @foreach($schedules[$t_value->range][$d->name_day] as $value_schedule)
                                                {{ $value_schedule }} <br>
                                            @endforeach
                                            
                                        @else
                                            -
                                        @endif                                 
                                    </td>
                            @endforeach
                        </tr>
                        @endforeach
                            
                    </tbody>
                </table>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop