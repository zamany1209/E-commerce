<template>
    <div>
        <a v-for="category in categoris">
        {{ category.name_en }}
        </a>
    </div>
</template>
<script>
    export default {
        data : function () {
            return{
                categoris: [],
                products: []
            }
        },
        mounted() {
            this.loadCategoris();
            // this.loadProducts();
        },
        methods: {
            loadCategoris: function() {
                axios.get('/api/category')
                .then((response)=>{
                    this.categoris = response.data.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
            },
            loadProducts: function() {
                axios.get('/api/product')
                .then((response) => {
                    this.categoris = response.data.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
            }
        },
    }
</script>
