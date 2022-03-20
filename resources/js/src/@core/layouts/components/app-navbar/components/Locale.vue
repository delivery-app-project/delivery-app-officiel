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
      @click="setLocale(localeObj)"
    >
      <b-img
        :src="localeObj.img"
        height="14px"
        width="22px"
        :alt="localeObj.locale"
      />
      <span
       class="ml-50">{{ localeObj.name }}</span>
    </b-dropdown-item>
     
  </b-nav-item-dropdown>

</template>

<script>
import { BNavItemDropdown, BDropdownItem, BImg } from 'bootstrap-vue'
// import useAppConfig from '@core/app-config/useAppConfig'
import store from '@/store'
import { computed, watch } from '@vue/composition-api'

export default {
  components: {
    BNavItemDropdown,
    BDropdownItem,
    BImg,
  },
  // ! Need to move this computed property to comp function once we get to Vue 3
  computed: {
    currentLocale() {
      return this.locales.find(l => l.locale === this.$i18n.locale)
    },
  },
  methods: {
    setLocale(localeObj){
    this.$i18n.locale = localeObj.locale;
    if(localeObj.locale === 'ar')
    this.rtl = true;
    else this.rtl = false;
    }
    
  },
  setup() {
    /* eslint-disable global-require */
    const locales = [
      {
        locale: 'en',
        img: require('@/assets/images/flags/en.png'),
        name: 'English',
      },
      {
        locale: 'fr',
        img: require('@/assets/images/flags/fr.png'),
        name: 'French',
      },
      {
        locale: 'de',
        img: require('@/assets/images/flags/de.png'),
        name: 'German',
      },
      {
        locale: 'pt',
        img: require('@/assets/images/flags/pt.png'),
        name: 'Portuguese',
      },
      {
        locale: 'ar',
        img: require('@/assets/images/flags/ar.png'),
        name: 'Arabic',
      },
    ]

    // const {
    //   isRTL 
    // } = useAppConfig();
    /* eslint-disable global-require */

    const rtl  =  computed({
    get: () => store.state.appConfig.layout.isRTL,
    set: val => {
      store.commit('appConfig/TOGGLE_RTL', val)
      },
    })

    // const cLang = computed({
    // get: () => this.locales.find(l => l.locale === this.$i18n.locale),
    // set: val => {
    //   // console.log("check app cofnig");
    //   store.commit('appConfig/TOGGLE_RTL', val)
    //   },
    // })

    return {
      locales,rtl
    }
  },
}
</script>

<style>

</style>
