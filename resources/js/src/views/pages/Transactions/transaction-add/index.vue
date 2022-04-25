<template>
  <b-card-code title="Add Transaction">
    <validation-observer ref="simpleRules">
      <b-form>
        <b-row>
          <!--  This field is required-->
          <b-col md="6">
            <b-form-group>
              <b-form-group label="Send Date" label-for="send_date">
                <validation-provider
                  #default="{ errors }"
                  name="Send Date"
                  rules="required"
                >
                  <!-- <b-form-input
                    id="send_date"
                    v-model="address"
                    :state="errors.length > 0 ? false : null"
                    placeholder="98 Borough bridge Road, Birmingham"
                  /> -->
                  <b-form-datepicker
                    id="send_date"
                    v-model="send_date"
                    class="mb-1"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-form-group>
          </b-col>

          <!--Enter Number between 10 & 20 -->
          <b-col md="6">
            <b-form-group>
              <b-form-group label="Receive Date" label-for="receive_date">
                <validation-provider
                  #default="{ errors }"
                  name="Receive Date"
                  rules="required"
                >
                  <b-form-datepicker
                    id="receive_date"
                    v-model="receive_date"
                    class="mb-1"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-form-group>
          </b-col>

          <!-- Must match the specified regular expression : ^([0-9]+)$ - numbers only -->
          <b-col md="6">
            <b-form-group>
              <b-form-group
                label="Time Receive Date"
                label-for="time_receive_date"
              >
                <validation-provider
                  #default="{ errors }"
                  name="Time Receive Date"
                  rules="required"
                >
                  <!-- <b-form-input
                    id="time_receive_date"
                    v-model="city"
                    :state="errors.length > 0 ? false : null"
                    placeholder="Birmingham"
                  /> -->
                  <b-form-timepicker
                    id="time_receive_date"
                    v-model="time_receive_date"
                    locale="en"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-form-group>
          </b-col>

          <!-- Must be a valid email -->
          <b-col md="6"
            ><b-form-group label="Time Send Date" label-for="time_send_date">
              <validation-provider
                #default="{ errors }"
                name="Time Send Date"
                rules="required"
              >
                <!-- <b-form-input
                    id="time_receive_date"
                    v-model="city"
                    :state="errors.length > 0 ? false : null"
                    placeholder="Birmingham"
                  /> -->
                <b-form-timepicker
                  id="time_send_date"
                  v-model="time_send_date"
                  locale="en"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <b-col md="6">
            <b-form-group>
              <label>Employee</label>
              <validation-provider
                #default="{ errors }"
                name="Employee"
                rules="required"
              >
                <b-form-group>
                  <v-select
                    v-model="employee"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    label="name"
                    :options="employees"
                    placeholder="Employee"
                  />
                </b-form-group>
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col>

          <b-col md="12">
            <b-col md="6">
              <b-form-group label="Source" label-for="Source">
                <!-- <b-form-input id="Source" type="number" placeholder="32" /> -->
                <validation-provider
                  #default="{ errors }"
                  name="Source"
                  rules="required"
                >
                  <b-form-group>
                    <v-select
                      v-model="sourceAndDest"
                      :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                      label="label"
                      :options="fromChoices"
                      placeholder="Source"
                    />
                  </b-form-group>
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
          </b-col>
          <b-col md="12" v-if="sourceAndDest">
            <b-row ref="row">
              <!-- Cost -->
              <b-col md="6">
                <b-form-group label="Source" label-for="Source">
                  <!-- <b-form-input id="Source" type="number" placeholder="32" /> -->
                  <validation-provider
                    #default="{ errors }"
                    name="Source"
                    rules="required"
                  >
                    <b-form-group>
                      <v-select
                        v-model="source"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="sourceValues"
                        placeholder="Source"
                      />
                    </b-form-group>
                    <small class="text-danger">{{ errors[0] }}</small>
                  </validation-provider>
                </b-form-group>
              </b-col>

              <!-- Cost -->
              <b-col md="6">
                <b-form-group label="Destination" label-for="Destination">
                  <!-- <b-form-input id="Destination" type="number" placeholder="32" /> -->
                  <validation-provider
                    #default="{ errors }"
                    name="Destination"
                    rules="required"
                  >
                    <b-form-group>
                      <v-select
                        v-model="destination"
                        :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                        label="name"
                        :options="destinationValues"
                        placeholder="Destination"
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
                  placeholder="Enter address of the Stock (wilaya,daira,city , district)"
                />
                <small class="text-danger">{{ errors[0] }}</small>
              </validation-provider>
            </b-form-group>
          </b-col> -->

          <b-col md="6" class="mt-3 mb-3">
            <!-- people group 1 -->
            <b-col md="6">
              <h6 class="text-primary font-weight-bold mb-2">List of orders</h6>

              <draggable
                :list="listOrders"
                tag="ul"
                group="people"
                class="list-group list-group-flush cursor-move col-12"
              >
                <b-list-group-item
                  v-for="(listItem, index) in listOrders"
                  :key="index"
                  tag="li"
                >
                  <div class="d-flex">
                    <b-avatar :text="listItem.quatity + ''" />
                    <div class="ml-25">
                      <b-card-text class="mb-0 font-weight-bold">
                        {{ listItem.send_date }}
                      </b-card-text>
                      <small>{{ listItem.email }}</small>
                    </div>
                  </div>
                </b-list-group-item>

                <!-- <b-alert variant="warning"  v-if="!listOrders.length">
                  <h4 class="alert-heading">List of orders</h4>
                  <div class="alert-body">
                    <span>No order added</span>
                  </div>
                </b-alert> -->
              </draggable>
              <small v-if="!listOrders.length" class="text-danger">{{
                "add at least one order"
              }}</small>
            </b-col>
          </b-col>
          <b-col md="6" class="mt-3 mb-3">
            <!-- people group 2 -->
            <b-col md="6" class="mt-sm-2 mt-md-0">
              <h6 class="text-primary font-weight-bold mb-2">All Orders</h6>

              <!-- draggable -->
              <draggable
                :list="allOrders"
                tag="ul"
                group="people"
                class="list-group list-group-flush cursor-move"
              >
                <b-list-group-item
                  v-for="(listItem, index) in allOrders"
                  :key="index"
                  tag="li"
                >
                  <div class="d-flex">
                    <b-avatar :text="listItem.quatity + ''" />
                    <div class="ml-25">
                      <b-card-text class="mb-0 font-weight-bold">
                        {{ listItem.send_date }}
                      </b-card-text>
                      <small>{{ listItem.email }}</small>
                    </div>
                  </div>
                </b-list-group-item>
              </draggable>
              
              <small v-if="!allOrders.length" class="text-warning">{{
                "List empty"
              }}</small>
            </b-col>
          </b-col>
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
  </b-card-code>
