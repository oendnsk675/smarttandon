<template>
    <div class="md:flex relative justify-between items-center lg:h-56 lg:pl-4 lg:px-4 lg:rounded-xl lg:bg-gradient-to-tl lg:from-green-500 lg:to-green-300" 
    @click="user.menu_setting = false">
        

        <span class="w-full flex relative">
            <div class="relative z-20 w-full">
                <h1 class="font-nunito lg:text-3xl text-lg text-white lg:w-7/12 lg:mt-8 ">
                Selamat datang, {{username}}
                </h1>
                <h3 class="lg:font-medium font-normal text-base lg:text-gray-800 text-gray-100 lg:w-7/12 opacity-60">
                    {{user.info}}
                </h3>
            </div>
            <img class="w-7/12 md:hidden -right-2 absolute z-40" src="https://ik.imagekit.io/eastlombok/smarttandon/icon_hero_dashboard_32drMGfg-.png?updatedAt=1633615607948" alt="">
        </span>
        <!-- avatar -->
        <div class="lg:hidden">
            <button @click.stop="show_menu_setting">
                <!-- photo -->
                <div class="w-10 h-10 rounded-full bg-cover">
                    <img class="rounded-full" :src="user.photo" alt="" srcset="">
                </div>
                <!-- end photo -->
            </button>
        </div>
        <!-- /avatar -->

        <!-- menu -->
        <div @click.stop
        :class="{
            'invisible' : !user.menu_setting, 
            'transition-all duration-300 transform translate-y-10 ease-in-out' : user.menu_setting,
            'transition-all duration-300 transform translate-y-0 ease-in-out' : !user.menu_setting,
            }" class="absolute lg:hidden w-40 right-0 top-5 p-3 box-border rounded-md bg-secondary shadow-inner drop-shadow-xl bg-opacity-80"
        >
            <div>
                <router-link to="/account" class="md:flex gap-7 items-center hover:opacity-50 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 28.363 33.996">
                    <g id="User" transform="translate(-263.4 -334.004)">
                    <path id="Path_11" data-name="Path 11" d="M95.22,16.376a7.923,7.923,0,0,0,5.79-2.4,7.923,7.923,0,0,0,2.4-5.789,7.924,7.924,0,0,0-2.4-5.789,8.186,8.186,0,0,0-11.579,0,7.923,7.923,0,0,0-2.4,5.789,7.923,7.923,0,0,0,2.4,5.79,7.925,7.925,0,0,0,5.789,2.4Zm0,0" transform="translate(182.147 334.003)" fill="#fff"/>
                    <path id="Path_12" data-name="Path 12" d="M28.294,257.036a20.225,20.225,0,0,0-.275-2.148,16.925,16.925,0,0,0-.528-2.16,10.668,10.668,0,0,0-.888-2.014,7.6,7.6,0,0,0-1.339-1.745,5.9,5.9,0,0,0-1.923-1.208,6.647,6.647,0,0,0-2.455-.444,2.492,2.492,0,0,0-1.331.564c-.4.26-.866.561-1.386.894a7.944,7.944,0,0,1-1.794.79,6.966,6.966,0,0,1-4.388,0,7.925,7.925,0,0,1-1.793-.79c-.516-.33-.983-.631-1.388-.894a2.489,2.489,0,0,0-1.33-.564,6.638,6.638,0,0,0-2.455.445A5.9,5.9,0,0,0,3.1,248.969a7.6,7.6,0,0,0-1.338,1.745,10.689,10.689,0,0,0-.888,2.015,16.966,16.966,0,0,0-.528,2.16,20.153,20.153,0,0,0-.275,2.149c-.045.651-.068,1.326-.068,2.008a5.645,5.645,0,0,0,1.677,4.271A6.035,6.035,0,0,0,6,264.891H22.366a6.034,6.034,0,0,0,4.32-1.576,5.643,5.643,0,0,0,1.677-4.271c0-.685-.023-1.361-.069-2.008Zm0,0" transform="translate(263.401 103.109)" fill="#fff"/>
                    </g>
                    </svg>
                    <span class="text-gray-100 text-base">Akun</span>
                </router-link>
            </div>
            <div v-if="state == 'dashboard'" class="mt-2">
                <div to="/user/notifications" class="md:flex gap-7 items-center hover:opacity-50 transition-opacity" @click="showMenuMobile('Notifications')">
                    <svg v-if="notification_reading_cond" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 19.98 22.542"><g transform="translate(0 0)"><path d="M18.2,619.419H2.7a1.644,1.644,0,0,1-1.069-2.893A6.305,6.305,0,0,0,3.876,611.7v-2.618a6.579,6.579,0,0,1,5.636-6.5v-1.014a.939.939,0,1,1,1.878,0v.552a6.475,6.475,0,0,0,4.535,11.1,6.532,6.532,0,0,0,1.256-.122,6.25,6.25,0,0,0,2.079,3.42,1.644,1.644,0,0,1-1.061,2.9Z" transform="translate(-1.059 -600.633)" fill="#fff"/><path d="M138.4,450.818A3.528,3.528,0,0,0,141.855,448h-6.9a3.528,3.528,0,0,0,3.451,2.818Zm0,0" transform="translate(-129.011 -428.275)" fill="#fff"/><path d="M266.238,5.113A5.113,5.113,0,1,1,261.125,0,5.113,5.113,0,0,1,266.238,5.113Zm0,0" transform="translate(-246.258 1)" fill="#68d0ee" class="animate-pulse"/></g></svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 18.785 22.542"><g transform="translate(0 0)"><path d="M18.2,15.886a6.292,6.292,0,0,1-2.234-4.814V8.454a6.58,6.58,0,0,0-5.636-6.5V.94a.939.939,0,0,0-1.879,0V1.954a6.579,6.579,0,0,0-5.636,6.5v2.619A6.3,6.3,0,0,1,.575,15.894a1.644,1.644,0,0,0,1.069,2.892h15.5a1.644,1.644,0,0,0,1.06-2.9Zm0,0" fill="#fff"/><path d="M138.4,450.818A3.528,3.528,0,0,0,141.855,448h-6.9a3.528,3.528,0,0,0,3.451,2.818Zm0,0" transform="translate(-129.011 -428.275)" fill="#fff"/></g></svg>
                    <span class="text-gray-100 text-base">Notifikasi</span>
                </div>
            </div>
            <div v-if="state == 'dashboard'" class="mt-2">
                <div class="md:flex gap-7 items-center hover:opacity-50 transition-opacity" @click="showMenuMobile('Devices')">
                    <svg v-if="getStateDevice" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 23.037 24.381"><g transform="translate(-28.756 599.271)"><path d="M14.319,21.716a1.234,1.234,0,0,1-1.23-1.234V18.548h-1v1.934a1.232,1.232,0,1,1-2.463,0V18.548h-1v1.934a1.231,1.231,0,1,1-2.462,0V18.549a3.25,3.25,0,0,1-3-3H1.234a1.231,1.231,0,1,1,0-2.462H3.167v-1H1.234a1.232,1.232,0,1,1,0-2.463H3.167v-1H1.234a1.231,1.231,0,1,1,0-2.462H3.166a3.266,3.266,0,0,1,3-3V1.234a1.231,1.231,0,1,1,2.462,0V3.167h1V1.234a1.232,1.232,0,1,1,2.464,0V3.167h.31a6.211,6.211,0,0,0,1.08,2.391H7.655a2.1,2.1,0,0,0-2.1,2.1v6.407a2.1,2.1,0,0,0,2.1,2.1h6.405a2.1,2.1,0,0,0,2.1-2.1V7.65a6.3,6.3,0,0,0,5.552-.395,1.276,1.276,0,0,1,.008.142,1.234,1.234,0,0,1-1.234,1.231H18.549v1h1.933a1.231,1.231,0,1,1,0,2.462H18.549v1h1.932a1.231,1.231,0,1,1,0,2.462H18.549a3.266,3.266,0,0,1-3,3v1.932A1.234,1.234,0,0,1,14.319,21.716Zm-.334-7.6H7.732a.13.13,0,0,1-.13-.13V7.732a.131.131,0,0,1,.13-.13h6.253a.13.13,0,0,1,.13.13v6.253A.13.13,0,0,1,13.985,14.115Z" transform="translate(28.756 -596.607)" fill="#fff"/><path d="M265.015,4.5a4.5,4.5,0,1,1-4.5-4.5A4.5,4.5,0,0,1,265.015,4.5Zm0,0" transform="translate(-213.222 -599.271)" fill="#68d0ee" class="animate-pulse"/></g></svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 21.716 21.716"><g transform="translate(-28.756 596.606)"><g transform="translate(28.756 -596.606)"><g transform="translate(0 0)"><path d="M22.129,15.745H15.876a.131.131,0,0,0-.131.131v6.254a.13.13,0,0,0,.131.13h6.253a.13.13,0,0,0,.13-.13V15.876A.131.131,0,0,0,22.129,15.745Z" transform="translate(-8.144 -8.144)" fill="#fff"/><path d="M20.482,12.09a1.231,1.231,0,1,0,0-2.462H18.549v-1h1.933a1.231,1.231,0,1,0,0-2.463H18.549a3.25,3.25,0,0,0-3-3V1.235a1.231,1.231,0,1,0-2.462,0V3.168h-1V1.235a1.232,1.232,0,1,0-2.463,0V3.168h-1V1.235a1.231,1.231,0,1,0-2.462,0V3.168a3.25,3.25,0,0,0-3,3H1.234a1.231,1.231,0,1,0,0,2.463H3.167v1H1.234a1.231,1.231,0,1,0,0,2.463H3.167v1H1.234a1.231,1.231,0,1,0,0,2.462H3.167a3.249,3.249,0,0,0,3,3v1.933a1.231,1.231,0,1,0,2.462,0V18.55h1v1.934a1.232,1.232,0,1,0,2.463,0V18.55h1v1.934a1.231,1.231,0,1,0,2.462,0V18.55a3.249,3.249,0,0,0,3-3h1.933a1.231,1.231,0,1,0,0-2.462H18.549v-1Zm-4.325,1.972a2.091,2.091,0,0,1-2.1,2.1H7.655a2.091,2.091,0,0,1-2.1-2.1V7.656a2.091,2.091,0,0,1,2.1-2.1h6.406a2.091,2.091,0,0,1,2.1,2.1v6.407Z" transform="translate(0 -0.001)" fill="#fff"/></g></g></g></svg>
                    <span class="text-gray-100 text-base">Perangkat</span>
                </div>
            </div>
            <div v-if="state == 'dashboard'" class="mt-2">
                <div class="md:flex gap-7 items-center hover:opacity-50 transition-opacity" @click="showMenuMobile('Broker')">
                    <svg v-if="client.connected" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 32.235 21.566"><g transform="translate(0 -104.618)"><path d="M26.506,20.242H5.729a5.533,5.533,0,0,1-4.037-1.781,6.284,6.284,0,0,1-.3-8.231,5.712,5.712,0,0,1,3.4-2.049V8.1A7.848,7.848,0,0,1,12.34,0a7.381,7.381,0,0,1,6.473,3.939,5.436,5.436,0,0,1,1.4-.665,6.868,6.868,0,0,0-.036.7A6.761,6.761,0,0,0,30.428,9.764a6.279,6.279,0,0,1,.115,8.7A5.533,5.533,0,0,1,26.506,20.242Z" transform="translate(0 105.942)" fill="#fff"/><path d="M266.618,5.3a5.3,5.3,0,1,1-5.3-5.3A5.3,5.3,0,0,1,266.618,5.3Zm0,0" transform="translate(-234.382 104.618)" fill="#68d0ee" class="animate-pulse"/></g></svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 33.235 21.242"><g transform="translate(0.5 -105.441)"><path d="M27.383,114.169a5.813,5.813,0,0,0-5.6-5.133,5.35,5.35,0,0,0-2.971.9A7.415,7.415,0,0,0,12.34,106a7.849,7.849,0,0,0-7.555,8.1c0,.028,0,.056,0,.084A6.029,6.029,0,0,0,0,120.169a5.938,5.938,0,0,0,5.729,6.073H26.506a5.938,5.938,0,0,0,5.729-6.073A6.022,6.022,0,0,0,27.383,114.169Z" transform="translate(0 -0.059)" fill="#e23c47" stroke="#f2dddd" stroke-width="1"/></g></svg>
                    <span class="text-gray-100 text-base">Broker</span>
                </div>
            </div>
            <div v-if="user.role=='admin'" class="mt-2">
                <router-link to="/list_user" class="md:flex gap-7 items-center hover:opacity-50 transition-opacity">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="transition-all transform hover:rotate-90 hover:scale-105 hover:opacity-50" width="17" height="17" viewBox="0 0 32.001 32.001">
                    <path id="settings" d="M29.055,12.05h-.679a12.922,12.922,0,0,0-.833-2.006l.481-.481a2.946,2.946,0,0,0,0-4.167L26.6,3.977a2.946,2.946,0,0,0-4.167,0l-.482.482a12.931,12.931,0,0,0-2.006-.833V2.946A2.949,2.949,0,0,0,17,0H15A2.949,2.949,0,0,0,12.05,2.946v.679a12.919,12.919,0,0,0-2.006.833l-.481-.481a2.946,2.946,0,0,0-4.167,0L3.977,5.4a2.946,2.946,0,0,0,0,4.167l.482.482a12.92,12.92,0,0,0-.833,2.006H2.946A2.949,2.949,0,0,0,0,15V17a2.949,2.949,0,0,0,2.946,2.946h.679a12.923,12.923,0,0,0,.833,2.006l-.481.481a2.946,2.946,0,0,0,0,4.167L5.4,28.024a2.946,2.946,0,0,0,4.167,0l.482-.482a12.931,12.931,0,0,0,2.006.833v.679A2.949,2.949,0,0,0,15,32H17a2.949,2.949,0,0,0,2.946-2.946v-.679a12.919,12.919,0,0,0,2.006-.833l.481.481a2.946,2.946,0,0,0,4.167,0l1.42-1.42a2.946,2.946,0,0,0,0-4.167l-.482-.482a12.92,12.92,0,0,0,.833-2.006h.679A2.949,2.949,0,0,0,32,17V15a2.949,2.949,0,0,0-2.946-2.946ZM16,22.963A6.963,6.963,0,1,1,22.963,16,6.971,6.971,0,0,1,16,22.963Z" transform="translate(0)" fill="#fff" />
                    </svg> -->

                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all transform hover:scale-105 hover:opacity-75" width="17" height="17" viewBox="0 0 30.001 29">
                        <g id="surface1" transform="translate(96.755 -8.172)">
                            <path id="Exclusion_1" data-name="Exclusion 1" d="M255.245,200.172h-24a3,3,0,0,1-3-3v-14a3,3,0,0,1,3-3h24a3,3,0,0,1,3,3v14A3,3,0,0,1,255.245,200.172Zm-17.892-9.453a.846.846,0,0,0-.568.218l-3.362,3.028a.849.849,0,1,0,1.135,1.262l2.811-2.531,2.81,2.531a.846.846,0,0,0,.566.217h.034a.843.843,0,0,0,.567-.217l6.675-6.011,2.905,2.617a.848.848,0,1,0,1.135-1.261l-3.362-3.028a.845.845,0,0,0-.568-.218l-.053,0a.86.86,0,0,0-.155-.014.846.846,0,0,0-.568.218l-6.592,5.936-2.811-2.53a.846.846,0,0,0-.568-.218h-.03Z" transform="translate(-325 -163)" fill="#fff"/>
                            <rect id="Rectangle_3" data-name="Rectangle 3" width="13" height="7" rx="2" transform="translate(-96.755 8.172)" fill="#fff"/>
                            <rect id="Rectangle_4" data-name="Rectangle 4" width="16" height="7" rx="2" transform="translate(-82.755 8.172)" fill="#fff"/>
                        </g>
                    </svg>
                    <span class="text-gray-100 text-base">Daftar user</span>
                </router-link>
            </div>
            <div class="mt-2">
                <button @click.prevent="logout" class="md:flex gap-7 items-center hover:opacity-50 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" 
                    viewBox="0 0 19.126 19.448">
                    <g id="power-symbol" transform="translate(-4.59)">
                        <g id="Group_2" data-name="Group 2" transform="translate(4.59)">
                        <path id="Path_5" data-name="Path 5" d="M18.4,33.741a1.289,1.289,0,0,0-1.147,2.31,6.984,6.984,0,1,1-6.2,0,1.289,1.289,0,0,0-1.146-2.31,9.563,9.563,0,1,0,8.494,0Z" transform="translate(-4.59 -32.426)" fill="#fff"/>
                        <path id="Path_6" data-name="Path 6" d="M241.5,12.141a1.29,1.29,0,0,0,1.289-1.289V1.289a1.289,1.289,0,1,0-2.579,0v9.563A1.289,1.289,0,0,0,241.5,12.141Z" transform="translate(-231.937)" fill="#fff"/>
                        </g>
                    </g>
                    </svg>
                    <span class="text-gray-100 text-base">Log out</span>
                </button>
            </div>
        </div>
        <!-- /menu -->
        
    </div>
