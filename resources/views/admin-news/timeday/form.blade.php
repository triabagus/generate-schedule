{!! Form::hidden('idtimeday', isset($timedays->id) ? $timedays->id : '', ['class' => 'form-control', 'id' => 'idtimenotavailables']) !!}
<div class="form-group">
    <label>
        Hari
    </label>
    {!! Form::select('days', $days, isset($timedays->days_id) ? $timedays->days_id : '' ,['class' => 'select2 form-control custom-select','id' => 'days', 'required', 'placeholder' => 'Pilih Hari', 'style' => 'width: 100%; height:36px;']) !!}
</div>
<div class="form-group">
    <label>
        Waktu
    </label>
    {!! Form::select('times', $times, isset($timedays->times_id) ? $timedays->times_id :'' , ['class' => 'select2 form-control custom-select', 'id' => 'times', 'required','placeholder' => 'Pilih Waktu', 'style' => 'width: 100%; height:36px;']) !!}
</div>
<button class="btn btn-primary">
    Simpan
</button>
       