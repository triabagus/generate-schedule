    {!! Form::hidden('idcourse', isset($courses->id) ? $courses->id : '', ['class' => 'form-control', 'id' => 'idcourse']) !!}
<div class="form-group">
    <label>
        Kode Mata Pelajaran
    </label>
    {!! Form::text('code_courses', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Kode Mata Pelajaran', 'id' => 'code_courses']) !!}
</div>
<div class="form-group">
    <label>
        Nama Mata Pelajaran
    </label>
    {!! Form::text('namecourses', isset($courses->name) ? $courses->name : '', ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama Mata Pelajaran', 'id' => 'namecourses']) !!}
</div>
<button class="btn btn-primary">
    Simpan
</button>
