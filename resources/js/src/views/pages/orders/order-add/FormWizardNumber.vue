  <template>
  <div>
    <form-wizard
      color="#7367F0"
      :title="null"
      :subtitle="null"
      shape="square"
      finish-button-text="Submit"
      back-button-text="Previous"
      class="mb-3"
      @on-complete="formSubmitted"
    >
      <!-- Package info -->
      <tab-content title="Package info" :before-change="validationFormSocial">
        <validation-observer ref="socialRules" tag="form">
          <b-row>
            <b-col cols="12" class="mb-2">
              <h5 class="mb-0">Package info</h5>
              <small class="text-muted">Enter Your Package info</small>
            </b-col>
            <b-col md="6">
              <b-form-group label="Name" label-for="name-package">
                <validation-provider
                  #default="{ errors }"
                  name="Name"
                  rules="required"
                >
                  <b-form-input
                    id="name-package"
                    v-model="packageData.name"
                    :state="errors.length > 0 ? false : null"
                    placeholder="Name"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <b-col md="12">
              <b-form-group label="Description" label-for="Description">
                <validation-provider
                  #default="{ errors }"
                  name="Description"
                  rules="required"
                >
                  <b-form-textarea
                    id="Description"
                    placeholder="Textarea"
                    rows="3"
                    v-model="packageData.description"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- </b-col>
            <b-col md="6">
              <b-form-group
                label="Google+"
                label-for="google-plus"
              >
                <validation-provider
                  #default="{ errors }"
                  name="Google+"
                  rules="required|url"
                >
                  <b-form-input
                    id="google-plus"
                    v-model="googleUrl"
                    :state="errors.length > 0 ? false:null"
                    placeholder="https://plus.google.com/abc"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <b-col md="6">
              <b-form-group
                label="LinkedIn"
                label-for="linked-in"
              >
                <validation-provider
                  #default="{ errors }"
                  name="LinkedIn"
                  rules="required|url"
                >
                  <b-form-input
                    id="linked-in"
                    v-model="linkedinUrl"
                    :state="errors.length > 0 ? false:null"
                    placeholder="https://linkedin.com/abc"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col> -->
          </b-row>
        </validation-observer>
      </tab-content>

      <!-- Receiver details tab -->
      <tab-content title="Receiver Details" :before-change="validationForm">
        <validation-observer ref="accountRules" tag="form">
          <b-row>
            <b-col cols="12" class="mb-2">
              <h5 class="mb-0">Receiver Details</h5>
              <small class="text-muted"> Enter Your Receiver Details. </small>
            </b-col>

            <!-- receiver name -->
            <b-col md="6">
              <b-form-group label="ٌReceiver Name" label-for="receiver">
                <validation-provider
                  #default="{ errors }"
                  name="receiver"
                  rules="required"
                >
                  <b-form-input
                    id="receiver"
                    v-model="order.receiver"
                    :state="errors.length > 0 ? false : null"
                    placeholder="johndoe"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- receiver type -->
            <b-col md="6">
              <b-form-group label="Receiver type" label-for="receiver_type">
                <validation-provider
                  #default="{ errors }"
                  name="receiver_type"
                  rules="required"
                >
                  <!-- <b-form-input
                    id="receiver_type"
                    v-model="order.receiver_type"
                    :state="errors.length > 0 ? false : null"
                    placeholder="Type"
                  /> -->
                  <v-select
                    id="receiver_type"
                    v-model="order.receiver_type"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :options="receiverTypesVT"
                    label="text"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- phone -->
            <b-col md="6">
              <b-form-group label="Phone" label-for="phone">
                <validation-provider
                  #default="{ errors }"
                  name="phone"
                  rules="required"
                >
                  <b-form-input
                    id="phone"
                    v-model="order.phone"
                    :state="errors.length > 0 ? false : null"
                    placeholder="011111111"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- seconde phone -->
            <b-col md="6">
              <b-form-group label="Second Phone" label-for="second_phone">
                <validation-provider
                  #default="{ errors }"
                  name="second_phone"
                  rules="required"
                >
                  <b-form-input
                    id="second_phone"
                    v-model="order.second_phone"
                    :state="errors.length > 0 ? false : null"
                    placeholder="022222222"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- email -->
            <b-col md="6">
              <b-form-group label="Email" label-for="email">
                <validation-provider
                  #default="{ errors }"
                  name="email"
                  rules="required|email"
                >
                  <b-form-input
                    id="email"
                    v-model="order.email"
                    type="email"
                    :state="errors.length > 0 ? false : null"
                    placeholder="john.doe@email.com"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- code postal -->
            <b-col md="6">
              <b-form-group label="Code postal" label-for="code_postal">
                <validation-provider
                  #default="{ errors }"
                  name="code_postal"
                  rules="required"
                >
                  <b-form-input
                    id="code_postal"
                    v-model="order.code_postal"
                    :state="errors.length > 0 ? false : null"
                    placeholder="43000"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- <b-col md="6">
              <b-form-group
                label="Password"
                label-for="password"
              >
                <validation-provider
                  #default="{ errors }"
                  name="Password"
                  vid="Password"
                  rules="required|password"
                >
                  <b-form-input
                    id="password"
                    v-model="PasswordValue"
                    type="password"
                    :state="errors.length > 0 ? false:null"
                    placeholder="Password"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <b-col md="6">
              <b-form-group
                label="Confirm Password"
                label-for="c-password"
              >
                <validation-provider
                  #default="{ errors }"
                  name="Password Confirm"
                  rules="required|confirmed:Password"
                >
                  <b-form-input
                    id="c-password"
                    v-model="passwordCon"
                    type="password"
                    :state="errors.length > 0 ? false:null"
                    placeholder="Re-type Password"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col> -->
          </b-row>
        </validation-observer>
      </tab-content>

      <!-- personal details tab -->
      <tab-content title="Order dimensions" :before-change="validationFormInfo">
        <validation-observer ref="infoRules" tag="form">
          <b-row>
            <b-col cols="12" class="mb-2">
              <h5 class="mb-0">Order dimentions</h5>
              <small class="text-muted">Enter Your Order Info.</small>
            </b-col>
            <!-- weight -->
            <b-col md="6">
              <b-form-group label="Weight" label-for="weight">
                <validation-provider
                  #default="{ errors }"
                  name="Weight"
                  rules="required"
                >
                  <b-form-input
                    id="weight"
                    v-model="order.weight"
                    placeholder="John"
                    :state="errors.length > 0 ? false : null"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- height -->
            <b-col md="6">
              <b-form-group label="Height" label-for="height">
                <validation-provider
                  #default="{ errors }"
                  name="Height"
                  rules="required"
                >
                  <!-- <b-form-input
                    id="height"
                    v-model="order.height"
                    :state="errors.length > 0 ? false : null"
                    placeholder="Doe"
                  /> -->
                  <v-select
                    id="height"
                    v-model="order.height"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :options="heightValues"
                    label="text"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- width -->
            <b-col md="6">
              <validation-provider
                #default="{ errors }"
                name="Width"
                rules="required"
              >
                <b-form-group
                  label="Width"
                  label-for="width"
                  :state="errors.length > 0 ? false : null"
                >
                  <v-select
                    id="width"
                    v-model="order.width"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :options="widthValues"
                    label="text"
                  />
                  <b-form-invalid-feedback
                    :state="errors.length > 0 ? false : null"
                  >
                    {{ errors[0] }}
                  </b-form-invalid-feedback>
                </b-form-group>
              </validation-provider>
            </b-col>
            <!-- length -->
            <b-col md="6">
              <validation-provider
                #default="{ errors }"
                name="length"
                rules="required"
              >
                <b-form-group
                  label="length"
                  label-for="length"
                  :state="errors.length > 0 ? false : null"
                >
                  <v-select
                    id="length"
                    v-model="order.length"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :options="lengthValues"
                    :selectable="
                      (option) => !option.value.includes('nothing_selected')
                    "
                    label="text"
                  />
                  <b-form-invalid-feedback
                    :state="errors.length > 0 ? false : null"
                  >
                    {{ errors[0] }}
                  </b-form-invalid-feedback>
                </b-form-group>
              </validation-provider>
            </b-col>
            <!-- etat -->
            <b-col md="6">
              <validation-provider
                #default="{ errors }"
                name="Etat"
                rules="required"
              >
                <b-form-group
                  label="Etat"
                  label-for="Etat"
                  :state="errors.length > 0 ? false : null"
                >
                  <v-select
                    id="Etat"
                    v-model="order.etat"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :options="etatsVT"
                    label="text"
                  />
                  <b-form-invalid-feedback
                    :state="errors.length > 0 ? false : null"
                  >
                    {{ errors[0] }}
                  </b-form-invalid-feedback>
                </b-form-group>
              </validation-provider>
            </b-col>
            <!-- quatity -->
            <b-col md="6">
              <validation-provider
                #default="{ errors }"
                name="quatity"
                rules="required"
              >
                <b-form-group
                  label="quatity"
                  label-for="quatity"
                  :state="errors.length > 0 ? false : null"
                >
                  <v-select
                    id="quatity"
                    v-model="order.quatity"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :options="quantityValues"
                    label="text"
                  />
                  <b-form-invalid-feedback
                    :state="errors.length > 0 ? false : null"
                  >
                    {{ errors[0] }}
                  </b-form-invalid-feedback>
                </b-form-group>
              </validation-provider>
            </b-col>
          </b-row>
        </validation-observer>
      </tab-content>

      <!-- address  -->
      <tab-content title="Time info" :before-change="validationFormAddress">
        <validation-observer ref="addressRules" tag="form">
          <b-row>
            <b-col cols="12" class="mb-2">
              <h5 class="mb-0">Time info</h5>
              <small class="text-muted">Enter your time info here.</small>
            </b-col>
            <b-col md="6">
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
                    v-model="order.send_date"
                    class="mb-1"
                  />
                        <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <b-col md="6">
              <b-form-group label="ٌReceive Date" label-for="receive_date">
                <validation-provider
                  #default="{ errors }"
                  name="Receive Date"
                  rules="required"
                >
                   <b-form-datepicker
                    id="receive_date"
                    v-model="order.receive_date"
                    class="mb-1"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
            <!-- <b-col md="6">
              <b-form-group
                label="Pincode"
                label-for="pincode"
              >
                <validation-provider
                  #default="{ errors }"
                  name="Pincode"
                  rules="required"
                >
                  <b-form-input
                    id="pincode"
                    v-model="pincode"
                    :state="errors.length > 0 ? false:null"
                    type="number"
                    placeholder="658921"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col> -->
            <b-col md="6">
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
                    v-model="order.time_receive_date"
                    locale="en"
                  />
                  <small class="text-danger">{{ errors[0] }}</small>
                </validation-provider>
              </b-form-group>
            </b-col>
          </b-row>
        </validation-observer>
      </tab-content>
    </form-wizard>
  </div>
