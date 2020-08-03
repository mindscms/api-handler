<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Dashboard Component</div>
                    <div class="card-body">

                        <div class="posts" v-for="(post, index) in posts" :key="index">
                            <em v-text="post.created_at"></em><br>
                            <h3 v-text="post.title"></h3>
                            <p v-text="post.body"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "dashboard-component",
        mounted() {
            if ( this.$store.getters.currentUser != null) {
                return this.getPosts();
            } else {
                this.$router.push({ path: '/login' })
            }
        },
        data() {
            return {
                posts: []
            }
        },
        methods: {

            getPosts() {
                const tk = JSON.parse(localStorage.getItem('user'));

                const headers = {
                    'Content-Type' : 'application/json',
                    'Authorization' : 'Bearer ' + tk['token']
                };
                axios.get('api/my_posts', {headers: headers}).then(res => {
                    this.posts = res.data.data;
                }).catch(error => {
                    console.log(error)
                })
            }
        }


    }
</script>
