<template>
    <div  
        class="w-full bg-primary h-screen relative lg:flex lg:overflow-hidden" @click="closeModal">

        <!-- sidebar -->
        <sidebar :role="user.role" :state="state" :settings="user.settings" v-on:change_state_pompa="updateStatePompa($event)"></sidebar>
        <!-- /sidebar -->

        <!-- Body -->
        <div class="p-5 pt-6 lg:px-40 lg:pt-14 lg:w-full lg:overflow-hidden" @click="user.menu_setting = false">
            <!-- header -->
            <header-content class="lg:hidden relative z-30" :user="user" :class="{'opacity-10' : !modalShow}"></header-content>
            <!-- end header -->

            <!-- content -->

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

            <!-- info -->
            <!-- <div class="md:flex justify-between mt-5">
                <div class="w-full h-52 flex justify-center items-center bg-secondary3 rounded-xl">
                <table></table>
                </div>
            </div> -->
            <div 
            :class="{'opacity-10' : !modalShow}" 
            class="flex lg:flex-col items-center justify-center mt-5 w-full relative z-20">
                <h1 class="text-gray-100 md:hidden text-3xl font-nunito text-center mb-11">List User</h1>
                <div class="w-full relative z-10">
                    <div class="overflow-auto flex justify-center lg:overflow-visible w-full">
                        <table class="table text-gray-400 lg:w-full border-separate space-y-6 text-sm">
                            <thead class="bg-secondary3 text-gray-300">
                                <tr>
                                <th class="p-3 xsm:p-2 text-center">No</th>
                                <th class="p-3 xsm:p-2 text-center">Nama</th>
                                <th class="p-3 xsm:p-2 text-center">Email</th>
                                <th class="p-3 xsm:p-2 text-center">Hak Akses</th>
                                <th class="p-3 px-5 xsm:p-2 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr v-for="(d,i) in pagination.data" :key="i" class="bg-gray-800">
                                    <td class="p-3 xsm:p-2 text-xs text-center">
                                        {{i + 1}}
                                    </td>
                                    <td class="p-3 xsm:p-2 text-xs text-center">
                                        {{d.name}}
                                    </td>
                                    <td class="p-3 xsm:p-2 font-bold text-xs text-center">
                                        {{d.email}}
                                    </td>
                                    <td class="p-3 xsm:p-2 font-bold text-xs text-center">
                                        <span :class="{'bg-red-400' : d.role == 'admin', 'bg-indigo-400' : d.role == 'user'}" class="text-gray-50 rounded-md px-1 text-xs">{{d.role}}</span>
                                    </td>
                                    <td class="p-3 xsm:p-2 flex justify-center items-center">
                                        <button @click="destroy(d.id)" class="hover:opacity-60">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button @click.stop="showModal(d.id)" class="hover:opacity-60">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </button>
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

            <!-- modal -->
            <div :class="{
                'opacity-10' : loaderShow,
                'invisible':modalShow,
                'transition-all duration-300 transform scale-x-110  ease-in-out' : !modalShow, 
                'transition-all duration-300 transform scale-0 ease-in-out' : modalShow, 
                }" @click.stop class="flex justify-center items-center relative z-40">
                    <form @submit.prevent="edit" class="lg:w-2/5 w-4/5 lg:pb-7 lg:pt-6 py-4 rounded-xl absolute flex flex-col gap-2 items-center justify-center px-5 bg-secondary2 shadow-lg">
                        <h1 class="text-gray-100 font-nunito text-center mb-2 lg:text-2xl text-base">Edit User</h1>
                        <input type="text" v-model="user_edit.data.name" class="w-full h-7 pl-3 rounded-md focus:outline-none focus:ring focus:border-indigo-800 text-gray-700">
                        <select v-model="user_edit.data.role" class="w-full h-7 pl-2 rounded-md focus:outline-none focus:ring focus:border-indigo-800 text-gray-700">
                            <option disabled value="">Pilih salah satu</option>
                            <option>admin</option>
                            <option>user</option>
                        </select>
                        <button type="submit" class="w-2/4 mt-1 lg:mt-3 h-6 lg:h-8 rounded-md bg-secondary3 shadow-sm focus:outline-none hover:ring focus:border-blue-300 hover:bg-opacity-75 focus:bg-opacity-50 text-center text-gray-200 ">Edit</button>
                    </form>
            </div>
            <!-- /modal -->
            <!-- loader -->
            <div class="flex justify-center items-center relative">
                <loader class="w-28 h-28" :class="{
                'transition-opacity duration-200 transform opacity-100 ease-in-out z-50' : loaderShow,
                'transition-opacity duration-200 transform opacity-0 ease-in-out invisible z-0' : !loaderShow,
                }"></loader>
            </div>
            <!-- <loader/>    -->
            

            <!-- end of content -->
            
        </div>
        <!-- end of body -->

        <!-- menubar -->
        <menubar/>
        <!-- endmenubar -->

    </div>
