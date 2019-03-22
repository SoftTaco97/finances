<template>
  <div>
      <b-container fluid>
          <b-row>
            <b-col xs="12">
                <b-card :title="Title">
                    <b-card-text class="w-100">
                        {{Desc}}
                    </b-card-text>
                    <b-card-text class="float-left ml-2">
                        ${{Amount}}
                    </b-card-text>
                    <b-button variant="secondary" class="float-right">x</b-button>
                </b-card>
            </b-col>
          </b-row>
      </b-container>
  </div>
</template>

<script>
    export default {
        name: 'FinanceCard',
        props: {
            Amount: Number,
            Title: String,
            Desc: String,
        },
        methods: {
        }
    }
</script>