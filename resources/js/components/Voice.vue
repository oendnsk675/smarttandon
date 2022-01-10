<template>
    <div>
        <button v-if="toggle" class="w-11 h-11 flex justify-center items-center bg-gradient-to-tl from-red-700 rounded-full to-red-400 focus:outline-none  transition-all transform hover:scale-125" @click="endSpeechRecognition()">
            <svg 
            xmlns="http://www.w3.org/2000/svg" width="11.626" height="18.165" viewBox="0 0 11.626 18.165"><g transform="translate(-78.336)"><g transform="translate(78.336 8.741)"><path d="M89.962,210.049a.641.641,0,1,0-1.282,0,4.531,4.531,0,1,1-9.061,0,.641.641,0,1,0-1.282,0,5.812,5.812,0,0,0,5.172,5.792v1.71H81.178a.641.641,0,1,0,0,1.282h5.941a.641.641,0,1,0,0-1.282H84.79v-1.71A5.812,5.812,0,0,0,89.962,210.049Z" transform="translate(-78.336 -209.408)" fill="#fff"/></g><g transform="translate(80.58)"><g transform="translate(0)"><path d="M135.665,0A3.575,3.575,0,0,0,132.1,3.569V9.36a3.569,3.569,0,1,0,7.138.021V3.569A3.575,3.575,0,0,0,135.665,0Z" transform="translate(-132.096)" fill="#fff"/></g></g></g>
            </svg>
        </button>
        <button v-else class="w-11 h-11 flex justify-center items-center bg-gradient-to-tl from-secondary2 rounded-full to-secondary focus:outline-none  transition-all transform hover:scale-125" @click="startSpeechRecognition()">
            <svg 
            xmlns="http://www.w3.org/2000/svg" width="11.626" height="18.165" viewBox="0 0 11.626 18.165"><g transform="translate(-78.336)"><g transform="translate(78.336 8.741)"><path d="M89.962,210.049a.641.641,0,1,0-1.282,0,4.531,4.531,0,1,1-9.061,0,.641.641,0,1,0-1.282,0,5.812,5.812,0,0,0,5.172,5.792v1.71H81.178a.641.641,0,1,0,0,1.282h5.941a.641.641,0,1,0,0-1.282H84.79v-1.71A5.812,5.812,0,0,0,89.962,210.049Z" transform="translate(-78.336 -209.408)" fill="#fff"/></g><g transform="translate(80.58)"><g transform="translate(0)"><path d="M135.665,0A3.575,3.575,0,0,0,132.1,3.569V9.36a3.569,3.569,0,1,0,7.138.021V3.569A3.575,3.575,0,0,0,135.665,0Z" transform="translate(-132.096)" fill="#fff"/></g></g></g>
            </svg>
        </button>
        
    </div>
</template>

<script>
let SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition
let recognition = SpeechRecognition? new SpeechRecognition() : false

export default {
    props: {
        lang: {
            type: String,
            default: 'id-ID'
        }
    },
    data () {
    return {
      error: false,
      speaking: false,
      toggle: false,
      runtimeTranscription: '',
      sentences: []
    }
  },
  methods: {
        checkCompatibility () {
        if (!recognition) {
            this.error = 'Speech Recognition is not available on this browser. Please use Chrome or Firefox'
        }
        },
        endSpeechRecognition () {
            recognition.stop()
            this.toggle = false
            this.$emit('speechend', {
                // sentences: this.sentences,
                text: this.sentences.join('')
            })
            this.sentences = []
        },
        startSpeechRecognition () {
        if (!recognition) {
            this.error = 'Speech Recognition is not available on this browser. Please use Chrome or Firefox'
            return false
        }
        this.toggle = true
        recognition.lang = this.lang
        recognition.interimResults = true
        recognition.addEventListener('speechstart', function() {
            this.speaking = true
        })
        recognition.addEventListener('speechend', function() {
            this.speaking = false
        })
        recognition.addEventListener('result', event => {
            const text = Array.from(event.results).map(result => result[0]).map(result => result.transcript).join('')
            this.runtimeTranscription = text
        })
        recognition.addEventListener('end', () => {
        
            if (this.runtimeTranscription !== '') {
            this.sentences.push(this.capitalizeFirstLetter(this.runtimeTranscription))
            }
            this.runtimeTranscription = ''
            this.endSpeechRecognition()
        })
        recognition.start()
        
        },
        capitalizeFirstLetter (string) {
        return string.charAt(0).toUpperCase() + string.slice(1)
        }
    },
    mounted () {
        this.checkCompatibility()
    }
}
</script>

<style>

</style>