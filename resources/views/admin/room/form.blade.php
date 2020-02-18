{!! Form::hidden('idroom', isset($rooms->id) ? $rooms->id : '', ['class' => 'form-control', 'id' => 'idroom']) !!}
<div class="form-group">
    <label>
        Nama Kelas
    </label>
    {!! Form::select('rooms', $rooms, null, ['class' => 'form-control select2 to-select', 'id' => 'rooms', 'required', 'placeholder' => 'Pilih Kelas']) !!}
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
