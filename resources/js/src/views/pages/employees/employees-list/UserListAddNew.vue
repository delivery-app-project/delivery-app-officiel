<template>
  <b-sidebar
    id="add-new-user-sidebar"
    :visible="isAddNewUserSidebarActive"
    bg-variant="white"
    sidebar-class="sidebar-lg"
    shadow
    backdrop
    no-header
    right
    @hidden="resetForm"
    @change="(val) => $emit('update:is-add-new-user-sidebar-active', val)"
  >
    <template #default="{ hide }">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center content-sidebar-header px-2 py-1">
        <h5 class="mb-0">
          Add New User
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

          <!-- Full Name -->
          <!-- <validation-provider
            #default="validationContext"
            name="Full Name"
            rules="required"
          >
            <b-form-group
              label="Full Name"
              label-for="full-name"
            >
              <b-form-input
                id="full-name"
                v-model="userData.fullName"
                autofocus
                :state="getValidationState(validationContext)"
                trim
                placeholder="John Doe"
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider> -->

          <!-- First name -->
          <validation-provider
            #default="validationContext"
            name="First name"
            rules="required"
          >
            <b-form-group
              label="First name"
              label-for="first-name"
            >
              <b-form-input
                id="first-name"
                v-model="userData.first_name"
                autofocus
                :state="getValidationState(validationContext)"
                trim
                placeholder="John Doe"
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!-- Last name -->
          <validation-provider
            #default="validationContext"
            name="Last name"
            rules="required"
          >
            <b-form-group
              label="Last name"
              label-for="last-name"
            >
              <b-form-input
                id="last-name"
                v-model="userData.last_name"
                autofocus
                :state="getValidationState(validationContext)"
                trim
                placeholder="John Doe"
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!-- Username -->
          <!-- <validation-provider
            #default="validationContext"
            name="Username"
            rules="required|alpha-num"
          >
            <b-form-group
              label="Username"
              label-for="username"
            >
              <b-form-input
                id="username"
                v-model="userData.username"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider> -->

          <!-- Email -->
          <validation-provider
            #default="validationContext"
            name="Email"
            rules="required|email"
          >
            <b-form-group
              label="Email"
              label-for="email"
            >
              <b-form-input
                id="email"
                v-model="userData.email"
                :state="getValidationState(validationContext) && !duplicateErrors.email"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>

              <b-form-invalid-feedback v-if="duplicateErrors.email">
                {{ "Email is duplicate" }}
              </b-form-invalid-feedback>

              
              <!-- <small class="text-danger" v-if="duplicateErrors.email">
                {{ "Email is duplicate" }}
              </small> -->

            </b-form-group>
          </validation-provider>

          <!-- Company -->
          <!-- <validation-provider
            #default="validationContext"
            name="Contact"
            rules="required"
          >
            <b-form-group
              label="Contact"
              label-for="contact"
            >
              <b-form-input
                id="contact"
                v-model="userData.contact"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider> -->


          <!-- phone -->
          <validation-provider
            #default="validationContext"
            name="Phone"
            rules="required|regex:^([0-9]+)$"
           >
            <b-form-group
              label="Phone"
              label-for="phone"
            >
              <b-form-input
                id="phone"
                v-model="userData.phone"
                :state="getValidationState(validationContext) && !duplicateErrors.phone"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>

              
              <b-form-invalid-feedback v-if="duplicateErrors.phone">
                {{ "Phone is duplicate" }}
              </b-form-invalid-feedback>
              
            </b-form-group>
          </validation-provider>
          
          <!--second phone -->
          <validation-provider
            #default="validationContext"
            name="Second phone"
            rules="required|regex:^([0-9]+)$"
           >
            <b-form-group
              label="Second phone"
              label-for="second-phone"
            >
              <b-form-input
                id="second-phone"
                v-model="userData.second_phone"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>


          <!-- Wilaya -->
          <validation-provider
            #default="validationContext"
            name="ًWilaya"
            rules="required"
            >
            <b-form-group
              label="Wilaya"
              label-for="wilaya"
              :state="getValidationState(validationContext)"
            >
              <v-select
                        v-model="wilaya"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="wilayas"
                        placeholder="Wilaya"
              />
              <b-form-invalid-feedback :state="getValidationState(validationContext)">
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>
          <!-- Daira -->
          <validation-provider
            #default="validationContext"
            name="Daira"
            rules="required"
            >
            <b-form-group
              label="Daira"
              label-for="Daira"
              :state="getValidationState(validationContext)"
             >
              <v-select
                        v-model="daira"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="dairas"
                        placeholder="Daira"
              />
              <b-form-invalid-feedback :state="getValidationState(validationContext)">
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!-- City -->
          <validation-provider
            #default="validationContext"
            name="City"
            rules="required"
            >
            <b-form-group
              label="City"
              label-for="City"
              :state="getValidationState(validationContext)"
             >
              <v-select
                        v-model="city"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="cities"
                        placeholder="City"
                        
              />
              <b-form-invalid-feedback :state="getValidationState(validationContext)">
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>


          <!--address -->
          <validation-provider
            #default="validationContext"
            name="Address"
            rules="required"
           >
            <b-form-group
              label="Address"
              label-for="address"
            >
              <b-form-input
                id="address"
                v-model="userData.district"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!--bank account number -->
          <validation-provider
            #default="validationContext"
            name="Bank account number"
            rules="required"
           >
            <b-form-group
              label="Bank account number"
              label-for="bank_account_number"
            >
              <b-form-input
                id="bank_account_number"
                v-model="userData.bank_account_number"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!--commercial registration no -->
          <validation-provider
            #default="validationContext"
            name="commercial registration no"
            rules="required"
           >
            <b-form-group
              label="commercial registration no"
              label-for="commercial_registration_no"
            >
              <b-form-input
                id="commercial_registration_no"
                v-model="userData.commercial_registration_no"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>
          <!--Insurance number -->
          <validation-provider
            #default="validationContext"
            name="Insurance number"
            rules="required"
           >
            <b-form-group
              label="Insurrance number"
              label-for="insurance_number"
            >
              <b-form-input
                id="insurance_number"
                v-model="userData.insurance_number"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!--birth_certifcate_number -->
          <validation-provider
            #default="validationContext"
            name="Birth Certificate number"
            rules="required"
           >
            <b-form-group
              label="Birth Certificate number"
              label-for="birth_certificate_number"
            >
              <b-form-input
                id="birth_certificate_number"
                v-model="userData.birth_certificate_number"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!--car_registration_number -->
          <validation-provider
            #default="validationContext"
            name="Car registration number"
            rules="required"
           >
            <b-form-group
              label="Car registration number"
              label-for="car_registration_number"
            >
              <b-form-input
                id="car_registration_number"
                v-model="userData.car_registration_number"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!--joining_amount -->
          <validation-provider
            #default="validationContext"
            name="Joining amount"
            rules="required"
           >
            <b-form-group
              label="Jouning amount"
              label-for="joining_amount"
            >
              <b-form-input
                id="joining_amount"
                v-model="userData.joining_amount"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!--Password -->
          <validation-provider
            #default="validationContext"
            name="Password"
            rules="required"
           >
            <b-form-group
              label="Password"
              label-for="password"
            >
              <b-form-input
                id="password"
                v-model="userData.password"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
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

          <!-- User Role -->
          <validation-provider
            #default="validationContext"
            name="User Role"
            rules="required"
          >
            <b-form-group
              label="User Role"
              label-for="user-role"
              :state="getValidationState(validationContext)"
            >
              <v-select
                v-model="userData.role"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                :options="roleOptions"
                :reduce="val => val.value"
                :clearable="false"
                input-id="user-role"
              />
              <b-form-invalid-feedback :state="getValidationState(validationContext)">
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!-- Plan -->
          <!-- <validation-provider
            #default="validationContext"
            name="Plan"
            rules="required"
          >
            <b-form-group
              label="Plan"
              label-for="plan"
              :state="getValidationState(validationContext)"
            >
              <v-select
                v-model="userData.currentPlan"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                :options="planOptions"
                :reduce="val => val.value"
                :clearable="false"
                input-id="plan"
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
              Add
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
import countries from './countries'
import store from '@/store'
import {mapGetters} from 'vuex'

