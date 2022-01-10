<template>
  <!-- sidebar -->
    <div class="h-screen md:hidden flex flex-col items-center justify-between w-16 bg-gray-700 bg-opacity-30 py-6 px-3 relative z-10">
        <div>
            <!-- logo -->
            <div>
            <!-- logo -->
            <div class="bg-gray-100 p-2 bg-opacity-90 rounded-xl">
                <svg id="logo_os" data-name="logo os" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 35.037 30.041">
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
            </div>
            <!-- /logo -->

            <!-- voice -->
            <div class="mt-16">
                <!-- <button @click="pressMeDong">Press me</button> -->
                <voicedd @speechend="speechEnd"/>
            </div>
            <!-- /voice -->

            <!-- dashboard -->
            <div class="mt-10">
            <router-link to="/dashboard">
                <div class="flex flex-col items-center relative justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all transform hover:scale-105 hover:opacity-75" width="30" height="30" viewBox="0 0 30 30">
                    <path id="home" d="M29.194,13.048l0,0L16.953.809a2.762,2.762,0,0,0-3.906,0L.814,13.039.8,13.052A2.761,2.761,0,0,0,2.64,17.757q.042,0,.085,0h.488v9.006A3.236,3.236,0,0,0,6.446,30h4.788a.879.879,0,0,0,.879-.879V22.06a1.476,1.476,0,0,1,1.475-1.475h2.824a1.476,1.476,0,0,1,1.475,1.475V29.12a.879.879,0,0,0,.879.879h4.788a3.236,3.236,0,0,0,3.233-3.232V17.761h.452a2.762,2.762,0,0,0,1.955-4.714Zm0,0" transform="translate(0 0.001)" fill="#fff" />
                    </svg>
                    <svg v-if="state == 'home'" class="mt-1 absolute z-40 -bottom-4" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                        <circle id="dot" cx="3" cy="3" r="3" fill="#fff"/>
                    </svg>
                </div>
            </router-link>
            </div>
            <!-- /dashboard -->

            <!-- analytic -->
            <div class="mt-10">
                <router-link to="/analytic">
                    <div class="flex flex-col items-center relative justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all transform hover:scale-105 hover:opacity-75" width="30" height="30" viewBox="0 0 30.001 29">
                            <g id="surface1" transform="translate(96.755 -8.172)">
                                <path id="Exclusion_1" data-name="Exclusion 1" d="M255.245,200.172h-24a3,3,0,0,1-3-3v-14a3,3,0,0,1,3-3h24a3,3,0,0,1,3,3v14A3,3,0,0,1,255.245,200.172Zm-17.892-9.453a.846.846,0,0,0-.568.218l-3.362,3.028a.849.849,0,1,0,1.135,1.262l2.811-2.531,2.81,2.531a.846.846,0,0,0,.566.217h.034a.843.843,0,0,0,.567-.217l6.675-6.011,2.905,2.617a.848.848,0,1,0,1.135-1.261l-3.362-3.028a.845.845,0,0,0-.568-.218l-.053,0a.86.86,0,0,0-.155-.014.846.846,0,0,0-.568.218l-6.592,5.936-2.811-2.53a.846.846,0,0,0-.568-.218h-.03Z" transform="translate(-325 -163)" fill="#fff"/>
                                <rect id="Rectangle_3" data-name="Rectangle 3" width="13" height="7" rx="2" transform="translate(-96.755 8.172)" fill="#fff"/>
                                <rect id="Rectangle_4" data-name="Rectangle 4" width="16" height="7" rx="2" transform="translate(-82.755 8.172)" fill="#fff"/>
                            </g>
                        </svg>
                        <svg v-if="state == 'analytic'" class="mt-1 absolute z-40 -bottom-4" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                            <circle id="dot" cx="3" cy="3" r="3" fill="#fff"/>
                        </svg>
                    </div>
                </router-link>
            </div>
            <!-- /analytic -->

            <!-- list user -->
            <div v-if="role=='admin'" class="mt-10">
                <router-link to="/list_user" class="md:flex gap-7 items-center hover:opacity-50 transition-opacity">
                   <div class="flex flex-col items-center relative justify-center">
                        <svg class="transition-all transform hover:scale-105 hover:opacity-75" width="30" height="30" fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 388.227 388.227" style="enable-background:new 0 0 388.227 388.227;" xml:space="preserve">
