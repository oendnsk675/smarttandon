<template>
  <!-- nav -->
    <div class="smx:hidden md:hidden flex items-center justify-between w-full h-16 px-10">
        <!-- logo -->
        <div class="mt-10 bg-gray-100 p-3 bg-opacity-90 rounded-xl">
            <svg id="logo_os" data-name="logo os" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35.037" height="30.041" viewBox="0 0 35.037 30.041">
            <defs>
                <linearGradient id="linear-gradient" x1="-0.136" y1="0.45" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#9374ec" stop-opacity="0.302"/>
                <stop offset="1" stop-color="#3106ab"/>
                </linearGradient>
            </defs>
            <path id="Path_5" data-name="Path 5" d="M59.96,0H43V5.653H59.96v5.653h5.653V0Z" transform="translate(-37.347)" fill="url(#linear-gradient)"/>
            <path id="Path_6" data-name="Path 6" d="M0,48.653v16.96H16.96V59.96H5.653V43H0Z" transform="translate(0 -37.347)" fill="url(#linear-gradient)"/>
            <path id="Path_7" data-name="Path 7" d="M155.328,105.719v-5.653h-5.588V100h-5.653v11.241H138.5v5.653h11.307v-5.653h-.066v-5.522Z" transform="translate(-120.291 -86.853)" fill="#151513"/>
            </svg>
        </div>
        <!-- end logo -->
        <div class="flex gap-10 mt-6">
            <div class="">
                <router-link to="#"
                    class="text-gray-200 tracking-wider transition duration-200 border-b-4 border-transparent hover:border-gray-300 py-4 hover:text-white">TENTANG
                    KAMI</router-link>
            </div>
            <div>
                <router-link to="#"
                    class="text-gray-200 tracking-wider transition duration-200 border-b-4 border-transparent hover:border-gray-300 py-4 hover:text-white">KONTAK</router-link>
            </div>
            <div>
                <router-link to="/login"
                    class="text-white tracking-wider border-b-4 shadow-inner bg-gray-500 bg-opacity-20 hover:opacity-40 border-light-blue-400 p-2 rounded-lg">MASUK</router-link>
            </div>
        </div>
    </div>
    <!-- /nav -->
</template>

<script>
export default {
    name: 'navbar'
}
</script>

<style>

</style>