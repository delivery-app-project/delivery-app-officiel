<template>
  <b-card>
    <!-- about -->
    <div
      v-for="(data,key,index) in aboutDataValues"
      :key="key"
      :class="index ? 'mt-2':''"
    >
      <h5 class="text-capitalize mb-75">
        {{ key }}
      </h5>
      <b-card-text>
        {{ data }}
      </b-card-text>
    </div>
  </b-card>
</template>

<script>
import { BCard, BCardText } from 'bootstrap-vue'

export default {
  components: {
    BCard,
    BCardText,
  },
  props: {
    aboutData: {
      type: Object,
      default: () => {},
    },
  },
  computed: {
      aboutDataValues(){
        return Object.fromEntries(
          Object.entries(this.aboutData).filter(item => {
          const key = item[0];
          if(!this.forbidden_keys.some(v => v===key )) return item;
        })
        )
      }
  },
  data() {
    return {
        forbidden_keys : [
          'id','address_id', 'car_type','first_name_father','first_name_mother','last_name_father'
          ,'permanent_employee','lang','created_at','updated_at','status_type','status_id','name'
          ,'joining_date',''
        ]  
    }
  },
}
</script>
