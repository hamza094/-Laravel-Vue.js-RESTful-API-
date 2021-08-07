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
    

      <div class="col-md-2 filter-card" v-for="filter in filters" :style="{'border-top': '3px solid  pink'}">
        <div>hy</div>
        <p class="filter-title">{{filter.name}}</p>
        <p class="filter deal">{{filter.deal_count}} Deals</p>
        <button class="btn btn-primary btn-sm">View</button>
    </div>

</div>


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
    <a href="" class="btn btn-primary btn-block">View Profile</a>
  </div>
</div>
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
                  <div class="form-row">
                     <div class="form-group col-md-6">
                            <label for="name" class="label-name">Company(Legal Name)</label>
                            <input type="text" id="name" class="form-control" name="name" v-model="company.legal" required>
                            </div>

                             <div class="form-group col-md-6">
                            <label for="name" class="label-name">Company(Friendly Name)</label>
                            <input type="text" id="name" class="form-control" name="name" v-model="company.name" required>
                            </div> 
                            </div>

                            <div class="form-row">
                            <div class="form-group col-md-3">
                            <label for="founded" class="label-name">Founded</label>
                            <input type="text" id="founded" class="form-control" name="founded" v-model="company.created_at" required>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="juri" class="label-name">Jurisdiction</label>
                            <select class="form-control" name="juri" v-model="form.juri">
                              <option selected="selected">North Carolina (Us)</option>
                              <option>Washington (Us)</option>
                              <option>Michigan (Us)</option>
                              <option>California (Us)</option>
                            </select>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="cr" class="label-name">Company Registaror</label>
                            <select class="form-control" name="cr" v-model="form.cr">
                              <option selected="selected">US (US-Secatory of State Of)</option>
                              <option>Finland (Fin-Secatory of State Of)</option>
                              <option>UK (UK-Secatory of State Of))</option>
                              <option>Sweden (Swe-Secatory of State Of)</option>
                            </select>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="reg" class="label-name">Registration No.</label>
                            <input type="text" id="reg" class="form-control" name="reg" v-model="company.reg_no" required>
                            </div>
                            </div>

                              <div class="form-row">
                                       <div class="form-group col-md-3">
                            <label for="bt" class="label-name">Business Type</label>
                            <input type="bt" id="name" class="form-control" name="bt" v-model="company.type" required>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="name" class="label-name">Relationship Manager</label>
                            <input type="text" id="name" class="form-control" name="name" v-model="company.name" required>
                            </div>

                             <div class="form-group col-md-3">
                               <label for="df" class="label-name">Dealflow Status</label>
                            <select class="form-control" name="df" v-model="form.df">
                              <option selected="selected">Portfolio</option>
                              <option>Website</option>
                              <option>Status</option>
                              <option>Analogue</option>
                            </select>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="rts" class="label-name">Reporting Status</label>
                            <input type="text" id="name" class="form-control" name="rts" v-model="form.rts" required>
                            </div>
                            </div>
                           <div class="form-group">
                           <label for="note">Add Note</label>
                           <textarea class="form-control" id="addnote" rows="4"></textarea>
                          </div>

                          <div class="investment" v-for='investment in company.investments'>
                              <h6>Investment#{{investment.id}}</h6>
                                 <div class="form-row">
                                       <div class="form-group col-md-3">
                            <label for="amount" class="label-name">Amount</label>
                            <input type="text" id="amount" class="form-control" name="amount" v-model="investment.amount" required>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="currency" class="label-name">Currency</label>
                            <select class="form-control" name="currency" v-model="form.currency">
                              <option selected="selected">{{investment.currency}}</option>
                              <option>UK Pound</option>
                              <option>Saudi Riyal</option>
                              <option>Canadian Sterling</option>
                            </select>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="shares" class="label-name">Shares</label>
                            <input type="text" id="shares" class="form-control" name="shares" v-model="investment.shares" required>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="dlty" class="label-name">Deal Type</label>
                            <input type="text" id="dlty" class="form-control" name="dlty" v-model="form.dlty" required>
                            </div>
                            </div>

                            <div class="form-row">
                            <div class="form-group col-md-3">
                            <label for="fuadcr" class="label-name">Fund Admin Created</label>
                            <input type="text" id="fuadcr" class="form-control" name="fuadcr" v-model="form.fuadcr" required>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="traini" class="label-name">Transfer Initiated</label>
                            <input type="text" id="traini" class="form-control" name="traini" v-model="form.traini" required>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="tracre" class="label-name">Transfer Created</label>
                            <input type="text" id="tra-cre" class="form-control" name="tracre" v-model="form.tracre" required>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="bnkref" class="label-name">Bank Refrence</label>
                            <input type="text" id="bnk-ref" class="form-control" name="bnkref" v-model="form.bnkref" required>
                            </div>
                            </div>
                             <div class="form-group">
                           <label for="Int-note">Investment Note(Not Required)</label>
                           <textarea class="form-control" id="Int-note" rows="2"></textarea>
                          </div>
                          </div>
                          <div class="formModal-btn">
                          <button class="btn btn-primary">Save</button>
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

export default{

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
      }      
    },
    created(){
        this.loadCompanies();
        this.loadFilters();
    }

}
</script>


  
        