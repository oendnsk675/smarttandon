<template>
  <div class="px-8 pt-4 pb-6 bg-primary w-full h-full bg-opacity-95 overflow-y-hidden">
      <h1 class="text-normal font-semibold text-gray-100 text-center">{{user.menu_setting_mobile.state ? user.menu_setting_mobile.state : 'Error'}}</h1>
      <!-- view menu notifications -->
        <div :class="{'hidden': !loader_state}" class="flex justify-center items-center w-full h-full">
            <loader class="absolute h-28 w-28"></loader>
        </div>
        <ul :class="{'invisible': loader_state}" v-if="user.menu_setting_mobile.state == 'Notifications'" class="mt-5 w-full h-full relative">
                <li v-for="(notification, i) in user.notifications.data" :key="i">
                    <span :class="{'font-bold text-opacity-100' : notification_reading_cond}" class="text-sm text-white text-opacity-90">
                        {{notification.description ? notification.description : '...'}}
                    </span>
                    <h3 class="text-xs font-thin text-gray-200 mt-1 italic">
                        {{notification.created_at ? notification.created_at : '...'}}
                    </h3>
                    <hr class="mt-1 opacity-40">
                </li>
                <div class="absolute w-full bottom-28 mb-2 flex justify-center mt-2 gap-2 bot">
                    <button :disabled="user.notifications.prev_page_url == null || loader_state" @click="pageChange(user.notifications.prev_page_url)" :class="{'opacity-60' : user.notifications.prev_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Previous</button>
                    <button :disabled="user.notifications.next_page_url == null || loader_state" @click="pageChange(user.notifications.next_page_url)" :class="{'opacity-60' : user.notifications.next_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Next</button>
                </div>
                <div class="absolute w-full bottom-20 mb-4">
                    <h1 @click="destroyNotifications()" class="text-gray-100 text-sm text-center font-semibold hover:text-opacity-70 cursor-pointer">Hapus semua notifikasi</h1>
                </div>
        </ul>
        <!-- /view menu notifications -->

        <!-- view menu devices -->
        <ul :class="{'invisible': loader_state}" v-if="user.menu_setting_mobile.state == 'Devices'" class="mt-5 w-full">
                <li v-for="(device, i) in user.devices.data" :key="i">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-white font-bold">
                            {{device.name ? device.name : '...'}}
                        </span>
                        <div v-if="device.status == 1" class="w-3 h-3 rounded-full mr-3 bg-secondary"></div>
                        <div v-else-if="device.status == 0" class="w-3 h-3 rounded-full mr-3 bg-red-400"></div>
                        <div v-else class="w-3 h-3 rounded-full mr-3 bg-yellow-400"></div>
                    </div>
                    <h3 class="text-xs font-thin text-gray-200 mt-1 italic">
                        {{device.created_at ? device.created_at : '...'}}
                    </h3>
                    <hr class="mt-1 opacity-40">
                </li>
                <div class="flex justify-center mt-1 gap-2">
                    <button :disabled="user.devices.prev_page_url == null || loader_state" @click="pageChange(user.devices.prev_page_url)" :class="{'opacity-60' : user.devices.prev_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Previous</button>
                    <button :disabled="user.devices.next_page_url == null || loader_state" @click="pageChange(user.devices.next_page_url)" :class="{'opacity-60' : user.devices.next_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Next</button>
                </div>
        </ul>
        <!-- /view menu devices -->

        <!-- view menu broker -->
        <ul v-if="user.menu_setting_mobile.state == 'Broker'" class="mt-5 w-full">
            <li>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-white font-bold">
                        Broker {{client.connected? 'Terhubung' : 'Tidak Terhubung'}}
                    </span>
                    <div v-if="client.connected" class="w-3 h-3 rounded-full mr-3 bg-secondary"></div>
                    <div v-else class="w-3 h-3 rounded-full mr-3 bg-red-400"></div>
                </div>
                <h3 class="text-xs font-thin text-gray-200 mt-1 italic">
                    {{getCurrentDate()}}
                </h3>
                <hr class="mt-1 opacity-40">
            </li>
        </ul>
        <!-- /view menu broker -->
      

      <div class="w-full flex justify-center">
            <div class=" absolute bottom-0 pb-4">
                <div class="flex justify-center">
                    <!-- svg close -->
                    <svg @click="hideMenuMobile" version="1.1" fill="white" id="Capa_1" class="opacity-70 hover:opacity-40" height="40px" width="40px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 511.76 511.76" style="enable-background:new 0 0 511.76 511.76;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M436.896,74.869c-99.84-99.819-262.208-99.819-362.048,0c-99.797,99.819-99.797,262.229,0,362.048
                                c49.92,49.899,115.477,74.837,181.035,74.837s131.093-24.939,181.013-74.837C536.715,337.099,536.715,174.688,436.896,74.869z
                                M361.461,331.317c8.341,8.341,8.341,21.824,0,30.165c-4.16,4.16-9.621,6.251-15.083,6.251c-5.461,0-10.923-2.091-15.083-6.251
                                l-75.413-75.435l-75.392,75.413c-4.181,4.16-9.643,6.251-15.083,6.251c-5.461,0-10.923-2.091-15.083-6.251
                                c-8.341-8.341-8.341-21.845,0-30.165l75.392-75.413l-75.413-75.413c-8.341-8.341-8.341-21.845,0-30.165
                                c8.32-8.341,21.824-8.341,30.165,0l75.413,75.413l75.413-75.413c8.341-8.341,21.824-8.341,30.165,0
                                c8.341,8.32,8.341,21.824,0,30.165l-75.413,75.413L361.461,331.317z"/>
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                    <!-- /svg close -->
                </div>
            </div>
      </div>
  </div>
</template>

<script>
import loader from '../Loader.vue'

export default {
    components: {
        loader,
    },
    name: 'Menu',
    props: {
        'user': {
            type: Object,
            required: true
        },
        'client': {
            type: Object,
            required: true
        }
    },
    data(){
        return {
            loader_state : false,
        }
    },
    computed:{
        getStateDevice(){
            // let condition = this.user.devices.some(code => code.status == '1')
            // let condition = true
            return this.user.devices.length > 0
        },
        notification_reading_cond(){
            // let condition = true
            if (typeof this.user.notifications.data !== 'undefined' ) {
              return this.user.notifications.data.some(code => code.read == '0')
            }
        },
    },
    methods:{
        hideMenuMobile(){
            this.$emit('hideMenuMobile')
        },
        async pageChange(url){
                this.loader_state = true
                let authAxios = axios.create({
                    headers: {
                    'Authorization': `Bearer ${localStorage.token}`
                    }
                })

                await authAxios.get(url.split('http://127.0.0.1:8000/api')[1]).then(re => {
                    this.user.notifications = re.data
                    this.loader_state = false
                    // console.log(re);
                }).catch()
        },
        getCurrentDate(){
            const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            const dateObj = new Date();
            const month = monthNames[dateObj.getMonth()];
            const day = String(dateObj.getDate()).padStart(2, '0');
            const year = dateObj.getFullYear().toString().split('20')[1];
            const output = `${day}-${month}-${year}`
            return output
        },
        destroyNotifications(){
            this.$emit('emit_destroy_notifications')
        }
    }
    // mounted()
}
</script>