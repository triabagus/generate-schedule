{!! Form::hidden('idlecturer', isset($lecturers->id) ? $lecturers->id : '', ['class' => 'form-control', 'id' => 'idlecturer']) !!}
<div class="form-group">
    <label>
        Nidn
    </label>
    {!! Form::text('nidnlecturer', isset($lecturers->nidn) ? $lecturers->nidn : '',  ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan NIDN ', 'id' => 'nidnlecturer']) !!}
</div>
<div class="form-group">
    <label>
        Nama
    </label>
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama ']) !!}
</div>
<button class="btn btn-primary">
    Simpan
</button>
