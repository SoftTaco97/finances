<template>
    <div>
        <b-container fluid>
            <b-row>
                <b-col sm="11">
                    <b-tabs card>
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
                </b-col>
                <b-col sm="1">
                    <b-button variant="primary" class="float-left">
                        <router-link to="/login/" style="color: white;">
                            Login
                        </router-link>
                    </b-button>
                </b-col>
            </b-row>
        </b-container>
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