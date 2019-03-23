<template>
  <div>
      <b-container fluid>
          <b-row>
              <b-col xs="12">
                <b-card 
                    title="These are not the droids you are looking for.." 
                    sub-title="*Moves hand like a Jedi*"
                    >
                    <b-card-text>
                        Basically, the page you tried to access isn't here..
                    </b-card-text>

                    <b-card-text>
                        <em>Awkward....</em>
                    </b-card-text>
                    <b-button variant="primary" class="mr-1">
                        <router-link to="/app/" style="color: white">
                            Maybe try going to the main page?
                        </router-link>
                    </b-button>
                    <b-button variant="primary" class="ml-1">
                        <router-link to="/login/" style="color: white">
                            Maybe try logging in?
                        </router-link>
                    </b-button>
                </b-card>
              </b-col>
          </b-row>
      </b-container>
  </div>
</template>

<script>
export default {
  name: 'app404',
}
</script>