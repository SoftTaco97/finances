<template>
  <div>
    <b-container>
        <appExpenseCard :amount=1000
                    title="Expense Card"
                    desc="Expense card"
                    />
    </b-container>
  </div>
</template>

<script>
    // Expense Card Template
    import appExpenseCard from './ExpenseCard.vue';

    export default {
        name: 'appExpenses',
        data: function(){
            return {}
        },
        props: {},
        components: {
            appExpenseCard
        }
    }
</script>