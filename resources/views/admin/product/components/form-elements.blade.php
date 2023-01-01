<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama_product'), 'has-success': fields.nama_product && fields.nama_product.valid }">
    <label for="nama_product" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.nama_product') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama_product" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama_product'), 'form-control-success': fields.nama_product && fields.nama_product.valid}" id="nama_product" name="nama_product" placeholder="{{ trans('admin.product.columns.nama_product') }}">
        <div v-if="errors.has('nama_product')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama_product') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('deskripsi'), 'has-success': fields.deskripsi && fields.deskripsi.valid }">
    <label for="deskripsi" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.deskripsi') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.deskripsi" v-validate="'required'" id="deskripsi" name="deskripsi"></textarea>
        </div>
        <div v-if="errors.has('deskripsi')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('deskripsi') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('harga'), 'has-success': fields.harga && fields.harga.valid }">
    <label for="harga" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.harga') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.harga" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('harga'), 'form-control-success': fields.harga && fields.harga.valid}" id="harga" name="harga" placeholder="{{ trans('admin.product.columns.harga') }}">
        <div v-if="errors.has('harga')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('harga') }}</div>
    </div>
</div>


<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.product.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


