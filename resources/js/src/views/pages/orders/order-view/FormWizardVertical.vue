<template>
  <div>
    <form-wizard
      color="#7367F0"
      :title="null"
      :subtitle="null"
      layout="vertical"
      back-button-text="Previous"
      class="wizard-vertical mb-3"

    >

      <!-- account datails tab -->
      <tab-content :title="$t('Package info')">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
            >
            <h5 class="mb-0">
              {{ $t("Package info") }}
            </h5>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Package name')"
              label-for="name-package"
            >
             <b-form-input
                    id="name-package"
                    v-model="packageData.name"
                    :placeholder="$t('Name')"
                    disabled
              />
            </b-form-group>
          </b-col>
          <b-col md="12">
            <b-form-group
              :label="$t('Description')"
              label-for="Description"
            >
              <b-form-textarea
                    id="Description"
                    placeholder="Textarea"
                    rows="3"
                    v-model="packageData.description"
                    disabled
                  />
            </b-form-group>
          </b-col>
          <!-- <b-col md="6">
            <b-form-group
              label="Password"
              label-for="v-password"
            >
              <b-form-input
                id="v-password"
                type="password"
                placeholder="Password"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Confirm Password"
              label-for="v-c-password"
            >
              <b-form-input
                id="v-c-password"
                type="password"
                placeholder="Re-type Password"
              />
            </b-form-group>
          </b-col> -->
        </b-row>
      </tab-content>

      
      <!-- Source and destination info -->
      <tab-content

        :title="$t('Source and destination')"
         >
          <b-row>
            <b-col cols="12" class="mb-2">
              <h6 class="mb-0">{{ $t("Source and destination") }}</h6>
            </b-col>
            <!-- source   -->

            <h5 class="mb-2 col-12">{{ $t("Source") }}</h5>

            <b-col md="3">
              <b-form-group :label="$t('Wilaya')" label-for="name-wilaya">
                <!-- Wilaya -->
                  <b-form-input
                    v-model="orderData.address_source.city.daira.wilaya.name"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :placeholder="$t('Wilaya')"
                    disabled
                  />

              </b-form-group>
            </b-col>
            <b-col md="3">
              <b-form-group :label="$t('Daira')" label-for="Daira">

                 <b-form-input
                    v-model="orderData.address_source.city.daira.name"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :placeholder="$t('Daira')"
                    disabled
                  />
              </b-form-group>
            </b-col>
            <b-col md="3">
              <b-form-group :label="$t('City')" label-for="City">
                <!-- City -->
                <b-form-input
                    v-model="orderData.address_source.city.name"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :placeholder="$t('City')"
                    disabled
                  />
              </b-form-group>
            </b-col>
            <b-col md="3">
              <b-form-group :label="$t('District')" label-for="s-district">
                  <b-form-input
                    id="s-district"
                    v-model="orderData.address_source.district"
                    :placeholder="$t('District')"
                    disabled
                  />
              </b-form-group>
            </b-col>

            <!-- destination -->

            <h5 class="mb-2 col-12">{{ $t("Destination info") }}</h5>
            <b-col md="3">
              <b-form-group :label="$t('Wilaya')" label-for="name-wilaya">
                <!-- Wilaya -->
                  <b-form-input
                    v-model="orderData.address_destination.city.daira.wilaya.name"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :placeholder="$t('Wilaya')"
                    disabled
                  />

              </b-form-group>
            </b-col>
            <b-col md="3">
              <b-form-group :label="$t('Daira')" label-for="Daira">

                 <b-form-input
                    v-model="orderData.address_destination.city.daira.name"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :placeholder="$t('Daira')"
                    disabled
                  />
              </b-form-group>
            </b-col>
            <b-col md="3">
              <b-form-group :label="$t('City')" label-for="City">
                <!-- City -->
                <b-form-input
                    v-model="orderData.address_destination.city.name"
                    :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                    :placeholder="$t('City')"
                    disabled
                  />
              </b-form-group>
            </b-col>
            <b-col md="3">
              <b-form-group :label="$t('District')" label-for="s-district">
                  <b-form-input
                    id="s-district"
                    v-model="orderData.address_destination.district"
                    :placeholder="$t('District')"
                    disabled
                  />
              </b-form-group>
            </b-col>

          </b-row>
      </tab-content>

      <!-- Receiver Details -->
      <tab-content :title="$t('Receiver Details')">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              {{ $t("Receiver Details") }}
            </h5>
           </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Receiver Name')"
              label-for="v-first-name"
            >

              <b-form-input
                    id="receiver"
                    v-model="orderData.receiver"
                    placeholder="johndoe"
                    disabled
                  />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Receiver type')"
              label-for="v-last-name"
            >
              <b-form-input
                id="receiver_type"
                :value="orderData.receiver_type.name"
                disabled
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Phone')"
              label-for="phone"
            >
             <b-form-input
                    id="phone"
                    v-model="orderData.phone"
                    placeholder="011111111"
                    disabled
                  />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label-for="second_phone"
              :label="$t('Second phone')"
            >
             <b-form-input
                    id="second_phone"
                    v-model="orderData.second_phone"
                    placeholder="022222222"
                    disabled
                  />
            </b-form-group>
          </b-col>
          
          <b-col md="6">
            <b-form-group
              label-for="email"
              :label="$t('Email')"
            >
             <b-form-input
                    id="email"
                    v-model="orderData.email"
                    placeholder="022222222"
                    disabled
                  />
            </b-form-group>
          </b-col>

          <b-col md="6">
            <b-form-group
              label-for="code_postal"
              label="$t('Code Postal')"
            >
             <b-form-input
                    id="code_postal"
                    v-model="orderData.code_postal"
                    disabled
                  />
            </b-form-group>
          </b-col>
        </b-row>
      </tab-content>

      <!-- Order dimensions -->
      <tab-content :title="$t('Order dimensions')">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              "{{ $t("Order dimensions") }}"
            </h5>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Weight')"
              label-for="weight"
            >
              <b-form-input
                    id="weight"
                    v-model="orderData.weight"
                    disabled
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Height')"
              label-for="Height"
            >
              <b-form-input
                    id="Height"
                    v-model="orderData.height"
                    disabled
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="$t('length')"
              label-for="length"
            >
              <b-form-input
                    id="length"
                    v-model="orderData.length"
                    disabled
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Width')"
              label-for="Width"
            >
              <b-form-input
                    id="Width"
                    v-model="orderData.width"
                    disabled
              />
            </b-form-group>
          </b-col>

          <b-col md="6">
            <b-form-group
              :label="$t('Etat')"
              label-for="Etat"
            >
              <b-form-input
                    id="Etat"
                    :value="orderData.etat.name"
                    disabled
              />
            </b-form-group>
          </b-col>

          <b-col md="6">
            <b-form-group
              :label="$t('quatity')"
              label-for="quatity"
            >
              <b-form-input
                    id="quatity"
                    v-model="orderData.quatity"
                    disabled
              />
            </b-form-group>
          </b-col>
        </b-row>
      </tab-content>

      <!-- social link -->
      <tab-content :title="$t('Time info')">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              {{ $t("Time info") }}
            </h5>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Send date')"
              label-for="send_date"
            >
              <b-form-input
                    id="send_date"
                    v-model="orderData.send_date"
                    class="mb-1"
                    disabled
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              :label="$t('Receive date')"
              label-for="receive_date"
            >
              <b-form-input
                    id="receive_date"
                    v-model="orderData.receive_date"
                    class="mb-1"
                    disabled
              />
            </b-form-group>
          </b-col>
          
          <b-col md="6">
            <b-form-group
              :label="$t('Time Receive Date')"
              label-for="time_receive_date"
            >
              <b-form-input
                    id="time_receive_date"
                    v-model="orderData.time_receive_date"
                    class="mb-1"
                    disabled
              />
            </b-form-group>
          </b-col>

        </b-row>
      </tab-content>
    </form-wizard>

  </div>
