{!! Form::hidden('idtimes', isset($times->id) ? $times->id : '', ['class' => 'form-control', 'id' => 'idday']) !!}

<div class="form-group">
    <label>
        Kode Waktu
    </label>
    {!! Form::text('code_times', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Kode Waktu']) !!}
</div>
<div class="form-group">
    <label>
        Waktu Mulai
    </label>
    <div class="input-group bootstrap-timepicker timepicker">
        {!! Form::text('time_begin', null, ['class' => 'form-control timepicker input-small', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Waktu Mulai']) !!}
    </div>
</div>
<div class="form-group">
    <label>
        Waktu Akhir
    </label>
    <div class="input-group bootstrap-timepicker timepicker">
        {!! Form::text('time_finish', null, ['class' => 'form-control timepicker input-small', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Waktu Mulai']) !!}
    </div>
</div>
<button class="btn btn-primary">
    Simpan
</button>
