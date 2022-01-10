<template>
  <!-- menubar -->
    <div :class="{
        'justify-evenly' : state != 'dashboard',
        'justify-around' : state == 'dashboard'
        }"
        class="md:fixed lg:hidden bottom-0 md:flex gap-20 pb-2 w-full"
        >
        <div>
        <router-link to="/dashboard">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="transition-all transform hover:scale-105 hover:opacity-75" width="30" height="30" viewBox="0 0 30 30">
                <path id="home" d="M29.194,13.048l0,0L16.953.809a2.762,2.762,0,0,0-3.906,0L.814,13.039.8,13.052A2.761,2.761,0,0,0,2.64,17.757q.042,0,.085,0h.488v9.006A3.236,3.236,0,0,0,6.446,30h4.788a.879.879,0,0,0,.879-.879V22.06a1.476,1.476,0,0,1,1.475-1.475h2.824a1.476,1.476,0,0,1,1.475,1.475V29.12a.879.879,0,0,0,.879.879h4.788a3.236,3.236,0,0,0,3.233-3.232V17.761h.452a2.762,2.762,0,0,0,1.955-4.714Zm0,0" transform="translate(0 0.001)" fill="#fff" />
                </svg>
                <svg v-if="state == 'dashboard'" class="mt-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                    <circle id="dot" cx="3" cy="3" r="3" fill="#fff"/>
                </svg>
            </div>
        </router-link>
        </div>
        
        <div :class="{'invisible' : state != 'dashboard'}" class="absolute bottom-5">
            <!-- <button @click="pressMeDong">Press me</button> -->
            <voicedd @speechend="speechEnd"/>
        </div>
        <div>
            <router-link to="/analytic">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all transform hover:scale-105 hover:opacity-75" width="30" height="30" viewBox="0 0 30.001 29">
                        <g id="surface1" transform="translate(96.755 -8.172)">
                            <path id="Exclusion_1" data-name="Exclusion 1" d="M255.245,200.172h-24a3,3,0,0,1-3-3v-14a3,3,0,0,1,3-3h24a3,3,0,0,1,3,3v14A3,3,0,0,1,255.245,200.172Zm-17.892-9.453a.846.846,0,0,0-.568.218l-3.362,3.028a.849.849,0,1,0,1.135,1.262l2.811-2.531,2.81,2.531a.846.846,0,0,0,.566.217h.034a.843.843,0,0,0,.567-.217l6.675-6.011,2.905,2.617a.848.848,0,1,0,1.135-1.261l-3.362-3.028a.845.845,0,0,0-.568-.218l-.053,0a.86.86,0,0,0-.155-.014.846.846,0,0,0-.568.218l-6.592,5.936-2.811-2.53a.846.846,0,0,0-.568-.218h-.03Z" transform="translate(-325 -163)" fill="#fff"/>
                            <rect id="Rectangle_3" data-name="Rectangle 3" width="13" height="7" rx="2" transform="translate(-96.755 8.172)" fill="#fff"/>
                            <rect id="Rectangle_4" data-name="Rectangle 4" width="16" height="7" rx="2" transform="translate(-82.755 8.172)" fill="#fff"/>
                        </g>
                    </svg>
                    <svg v-if="state == 'analytic'" class="mt-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6">
                        <circle id="dot" cx="3" cy="3" r="3" fill="#fff"/>
                    </svg>
                </div>
            </router-link>
        </div>
    </div>
    <!-- endmenubar -->
</template>

<script>

import voicedd from './Voice.vue'

export default {
    name: 'menubar',
    props: ['state', 'settings'],
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
                console.log("second",this.feedbackTextArea);
                if(this.feedbackTextArea.toLowerCase() == this.settings.speechOn.toLowerCase()){
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
        }
    }
}
</script>

<style>

</style>