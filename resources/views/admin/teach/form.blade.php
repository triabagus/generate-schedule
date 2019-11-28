 {!! Form::hidden('idteachs', isset($teachs->id) ? $teachs->id : '', ['class' => 'form-control', 'id' => 'idteachs']) !!}
<div class="form-group">
    <label>
        Guru
    </label>
    {!! Form::select('lecturers', $lecturers, isset($teachs->lecturers_id) ? $teachs->lecturers_id : '' ,['class' => 'form-control select2 to-select','id' => 'lecturers', 'required', 'placeholder' => 'Pilih Guru']) !!}
    <label id="lecturers-error" class="error" for="lecturers" style="display: none;">This field is required.</label>
</div>
<div class="form-group">
    <label>
        Mata Pelajaran
    </label>
    {!! Form::select('courses', $courses, isset($teachs->courses_id) ? $teachs->courses_id : '' ,['class' => 'form-control select2 to-select','id' => 'courses', 'required', 'placeholder' => 'Pilih Pelajaran']) !!}    <label id="courses-error" class="error" for="courses" style="display: none;">This field is required.</label>
</div>
<div class="form-group">
    <label>
        Kelas
    </label>
    {!! Form::text('roomclass', isset($teachs->class_room) ? $teachs->class_room : '', ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukan Kelas','id' => 'roomclass']) !!}
</div>
<div class="form-group">
     <label>
        Tahun Pelajaran
    </label>
    {!! Form::text('year', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukan Tahun Akademik']) !!}
</div>
<button class="btn btn-primary">
    Simpan
</button>
