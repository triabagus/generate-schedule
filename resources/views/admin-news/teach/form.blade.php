 {!! Form::hidden('idteachs', isset($teachs->id) ? $teachs->id : '', ['class' => 'form-control', 'id' => 'idteachs']) !!}
<div class="form-group">
    <label>
        Guru
    </label>
    {!! Form::select('lecturers', $lecturers, isset($teachs->lecturers_id) ? $teachs->lecturers_id : '' ,['class' => 'select2 form-control custom-select','id' => 'lecturers', 'required', 'placeholder' => 'Pilih Guru', 'style' => 'width: 100%; height:36px;']) !!}
    <label id="lecturers-error" class="error" for="lecturers" style="display: none;">This field is required.</label>
</div>
<div class="form-group">
    <label>
        Mata Pelajaran
    </label>
    {!! Form::select('courses', $courses, isset($teachs->courses_id) ? $teachs->courses_id : '' ,['class' => 'select2 form-control custom-select','id' => 'courses', 'required', 'placeholder' => 'Pilih Pelajaran', 'style' => 'width: 100%; height:36px;']) !!}    <label id="courses-error" class="error" for="courses" style="display: none;">This field is required.</label>
</div>
<div class="form-group">
    <label>
        Kelas
    </label>
    {!! Form::select('roomclass', $room, isset($teachs->class_room) ? $teachs->class_room : '' ,['class' => 'select2 form-control custom-select','id' => 'roomclass', 'required', 'placeholder' => 'Pilih Kelas', 'style' => 'width: 100%; height:36px;']) !!}    <label id="room-error" class="error" for="roomclass" style="display: none;">This field is required.</label>
    <!-- {!! Form::text('roomclass', isset($teachs->class_room) ? $teachs->class_room : '', ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukan Kelas','id' => 'roomclass']) !!} -->
</div>
<button class="btn btn-primary">
    Simpan
</button>
