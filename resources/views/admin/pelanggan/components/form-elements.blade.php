<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama'), 'has-success': fields.nama && fields.nama.valid }">
    <label for="nama" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pelanggan.columns.nama') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama'), 'form-control-success': fields.nama && fields.nama.valid}" id="nama" name="nama" placeholder="{{ trans('admin.pelanggan.columns.nama') }}">
        <div v-if="errors.has('nama')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('alamat'), 'has-success': fields.alamat && fields.alamat.valid }">
    <label for="alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pelanggan.columns.alamat') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.alamat" v-validate="'required'" id="alamat" name="alamat"></textarea>
        </div>
        <div v-if="errors.has('alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telp'), 'has-success': fields.telp && fields.telp.valid }">
    <label for="telp" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pelanggan.columns.telp') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.telp" v-validate="'required'" id="telp" name="telp"></textarea>
        </div>
        <div v-if="errors.has('telp')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telp') }}</div>
    </div>
</div>


