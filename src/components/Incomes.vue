<template>
  <div>
    <b-container>
        <appIncomeCard :amount=1000
                    title="Income Card"
                    desc="Income card"
                    />
    </b-container>
  </div>
</template>

<script>
    // Income Card Template
    import appIncomeCard from './IncomeCard.vue';

    export default {
        name: 'appIncomes',
        data: function(){
            return {}
        },
        props: {},
        components: {
            appIncomeCard
        }
    }
</script>