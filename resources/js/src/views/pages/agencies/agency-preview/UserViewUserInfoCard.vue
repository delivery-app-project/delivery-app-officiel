<template>
  <b-card>

    <b-row>

      <!-- User Info: Left col -->
      <b-col
        cols="21"
        xl="6"
        class="d-flex justify-content-between flex-column"
      >
        <!-- User Avatar & Action Buttons -->
        <div class="d-flex justify-content-start">
          <!-- <b-avatar
            :src="modelData.avatar"
            :text="avatarText(modelData.fullName)"
            :variant="`light-${resolveUserRoleVariant(modelData.role)}`"
            size="104px"
            rounded
          /> -->
          <div class="d-flex flex-column ml-1">
            <div class="mb-1">
              <h4 class="mb-0">
                {{ modelData.name }}
              </h4>
              <span class="card-text">{{ modelData.email }}</span>
            </div>
            <div class="d-flex flex-wrap">
              <b-button
                :to="{ name: 'apps-users-edit', params: { id: modelData.id } }"
                variant="primary"
                 >
                Edit
              </b-button>
              <b-button
                variant="outline-danger"
                class="ml-1"
              >
                Delete
              </b-button>
            </div>
          </div>
        </div>

        <!-- User Stats -->
        <div class="d-flex align-items-center mt-2">
          <div class="d-flex align-items-center mr-2">
            <b-avatar
              variant="light-primary"
              rounded
            >
              <feather-icon
                icon="DollarSignIcon"
                size="18"
              />
            </b-avatar>
            <div class="ml-1">
              <h5 class="mb-0">
                23.3k
              </h5>
              <small>Monthly Sales</small>
            </div>
          </div>

          <div class="d-flex align-items-center">
            <b-avatar
              variant="light-success"
              rounded
            >
              <feather-icon
                icon="TrendingUpIcon"
                size="18"
              />
            </b-avatar>
            <div class="ml-1">
              <h5 class="mb-0">
                $99.87k
              </h5>
              <small>Annual Profit</small>
            </div>
          </div>
        </div>
      </b-col>

      <!-- Right Col: Table -->
      <b-col
        cols="12"
        xl="6"
      >
        <table class="mt-2 mt-xl-0 w-100">
          <tr>
            <th class="pb-50">
              <feather-icon
                icon="PhoneIcon"
                class="mr-75"
              />
              <span class="font-weight-bold">Phone</span>
            </th>
            <td class="pb-50">
              {{ modelData.phone }}
            </td>
          </tr>
          <tr>
            <th class="pb-50">
              <feather-icon
                icon="CheckIcon"
                class="mr-75"
              />
              <span class="font-weight-bold">type</span>
            </th>
            <td class="pb-50 text-capitalize">
              {{ modelData.type.name }}
            </td>
          </tr>
          <tr>
            <th class="pb-50">
              <feather-icon
                icon="FlagIcon"
                class="mr-75"
              />
              <span class="font-weight-bold">Wilaya</span>
            </th>
            <td class="pb-50 text-capitalize">
              {{ modelData.address.city.daira.wilaya.name }}
            </td>
          </tr>
          <tr>
            <th class="pb-50">
              <feather-icon
                icon="FlagIcon"
                class="mr-75"
              />
              <span class="font-weight-bold">Daira</span>
            </th>
            <td class="pb-50">
              {{ modelData.address.city.daira.name }}
            </td>
          </tr>
          <tr>
            <th>
              <feather-icon
                icon="FlagIcon"
                class="mr-75"
              />
              <span class="font-weight-bold">City</span>
            </th>
            <td>
              {{ modelData.address.city.name }}
            </td>
          </tr>
          <tr>
            <th>
              <feather-icon
                icon="MapIcon"
                class="mr-75"
              />
              <span class="font-weight-bold">Address</span>
            </th>
            <td>
              {{ modelData.address.district }}
            </td>
          </tr>
          
        </table>
      </b-col>
    </b-row>
  </b-card>
</template>

<script>
import {
  BCard, BButton, BAvatar, BRow, BCol,
} from 'bootstrap-vue'
import { avatarText } from '@core/utils/filter'
// import useUsersList from '../users-list/useUsersList'

export default {
  components: {
    BCard, BButton, BRow, BCol, BAvatar,
  },
  props: {
    modelData: {
      type: Object,
      required: true
    },
  },
  setup() {
    // const { resolveUserRoleVariant } = useUsersList()
    return {
      avatarText,
      // resolveUserRoleVariant,
    }
  },
}
</script>

<style>

</style>
