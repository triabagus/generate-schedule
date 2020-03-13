{!! Form::hidden('idroom', isset($rooms->id) ? $rooms->id : '', ['class' => 'form-control', 'id' => 'idroom']) !!}
<div class="form-group">
    <label>
        Nama Kelas
    </label>
    {!! Form::text('namerooms', isset($rooms->name) ? $rooms->name : '', ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama Kelas', 'id' => 'nameroom', 'style' => 'width: 100%; height:36px;']) !!}
    <label id="type-error" class="error" for="type" style="display: none;">This field is required.</label>
</div>
<div class="form-group">
    <label>
        Jenis
    </label>
    {!! Form::select('type', $type, null, ['class' => 'form-control select2 to-select', 'id' => 'type', 'required','placeholder' => 'Pilih Jenis','style' => 'width: 100%; height:36px;']) !!}
    <label id="type-error" class="error" for="type" style="display: none;">This field is required.</label>
</div>
<button class="btn btn-primary">
    Simpan
</button>
