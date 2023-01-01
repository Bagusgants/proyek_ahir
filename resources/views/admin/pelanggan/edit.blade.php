@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.pelanggan.actions.edit', ['name' => $pelanggan->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <pelanggan-form
                :action="'{{ $pelanggan->resource_url }}'"
                :data="{{ $pelanggan->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.pelanggan.actions.edit', ['name' => $pelanggan->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.pelanggan.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </pelanggan-form>

        </div>
    
</div>

@endsection