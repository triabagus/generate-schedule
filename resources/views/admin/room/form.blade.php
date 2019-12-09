{!! Form::hidden('idroom', isset($rooms->id) ? $rooms->id : '', ['class' => 'form-control', 'id' => 'idroom']) !!}
<div class="form-group">
    <label>
        Kode Kelas
    </label>
    {!! Form::text('code_rooms', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Kode Kelas', 'id' => 'code_rooms']) !!}
</div>
<div class="form-group">
    <label>
        Nama Kelas
    </label>
    {!! Form::text('namerooms', isset($rooms->name) ? $rooms->name : '', ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama Kelas', 'id' => 'namerooms']) !!}
</div>
<div class="form-group">
    <label>
        Jenis
    </label>
    {!! Form::select('type', $type, null, ['class' => 'form-control select2 to-select', 'id' => 'type', 'required','placeholder' => 'Pilih Jenis']) !!}
    <label id="type-error" class="error" for="type" style="display: none;">This field is required.</label>
</div>
<button class="btn btn-primary">
    Simpan
</button>
