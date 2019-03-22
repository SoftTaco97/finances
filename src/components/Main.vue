<template>
    <div>
        <b-nav tabs class="float-right">
        <b-nav-item active><router-link to="/app/">App</router-link></b-nav-item>
        <b-nav-item><router-link to="/login/">Login</router-link></b-nav-item>
        </b-nav>
        <appFinance></appFinance>
    </div>
</template>

<script>
    // Finance Template
    import appFinance from './Finances.vue';
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
            appFinance
        }
    }
</script>