<template>
  <div>
    <form @submit.prevent="search">
     <div>
      <select v-model="categories" class="">
        <option v-for="category in categories" :key="category.id" value=""></option> 
      </select>  
      <select v-model="areas" class="">
        <option v-for="area in areas" :key="area.id" value=""></option> 
      </select>
      <select v-model="categories" class="">
        <option v-for="bedroom in 5" :key="bedroom" value=""></option> 
      </select>
     </div> 
     <div>
        <select v-model="sqft" class="">
          <option v-for="sqft in 5" :key="sqft" value=""></option> 
        </select>
        <input type="range" min="1" max="100" value="50" class="slider">
     </div> 
    </form>  
  </div>
</template>
<script>
export default {
  data(){
    return{
      categories:[],
      areas:[],
      sqft:'sqft',
      bedrooms:'any',
    }  
  },
  mounted(){
   axios.get('/category/all')
   .then(res=>{
       this.categories=res.data.categories;
   });
   axios.get('/area/all')
   .then(res=>{
       this.areas=res.data.areas;  
   })
  },
  methods:{

  } 
}
</script>