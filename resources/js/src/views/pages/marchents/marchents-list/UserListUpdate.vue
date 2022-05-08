<template>
  <b-sidebar
    id="update-user-sidebar"
    :visible="isUpdateUserSidebarActive"
    bg-variant="white"
    sidebar-class="sidebar-lg"
    shadow
    backdrop
    no-header
    right
    @hidden="resetForm"
    @change="(val) => $emit('update:is-update-user-sidebar-active', val)"
  >
    <template #default="{ hide }">
      <!-- Header -->
      <div
        class="
          d-flex
          justify-content-between
          align-items-center
          content-sidebar-header
          px-2
          py-1
        "
      >
        <h5 class="mb-0">{{ $t("Update User") }}</h5>

        <feather-icon
          class="ml-1 cursor-pointer"
          icon="XIcon"
          size="16"
          @click="hide"
        />
      </div>

      <!-- BODY -->
      <validation-observer #default="{ handleSubmit }" ref="refFormObserver">
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
            <b-form-group :label="$t('First name')" label-for="first-name">
              <b-form-input
                id="first-name"
                v-model="userData.first_name"
                autofocus
                :state="getValidationState(validationContext)"
                trim
                :placeholder="$t('exmple First name')"
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
            <b-form-group :label="$t('Last name')" label-for="last-name">
              <b-form-input
                id="last-name"
                v-model="userData.last_name"
                autofocus
                :state="getValidationState(validationContext)"
                trim
                :placeholder="$t('exmple Last name')"
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
            <b-form-group :label="$t('EMAIL')" label-for="email">
              <b-form-input
                id="email"
                v-model="userData.email"
                :state="
                  getValidationState(validationContext) &&
                  !duplicateErrors.email
                "
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>

              <b-form-invalid-feedback v-if="duplicateErrors.email">
                {{ $t("Email is duplicate") }}
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
            <b-form-group :label="$t('Phone')" label-for="phone">
              <b-form-input
                id="phone"
                v-model="userData.phone"
                :state="
                  getValidationState(validationContext) &&
                  !duplicateErrors.phone
                "
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>

              <b-form-invalid-feedback v-if="duplicateErrors.phone">
                {{ $t("Phone is duplicate") }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>

          <!--second phone -->
          <validation-provider
            #default="validationContext"
            name="Second phone"
            rules="required|regex:^([0-9]+)$"
          >
            <b-form-group :label="$t('second-phone')" label-for="second-phone">
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
              :label="$t('Wilaya')"
              label-for="wilaya"
              :state="getValidationState(validationContext)"
            >
              <v-select
                v-model="wilaya"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                label="name"
                :options="wilayas"
                :placeholder="$t('Wilaya')"
              />
              <b-form-invalid-feedback
                :state="getValidationState(validationContext)"
              >
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
              :label="$t('Daira')"
              label-for="Daira"
              :state="getValidationState(validationContext)"
            >
              <v-select
                v-model="daira"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                label="name"
                :options="dairas"
                :placeholder="$t('Daira')"
              />
              <b-form-invalid-feedback
                :state="getValidationState(validationContext)"
              >
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
              :label="$t('City')"
              label-for="City"
              :state="getValidationState(validationContext)"
            >
              <v-select
                v-model="city"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                label="name"
                :options="cities"
                :placeholder="$t('City')"
              />
              <b-form-invalid-feedback
                :state="getValidationState(validationContext)"
              >
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
            <b-form-group :label="$t('Address')" label-for="address">
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
              :label="$t('Bank account number')"
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
          <!-- <validation-provider
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
          </validation-provider> -->
          <!--Insurance number -->
          <!-- <validation-provider
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
          </validation-provider> -->

          <!--birth_certifcate_number -->
          <!-- <validation-provider
            #default="validationContext"
            name="Birth Certificate number"
            rules="required"
          >
            <b-form-group
              label="Birth Certificate number"
              label-for="birth_certifcate_number"
            >
              <b-form-input
                id="birth_certifcate_number"
                v-model="userData.birth_certifcate_number"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider> -->

          <!--car_registration_number -->
          <!-- <validation-provider
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
          </validation-provider> -->

          <!--joining_amount -->
          <!-- <validation-provider
            #default="validationContext"
            name="Joining amount"
            rules="required"
          >
            <b-form-group label="Jouning amount" label-for="joining_amount">
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
          </validation-provider> -->

          <!--Password -->
          <validation-provider #default="validationContext" name="Password">
            <b-form-group :label="$t('Password')" label-for="password">
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




          <!-- company name -->
          <validation-provider
            #default="validationContext"
            name="Company name"
            rules=""
           >
            <b-form-group
              :label="$t('Company name')"
              label-for="company_name"
            >
              <b-form-input
                id="company_name"
                v-model="userData.company_name"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>
          <!-- Tax identification number -->
          <validation-provider
            #default="validationContext"
            name="Tax identification number"
            rules=""
           >
            <b-form-group
              :label="$t('Tax identification number')"
              label-for="tax_identification_number"
            >
              <b-form-input
                id="tax_identification_number"
                v-model="userData.tax_identification_number"
                :state="getValidationState(validationContext)"
                trim
              />

              <b-form-invalid-feedback>
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider>


          <!-- Trade type -->
          <validation-provider
            #default="validationContext"
            name="Trade type"
            rules=""
            >
            <b-form-group
              :label="$t('Trade type')"
              label-for="trade_type"
              :state="getValidationState(validationContext)"
            >
              <v-select
                        v-model="trade_type"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="tradeTypes"
                        :placeholder="$t('Trade type')"
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

          <!-- User Role -->
          <!-- <validation-provider
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
                :reduce="(val) => val.value"
                :clearable="false"
                input-id="user-role"
              />
              <b-form-invalid-feedback
                :state="getValidationState(validationContext)"
              >
                {{ validationContext.errors[0] }}
              </b-form-invalid-feedback>
            </b-form-group>
          </validation-provider> -->

          <!-- Status -->
          <validation-provider
            #default="validationContext"
            name="Status"
            rules="required"
          >
            <b-form-group
              :label="$t('Status')"
              label-for="status"
              :state="getValidationState(validationContext)"
            >
              <v-select
                v-model="status"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                label="name"
                :options="types"
                :placeholder="$t('Status')"
              />
              <b-form-invalid-feedback
                :state="getValidationState(validationContext)"
              >
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
              {{ $t("Add") }}

            </b-button>
            <b-button
              v-ripple.400="'rgba(186, 191, 199, 0.15)'"
              type="button"
              variant="outline-secondary"
              @click="hide"
            >
              {{ $t("Cancel") }}
            </b-button>
          </div>
        </b-form>
      </validation-observer>
    </template>
  </b-sidebar>
</template>

<script>
import {
  BSidebar,
  BForm,
  BFormGroup,
  BFormInput,
  BFormInvalidFeedback,
  BButton,
} from "bootstrap-vue";
import { ValidationProvider, ValidationObserver } from "vee-validate";
import { ref, watch } from "@vue/composition-api";
import { required, alphaNum, email } from "@validations";
import formValidation from "@core/comp-functions/forms/form-validation";
import Ripple from "vue-ripple-directive";
import vSelect from "vue-select";
import countries from "./countries";
import store from "@/store";
import { mapGetters } from "vuex";

export default {
  created() {
    // get wilayas
    store.dispatch("_UPDATE_WILAYAS");
  },
  mounted() {},
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
    // wilaya(value) {
    //   this.daira = null;
    // },
    // daira(value) {
    //   this.city = null;
    // },
    // // for the city id
    // city(value) {
    //   // console.log("check");
    //   this.userData.city_id = value ? value.id : null;
    // },
    // status(value) {},
    // watch when user data email change turn this to false
    "userData.email"(value) {
      this.duplicateErrors.email = false;
    },
    // watch user data phone turn this to false
    "userData.phone"(value) {
      this.duplicateErrors.phone = false;
    },
  },
  directives: {
    Ripple,
  },
  model: {
    prop: "isUpdateUserSidebarActive",
    event: "update:is-update-user-sidebar-active",
  },
  props: {
    isUpdateUserSidebarActive: {
      type: Boolean,
      required: true,
    },
    // roleOptions: {
    //   type: Array,
    //   required: true,
    // },
    planOptions: {
      type: Array,
      required: true,
    },
    selectedUser: {
      type: Object,
      required: true,
    },
    
  },
  data() {
    return {
      required,
      alphaNum,
      email,
      countries
      
    };
  },
  watch: {
    selectedUser(value) {
      if (value) 
        this.setUpModel(value);
      
    },
  },
  setup(props, { emit }) {
    const city = ref(null);
    const wilaya = ref(null);
    const daira = ref(null);
    const status = ref(null);
    const trade_type = ref(null);

    const blankUserData = {
      id: null,
      email: "",
      role: null,
      currentPlan: null,
      status_id: null,
      trade_type_id: null,
      first_name: "",
      last_name: "",
      phone: "",
      second_phone: "",
      district: "",
      address_id: null,
      city_id: "",
      bank_account_number: "",
      commercial_registration_no: "",
      insurance_number: "",
      birth_certifcate_number: "",
      car_type: "",
      car_registration_number: "",
      joining_amount: "",
      permanent_employee: "",
      password: null,
      isMarchent: true,
      // for the marchent
      company_name : "",
      tax_identification_number : "",

    };

    const duplicateErrors = ref({
      email: false,
      phone: false,
    });

    const userData = ref(JSON.parse(JSON.stringify(blankUserData)));

    const resetuserData = () => {
      userData.value = JSON.parse(JSON.stringify(blankUserData));
    };

    // watch status value if change
    watch(wilaya, (newV,oldV) => {
      if(oldV)
      daira.value = null;
    });
    watch(daira, (newV,oldV) => {
      if(oldV)
      city.value = null;
    });
    watch(city, () => {
      userData.value.city_id = city.value ? city.value.id : null;
    });
    watch(status, () => {
      userData.value.status_id = status.value ? status.value.id : null;
    });

    watch(trade_type, () => {
      userData.value.trade_type_id = trade_type.value ? trade_type.value.id : null;
    });


    const onSubmit = () => {
      if(!userData.value.password) delete userData.value.password;
      
      store.dispatch("app-user/updateUser", userData.value).then((res) => {
        const { error } = res.data;

        if (error) {
          const { keys } = res.data;

          keys.map((key) => {
            duplicateErrors.value[key] = true;
            console.log(duplicateErrors);
          });
        } else {
          emit("refetch-data");
          emit("update:is-update-user-sidebar-active", false);
        }
      });
    };

    const setUpModel = (model) => {
      Object.entries(userData.value).map((item) => {
        const key = item[0];
        const value = model.user;
        switch (key) {
          // case "role":
          //   userData.value[key] = value.roles[0] ? value.roles[0].name : null;
          //   break;
          case "company_name":
            userData.value[key] = model.company_name;
            break;
          case "tax_identification_number":
            userData.value[key] = model.tax_identification_number;
            break;
            
          case "trade_type_id":
            userData.value[key] = model.trade_type ? model.trade_type.id : null;
            trade_type.value = model.trade_type ? model.trade_type : null;
            break;

          case "status_id":
            userData.value[key] = value.status ? value.status.id : null;
            status.value = value.status ? value.status : null;
            break;

          case "district":
            userData.value[key] = value.address ? value.address.district : null;

            city.value = value.address ? value.address.city : null;
            daira.value = city.value ? city.value.daira : null;
            wilaya.value = daira.value ? daira.value.wilaya : null;
            break;

          // case "city_id" : 
          //   userData.value[key] = value.address ? value.address.city_id : null;
          //   break;

          case "address_id":
            userData.value[key] = value.address ? value.address.id : null;
            break;

          default:

            if(value.hasOwnProperty(key))
            userData.value[key] =   value[key] ;

            break;
        }
      });
    };
    // set up for the first time 
    setUpModel(props.selectedUser);

    const { refFormObserver, getValidationState, resetForm } =
      formValidation(resetuserData);

    return {
      userData,
      onSubmit,

      city,
      wilaya,
      daira,
      status,
      trade_type,
      refFormObserver,
      getValidationState,
      resetForm,
      duplicateErrors,
      setUpModel,
    };
  },
  methods: {
    handleOnSubmit() {
      this.onSubmit().then((res) => {
        const { error } = res.data;

        if (error) {
          const { keys } = res.data;

          keys.map((key) => {
            this.duplicateErrors[key] = true;
          });
        } else {
          // this.$router.replace('/agencies')
          emit("refetch-data");
          emit("update:is-update-user-sidebar-active", false);
        }
      });
    },
  },
  computed: {
    ...mapGetters({
      wilayas: "getWilayas",
      types: "getMorphTypes",
      tradeTypes : 'getMorphTradeTypes',
    }),
    dairas() {
      
      if (this.wilaya) return this.wilayas.find(item =>item.id===this.wilaya.id).dairas;

      return [];
    },
    cities() {

      if (this.daira) return this.dairas.find(item => item.id===this.daira.id).cities;

      return [];
    },
  },
};
</script>

<style lang="scss">
@import "~@core/scss/vue/libs/vue-select.scss";

#update-user-sidebar {
  .vs__dropdown-menu {
    max-height: 200px !important;
  }
}
</style>