</template>

<script>
import BCardCode from "@core/components/b-card-code";
import { ValidationProvider, ValidationObserver } from "vee-validate";

import { ref, onUnmounted } from "@vue/composition-api";
import store from "@/store";

import Prism from "vue-prism-component";
import {
  BFormInput,
  BFormGroup,
  BForm,
  BRow,
  BCol,
  BButton,
  BFormDatepicker,
  BFormTimepicker,
  BAvatar,
  BListGroupItem,
  BCardText,
  BAlert,
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

import draggable from "vuedraggable";
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
    BFormDatepicker,
    BFormTimepicker,
    draggable,
    Prism,
    BAvatar,
    BListGroupItem,
    BCardText,
    BAlert,
  },
  
  props: {
    // agency: {
    //   type: Object,
    //   required: false
    // },
  },
  data() {
    return {
      listOrders: [],
      id : this.$router.currentRoute.params.id,
      type : this.$router.currentRoute.params.type,
      selected: null,
      option: [],
      sourceAndDest: null,
      // stocks: [],
      send_date: "",
      time_send_date: "",
      receive_date: "",
      time_receive_date: "",
      source: "",
      destination: "",
      employee: "",
      allOrders: [],
      //
      fromChoices: [
        {
          key: "stockToAgency",
          label: "From stock to Agency",
        },
        {
          key: "agencyToStock",
          label: "From agency to stock",
        },
        {
          key: "agencyToAgency",
          label: "From agency to agency",
        },
        {
          key: "stockToStock",
          label: "From stock to stock",
        },
      ],
    };
  },
  created() {
    // get types
    store.dispatch("_UPDATE_MORPH_TYEPS", {
      //App\Entities\Stock
      type: "App\\Entities\\Stock",
    });
    // get wilayas
    store.dispatch("_UPDATE_WILAYAS");

    store.dispatch("_UPDATE_ORDERS", {
      paginated: false,
      agency_id : this.type==="agency" ? this.id : null,
      stock_id : this.type==="stock" ? this.id : null
    });
    // get employees
    store.dispatch("_UPDATE_EMPLOYEES",{
      agency_id : this.type==="agency" ? this.id : null,
      stock_id : this.type==="stock" ? this.id : null
    });
    // fetch agencies
    store.dispatch("_UPDATE_AGENCIES", {
      paginated: false,
    });

    store.dispatch("_UPDATE_STOCKS", {
      paginated: false,
    });
  },
  computed: {
    ...mapGetters({
      morphTypes: "getMorphTypes",
      wilayas: "getWilayas",
      employees: "getEmployees",
      agencies: "getAgencies",
      stocks: "getStocks",
      orders: "getOrders",
    }),
    sourceValues() {
      if (
        this.sourceAndDest.key === "stockToAgency" ||
        this.sourceAndDest.key === "stockToStock"
      )
        return this.stocks;
      else if (
        this.sourceAndDest.key === "agencyToStock" ||
        this.sourceAndDest.key === "agencyToAgency"
      )
        return this.agencies;

      return [];
    },
    destinationValues() {
      if (
        this.sourceAndDest.key === "stockToAgency" ||
        this.sourceAndDest.key === "agencyToAgency"
      )
        return this.agencies;
      else if (
        this.sourceAndDest.key === "agencyToStock" ||
        this.sourceAndDest.key === "stockToStock"
      )
        return this.stocks;

      return [];
    },
  },
  watch: {
    orders(value) {
      this.allOrders = value;
    },
  },
  methods: {
    validationForm() { 
        this.$refs.simpleRules.validate().then((success) => {
          if (success && this.listOrders.length) {
            // eslint-disable-next-line
            const data = {
              employee_id: this.employee.id,
              send_date: this.send_date,
              receive_date: this.receive_date,
              time_receive_date: this.time_receive_date,
              time_send_date: this.time_send_date,
              source_id: this.source.id,
              destination_id: this.destination.id,
              sourceAndDest: this.sourceAndDest.key,
              orders : this.listOrders.map(item => item.id)
            };
            // alert("form submitted!");
            store.dispatch("storeTransaction", data).then((response) => {
              // console.log(response);
              const { error } = response.data;
              // console.log(error);
              if (error) {
                const { keys } = response.data;

                keys.map((key) => {
                  this.duplicateErrors[key] = true;
                });
              } else {
                this.$router.push({ name: 'transaction-preview', params: { id:  response.data.id}})
              }
            });
          }
        });
      
    },
  },
  setup() {
    // const INVOICE_APP_STORE_MODULE_NAME = "app-agency";
    // // Register module
    // if (!store.hasModule(INVOICE_APP_STORE_MODULE_NAME))
    //   store.registerModule(INVOICE_APP_STORE_MODULE_NAME, invoiceStoreModule);
    // // UnRegister on leave
    // onUnmounted(() => {
    //   if (store.hasModule(INVOICE_APP_STORE_MODULE_NAME))
    //     store.unregisterModule(INVOICE_APP_STORE_MODULE_NAME);
    // });

    // const agency = ref(null);

    // const refetchAgency = () => {

    //   store.dispatch('_GET_AGENCY', { id: router.currentRoute.params.id })
    //   .then(response => { 
    //     agency.value = response.data; 
        
    //     })
    //   .catch(error => {
    //     if (error.response.status === 404) {
    //       agency.value = undefined
    //     }
    //   })
    // }

    // refetchAgency();
  },
};
</script>