</template>

<script>
import { FormWizard, TabContent } from "vue-form-wizard";
import vSelect from "vue-select";
import {mapGetters} from "vuex"

import store from '@/store'
import { ValidationProvider, ValidationObserver } from "vee-validate";
import ToastificationContent from "@core/components/toastification/ToastificationContent.vue";
import "vue-form-wizard/dist/vue-form-wizard.min.css";
import {
  BRow,
  BCol,
  BFormGroup,
  BFormInput,
  BFormInvalidFeedback,
  BFormTextarea,
  BFormDatepicker,
  BFormTimepicker
} from "bootstrap-vue";
import { required, email } from "@validations";
import {getUserData} from '@/auth/utils'

export default {
  components: {
    ValidationProvider,
    ValidationObserver,
    FormWizard,
    TabContent,
    BFormTextarea,
    BFormDatepicker,
    BFormTimepicker,
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    vSelect,
    BFormInvalidFeedback,
    // eslint-disable-next-line vue/no-unused-components
    ToastificationContent,
  },
  created() {
    // store.dispatch('_UPDATE_ROLES');
    
    store.dispatch("_UPDATE_MORPH_TYEPS", {
      //App\Entities\Agency
      type: "OrderEtat",
    });

    store.dispatch("_UPDATE_MORPH_TRADE_TYEPS", {
      //App\Entities\Agency
      type: "OrderReceiverType"
    });

  
  },
  computed: {
    
     ...mapGetters({
        // roles : 'getRoles',
        etats : 'getMorphTypes',
        receiverTypes: 'getMorphTradeTypes',
     }),
     etatsVT(){

       return this.etats.map(item => {
         item.text = item.name;
         item.value = item.id;
         return item;
       })
     },
      receiverTypesVT(){

       return this.receiverTypes.map(item => {
         item.text = item.name;
         item.value = item.id;
         return item;
       })
      }
  },
  data() {
    return {
      // package
      packageData: {
        name: "",
        description: "",
        marchent_id : getUserData().marchent.id
      },
      order: {
        // order
        receiver: "",
        receiver_type: "",
        phone: "",
        second_phone: "",
        code_postal: "",
        weight: "",
        height: "",
        width: "",
        length: "",
        send_date: null,
        receive_date: null,
        time_receive_date: null,
        etat: null,
        quatity: null
      },

      selectedContry: "",
      selectedLanguage: "",
      name: "",
      emailValue: "",
      PasswordValue: "",
      passwordCon: "",
      first_name: "",
      last_name: "",
      address: "",
      landMark: "",
      pincode: "",
      twitterUrl: "",
      facebookUrl: "",
      googleUrl: "",
      linkedinUrl: "",
      city: "",
      required,
      email,
      widthValues: [
        { value: "1", text: "1" },
        { value: "2", text: "2" },
        { value: "3", text: "3" },
        { value: "4", text: "4" },
        { value: "5", text: "5" },
        { value: "6", text: "6" },
        { value: "10", text: "10" },
      ],
      heightValues: [
        { value: "1", text: "1" },
        { value: "2", text: "2" },
        { value: "3", text: "3" },
        { value: "4", text: "4" },
        { value: "5", text: "5" },
        { value: "6", text: "6" },
        { value: "10", text: "10" },
      ],
      lengthValues: [
        { value: "1", text: "1" },
        { value: "2", text: "2" },
        { value: "3", text: "3" },
        { value: "4", text: "4" },
        { value: "5", text: "5" },
        { value: "6", text: "6" },
        { value: "10", text: "10" },
      ],
      weightValues: [
        { value: "1", text: "1" },
        { value: "2", text: "2" },
        { value: "3", text: "3" },
        { value: "4", text: "4" },
        { value: "5", text: "5" },
        { value: "6", text: "6" },
        { value: "10", text: "10" },
      ],
      quantityValues: [
        { value: "1", text: "1" },
        { value: "2", text: "2" },
        { value: "3", text: "3" },
        { value: "4", text: "4" },
        { value: "5", text: "5" },
        { value: "6", text: "6" },
        { value: "10", text: "10" },
      ],
      objectsKeys : [
        'height',
        'width',
        'length',
        'receiver_type',
        'etat',
      ],
      // languageName: [
      //   { value: "nothing_selected", text: "Nothing Selected" },
      //   { value: "English", text: "English" },
      //   { value: "Chinese", text: "Mandarin Chinese" },
      //   { value: "Hindi", text: "Hindi" },
      //   { value: "Spanish", text: "Spanish" },
      //   { value: "Arabic", text: "Arabic" },
      //   { value: "Malay", text: "Malay" },
      //   { value: "Russian", text: "Russian" },
      // ],
    };
  },
  methods: {
    formSubmitted() {
      // this.order = {
      //   // order
      //   receiver: "daffd",
      //   receiver_type: this.receiverTypesVT[0],
      //   phone: "fadfdsf",
      //   second_phone: "fadf",
      //   code_postal: "fadfsd",
      //   weight: "fadsfd",
      //   height: this.heightValues[2],
      //   width: this.widthValues[2],
      //   length: this.lengthValues[3],
      //   send_date: 'fadfdsf',
      //   receive_date: 'fadsfdf',
      //   time_receive_date: 'fadsfsd',
      //   etat: this.etatsVT[0],
      //   quatity: this.quantityValues[0],
      // };
      let orderdata = Object.entries(this.order).map(item => {
        // const key = item[0];
        const value = item[1];
        if(typeof value === 'object' && value!=null){
          item[1] = value['value'];
        }
        return item;
      })

      orderdata = Object.fromEntries(orderdata);
      const data = {
        order : orderdata,
        package : this.packageData
      };

      console.log(data);
      // const data = [
      //   ,
      //   packageData
      // ]
      
      // console.log(data);
      store.dispatch('_STORE_ORDER',data).then(res => {
        
      this.$toast({
        component: ToastificationContent,
        props: {
          title: "Order created",
          icon: "EditIcon",
          variant: "success",
        },
      });
      
      this.$router.push('/orders')

      }).catch(error => {
         this.$toast({
        component: ToastificationContent,
        props: {
          title: "Form Not Submitted",
          icon: "EditIcon",
          variant: "success",
        },
      });
      })
      this.$toast({
        component: ToastificationContent,
        props: {
          title: "Form Submitted",
          icon: "EditIcon",
          variant: "success",
        },
      });
    },
    validationForm() {
      return new Promise((resolve, reject) => {
        this.$refs.accountRules.validate().then((success) => {
          if (success) {
            resolve(true);
          } else {
            reject();
          }
        });
      });
    },
    validationFormInfo() {
      return new Promise((resolve, reject) => {
        this.$refs.infoRules.validate().then((success) => {
          if (success) {
            resolve(true);
          } else {
            reject();
          }
        });
      });
    },
    validationFormAddress() {
      return new Promise((resolve, reject) => {
        this.$refs.addressRules.validate().then((success) => {
          if (success) {
            resolve(true);
          } else {
            reject();
          }
        });
      });
    },
    validationFormSocial() {
      return new Promise((resolve, reject) => {
        this.$refs.socialRules.validate().then((success) => {
          if (success) {
            resolve(true);
          } else {
            reject();
          }
        });
      });
    },
  },
};
</script>
