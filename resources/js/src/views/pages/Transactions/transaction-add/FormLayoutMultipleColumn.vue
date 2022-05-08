<template>
  <b-card-code
    title="Multiple Column"
  >
    <b-form @submit.prevent>
      <b-row>
        <b-col md="6">
          <b-form-group
            :label="$t('First Name')"
            label-for="mc-first-name"
          >
            <b-form-input
              id="mc-first-name"
              :placeholder="$t('First Name')"
            />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group
            :label="$t('Last Name')"
            label-for="mc-last-name"
          >
            <b-form-input
              id="mc-last-name"
              :placeholder="$t('Last Name')"
            />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group
            :label="$t('City')"
            label-for="mc-city"
          >
            <b-form-input
              id="mc-city"
              :placeholder="$t('City')"
            />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group
            :label="$t('Country')"
            label-for="mc-country"
          >
            <b-form-input
              id="mc-country"
              :placeholder="$t('Country')"
            />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group
            :label="$t('Company')"
            label-for="mc-company"
          >
            <div class="form-label-group">
              <b-form-input
                id="mc-company"
                :placeholder="$t('Company')"
              />
            </div>
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group
            label-for="mc-email"
            :label="$t('Email')"
          >
            <div class="form-label-group">
              <b-form-input
                id="mc-email"
                type="email"
                :placeholder="$t('Email')"
              />
            </div>
          </b-form-group>
        </b-col>

        <b-col cols="12">
          <b-form-group>
            <b-form-checkbox
              id="checkbox-10"
              name="checkbox-10" 
              value="Remember_me"
            >
              {{ $t("Remember me") }}
            </b-form-checkbox>
          </b-form-group>
        </b-col>

        <!-- submit and reset -->
        <b-col>
          <b-button
            v-ripple.400="'rgba(255, 255, 255, 0.15)'"
            type="submit"
            variant="primary"
            class="mr-1"
          >
            {{ $t("Submit") }}
          </b-button>
          <b-button
            v-ripple.400="'rgba(186, 191, 199, 0.15)'"
            type="reset"
            variant="outline-secondary"
          >
            {{ $t("Reset") }}
          </b-button>
        </b-col>
      </b-row>
    </b-form>

    <template #code>
      {{ codeMultipleColumn }}
    </template>
  </b-card-code>
</template>

<script>
import BCardCode from '@core/components/b-card-code'
import {
  BRow, BCol, BFormGroup, BFormInput, BFormCheckbox, BForm, BButton,
} from 'bootstrap-vue'
import Ripple from 'vue-ripple-directive'
import { codeMultipleColumn } from './code'

export default {
  components: {
    BCardCode,
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    BFormCheckbox,
    BForm,
    BButton,
  },
  directives: {
    Ripple,
  },
  data() {
    return {
      codeMultipleColumn,
    }
  },
}
</script>
