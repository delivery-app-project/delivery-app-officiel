<template>
  <b-nav-item-dropdown
    id="dropdown-grouped"
    variant="link"
    class="dropdown-language"
    right
  >
    <template #button-content>
      <b-img
        :src="currentLocale.img"
        height="14px"
        width="22px"
        :alt="currentLocale.locale"
      />
      <span class="ml-50 text-body">{{ currentLocale.name }}</span>
    </template>
    <b-dropdown-item
      v-for="localeObj in locales"
      :key="localeObj.locale"
      @click="langUpdater(localeObj)"
    >
      <b-img
        :src="localeObj.img"
        height="14px"
        width="22px"
        :alt="localeObj.locale"
      />
      <span class="ml-50">{{ localeObj.name }}</span>
    </b-dropdown-item>
  </b-nav-item-dropdown>
</template>

<script>
import { BNavItemDropdown, BDropdownItem, BImg } from "bootstrap-vue";
// import useAppConfig from '@core/app-config/useAppConfig'
import store from "@/store";
import { computed, watch } from "@vue/composition-api";
import { setLang, setLocale } from "../../../../../locale/utils";
import localeStoreModule from './localeStoreModule'
import {getUserData} from '@/auth/utils'

import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'

export default {
  components: {
    BNavItemDropdown,
    BDropdownItem,
    BImg,
  },
  // ! Need to move this computed property to comp function once we get to Vue 3
  computed: {
    currentLocale() {
      let userData = getUserData();

      if(!(this.$i18n.locale===userData.lang)) this.$i18n.locale = userData.lang ? userData.lang : 'en';
       
      return this.locales.find((l) => l.locale === this.$i18n.locale);
    },
  },
  methods: {
    setLocale(localeObj) {
      this.$i18n.locale = localeObj.locale;
      localeObj.locale === "ar" ? (this.rtl = true) : (this.rtl = false);
      // update lang in localstorage
      setLang(localeObj.locale);
    },
    langUpdater(localeObj) {
     let userData = getUserData();
     
     store
    .dispatch('app-locale/updateLang',{
      lang : localeObj.locale,
      id : userData.id
    })
    .then(response => {
        const { lang } = response.data;
        userData.lang = lang;
        localStorage.setItem('userData', JSON.stringify(userData))
        this.setLocale(localeObj);
    } )
    .catch((error) => {
      this.$toast({
        component: ToastificationContent,
        props: {
          title: "Failed update lang",
          icon: 'AlertTriangleIcon',
          variant: 'danger',
        },
      });    
    });
    },
  },
  setup() {
    
    const Locale_APP_STORE_MODULE_NAME = 'app-locale';
    // Register module
    if (!store.hasModule(Locale_APP_STORE_MODULE_NAME))
      store.registerModule(Locale_APP_STORE_MODULE_NAME, localeStoreModule)

    /* eslint-disable global-require */
    const locales = [
      {
        locale: "en",
        img: require("@/assets/images/flags/en.png"),
        name: "English",
      },
      {
        locale: "fr",
        img: require("@/assets/images/flags/fr.png"),
        name: "French",
      },
      {
        locale: "de",
        img: require("@/assets/images/flags/de.png"),
        name: "German",
      },
      {
        locale: "pt",
        img: require("@/assets/images/flags/pt.png"),
        name: "Portuguese",
      },
      {
        locale: "ar",
        img: require("@/assets/images/flags/ar.png"),
        name: "Arabic",
      },
    ];

    // const {
    //   isRTL
    // } = useAppConfig();
    /* eslint-disable global-require */

    const rtl = computed({
      get: () => store.state.appConfig.layout.isRTL,
      set: (val) => {
        store.commit("appConfig/TOGGLE_RTL", val);
      },
    });

    // const cLang = computed({
    // get: () => this.locales.find(l => l.locale === this.$i18n.locale),
    // set: val => {
    //   // console.log("check app cofnig");
    //   store.commit('appConfig/TOGGLE_RTL', val)
    //   },
    // })

    return {
      locales,
      rtl,
    };
  },
};
</script>

<style>
</style>
