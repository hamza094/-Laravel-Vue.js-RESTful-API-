<template>
<div>

<div>
    
    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">

  <li class="nav-item" role="presentation">

    <a class="nav-link active" id="deal-tab" data-toggle="tab" href="#deal" role="tab" aria-controls="home" aria-selected="true">Deal Showcase</a>

  </li>
  <li class="nav-item" role="presentation">

    <a class="nav-link" id="screen-tab" data-toggle="tab" href="#screen" role="tab" aria-controls="profile" aria-selected="false">Screening Room</a>

  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="deal" role="tabpanel" aria-labelledby="deal-tab">

<div class="row filter">
    

      <div class="col-md-2 filter-card">
        <p class="filter-title">Unscreened</p>
        <p class="filter deal">113 Deals</p>
        <button class="btn btn-primary btn-sm">View</button>
    </div>

      <div class="col-md-2 filter-card">
        <p class="filter-title">Unscreened</p>
        <p class="filter deal">113 Deals</p>
        <button class="btn btn-primary btn-sm">View</button>
    </div>

      <div class="col-md-2 filter-card">
        <p class="filter-title">Unscreened</p>
        <p class="filter deal">113 Deals</p>
        <button class="btn btn-primary btn-sm">View</button>
    </div>

      <div class="col-md-2 filter-card">
        <p class="filter-title">Unscreened</p>
        <p class="filter deal">113 Deals</p>
        <button class="btn btn-primary btn-sm">View</button>
    </div>


  <div class="col-md-2 filter-card">
        <p class="filter-title">Unscreened</p>
        <p class="filter deal">113 Deals</p>
        <button class="btn btn-primary btn-sm">View</button>
    </div>


</div>


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

  <div class="tab-pane fade" id="screen" role="tabpanel" aria-labelledby="screen-tab">
  <h2 class="text-center mt-5">Sorry! No Content Available For Screening Room</h2>
</div>

</div>
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


  
        