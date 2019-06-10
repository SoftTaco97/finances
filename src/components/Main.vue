<template>
    <div>
        <b-container fluid>
            <b-row>
                <b-col :sm=getMainViewStyle() >
                    <b-tabs card>
                        <b-tab title="Expenses">
                            <b-card-text>
                                <appExpenses
                                    :isLoggedIn=isLoggedIn
                                />
                            </b-card-text>
                        </b-tab>
                        <b-tab title="Incomes">
                            <b-card-text>
                                <appIncomes
                                    :isLoggedIn=isLoggedIn
                                />
                            </b-card-text>
                        </b-tab>
                    </b-tabs>
                </b-col>
                <b-col sm="1" v-if="!isLoggedIn">
                    <b-button variant="primary" class="float-left">
                        <router-link to="/login/" style="color: white;">
                            Login
                        </router-link>
                    </b-button>
                    <b-button variant="primary" class="float-left mt-md-2">
                        <router-link to="/register/" style="color: white;">
                            Register
                        </router-link>
                    </b-button>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
    // Expenses Template
    import appExpenses from './templates/Expenses.vue';
    // Income Template
    import appIncomes from './templates/Incomes.vue';

    export default {
        name: 'appMain',
        data: function(){
            return {
                isLoggedIn: false,
            }
        },
        methods: {
            /**
             *  Function to get if the user is logged in 
             */
            getLoggedIn(){
                // Getting Parameters 
                const params = new FormData();
                params.append('request_type', 'user_logged_in');

                /* Making API Call */
                this.$http({
                    method: 'POST',
                    url: './server/',
                    data: params
                })
                .then(response => {
                    this.isLoggedIn = response.data.user_logged_in;
                });
            },
            /**
             * Function to change the main area's width based on if the user is logged in
             */
            getMainViewStyle(){
                return (!this.isLoggedIn)? '11': '12';
            },
            /**
             * Function to get all of the info from the database for those who are logged in
             */
            getInfo(){
                /* Profile */
                // getUserProfile();
            },
        },
        components: {
            appExpenses,
            appIncomes
        }, 
        created: function(){
            this.getLoggedIn();
        }
    }
</script>