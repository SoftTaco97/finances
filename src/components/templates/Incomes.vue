<template>
  <div>
    <b-container>
        <appIncomeCard v-for="card in incomeCards" :key="card.id"
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
    // Income Card Template
    import appIncomeCard from './IncomeCard.vue';

    export default {
        name: 'appIncomes',
        data: function(){
            return {
                incomeCards: [],
            }
        },
        props: {
            isLoggedIn: Boolean,
        },
        methods:{
            addCard(){
                this.incomeCards.push({
                    'amount': 1000,
                    'title': 'Title',
                    'desc': 'Desc'
                })
            }
        },
        components: {
            appIncomeCard
        }, 
        created(){
            if(this.isLoggedIn){
                this.incomeCards.push(
                    {
                        'amount': 1000,
                        'title': 'Title',
                        'desc': 'Desc'
                    }
                );
                return;
            }

            this.incomeCards.push({
                'amount': 9999999999999999999,
                'title': 'Income Card Example',
                'desc': 'Income Card Example - Remove me'
            });
        }
    }
</script>