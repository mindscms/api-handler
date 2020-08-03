<template>
    <div class="container-fluid">
        <Navigation/>
        <div class="content pt-4">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import Navigation from "./Navigation";
    export default {
        name: 'main-app',
        components: {Navigation}
    }
</script>
