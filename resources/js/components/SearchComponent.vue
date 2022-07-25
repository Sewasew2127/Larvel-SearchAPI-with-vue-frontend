<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" v-on:input="fetch" id="keyword" v-model="keyword"
                               placeholder="name">
                    </div>
                    
                </div>
            </div>
            <div class="col-md-12">
                <table class="table" v-if="!is_refresh && !is_null">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Storeys</th>
                        <th>Garages</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in search_houses">
                        <td>{{item.name}}</td>
                        <td>{{item.price}}</td>
                        <td>{{item.bedrooms}}</td>
                        <td>{{item.bathrooms}}</td>
                        <td>{{item.storeys}}</td>
                        <td>{{item.garages}}</td>
                    </tr>
                    </tbody>
                </table>
            <div v-if="is_refresh" class="text-center mt-5 mb-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div class="text-center mt-5 mb-5" v-if="is_null">
                <h2>no data</h2>
            </div>
            </div>


        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                search_houses: [],
                keyword: null,
                is_refresh: false,
                is_null:false
            }
        },
        mounted() {
            this.fetch();
        },
        methods: {
            fetch() {
                this.is_refresh = true;
                this.is_null = false;
                axios.get('/api/search', {
                    params: {
                        keyword: this.keyword
                        
                    }
                })
                    .then((response) => {
                        console.log(response);
                        this.is_null = response.data.length <= 0;
                        this.search_houses = response.data;
                        this.is_refresh = false;
                    })
                      .catch(error => console.log(error));
            }
        }
    }
</script>
