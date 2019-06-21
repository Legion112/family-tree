<template>
  <div class="container">
      <div class="row">
          <div class="col-sm">

          </div>
          <div class="col-sm">
              <form v-on:submit.prevent="onSubmit">
                  <div class="form-group">
                      <label for="first_name">First name</label>
                      <input v-model="first_name" type="text" class="form-control" id="first_name" placeholder="Enter First name">
                      <small id="first_nameHelper" class="form-text text-muted">First name</small>
                  </div>
                  <div class="form-group">
                      <label for="last_name">Last name</label>
                      <input v-model="last_name" type="text" class="form-control" id="last_name" placeholder="Enter Last name">
                      <small id="first_nameHelper" class="form-text text-muted">First name</small>
                  </div>
                  <div class="form-group">

                    <datepicker v-model="date_birth" name="date_birth" input-class="form-control"></datepicker>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>

              </form>
          </div>
          <div class="col-sm">

          </div>
      </div>
  </div>
</template>

<script>
import Datepicker from 'vuejs-datepicker';
import axios from 'axios';
import moment from 'moment';
export default {
  name: 'Person',
    components: {
        Datepicker
    },
  props: {
  },
  data() {
      return {
          first_name: 'Max',
          last_name: 'Ageev',
          date_birth: new Date(),
        }
    },
    methods: {
        formatSave(date){
            return moment(date).format(this.$root.format.date_save)
        },
        onSubmit(){
            const data = {
                first_name: this.first_name,
                last_name: this.last_name,
                date_birth: this.formatSave(this.date_birth),
            };
            axios.post(
                '/person/create/',
                data,
                {headers: {'Accept': 'application/json'}}
            ).then(({data})=>{
                console.log(data);
            })
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
