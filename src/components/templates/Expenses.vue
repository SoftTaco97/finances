<template>
  <div>
    <b-container>
        <appExpenseCard v-for="card in expenseCards" :key="card.id"
                    :amount=card.amount
                    :title=card.title
                    :desc=card.desc
                    />
        <div class="text-center mt-3">
            <b-button @click="addCard" 
                    variant="primary" 
                    class="float-none">+
            </b-button>
        </div>
    </b-container>
  </div>
</template>

<script>
    // Expense Card Template
    import appExpenseCard from './ExpenseCard.vue';

    export default {
        name: 'appExpenses',
        data: function(){
            return {
                expenseCards: [],
            }
        },
        props: {
            isLoggedIn: Boolean,
        },
        methods:{
            addCard(){
                this.expenseCards.push({
                    'amount': 1000,
                    'title': 'Expense Card',
                    'desc': 'Expense Card'
                })
            }
        },
        components: {
            appExpenseCard
        }, 
        created(){
            if(this.isLoggedIn){
                this.expenseCards.push(
                    {
                        'amount': 1000,
                        'title': 'Expense Card',
                        'desc': 'Expense Card'
                    }
                );
                return;
            }
            this.expenseCards.push({
                'amount': 9999999999999999999,
                'title': 'Expense Card Example',
                'desc': 'Expense Card Example - Remove me'
            })
        }
    }
</script>