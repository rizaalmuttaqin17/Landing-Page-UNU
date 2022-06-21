<!-- Name Field -->
<div class="form-group col-sm-3">
    {!! Form::label('name', __('models/users.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-3">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Nim Nip Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nim_nip', __('models/users.fields.nim_nip').':') !!}
    {!! Form::text('nim_nip', null, ['class' => 'form-control']) !!}
</div>

<!-- Telepon Field -->
<div class="form-group col-sm-3">
    {!! Form::label('telepon', __('models/users.fields.telepon').':') !!}
    {!! Form::number('telepon', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tempat_lahir', __('models/users.fields.tempat_lahir').':') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-2">
    {!! Form::label('tanggal_lahir', __('models/users.fields.tanggal_lahir').':') !!}
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control','id'=>'tanggal_lahir']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#tanggal_lahir').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-2">
    {!! Form::label('jenis_kelamin', __('models/users.fields.jenis_kelamin').':') !!}
    {!! Form::text('jenis_kelamin', null, ['class' => 'form-control']) !!}
</div>

<!-- Agama Field -->
<div class="form-group col-sm-2">
    {!! Form::label('agama', 'Agama',['class'=>'text-uppercase text-bold-600']) !!}
    {!! Form::select('agama', array('Islam' => 'Islam', 'Protestan' => 'Protestan', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Buddha' => 'Buddha', 'Khonghucu' => 'Khonghucu'), null, ['class' => 'form-control border-left-6 font-medium-1 black', 'placeholder' => '-- Agama']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-3">
    {!! Form::label('foto', __('models/users.fields.foto').':') !!}
    {!! Form::file('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('alamat', __('models/users.fields.alamat').':') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group row">
    {!! Form::label('s_role_id', 'Role',['class' => 'col-md-3 label-control']) !!}
    <div class="col-md-9">
        <div class="row skin skin-flat">
            @foreach($sRoles as $item)
                <div class="col-md-12">
                    <fieldset>
                        {!! Form::checkbox('s_role_id[]', $item->id, in_array($item->id, $roles)?true:false,['id'=>'input-'.$item->id]) !!}
                        <label for="input-{{$item->id}}">{!! $item->name !!}</label>
                    </fieldset>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
