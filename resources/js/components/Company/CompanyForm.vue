<template>
	<div>
	<div class="form-row">
                     <div class="form-group col-md-6">
                            <label for="legname" class="label-name">Company(Legal Name)</label>
                            <input type="text" id="legname" class="form-control" name="legname" v-model="company.legal" required>
                            </div>

                             <div class="form-group col-md-6">
                            <label for="frname" class="label-name">Company(Friendly Name)</label>
                            <input type="text" id="frname" class="form-control" name="frname" v-model="company.name" required>
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
                              <option >North Carolina (Us)</option>
                              <option>Washington (Us)</option>
                              <option>Michigan (Us)</option>
                              <option>California (Us)</option>
                            </select>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="cr" class="label-name">Company Registaror</label>
                            <select class="form-control" name="cr" v-model="form.cr">
                              <option>US (US-Secatory of State Of)</option>
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
                              <option>Portfolio</option>
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
                           <label for="cnote">Add Note</label>
                           <textarea class="form-control" id="cnote" rows="4">{{form.note}}</textarea>
                          </div>
                      </div>

                            
</template>
<script>

export default{

  props:['company'],


    data(){
    return{
      form:{
         name:'',
         rts:'Funded',
         cr:'',
         juri:'',
         cnote:''
      }
    };
    },

 
}
</script>