</template>

<script>
import { FormWizard, TabContent } from 'vue-form-wizard'
import vSelect from 'vue-select'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import {
  BRow,
  BCol,
  BFormGroup,
  BFormInput,
  BFormTextarea,
} from 'bootstrap-vue'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'

import {getUserData} from '@/auth/utils'
import {mapGetters} from 'vuex'
export default {
  components: {
    FormWizard,
    TabContent,
    BFormTextarea,
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    vSelect,
    // eslint-disable-next-line vue/no-unused-components
    ToastificationContent,
  },
  computed: {
    ...mapGetters({
        order : "getOrder"
    }),
    packageData (){
      if(this.order)
      return this.order.package;

      return this.packageD;
    },
    orderData (){
      if(this.order)
      return this.order;

      return this.orderD;
    }
  },
  created() {
      // this.packageData = Object.fromEntries(Object.entries(this.packageData).map(item => {
      //   const key = item[0];
      //   item[1] = this.order.package[key];
      //   return item;
      // }));
      // this.orderData = Object.fromEntries(Object.entries(this.orderData).map(item => {
      //   const key = item[0];
      //   item[1] = this.order.orderData[key];
      //   return item;
      // }));
      // this.orderData.map(item => {
      //   const key = item[0];
      //   item[1] = this.order[key];
      //   return item;
      // })

  },
  data() {
    
    return {
      packageD: {
        name: "",
        description: "",
        marchent_id : getUserData().marchent.id
      },
      orderD: {
        // order
        address_source : {
            city : {
               name : "",
               daira  : {
                  name : "",
                  wilaya : {
                    name : ""
                  }
               }
            }
        },
        address_destination : {
            city : {
               name : "",
               daira  : {
                  name : "",
                  wilaya : {
                    name : ""
                  }
               }
            }
        },
        receiver: "",
        receiver_type: {
          name : ''
        },
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
        etat: {
          name : ''
        },
        quatity: null
      },
      selectedContry: 'select_value',
      selectedLanguage: 'nothing_selected',
      countryName: [
        { value: 'select_value', text: 'Select Value' },
        { value: 'Russia', text: 'Russia' },
        { value: 'Canada', text: 'Canada' },
        { value: 'China', text: 'China' },
        { value: 'United States', text: 'United States' },
        { value: 'Brazil', text: 'Brazil' },
        { value: 'Australia', text: 'Australia' },
        { value: 'India', text: 'India' },
      ],
      languageName: [
        { value: 'nothing_selected', text: 'Nothing Selected' },
        { value: 'English', text: 'English' },
        { value: 'Chinese', text: 'Mandarin Chinese' },
        { value: 'Hindi', text: 'Hindi' },
        { value: 'Spanish', text: 'Spanish' },
        { value: 'Arabic', text: 'Arabic' },
        { value: 'Malay', text: 'Malay' },
        { value: 'Russian', text: 'Russian' },
      ],
    }
  },
  methods: {
    formSubmitted() {
      this.$toast({
        component: ToastificationContent,
        props: {
          title: 'Form Submitted',
          icon: 'EditIcon',
          variant: 'success',
        },
      })
    },
  },
}
</script>
