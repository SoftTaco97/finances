<template>
  <div>
      <b-container>
          <FinanceCard Amount="1000"
                       Title="Test Card"
                       Desc="Test card" 
                       />
      </b-container>
  </div>
</template>

<script>
    // Finance Template
    import FinanceCard from './FinanceCard.vue';
    // Income Template
    // import IncomeCard from './IncomeCard.vue'
    export default {
        name: 'Main',
        data: function(){
            return {
            }
        },
        methods: {
        },
        components: {
            FinanceCard
        }
    }
</script>