<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="navbar-header">
                <router-link class="navbar-brand" :to="{ name: 'home' }">Laravel API</router-link>
            </div>
            <ul class="nav navbar-nav">
                <router-link :to="{name: 'login' }" v-if="!currentUser" class="nav-item nav-link">Login</router-link>
                <router-link :to="{name: 'dashboard' }" v-if="currentUser" class="nav-item nav-link">Dashboard</router-link>

                <a  v-if="currentUser" @click.prevent="logout" class="nav-item nav-link">Logout</a>
            </ul>
        </div>
    </nav>
</template>

<script>
    export default {
        methods: {
            logout() {
                this.$store.commit('logout');
                this.$router.push('/login');
            }
        },

        computed: {
            currentUser() {
                return this.$store.getters.currentUser
            }
        }
    }
</script>

<style scoped>

</style>
