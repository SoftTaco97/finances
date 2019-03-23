<template>
  <div>
    <b-row v-if="showCard">
        <b-col xs="12">
            <b-card :title="title">
                <b-card-text class="w-100">
                    {{desc}}
                </b-card-text>
                <b-card-text class="float-left ml-2">
                    ${{amount}}
                </b-card-text>
                <b-button @click="deleteCard" 
                            variant="secondary" 
                            class="float-right">x
                </b-button>
            </b-card>
        </b-col>
    </b-row>
  </div>
</template>

<script>
    export default {
        name: 'appIncomeCard',
        data: function(){
            return {
                showCard: true
            }
        },
        props: {
            amount: Number,
            title: String,
            desc: String,
        },
        methods: {
            deleteCard: function(){
                this.showCard = false
            }
        }
    }
</script>