</template>

<script>


export default {
    name: 'headerContent',
    props: {
        'user' : {
            type: Object,
            required: false
        },
        'state' : {
            type: String,
            required: false
        }, 
        'client': {
            type: Object,
            default: () => {
                return {'connected' : true}
            },
            required: false
        }
    },
    data(){
        return {
            // menu_setting: false,
        }
    },
    computed: {
        username(){
            let n = this.user.name.split(' ')
            // console.log(n.length);
            if(n.length > 1){
                return n[0] + '..'
            } else{
                return n[0]
            }
        },
        notification_reading_cond(){
            // let condition = true
            if (typeof this.user.notifications.data !== 'undefined' ) {
              return this.user.notifications.data.some(code => code.read == '0')
            }
        },
        getStateDevice(){
            // let condition = this.user.devices.some(code => code.status == '1')
            // let condition = true
            return this.user.devices.length > 0
        },
    },
    methods: {
        show_menu_setting(){
            this.user.menu_setting = !this.user.menu_setting
        },
        logout(){
            this.$swal.fire({
                text: "Apakah anda ingin keluar!",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                width: '18em',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Tidak!'
            }).then(result => {
                if(result.isConfirmed){
                    let authAxios = axios.create({
                        headers: {
                        'Authorization': `Bearer ${localStorage.token}`
                        }
                    })

                    authAxios.get('/logout').then(re => {
                        // console.log(re);
                        if(re.status = 200){
                            localStorage.removeItem('token');
                            delete axios.defaults.headers.common['Authorization'];
                            this.$router.push('/login');
                        }
                    }).catch()
                }
            })
        },
        showMenuMobile(state){
            if(state.toLowerCase() == 'notifications') {
                this.$emit('emit_update_notification')
            }
            this.$emit('menu_setting_mobile_state', {
                state,
                status: true
            })
        }
    }
}
</script>

<style>

</style>