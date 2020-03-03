{!! Form::hidden('idtimenotavailables', isset($timenotavailables->id) ? $timenotavailables->id : '', ['class' => 'form-control', 'id' => 'idtimenotavailables']) !!}
<div class="form-group">
    <label>
        Guru
    </label>
     {!! Form::select('lecturers', $lecturers, isset($timenotavailables->lecturers_id) ? $timenotavailables->lecturers_id : '' ,['class' => 'select2 form-control custom-select','id' => 'lecturers', 'required', 'placeholder' => 'Pilih Guru', 'style' => 'width: 100%; height:36px;']) !!}
    <label id="lecturers-error" class="error" for="lecturers" style="display: none;">This field is required.</label>
</div>
<div class="form-group">
    <label>
        Hari
    </label>
     {!! Form::select('days', $days, isset($timenotavailables->days_id) ? $timenotavailables->days_id : '' ,['class' => 'select2 form-control custom-select','id' => 'days', 'required', 'placeholder' => 'Pilih Hari', 'style' => 'width: 100%; height:36px;']) !!}
    <label id="days-error" class="error" for="days" style="display: none;">This field is required.</label>
</div>
<div class="form-group">
    <label>
        Waktu
    </label>
    {!! Form::select('times', $times, isset($timenotavailables->times_id) ? $timenotavailables->times_id :'' , ['class' => 'select2 form-control custom-select', 'id' => 'times', 'required','placeholder' => 'Pilih Waktu', 'style' => 'width: 100%; height:36px;']) !!}
    <label id="times-error" class="error" for="times" style="display: none;">This field is required.</label>
</div>
<button class="btn btn-primary">
    Simpan
</button>
