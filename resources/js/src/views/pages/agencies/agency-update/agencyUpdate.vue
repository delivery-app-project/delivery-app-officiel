<template>
  <b-card-code title="Update Agency">
    <validation-observer ref="simpleRules">
      <b-form>
        <b-row>
          <!--  This field is required-->
          <b-col md="6">
            <b-form-group>
              <label>This field is required</label>
              <validation-provider
                #default="{ errors }"
                rules="required"
                name="Agency name"
              >
                <b-form-input
                  v-model="editedAgency.name"
                  :state="errors.length > 0 ? false : null"
                  placeholder="Agency name"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <!--Enter Number between 10 & 20 -->
          <b-col md="6">
            <b-form-group>
              <label>Type of the Agency</label>
              <validation-provider
                #default="{ errors }"
                rules="required"
                name="Type of the agency"
              >
                <b-form-group>
                  <v-select
                    v-model="editedAgency.type"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    label="name"
                    placeholder="Type"
                    :options="morphTypes"
                  />
                </b-form-group>
                <!-- <b-form-input
                  v-model="numberRange"
                  :state="errors.length > 0 ? false:null"
                  placeholder="Enter Number between 10 & 20"
                /> -->
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <!-- Must match the specified regular expression : ^([0-9]+)$ - numbers only -->
          <b-col md="6">
            <b-form-group>
              <label>Must be a phone number</label>
              <validation-provider
                #default="{ errors }"
                rules="required|regex:^([0-9]+)$"
                name="Regex"
              >
                <b-form-input
                  v-model="editedAgency.phone"
                  :state="errors.length > 0 ? false : null"
                  placeholder="Must be phone"
                />
                <small class="text-danger">{{ errors[0] }}</small>
                <small v-if="duplicateErrors.phone" class="text-danger">{{ 'phone is duplicate' }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <!--  Only alphabetic characters-->
          <!-- <b-col md="6">
            <b-form-group>
              <label>Only alphabetic characters</label>
              <validation-provider
                #default="{ errors }"
                rules="required|alpha"
                name="Alpha"
              >
                <b-form-input
                  v-model="Alphabetic"
                  :state="errors.length > 0 ? false:null"
                  placeholder="Enter Character Only"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col> -->

          <!-- Length should not be less than the specified length : 3 -->
          <!-- <b-col md="6">
            <b-form-group>
              <label>Length should not be less than the specified length : 3</label>
              <validation-provider
                #default="{ errors }"
                rules="required|min:3"
                name="Min Character"
              >
                <b-form-input
                  v-model="digitValue"
                  :state="errors.length > 0 ? false:null"
                  placeholder="Enter minimum 3 Characters"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col> -->

          <!--Password Input Field -->
          <!-- <b-col md="6">
            <b-form-group>
              <label>Password Input Field</label>
              <validation-provider
                #default="{ errors }"
                rules="required|password"
                name="password"
                vid="password"
              >
                <b-form-input
                  v-model="passwordValue"
                  type="password"
                  :state="errors.length > 0 ? false:null"
                  placeholder="Password"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col> -->

          <!-- The digits field must be numeric and exactly contain 3 digits -->
          <!-- <b-col md="6">
            <b-form-group>
              <label>The digits field must be numeric and exactly contain 3 digits</label>
              <validation-provider
                #default="{ errors }"
                rules="required|digits:3"
                name="Numeric"
              >
                <b-form-input
                  v-model="digitValue2"
                  :state="errors.length > 0 ? false:null"
                  placeholder="Enter Exactyly 3 digit"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col> -->

          <!--Repeat password must match  -->
          <!-- <b-col md="6">
            <b-form-group>
              <label>Repeat password must match</label>
              <validation-provider
                #default="{ errors }"
                rules="required|confirmed:password"
                name="Confirm Password"
              >
                <b-form-input
                  v-model="passwordCon"
                  type="password"
                  :state="errors.length > 0 ? false:null"
                  placeholder="Repeat Password"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col> -->

          <!--Only alphabetic characters, numbers, dashes or underscores -->

          <b-col md="6">
            <b-form-group>
              <label>Agency director</label>
              <validation-provider
                #default="{ errors }"
                name="Agency director"
                rules="required"
              >
                <b-form-group>
                  <v-select
                    v-model="editedAgency.director"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    label="name"
                    :options="employees"
                    placeholder="Director"
                  />
                </b-form-group>
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <!-- Must be a valid email -->
          <b-col md="6">
            <b-form-group>
              <label>Must be a valid email</label>
              <validation-provider
                #default="{ errors }"
                name="Email"
                rules="required|email"
              >
                <b-form-input
                  v-model="editedAgency.email"
                  :state="errors.length > 0 ? false : null"
                  placeholder="Email"
                />
                <small class="text-danger">{{ errors[0] }}</small>
                <small v-if="duplicateErrors.email" class="text-danger">{{ 'email is duplicate' }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <!--Must be a valid url  -->
          <b-col md="6">
            <b-form-group>
              <label>Only if your agency contain a stock</label>
              <validation-provider #default="{ errors }" name="stock" rules="">
                <b-form-group>
                  <v-select
                    v-model="editedAgency.main_stock"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    label="name"
                    :options="stocks"
                    placeholder="Stock"
                  />
                </b-form-group>
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <b-col>
            <b-row ref="row">
              <b-col md="4">
                <b-form-group label="Address" label-for="address">
                  <validation-provider
                    #default="{ errors }"
                    name="Address"
                    rules="required"
                  >
                    <b-form-input
                      v-model="editedAgency.address.district"
                      :state="errors.length > 0 ? false : null"
                      placeholder="Address"
                    />
                    <small class="text-danger">{{ errors[0] }}</small>
                  </validation-provider>
                </b-form-group>
              </b-col>

              <!-- Cost -->
              <b-col md="2">
                <b-form-group label="Wilaya" label-for="wilaya">
                  <!-- <b-form-input id="wilaya" type="number" placeholder="32" /> -->
                  <validation-provider
                    #default="{ errors }"
                    name="wilaya"
                    rules="required"
                  >
                    <b-form-group>
                      <v-select
                        v-model="wilaya"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="wilayas"
                        placeholder="Wilaya"
                      />
                    </b-form-group>
                    <small class="text-danger">{{ errors[0] }}</small>
                  </validation-provider>
                </b-form-group>
              </b-col>

              <!-- Quantity -->
              <b-col md="2">
                <b-form-group label="Daira" label-for="daira">
                  <!-- <b-form-input id="daira" type="number" placeholder="1" /> -->
                  <validation-provider
                    #default="{ errors }"
                    name="Daira"
                    rules="required"
                  >
                    <b-form-group>
                      <v-select
                        v-model="daira"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="dairas"
                        placeholder="Daira"
                      />
                    </b-form-group>
                    <small class="text-danger">{{ errors[0] }}</small>
                  </validation-provider>
                </b-form-group>
              </b-col>

              <b-col md="2">
                <b-form-group label="City" label-for="city">
                  <!-- <b-form-input id="city" type="number" placeholder="1" /> -->

                  <validation-provider
                    #default="{ errors }"
                    name="City"
                    rules="required"
                  >
                    <b-form-group>
                      <v-select
                        v-model="city"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="cities"
                        placeholder="City"
                      />
                    </b-form-group>
                    <small class="text-danger">{{ errors[0] }}</small>
                  </validation-provider>
                </b-form-group>
              </b-col>

              <b-col cols="12">
                <hr />
              </b-col>
            </b-row>
          </b-col>

          <!-- <b-col md="12">
            <b-form-group>
              <label>Address </label>
              <validation-provider
                #default="{ errors }"
                rules="required|alpha-dash"
                name="Address"
              >
                <b-form-input
                  v-model="character"
                  :state="errors.length > 0 ? false : null"
                  placeholder="Enter address of the agency (wilaya,daira,city , district)"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col> -->

          <!-- submit button -->
          <b-col cols="12">
            <b-button
              variant="primary"
              type="submit"
              @click.prevent="validationForm"
            >
              Submit
            </b-button>
          </b-col>
        </b-row>
      </b-form>
    </validation-observer>

    <template #code>
      {{ codeType }}
    </template>
  </b-card-code>
</template>

<script>
import BCardCode from "@core/components/b-card-code";
import {
  ValidationProvider,
  ValidationObserver,
} from "vee-validate";


import { ref, onUnmounted } from "@vue/composition-api";
import {
  BFormInput,
  BFormGroup, 
  BForm,
  BRow,
  BCol,
  BButton,
} from "bootstrap-vue";
import {
  required,
  email,
  confirmed,
  url,
  between,
  alpha,
  integer,
  password,
  min,
  digits,
  alphaDash,
  length,
} from "@validations";
import { codeType } from "./code";
import { mapGetters } from "vuex";

import store from "@/store";
import router from "@/router";
 
import vSelect from "vue-select";
import invoiceStoreModule from "../invoiceStoreModule";
export default {
  components: { 
    BCardCode,
    ValidationProvider,
    ValidationObserver, 
    BFormInput,
    BFormGroup,
    BForm,
    BRow,
    BCol,
    BButton,
    vSelect,
  },

  data() {
    return {
      selected: null,
      option: [],
      // stocks: [],
      passwordValue: "",
      passwordCon: "",
      emailValue: "",
      number: "",
      numberRange: "",
      numberRegx: "",
      URL: "",
      Alphabetic: "",
      digitValue: "",
      digitValue2: "",
      character: "",
      required,
      confirmed,
      password,
      min,
      integer,
      url,
      alpha,
      between,
      digits,
      length,
      alphaDash,
      codeType,
      //
      editedAgency : {
        stock: null,
        name: null,
        email: null,
        phone: null,
        address : {
          district : null,
        },
        director: null,
        type: null,
        daira: null,
        wilaya: null,
        city: null 
      },
      stock: null,
      name: null,
      email: null,
      phone: null,
      address: null,
      employee: null,
      type: null,
      daira: null,
      wilaya: null,
      city: null,
      duplicateErrors : {
        email : false,
        phone : false
      }
    };
  },
  created() {
    
        // get agency 
        store.dispatch('_GET_AGENCY',{
          id : router.currentRoute.params.id
        });
        
        // get types
        store.dispatch("_UPDATE_MORPH_TYEPS", {
          //App\Entities\Agency
          type: "App\\Entities\\Agency",
        });
        // get wilayas
        store.dispatch("_UPDATE_WILAYAS");
        // get employees
        store.dispatch("_UPDATE_EMPLOYEES");
        // fetch stocks
        // this.fetchStocks();
        store.dispatch("_UPDATE_STOCKS",{
          paginated : false
        })

        

  },
  computed: {
    ...mapGetters({
      morphTypes: "getMorphTypes",
      wilayas: "getWilayas",
      employees: "getEmployees",
      agency : "getAgency",
      stocks : "getStocks"
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
  watch: {
    wilaya(value) {
      // this.daira = null;
    },
    daira(value) {
      // this.city = null;
    },
    phone(value){
      this.duplicateErrors['phone']= false;
    },
    emailValue(value){
      this.duplicateErrors['email'] = false;
    },
    agency(value){
      if(value){
        this.setUpModel(value);
      
      }
    }
  },
  methods: {
    setUpModel(model){
        this.editedAgency = model;
        this.city = this.editedAgency.address.city;
        this.daira = this.city.daira;
        this.wilaya = this.daira.wilaya;
    },
    validationForm() {
      this.$refs.simpleRules.validate().then((success) => {
        if (success) {
          // eslint-disable-next-line
          const data = {
            stock_id: this.editedAgency.main_stock ? this.editedAgency.main_stock.id : null,
            name: this.editedAgency.name, 
            email: this.editedAgency.email,
            phone: this.editedAgency.phone,
            district: this.editedAgency.address.district,
            employee_id: this.editedAgency.director.id,
            type_id: this.editedAgency.type.id,
            city_id: this.city.id,
            id : this.agency.id,
            address_id : this.editedAgency.address.id
          };
          // alert("form submitted!");
          store.dispatch("_UPDATE_AGENCY",data).then((response) => {
            // console.log(response);
            const { error } = response.data;
            // console.log(error);
            if (error) {
              const { keys } = response.data;
              
              keys.map(key => {
                this.duplicateErrors[key] = true;
              })
            }
            else { 
              this.$router.replace('/agencies')
            }
          });
        }
      });
    },
  }
};
</script>
