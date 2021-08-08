<template>
<div>
<div>
  <!-- Tabs -->
    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="deal-tab" data-toggle="tab" href="#deal" role="tab" aria-controls="home" aria-selected="true">Deal Showcase</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="screen-tab" data-toggle="tab" href="#screen" role="tab" aria-controls="profile" aria-selected="false">Screening Room</a>
  </li>
</ul>

<!-- Tab Content-->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="deal" role="tabpanel" aria-labelledby="deal-tab">

<!-- Filters -->
<div class="mb-2"><h5>Filters:</h5></div>
<div class="row">
      <div class="col-md-2 filter-card" v-for="filter in filters" :style="{'border-top': '4px solid  #20B2AA'}">
        <p class="filter-title">{{filter.name}}</p>
        <p class="filter deal">{{filter.deal_count}} Deals</p>
        <button class="btn btn-primary btn-sm">View</button>
    </div>
</div>

<!-- Companies List Show -->
  <div class="row">
<div class="col-md-4 mb-4" v-for="company in companies.data" :key="company.id">
        <div class="card">
          <img class="card-img-top" :src="company.url"  alt="Card image cap">
         <div class="card-body">
        <div class="mb-4">
            <span class="float-left">{{company.location}}</span>
            <a class="float-right btn btn-link btn-xs" @click="editModal(company.id,company)">Edit</a>
        </div>
        <h5 class="card-title">{{company.name}}</h5>
    <p class="card-text">{{company.about}}</p>
    <button  class="btn btn-primary btn-block">View Profile</button>
  </div>
</div>

<!-- Company Edit Modal-->
    <modal :name="'companyModal'+company.id" height="auto" :scrollable="true" width="83%" :clickToClose=false>
        <div class="companymodal">
            <div class="companymodal-header">
                <p>
                    <span class="modal-heading">
                        <span class="modal-heading_edit">Edit Status</span>
                         <span class="modal-heading_name">{{company.name}}</span>
                         <span class="modal-heading_listening">  
                            <input class="" type="checkbox" value="" id="">
                       Make listening Inactive</span>
                     </span>
                    <span class="float-right btn btn-lg btn-default" @click.prevent="modalClose(company.id,company)">x</span>
                </p>
                <hr>
                <form>
                    
                  <CompanyForm :company="company"></CompanyForm>

                          <div class="investment" v-for='investment in company.investments'>
                            
                        <InvestmentForm :investment="investment"></InvestmentForm>

                          </div>
                          <div class="formModal-btn">
                          <button @click.prevent="modalClose(company.id,company)" class="btn btn-primary">Save</button>
                          </div>
                </form>
            </div>
        </div>
    </modal>

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
  import CompanyForm from './CompanyForm'

  import InvestmentForm from './InvestmentForm'

export default{
    components:{CompanyForm,InvestmentForm},

    data(){
    return{
      companies:{},
      filters:{},
      form:{
         name:'',
         rts:'Funded'
      }
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
      loadFilters(){
         axios.get('/api/filters').
               then((response)=>{
                    this.filters =response.data.data;
               })
                .catch(function(error){
                    console.log(error);
                });
      },      
      editModal(id,company){
        this.$modal.show("companyModal"+id);
      },
      modalClose(id,company){
        this.$modal.hide("companyModal"+id);
      },
            
    },
    created(){
        this.loadCompanies();
        this.loadFilters();
    }
}
</script>