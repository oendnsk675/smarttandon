<template>
    <!-- <div class="w-full flex justify-center items-center"> -->
        <div class="rounded-full loader">
        </div>
    <!-- </div> -->
</template>

<script>
export default {
    name: 'loader'
}
</script>

<style scoped>
.loader{
    border: 10px solid #101C43;
    border-top: 10px solid skyblue;
    animation : loader 2s infinite linear
}

@keyframes loader {
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}
</style>