</template>

<script>
import menubar from '../components/MenuBar.vue'
import headerContent from '../components/HeaderContent.vue'
import loader from '../components/Loader.vue'
import sidebar from "../components/SideBar.vue";

export default {
    name: 'listUser',
    components:{
        menubar,
        headerContent,
        sidebar,
        loader,
    },
    data(){
        return {
            user: {
                id: '',
                name: '',
                photo: '',
                role: '', 
                info: '',
                settings: {
                    speechOn: '',
                    speechOff: '',
                },
                menu_setting : false,
                notifications: [],
                devices: []
            },
            pagination: {
                    data : [],
                    links : [],
                    current_page : '',
                    next : [],
                    prev : [],
            },
            user_edit: {
                userIdSelected : null,
                data: []
            },
            modalShow : true,
            loaderShow : false,
            state : 'list_user',
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
                if(re.status == 200){
                    // console.log(re.data[0]);
                    this.user.id = re.data[0].id;
                    this.user.name = re.data[0].name;
                    this.user.photo = re.data[0].photo;
                    this.user.role = re.data[0].role;
                    this.user.info = re.data[0].info;
                    this.user.settings.speechOn = re.data[0].speechOn;
                    this.user.settings.speechOff = re.data[0].speechOff;
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
        getAllUsers(){
            let authAxios = axios.create({
                headers: {
                'Authorization': `Bearer ${localStorage.token}`
                }
            })

            authAxios.get('/list/user/all').then(re => {
                // console.log(re);
                this.pagination.data = re.data.data
                this.pagination.links = re.data.links
                this.pagination.next =  this.pagination.links.pop(),
                this.pagination.prev = this.pagination.links.shift()

                // this.users = re.data
            }).catch(err => {
                console.error(err);
            })
        },
        destroy(id){
            this.$swal.fire({
                text: "Apakah anda ingin menghapusnya!",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                width: '18em',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya!',
                cancelButtonText: 'Tidak!'
            }).then((result) => {
            if (result.isConfirmed) {
                let authAxios = axios.create({
                    headers: {
                    'Authorization': `Bearer ${localStorage.token}`
                    }
                })

                authAxios.delete(`/list/user/${id}`).then(re => {
                    if(re.status == 200){
                        this.$swal.fire({
                            text:'Data user berhasil di hapus!.',
                            icon:'success',
                            width: '18em',
                            heightAuto: false,
                        })
                        this.getAllUsers()
                    }
                }).catch(err => {
                    this.$swal.fire({
                        text:'Ada yang salah.',
                        icon:'error',
                        width: '18em',
                        heightAuto: false,
                    })
                    console.error(err);
                })
            }
            })
            // if(confirm('Apa anda yakin ingin menghapus?')){
            //     let authAxios = axios.create({
            //         headers: {
            //         'Authorization': `Bearer ${localStorage.token}`
            //         }
            //     })

            //     authAxios.delete(`/list/user/${id}`).then(re => {
            //         if(re.status == 200){
            //             alert('Berhasil mengahpus')
            //             this.getAllUsers()
            //         }
            //     }).catch(err => {
            //         console.error(err);
            //     })
            // }
        },
        pageChange(url){
            // alert(url.split('http://127.0.0.1:8000/api')[1])
            let authAxios = axios.create({
                headers: {
                'Authorization': `Bearer ${localStorage.token}`
                }
            })

            authAxios.get(url.split('http://127.0.0.1:8000/api')[1]).then(re => {
                this.pagination.data = re.data.data
                this.pagination.links = re.data.links
                this.pagination.next =  this.pagination.links.pop(),
                this.pagination.prev = this.pagination.links.shift()
                // console.log(re.data[0]);
            }).catch()
        },
        showModal(id){
            this.modalShow = false
            this.user_edit.userIdSelected = id
            let index = this.pagination.data.map(x => {return x.id}).indexOf(this.user_edit.userIdSelected)
            this.user_edit.data = this.pagination.data[index]
        },
        closeModal(){
            this.modalShow = true
        },
        async edit(){
            let authAxios = axios.create({
                headers: {
                'Authorization': `Bearer ${localStorage.token}`
                }
            })
            this.loaderShow = true
            await authAxios.patch(`/list/user/${this.user_edit.userIdSelected}`, {
                'name' : this.user_edit.data.name,
                'role' : this.user_edit.data.role
            }).then(re => {
                this.loaderShow = true
                // console.log(re);
                if(re.status == 200){
                    this.loaderShow = false
                    this.$swal.fire({
                        text:'Data user berhasil di ubah!.',
                        icon:'success',
                        position: 'center',
                        showConfirmButton: false,
                        timer: 3000,
                        width: '15em',
                    })
                    this.getInfo()
                }else{
                    alert(`Gagal edit data user`)
                }
            }).catch(err => {
                console.error(err);
            })
        },
    },
    mounted(){
        this.getInfo()
        this.getAllUsers()
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