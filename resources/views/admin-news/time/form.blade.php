{!! Form::hidden('idtimes', isset($times->id) ? $times->id : '', ['class' => 'form-control', 'id' => 'idday']) !!}
<div class="form-group">
    <label>
        Waktu Mulai
    </label>
    <div class="input-group bootstrap-timepicker timepicker">
        {!! Form::time('time_begin', null, ['class' => 'form-control', 'required', 'value' => '13:00:00', 'placeholder' => 'Masukkan Waktu Mulai']) !!}
    </div>
</div>
<div class="form-group">
    <label>
        Waktu Akhir
    </label>
    <div class="input-group bootstrap-timepicker timepicker">
        {!! Form::time('time_finish', null, ['class' => 'form-control', 'required', 'value' => '13:00:00', 'placeholder' => 'Masukkan Waktu Mulai']) !!}
    </div>
</div>
<button class="btn btn-primary">
    Simpan
</button>
