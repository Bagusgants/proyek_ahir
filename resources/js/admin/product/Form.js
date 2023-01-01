import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nama_product:  '' ,
                deskripsi:  '' ,
                harga:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});