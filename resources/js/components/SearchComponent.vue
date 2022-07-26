<template>	
	 <div>
	 	<div>
        	<input type="text" class="form-control"  v-model.lazy="keyword" placeholder="Keyword">
       
        </div>
               
        <div>
	        <table v-if="houses.length > 0">
		        <thead>
		        	<tr>
				        <th> Name </th>
				        <th> Price </th>
				        <th> Bedrooms </th>
				        <th> Bathrooms </th>
				        <th> Storeya </th>
				        <th> Garages </th>
		        	</tr>
		        </thead>
	        <tbody>
	        <tr v-if="houses.data == 'No House found by the given keyword'">
	        <td colspan = "6"> no data </td>
	        </tr>

		        <tr v-for="house in houses">
		        	<td>{{house.name}}</td>
		        	<td>{{house.price}}</td>
		        	<td>{{house.bedrooms}}</td>
		        	<td>{{house.bathrooms}}</td>
		        	<td>{{house.storeys}}</td>
		        	<td>{{house.garages}}</td>
		        </tr>
		    </tbody>
		    </table>

        </div>
  
    </div>
 

</template>

<script>


export default {
	data() {
		return{
			houses: [],
			keyword: null
		};
	},
	watch: {
		keyword(after, before){
		this.fetch();
		}
	},

	methods: {
		fetch(){
		axios.get('api/search/', { params: { keyword: this.keyword } })
		.then(response =>this.houses= response.data)
		.catch(error =>{ }) 

		}

		

	}
	}

</script>