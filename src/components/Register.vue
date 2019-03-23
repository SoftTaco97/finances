<template>
  <div>
    <b-container>
        <h1 class="display-4">Register</h1>
        <b-alert variant="danger" 
                dismissible 
                v-model="showError"
                >
          {{errorMessage}}
        </b-alert>
        <b-form @submit="formSubmit" v-if="showForm">
          <b-form-group id="emailGroup" 
                        label="Email address:" 
                        label-for="email" 
                        description="We'll never share your email with anyone else."
                        >
            <b-form-input id="email"
                          type="email"
                          v-model="email"
                          required
                          placeholder="Enter email" 
                          />
          </b-form-group>

          <b-form-group id="passwordGroup" 
                        label="Your Password:" 
                        label-for="password"
                        >
            <b-form-input id="password"
                          type="password"
                          v-model="password"
                          required
                          placeholder="Enter password" 
              />
          </b-form-group>

        <b-form-group id="confirmPasswordGroup" 
                        label="Confirm Your Password:" 
                        label-for="confirmPassword"
                        >
            <b-form-input id="confirmPassword"
                          type="password"
                          v-model="confirmPassword"
                          required
                          placeholder="Confirm Password" 
              />
          </b-form-group>

          <b-button type="submit" 
                    variant="primary"
                    >
                    Submit
          </b-button>
          <span class="form-text text-muted pt-3">Already have an account? <router-link to='/login/'>Login Here</router-link></span>
      </b-form>
      <b-spinner label="Loading..." v-if="showSpinner"/>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'appLoginScreen',
  data: function(){
    return {
      email: '',
      password: '',
      showForm: true,
      showSpinner: false,
      showError: false,
      errorMessage: '',
    }
  },
  methods: {
    formSubmit: function(event){
      /* Stopping the Form from submitting */
      event.preventDefault();

      /* Removing form, showing spinner */
      this.showForm = false;
      this.showSpinner = true;

      /* Making request */
      setTimeout(function(){
        this.errorMessage = 'Incorrect Username';
        this.showSpinner = false;
        this.showForm = true;
        this.showError = true;
      }.bind(this), 500);
    }
  }
}
</script>