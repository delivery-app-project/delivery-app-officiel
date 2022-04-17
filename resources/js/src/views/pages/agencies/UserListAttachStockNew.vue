<template>
  <b-sidebar
    id="add-new-user-sidebar"
    :visible="isAddNewUserSidebarStockActive"
    bg-variant="white"
    sidebar-class="sidebar-lg"
    shadow
    backdrop
    no-header
    right
    @hidden="handleResetForm"
    @change="(val) => $emit('update:is-add-new-user-sidebar-stock-active', val)"
  >
    <template #default="{ hide }">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center content-sidebar-header px-2 py-1">
        <h5 class="mb-0">
          Attach  New User to Stock
        </h5>

        <feather-icon
          class="ml-1 cursor-pointer"
          icon="XIcon"
          size="16"
          @click="hide"
        />

      </div>

      <!-- BODY -->
      <validation-observer
        #default="{ handleSubmit }"
        ref="refFormObserver"
      >
        <!-- Form -->
        <b-form
          class="p-2"
          @submit.prevent="handleSubmit(onSubmit)"
          @reset.prevent="resetForm"
       >

          <!-- City -->
          <validation-provider
            #default="validationContext"
            name="Agency"
            rules="required"
            >
            <b-form-group
              label="Agency"
              label-for="Agency"
              :state="getValidationState(validationContext)"
             >
              <v-select
                        v-model="userData.agencies"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="agencies"
                        placeholder="Select Agency"
                        multiple
                        
              />
              <b-form-invalid-feedback :state="getValidationState(validationContext)">
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>


          <!-- Country -->
          <!-- <validation-provider
            #default="validationContext"
            name="Country"
            rules="required"
          >
            <b-form-group
              label="Country"
              label-for="country"
              :state="getValidationState(validationContext)"
            >
              <v-select
                v-model="userData.country"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                :options="countries"
                :clearable="false"
                input-id="country"
              />
              <b-form-invalid-feedback :state="getValidationState(validationContext)">
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider> -->


          

          <!-- Form Actions -->
          <div class="d-flex mt-2">
            <b-button
              v-ripple.400="'rgba(255, 255, 255, 0.15)'"
              variant="primary"
              class="mr-2"
              type="submit"
            >
              Add agencies
            </b-button>
            <b-button
              v-ripple.400="'rgba(186, 191, 199, 0.15)'"
              type="button"
              variant="outline-secondary"
              @click="hide"
            >
              Cancel
            </b-button>
          </div>

        </b-form>
      </validation-observer>
    </template>
  </b-sidebar>
</template>

<script>
import { BSidebar, BForm, BFormGroup, BFormInput, BFormInvalidFeedback, BButton } from 'bootstrap-vue'
import { ValidationProvider, ValidationObserver } from 'vee-validate'
import { ref,watch } from '@vue/composition-api'
import { required, alphaNum, email } from '@validations'
import formValidation from '@core/comp-functions/forms/form-validation'
import Ripple from 'vue-ripple-directive'
import vSelect from 'vue-select'
import store from '@/store'
import {mapGetters} from 'vuex'

export default {
  created() {
    // get wilayas
      store.dispatch("_UPDATE_WILAYAS");

      // this.userData.agencies = this.stock.agencies;
  },
  components: {
    BSidebar,
    BForm,
    BFormGroup,
    BFormInput,
    BFormInvalidFeedback,
    BButton,
    vSelect,

    // Form Validation
    ValidationProvider,
    ValidationObserver,
  },
  watch: {
  },
  directives: {
    Ripple,
  },
  model: {
    prop: 'isAddNewUserSidebarStockActive',
    event: 'update:is-add-new-user-sidebar-stock-active',
  },
  watch : {
     'stock.agencies' (value){
        this.userData.agencies = value;
     }
  },
  props: {
    isAddNewUserSidebarStockActive: {
      type: Boolean,
      required: true,
    },
    stock: {
      type: Object,
      required: true,
    },
    // planOptions: {
    //   type: Array,
    //   required: true,
    // },
    
  },
  data() {
    return {
      required,
      alphaNum,
      email,
      //  duplicateErrors : {
      //   email : false,
      //   phone : false
      // }
    }
  },
  setup(props, { emit }) {
    
    const blankUserData = {
      agencies : props.stock.agencies
    }


    const userData = ref(JSON.parse(JSON.stringify(blankUserData)))
    const resetuserData = () => {
      userData.value = JSON.parse(JSON.stringify(blankUserData))
    }
    

    const onSubmit = () => {
      const data = {
        agency_ids : userData.value.agencies.map(item => item.id),
        stock_id : props.stock.id
      };

      store.dispatch('app-user/attachUserStock', data).then((res) => {

            emit('refetch-data')
            emit('refetch-stock')
            emit('update:is-add-new-user-sidebar-stock-active', false)
        
      })
    }

    const { refFormObserver, getValidationState, resetForm } = formValidation(resetuserData)

    return {
      userData,
      onSubmit,

      refFormObserver,
      getValidationState,
      resetForm,
      // duplicateErrors
    }
  },
  methods: {
      handleResetForm(){
          this.resetForm()
          this.userData.agencies = this.stock.agencies;
      }
  },
  computed: {
    ...mapGetters({
      // wilayas: "getWilayas",
      // types : 'getMorphTypes'
      agencies: "getAgencies"
    }),

    // dairas() {
    //   if (this.wilaya) return this.wilaya.dairas;

    //   return [];
    // },
    // cities() {
    //   if (this.daira) return this.daira.cities;

    //   return [];
    // },
  },
}
</script>

<style lang="scss">
@import '~@core/scss/vue/libs/vue-select.scss';

#add-new-user-sidebar {
  .vs__dropdown-menu {
    max-height: 200px !important;
  }
}
</style>
