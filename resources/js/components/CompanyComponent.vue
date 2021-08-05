<template>
<div>
<div class="row">

<div class="col-md-4 mb-4" v-for="company in companies.data">
        <div class="card">
          <img class="card-img-top" :src="company.url"  alt="Card image cap">
         <div class="card-body">
        <div class="mb-4">
            <span class="float-left">{{company.location}}</span>
            <span class="float-right">Edit</span>
        </div>
        <h5 class="card-title">{{company.name}}</h5>
    <p class="card-text">{{company.about}}</p>
    <a href="" class="btn btn-primary btn-block">View Profile</a>
  </div>
</div>
</div>
    </div>
    <div>
        <pagination align="center" :data="companies" @pagination-change-page="loadCompanies"></pagination>
    </div>

</div>
</template>

<script>

export default{

    data(){
    return{
      companies:{},

    };
    },
    methods:{
      loadCompanies(page = 1) {
                axios.get('/api/companies?page=' + page)
                    .then((response) => {
                        this.companies = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
    },
    created(){
        this.loadCompanies();
    }

}
</script>


  
        