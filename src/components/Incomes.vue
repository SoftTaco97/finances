<template>
  <div>
    <b-container>
        <appIncomeCard :amount=1000
                    title="Test Card"
                    desc="Test card"
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