<template>
  <div>
      <b-container fluid v-if="showCard">
          <b-row>
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
      </b-container>
  </div>
</template>

<script>
    export default {
        name: 'appFinanceCard',
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