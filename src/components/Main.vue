<template>
  <div>
      <b-container>
          <appFinanceCard :amount=1000
                       title="Test Card"
                       desc="Test card"
                       />
      </b-container>
  </div>
</template>

<script>
    // Finance Template
    import appFinanceCard from './FinanceCard.vue';
    // Income Template
    // import IncomeCard from './IncomeCard.vue'
    export default {
        name: 'appMain',
        data: function(){
            return {
            }
        },
        methods: {
        },
        components: {
            appFinanceCard
        }
    }
</script>