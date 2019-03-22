<template>
  <div>
    <b-container>
        <appFinanceCard :amount=1000
                    title="Test Card"
                    desc="Test card"
                    />
    </b-container>
  </div>
</template>

<script>
    // Finance Card Template
    import appFinanceCard from './FinanceCard.vue';

    export default {
        name: 'appFinances',
        data: function(){
            return {}
        },
        props: {},
        components: {
            appFinanceCard
        }
    }
</script>