<g>
	<path d="M194.113,190.505c36.691,0,66.438-36.129,66.438-80.695c0-44.567-9.768-80.696-66.438-80.696
		c-56.672,0-66.438,36.129-66.438,80.696C127.676,154.376,157.422,190.505,194.113,190.505z"/>
	<path d="M319.455,310.459c-1.229-77.637-11.369-99.759-88.959-113.763c0,0-10.924,13.917-36.381,13.917
		c-25.457,0-36.379-13.917-36.379-13.917c-76.744,13.85-87.502,35.645-88.916,111.24c-0.115,6.173-0.168,6.497-0.189,5.78
		c0.004,1.343,0.01,3.826,0.01,8.157c0,0,18.473,37.239,125.475,37.239s125.477-37.239,125.477-37.239
		c0-2.782,0.002-4.718,0.004-6.033C319.576,316.283,319.533,315.424,319.455,310.459z"/>
	<path d="M286.313,176.097c29.801,0,53.959-29.343,53.959-65.539c0-36.197-7.932-65.54-53.959-65.54
		c-7.742,0-14.404,0.833-20.135,2.388c10.631,19.598,12.088,43.402,12.088,62.403c0,21.514-5.832,42.054-16.572,59.061
		C269.076,173.48,277.441,176.097,286.313,176.097z"/>
	<path d="M388.111,273.521c-1-63.055-9.234-81.022-72.252-92.396c0,0-8.871,11.304-29.547,11.304c-0.855,0-1.684-0.026-2.5-0.063
		c13.137,5.923,25.088,14.17,33.889,26.238c15.215,20.863,18.713,48.889,19.435,90.062c42.397-8.378,51.086-25.873,51.086-25.873
		c0-2.28,0-3.844,0.004-4.913C388.209,278.256,388.174,277.582,388.111,273.521z"/>
	<path d="M101.912,176.097c8.873,0,17.236-2.617,24.621-7.226c-10.74-17.007-16.572-37.547-16.572-59.061
		c0-19.002,1.457-42.806,12.086-62.403c-5.73-1.555-12.391-2.388-20.135-2.388c-46.027,0-53.957,29.343-53.957,65.54
		C47.955,146.754,72.113,176.097,101.912,176.097z"/>
	<path d="M104.412,192.365c-0.814,0.037-1.643,0.063-2.5,0.063c-20.676,0-29.547-11.304-29.547-11.304
		c-63.016,11.374-71.252,29.34-72.25,92.396c-0.065,4.062-0.098,4.735-0.115,4.358c0.002,1.069,0.004,2.633,0.004,4.913
		c0,0,8.69,17.495,51.084,25.873c0.725-41.172,4.221-69.198,19.438-90.062C79.326,206.536,91.275,198.288,104.412,192.365z"/>
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

                        <svg v-if="state == 'list_user'" class="mt-1 absolute z-40 -bottom-4" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                            <circle id="dot" cx="3" cy="3" r="3" fill="#fff"/>
                        </svg>
                    </div>
                </router-link>
            </div>
            <!-- /list user -->

        </div>
        


        <div>
            <button @click.prevent="logout" class="md:flex gap-7 items-center hover:opacity-50 transition-opacity">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" 
                viewBox="0 0 19.126 19.448">
                <g id="power-symbol" transform="translate(-4.59)">
                    <g id="Group_2" data-name="Group 2" transform="translate(4.59)">
                    <path id="Path_5" data-name="Path 5" d="M18.4,33.741a1.289,1.289,0,0,0-1.147,2.31,6.984,6.984,0,1,1-6.2,0,1.289,1.289,0,0,0-1.146-2.31,9.563,9.563,0,1,0,8.494,0Z" transform="translate(-4.59 -32.426)" fill="#fff"/>
                    <path id="Path_6" data-name="Path 6" d="M241.5,12.141a1.29,1.29,0,0,0,1.289-1.289V1.289a1.289,1.289,0,1,0-2.579,0v9.563A1.289,1.289,0,0,0,241.5,12.141Z" transform="translate(-231.937)" fill="#fff"/>
                    </g>
                </g>
                </svg>
            </button>
        </div>
    </div>
  <!-- /sidebar -->
</template>

<script>
import voicedd from './Voice.vue'

export default {
    name: 'sidebar',
    props: ['state', 'settings', 'role'],
    components: {
        voicedd
    },
    data(){
        return {
            feedbackTextArea: ''
        }
    },
    methods: {
        pressMeDong(){
                    this.$emit('myEvent')
        }
        ,
        speechEnd({text}) {
            if (text) {
                this.feedbackTextArea += text
                console.log("first",this.feedbackTextArea);
                if(this.feedbackTextArea.toLowerCase() == this.settings.speechOn.toLowerCase()){
                    // console.log('bruh', this.settings.speechOn.toLowerCase());
                    this.state_pompa = true
                    this.$emit('change_state_pompa', true)
                    this.$swal.fire({
                            text:`Pompa berhasil dinyalakan`,
                            icon: 'success',
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            width: '15em',
                    })
                }else if(this.feedbackTextArea.toLowerCase() == this.settings.speechOff.toLowerCase()){
                    // console.log('bruhs', );
                    this.state_pompa = false
                    this.$emit('change_state_pompa', false)
                    this.$swal.fire({
                            text:`Pompa berhasil dimatikan`,
                            icon: 'success',
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            width: '15em',
                    })
                }else{
                    this.$swal.fire({
                            text:`Sepertinya perintah anda salah, anda mengucapkan ${text}`,
                            icons: 'error',
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            width: '15em',
                        })
                }
            }
            this.feedbackTextArea = ""
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
    }
}
</script>

<style>

</style>