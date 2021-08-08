<template>
	<div>
	      <h6>Investment#{{investment.id}}</h6>
        
                            <div class="form-row">
                            <div class="form-group col-md-3">
                            <label for="amount" class="label-name">Amount</label>
                            <input type="text" id="amount" class="form-control" name="amount" v-model="investment.amount" required>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="currency" class="label-name">Currency</label>
                            <select class="form-control" name="currency" v-model="form.currency">
                              <option>{{investment.currency}}</option>
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
                            <input type="text" id="fuadcr" class="form-control" name="fuadcr" v-model="investment.fac" required>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="traini" class="label-name">Transfer Initiated</label>
                            <input type="text" id="traini" class="form-control" name="traini" v-model="investment.ti" required>
                            </div>

                             <div class="form-group col-md-3">
                            <label for="tracre" class="label-name">Transfer Created</label>
                            <input type="text" id="tra-cre" class="form-control" name="tracre" v-model="investment.tc" required>
                            </div>

                            <div class="form-group col-md-3">
                            <label for="bnkref" class="label-name">Bank Refrence</label>
                            <input type="text" id="bnk-ref" class="form-control" name="bnkref" v-model="form.bnkref" required>
                            </div>
                            </div>
                             <div class="form-group">
                           <label for="Int-note">Investment Note(Not Required)</label>
                           <textarea class="form-control" id="Int-note" rows="2">{{form.inote}}</textarea>
                          </div>
                      </div>

                            
</template>
<script>

export default{

  props:['investment'],


    data(){
    return{
      form:{
         name:'',
         rts:'Funded',
         inote:'',
         dlty:'SAFE',
         bnkref:''

      }
    };
    },

 
}
</script>