<template>
    <div>
        <b-nav tabs class="float-right">
        <b-nav-item><router-link to="/login/">Login</router-link></b-nav-item>
        </b-nav>
       <b-card no-body>
            <b-tabs pills card vertical>
                <b-tab title="Expenses">
                    <b-card-text>
                        <appExpenses/>
                    </b-card-text>
                </b-tab>
                <b-tab title="Incomes">
                    <b-card-text>
                        <appIncomes/>
                    </b-card-text>
                </b-tab>
            </b-tabs>
        </b-card>

    </div>
</template>

<script>
    // Expenses Template
    import appExpenses from './Expenses.vue';
    // Income Template
    import appIncomes from './Incomes.vue'
    export default {
        name: 'appMain',
        data: function(){
            return {
            }
        },
        methods: {
        },
        components: {
            appExpenses,
            appIncomes
        }
    }
</script>