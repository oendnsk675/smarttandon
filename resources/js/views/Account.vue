<template>
  <div class="w-full bg-primary h-screen">

        <!-- Body -->
        <div class="p-5 pt-6">
            <h1 class="text-center mt-2 text-gray-300 font-nunito text-3xl">Profile Akun</h1>
            <div class="flex justify-center mt-4">
                <div class="rounded-full p-1 border-2 border-dashed border-secondary overflow-hidden flex items-center justify-center">
                    <img :src="user.photo" class="w-32 h-32 rounded-full border-2 border-opacity-50 object-cover" alt="" srcset="">
                </div>
            </div>
            <h1 class="text-center mt-4 text-gray-300 font-nunito text-2xl">{{user.name}}</h1>
            <!-- key -->
            <div class="w-full h-9 bg-secondary3 rounded-md mt-3 flex">
                <div class="bg-secondary w-14 h-9  rounded-l-md flex items-center justify-center text-base text-primary">Key</div>
                <span class="ml-2 text-secondary text-sm flex items-center">{{user.api_key}}</span>

            </div>
            <!-- /key -->
            <form  method="patch" @submit.prevent="update" class="mt-4">
                <div class="w-full">
                    <input v-model="user.email" disabled type="text" class="w-full rounded-md outline-none p-2 bg-secondary3 border text-gray-200 border-secondary border-opacity-50 focus:border-opacity-100" placeholder="Email">
                </div>
                <div class="flex gap-4 mt-2">
                    <input v-model="user.name" type="text" class="rounded-md outline-none p-2 w-1/2 bg-secondary3 border text-gray-200 border-secondary border-opacity-50 focus:border-opacity-100" placeholder="Nama">
                    <input v-model="user.monthly_fee" type="text" class="rounded-md outline-none p-2 w-1/2 bg-secondary3 border text-gray-200 border-secondary border-opacity-50 focus:border-opacity-100" placeholder="Biaya perbulan">
                </div>
                <div class="flex gap-4 mt-1">
                    <input v-model="user.settings.speechOn" type="text" class="rounded-md outline-none p-2 w-1/2 bg-secondary3 border text-gray-200 border-secondary border-opacity-50 focus:border-opacity-100" placeholder="kata kunci mematikan dengan suara">
                    <input v-model="user.settings.speechOff" type="text" class="rounded-md outline-none p-2 w-1/2 bg-secondary3 border text-gray-200 border-secondary border-opacity-50 focus:border-opacity-100" placeholder="kata kunci menyalakan dengan suara">
                </div>
                <div class="mt-4 flex w-full justify-center">
                <button  type="submit" class="bg-secondary w-full flex justify-center items-center gap-2 rounded h-9 text-primary hover:opacity-75 transition-opacity">
                    <loader :class="{'hidden': !loader_update}" class="w-5 h-5"></loader>
                    <span>Update</span>
                </button>
                </div>
            </form>
        </div>
        <!-- end of body -->

        <!-- menubar -->
        <menubar :settings="user.settings"/>
        <!-- endmenubar -->
    </div>
</template>

<script>
import menubar from '../components/MenuBar.vue'
import loader from '../components/Loader.vue'

export default {
    name: 'account',
    components:{
        menubar,
        loader,
    },
    data(){
        return {
            user: {
                id: '',
                email: '',
                monthly_fee: '',
                name: '',
                photo: '',
                api_key: '',
                settings: {
                    speechOn: '',
                    speechOff: '',
                },
            },
            loader_update : false,
        }
    },
    methods: {
        async getUserInfo()  {
          let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
          })

          await authAxios.get('/user/account').then(re => {
              
              if(re.status == 200){
                    this.user.id = re.data[0].id
                    this.user.email = re.data[0].email
                    this.user.name = re.data[0].name
                    this.user.monthly_fee = `Rp ${re.data[0].cost}`;
                    this.user.photo = re.data[0].photo
                    this.user.api_key = re.data[0].api_key
                    this.user.settings.speechOn = re.data[0].speechOn
                    this.user.settings.speechOff = re.data[0].speechOff
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
      async update(){
          let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
          })
            this.loader_update = true
            let monthly_fee = parseInt(this.user.monthly_fee.split('Rp ')[1])
            await authAxios.patch(`/user/${this.user.id}`, {
                name : this.user.name,
                monthly_fee,
                speechOn : this.user.settings.speechOn,
                speechOff : this.user.settings.speechOff
            }).then( re => {
                if(re.status == 201){
                        this.$swal.fire({
                            text:'Berhasil di update!.',
                            icon: 'success',
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            width: '15em',
                        })
                }
                this.getUserInfo()
                }
            ).catch(err => {
                if (err.response.status == 422) {
                        this.$swal.fire({
                            text:'Gagal di update!.',
                            icon: 'error',
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            width: '15em',
                        })
                }
                console.error(err);
            })
            this.loader_update = false
      }
      
    },
    mounted(){
        this.getUserInfo()
    }
}
</script>

<style>

</style>