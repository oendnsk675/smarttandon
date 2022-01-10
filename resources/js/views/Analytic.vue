<template>
    <div class="w-full bg-primary h-screen relative lg:flex overflow-hidden" @click="user.menu_setting = false">
        <sidebar :role="user.role" :state="state" :settings="user.settings" v-on:change_state_pompa="updateStatePompa($event)"></sidebar>
        <!-- Body -->
        <div class="p-5 pt-6 lg:px-40 lg:pt-14 lg:w-full lg:overflow-hidden">
            <!-- header -->
            <header-content class="lg:hidden relative z-40" :user="user" :state="state"/>
            <!-- end header -->

            <!-- content -->

            <!-- info -->
            <!-- <div class="md:flex justify-between mt-5">
                <div class="w-full h-52 flex justify-center items-center bg-secondary3 rounded-xl">
                <table></table>
                </div>
            </div> -->
            <!-- gelembung -->
            <div class="absolute md:hidden -bottom-24 -left-20 z-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="277" height="277" viewBox="0 0 277 277">
                <defs>
                    <linearGradient id="linear-gradient" x1="-0.994" y1="1.17" x2="1" y2="-0.226" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#2e3659"/>
                    <stop offset="1" stop-color="#05103a"/>
                    </linearGradient>
                    <filter id="gelembung" x="0" y="0" width="277" height="277" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#gelembung)">
                    <circle id="gelembung-2" data-name="gelembung" cx="129.5" cy="129.5" r="129.5" transform="translate(9 6)" opacity="0.55" fill="url(#linear-gradient)"/>
                </g>
                </svg>
            </div>
            <div class="absolute md:hidden top-60 -right-44 opacity-25 z-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="277" height="277" viewBox="0 0 277 277">
                <defs>
                    <linearGradient id="linear-gradient" x1="-0.994" y1="1.17" x2="1" y2="-0.226" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#2e3659"/>
                    <stop offset="1" stop-color="#05103a"/>
                    </linearGradient>
                    <filter id="gelembung" x="0" y="0" width="277" height="277" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#gelembung)">
                    <circle id="gelembung-2" data-name="gelembung" cx="129.5" cy="129.5" r="129.5" transform="translate(9 6)" opacity="0.55" fill="url(#linear-gradient)"/>
                </g>
                </svg>
            </div>
            <div class="absolute md:hidden -top-40 right-44 opacity-40 z-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="277" height="277" viewBox="0 0 277 277">
                <defs>
                    <linearGradient id="linear-gradient" x1="-0.994" y1="1.17" x2="1" y2="-0.226" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#2e3659"/>
                    <stop offset="1" stop-color="#05103a"/>
                    </linearGradient>
                    <filter id="gelembung" x="0" y="0" width="277" height="277" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#gelembung)">
                    <circle id="gelembung-2" data-name="gelembung" cx="129.5" cy="129.5" r="129.5" transform="translate(9 6)" opacity="0.55" fill="url(#linear-gradient)"/>
                </g>
                </svg>
            </div>
            <div class="absolute md:hidden -bottom-44 right-80 opacity-20 z-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="277" height="277" viewBox="0 0 277 277">
                <defs>
                    <linearGradient id="linear-gradient" x1="-0.994" y1="1.17" x2="1" y2="-0.226" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#2e3659"/>
                    <stop offset="1" stop-color="#05103a"/>
                    </linearGradient>
                    <filter id="gelembung" x="0" y="0" width="277" height="277" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#gelembung)">
                    <circle id="gelembung-2" data-name="gelembung" cx="129.5" cy="129.5" r="129.5" transform="translate(9 6)" opacity="0.55" fill="url(#linear-gradient)"/>
                </g>
                </svg>
            </div>
            <!-- end gelembung -->


            <div class="flex lg:flex-col items-center justify-center mt-5 w-full relative z-30">
                <h1 class="text-gray-100 md:hidden text-3xl font-nunito text-center mb-11">Data Bulanan</h1>
                <div class="w-full">
                <div class="overflow-auto flex justify-center lg:overflow-visible w-full">
                    <table class="table text-gray-400 lg:w-full shadow-2xl border-separate space-y-6 text-sm">
                        <thead class="bg-secondary3 text-gray-300">
                            <tr>
                            <th class="p-3 xsm:p-2 text-center">No</th>
                            <th class="p-3 xsm:p-2 text-center">Penggunaan</th>
                            <th class="p-3 xsm:p-2 text-center">Biaya</th>
                            <th class="p-3 px-5 xsm:p-2 text-center">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody v-if="pagination.total == 0" class="">
                            <tr class="bg-gray-800">
                                <td class="p-3 xsm:p-2 text-xs text-center">
                                    1
                                </td>
                                <td class="p-3 xsm:p-2 text-xs text-center">
                                    Penggunaan anda masih kosong
                                </td>
                                <td class="p-3 xsm:p-2 font-bold text-xs text-center">
                                    Rp 0
                                </td>
                                <td class="p-3 xsm:p-2 flex justify-center items-center">
                                    <span class="bg-red-400 text-gray-50 rounded-md px-1 text-xs">0</span>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else class="">
                            <tr v-for="(d,i) in pagination.data" :key="i" class="bg-gray-800">
                                <td class="p-3 xsm:p-2 text-xs text-center">
                                    {{i+1}}
                                </td>
                                <td class="p-3 xsm:p-2 text-xs text-center">
                                    {{d.total_usages}}
                                </td>
                                <td class="p-3 xsm:p-2 font-bold text-xs text-center">
                                    {{d.total_cost}}
                                </td>
                                <td class="p-3 xsm:p-2 flex justify-center">
                                    <span class="bg-red-400 text-gray-50 rounded-md px-1 text-xs">{{d.created_at}}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="flex justify-center mt-3">
                      <button :disabled="pagination.prev.url == null" @click="pageChange(pagination.prev.url)" :class="{'opacity-60' : pagination.prev.url == null}" class="text-base font-semibold text-gray-100">Previous</button>
                      <div class="flex items-center mx-3 gap-1">
                        <button v-for="(link, i) in pagination.links" :key="i" @click="pageChange(link.url)" :class="{'bg-indigo-500' : link.active, 'bg-gray-600' : !link.active}" class="w-6 text-center rounded hover:bg-opacity-60">{{i+1}}</button>
                        <!-- <button class="bg-gray-600 w-6 text-center rounded hover:bg-opacity-60">2</button> -->
                      </div>
                      <button :disabled="pagination.next.url == null" @click="pageChange(pagination.next.url)" :class="{'opacity-60' : pagination.next.url == null}" class="text-base font-semibold text-gray-100">Next</button>
                    </div>
                </div>
            </div>
            <!-- end of info -->

            

            <!-- end of content -->
            
        </div>
        <!-- end of body -->

        <!-- menubar -->
            <menubar class="z-30" :state="state" :settings="user.settings" />
        <!-- endmenubar -->

    </div>
