{!! Form::hidden('idday', isset($days->id) ? $days->id : '', ['class' => 'form-control', 'id' => 'idday']) !!}
<div class="form-group">
    <label>
        Nama
    </label>
    <!-- {!! Form::text('name_day', null, ['class' => 'form-control', 'required', 'maxlength' => '100', 'placeholder' => 'Masukkan Nama Hari']) !!} -->
    {!! Form::select('name_day', [
            'Senin'     => 'Senin',
            'Selasa'    => 'Selasa',
            'Rabu'      => 'Rabu',
            'Kamis'     => 'Kamis',
            'Jumat'     => 'Jumat',
            'Sabtu'     => 'Sabtu',
        ], null, ['class' => 'select2 form-control custom-select', 'required', 'placeholder' => 'Pilih Hari', 'style' => 'width: 100%; height:36px;']) !!}
</div>
<button class="btn btn-primary">
    Simpan
</button>
