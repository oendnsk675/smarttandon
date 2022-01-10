<template>
    <!-- menubar responsive -->
    <div class="lg:hidden fixed w-full bg-gray-700 bg-opacity-75 z-50">
        <div class="flex items-center justify-end px-6 pb-2">
            <button id="btn_menubar" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="hover:opacity-75 h-10 w-h-10 mt-4 mr-4 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <div id="list_menubar" class="pt-4 w-full absolute z-50 bg-gray-700 bg-opacity-75 transition ease-out duration-500">
            <a href="#">
                <p
                    class="border-t border-indigo-700 text-white hover:bg-primary hover:opacity-75 text-center text-xl font-medium py-3">
                    Tentang
                </p>
            </a>
            <a href="#">
                <p
                    class="border-t border-indigo-700 text-white hover:bg-primary hover:opacity-75 text-center text-xl font-medium py-3">
                    Kontak
                </p>
            </a>
            <a href="/register">
                <p
                    class="border-t border-indigo-700 text-white hover:bg-primary hover:opacity-75 text-center text-xl font-medium py-3">
                    Masuk
                </p>
            </a>

        </div>
    </div>
    <!-- end menubar responsive -->
</template>

<script>
export default {
    name: 'menubar'
}
</script>

<style>

</style>