</template>

<script>
import menubar from '../components/MenuBar.vue'
import headerContent from '../components/HeaderContent.vue'
import sidebar from "../components/SideBar.vue";

export default {
    name: 'analytic',
    components:{
        menubar,
        sidebar,
        headerContent,
    },
    data(){
        return {
            user: {
                name: '',
                photo: '',
                role: '', 
                info: '',
                settings: {
                    speechOn: '',
                    speechOff: '',
                },
                menu_setting : false
            },
            client: {
                connected: false,
            },
            pagination: {
                    data : [],
                    links : [],
                    first_page_url : '',
                    last_page_url : '',
                    current_page : '',
                    next : [],
                    prev : [],
                    total: 0,
            },
            state: 'analytic',
        }
    },
    methods: {
        getInfo(){ 
            let authAxios = axios.create({
                headers: {
                'Authorization': `Bearer ${localStorage.token}`
                }
            })

            authAxios.get('/user/data-usage').then(re => {
                // console.log(re);
                if(re.status == 200){
                    // console.log(re.data[0]);
                    this.user.name = re.data[0].name;
                    this.user.photo = re.data[0].photo;
                    this.user.role = re.data[0].role;
                    this.user.info = re.data[0].info;
                    this.user.settings.speechOn = re.data[0].speechOn;
                    this.user.settings.speechOff = re.data[0].speechOff;
                    this.pagination.data = re.data[0].dataUsage.data
                    this.pagination.total = re.data[0].dataUsage.total
                    this.pagination.links = re.data[0].dataUsage.links
                    this.pagination.first_page_url = re.data[0].dataUsage.first_page_url
                    this.pagination.last_page_url = re.data[0].dataUsage.last_page_url
                    this.pagination.current_page = re.data[0].dataUsage.current_page
                    this.pagination.next =  this.pagination.links.pop(),
                    this.pagination.prev = this.pagination.links.shift()
                }else if(re.status == 401){
                    this.$router.push('/login');
                }
            }).catch(err => {
                if(err.response.status){
                    this.$swal.fire({
                        text:'Anda harus login dulu!.',
                        icon: 'error',
                        position: 'center',
                        showConfirmButton: false,
                        timer: 3000,
                        width: '15em',
                    })
                    this.$router.push('/login');
                }
                console.log(err.response.status);
            })
        },
        pageChange(url){
            // alert(url.split('http://127.0.0.1:8000/api')[1])
            let authAxios = axios.create({
                headers: {
                'Authorization': `Bearer ${localStorage.token}`
                }
            })

            authAxios.get(url.split('http://127.0.0.1:8000/api')[1]).then(re => {
                this.pagination.data = re.data[0].dataUsage.data
                this.pagination.links = re.data[0].dataUsage.links
                this.pagination.first_page_url = re.data[0].dataUsage.first_page_url
                this.pagination.last_page_url = re.data[0].dataUsage.last_page_url
                this.pagination.current_page = re.data[0].dataUsage.current_page
                this.pagination.next =  this.pagination.links.pop(),
                this.pagination.prev = this.pagination.links.shift()
                // console.log(re.data[0]);
            }).catch()
        },
    },
    mounted(){
        this.getInfo()
    }
}
</script>

<style scoped>
::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: darkblue;
}
::-webkit-scrollbar
{
	width: 12px;
  height: 8px;
	border-radius: 10px;
	background-color: darkblue;
}
::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}
</style>