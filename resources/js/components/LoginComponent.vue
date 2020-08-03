<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form @submit.prevent="login">
                            <div class="form-group row" v-if="authError">
                                <p class="error">
                                    {{ authError }}
                                </p>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-label text-right">Email</label>
                                <div class="col-6">
                                    <input type="text" name="email" id="email" v-model="form.email" required class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-4 col-form-label text-right">Password</label>
                                <div class="col-6">
                                    <input type="password" name="password" id="password" v-model="form.password" required class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-8 offset-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import {login} from '../auth';
    export default {
        data() {
            return {
                form: {
                    email: '',
                    password: '',
                },
                error: null
            }
        },
        methods: {
            login() {
                this.$store.dispatch('login');
                login(this.$data.form).then(res => {
                    this.$store.commit('loginSuccess', res);
                    this.$router.push({path: '/dashboard'});
                }).catch(err => {
                    this.$store.commit('loginFailed')
                })
            }
        },
        computed: {
            authError() {
                return this.$store.getters.authError
            },
            registeredUser() {
                return this.$store.getters.registeredUser
            }
        }
    }
</script>

<style scoped>
    .error {
        text-align: center;
        color: red;
    }
</style>