export default {
  created() {
    // get wilayas
      store.dispatch("_UPDATE_WILAYAS");
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
     wilaya(value) {
      this.daira = null;
    },
    daira(value) {
      this.city = null;
    },
    // for the city id 
    city(value){
      this.userData.city_id = value ?  value.id : null;
    },
    // watch when user data email change turn this to false
    'userData.email' (value){
        this.duplicateErrors.email = false;
    },
    // watch user data phone turn this to false
    'userData.phone' (value){
        this.duplicateErrors.phone= false;
    },

  },
  directives: {
    Ripple,
  },
  model: {
    prop: 'isAddNewUserSidebarActive',
    event: 'update:is-add-new-user-sidebar-active',
  },
  props: {
    isAddNewUserSidebarActive: {
      type: Boolean,
      required: true,
    },
    roleOptions: {
      type: Array,
      required: true,
    },
    planOptions: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      city : null,
      wilaya : null,
      daira : null,
      required,
      alphaNum,
      email,
      countries,
      //  duplicateErrors : {
      //   email : false,
      //   phone : false
      // }
    }
  },
  setup(props, { emit }) {
    const blankUserData = {
      // fullName: '',
      // username: '',
      email: '',
      role: null,
      currentPlan: null,
      // company: '',
      // country: '',
      // contact: '',
      first_name : '',
      last_name : '',
      phone : '',
      second_phone : '',
      district : '',
      city_id : '',
      bank_account_number : '',
      commercial_registration_no : '',
      insurance_number : '',
      birth_certificate_number : '',
      car_type : '',
      car_registration_number : '',
      joining_amount  : '',
      permanent_employee : '',
      password : '',
      isEmployee: true,
      
    }

    const duplicateErrors = ref({
      email : false,
      phone : false
    });

    const userData = ref(JSON.parse(JSON.stringify(blankUserData)))
    const resetuserData = () => {
      userData.value = JSON.parse(JSON.stringify(blankUserData))
    }
    

    const onSubmit = () => {
      store.dispatch('app-user/addUser', userData.value).then((res) => {
        const { error } = res.data;

            if (error) {
              const { keys } = res.data;
              
              keys.map(key => {
                duplicateErrors.value[key] = true;
                console.log(duplicateErrors);
              })
        }
        else {
            emit('refetch-data')
            emit('update:is-add-new-user-sidebar-active', false)
        }
      })
    }

    const { refFormObserver, getValidationState, resetForm } = formValidation(resetuserData)

    return {
      userData,
      onSubmit,

      refFormObserver,
      getValidationState,
      resetForm,
      duplicateErrors
    }
  },
  methods: {
     handleOnSubmit(){
       this.onSubmit().then(res => {
            const { error } = res.data;

            if (error) {
              const { keys } = res.data;
              
              keys.map(key => {
                this.duplicateErrors[key] = true;
              })
            }
            else { 
              // this.$router.replace('/agencies')
               emit('refetch-data')
               emit('update:is-add-new-user-sidebar-active', false)
            }
          });
     }
  },
  computed: {
    ...mapGetters({
      wilayas: "getWilayas",
    }),
    dairas() {
      if (this.wilaya) return this.wilaya.dairas;

      return [];
    },
    cities() {
      if (this.daira) return this.daira.cities;

      return [];
    },
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
