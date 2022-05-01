<template>
  <div>
    <!-- Alert: No item found -->

    <b-row class="match-height">
      <!-- Description lists horizontal -->
      <b-col md="8" v-if="modelData">
        <b-card no-body>
          <b-badge
            pill
            class="badge-glow"
            :variant="
              modelData.etat
                ? `${
                    etatColors.find((item) => item.id === modelData.etat.id)
                      .colorC
                  }`
                : 'primary'
            "
          >
            {{ modelData.etat ? modelData.etat.name : null }}
          </b-badge>

          <b-card-header>
            <!-- <b-card-title>
              Transaction Details 
            </b-card-title> -->
          </b-card-header>
          <b-card-body>
            <dl class="row">
              <dt class="col-sm-3">Send Date</dt>
              <dd class="col-sm-9">
                {{ modelData.send_date }}
              </dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-3">Receive Date</dt>
              <dd class="col-sm-9">
                {{ modelData.receive_date }}
              </dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-3">Time send Date</dt>
              <dd class="col-sm-9 ml-auto">
                {{ modelData.time_send_date }}
              </dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-3">Time receive Date</dt>
              <dd class="col-sm-9 ml-auto">
                {{ modelData.time_receive_date }}
              </dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-3">Source</dt>
              <dd class="col-sm-9">
                {{ modelData.source ? modelData.source.name : null }}
              </dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-3 text-truncate">Destination</dt>
              <dd class="col-sm-9">
                {{ modelData.destination ? modelData.destination.name : null }}
              </dd>
            </dl>

            <!-- <dl class="row">
              <dt class="col-sm-3">
                Nesting
              </dt>
              <dd class="col-sm-9">
                <dl class="row">
                  <dt class="col-sm-4">
                    Nested definition list
                  </dt>
                  <dd class="col-sm-8">
                    Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.
                  </dd>
                </dl>
              </dd>
            </dl> -->
          </b-card-body>
        </b-card>
      </b-col>
      <!--/ Description lists horizontal -->
    </b-row>

    <template v-if="modelData">
      <!-- First Row -->
      <!-- <b-row>
        <b-col
          cols="12"
          xl="9"
          lg="8"
          md="7"
        >
          <user-view-user-info-card :model-data="modelData" />
        </b-col>
        <b-col
          cols="12"
          md="5"
          xl="3"
          lg="4"
        >
          <user-view-user-plan-card :model-data="modelData" />
        </b-col>
      </b-row> -->

      <!-- <b-row>
        <b-col
          cols="12"
          lg="6"
        >
          <user-view-user-timeline-card />
        </b-col>
        <b-col
          cols="12"
          lg="6"
           >
          <user-view-user-permissions-card />
        </b-col>
      </b-row> -->

      <b-col md="12">
        <b-card-actions title="Orders of the transaction" action-collapse>
          <orders-list :transaction="modelData" />
        </b-card-actions>
      </b-col>
    </template>
  </div>
</template>

<script>
import store from "@/store";
import router from "@/router";
import { ref, onUnmounted } from "@vue/composition-api";
import {
  BRow,
  BCol,
  BAlert,
  BLink,
  BCollapse,
  BCard,
  BCardHeader,
  BCardBody,
  BBadge,
} from "bootstrap-vue";
import ordersList from "@/views/pages/orders/index.vue";
// import agenciesList from '@/views/pages/agencies/index.vue'
import invoiceStoreModule from "../invoiceStoreModule";
import BCardActions from "@core/components/b-card-actions/BCardActions.vue";
// import UserViewUserInfoCard from './UserViewUserInfoCard.vue'
// import UserViewUserPlanCard from './UserViewUserPlanCard.vue'
// import UserViewUserTimelineCard from './UserViewUserTimelineCard.vue'
// import UserViewUserPermissionsCard from './UserViewUserPermissionsCard.vue'

export default {
  components: {
    BRow,
    BCol,
    BAlert,
    BLink,
    BCollapse,
    BCardActions,
    BCard,
    BCardHeader,
    BCardBody,
    BBadge,
    // agenciesList,
    // Local Components
    // UserViewUserInfoCard,
    // UserViewUserPlanCard,
    ordersList,
    // UserViewUserTimelineCard,
    // UserViewUserPermissionsCard,

    // InvoiceList,
  },
  // created() {
  // },
  setup() {
    const modelData = ref(null);

    const etats = ref([]);
    const etatColors = ref([
      {
        colorC: "primary",
        id: null,
      },

      {
        colorC: "danger",
        id: null,
      },

      {
        colorC: "warning",
        id: null,
      },
      {
        colorC: "success",
        id: null,
      },
    ]);

    const MODULE_NAME = "app-transactions";

    // Register module
    if (!store.hasModule(MODULE_NAME))
      store.registerModule(MODULE_NAME, invoiceStoreModule);

    // UnRegister on leave
    onUnmounted(() => {
      if (store.hasModule(MODULE_NAME)) store.unregisterModule(MODULE_NAME);
    });

    const refetchTransaction = () => {
      store
        .dispatch("app-transactions/fetchInvoice", {
          id: router.currentRoute.params.id,
        })
        .then((response) => {
          modelData.value = response.data;
        })
        .catch((error) => {
          if (error.response.status === 404) {
            modelData.value = undefined;
          }
        });
    };
    store
      .dispatch("_UPDATE_MORPH_TYEPS", {
        type: "TransactionEtat",
      })
      .then((res) => {
        etats.value = res.data;
        etats.value.map((item, i) => {
          etatColors.value[i].id = item.id;
        });
        console.log(etatColors.value);
      });

    refetchTransaction();

    return {
      modelData,
      refetchTransaction,
      etats,
      etatColors,
    };
  },
};
</script>

<style>
</style>
