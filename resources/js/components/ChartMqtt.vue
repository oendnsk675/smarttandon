<template>
  <div id="app">
    <div class="Chart w-40">
      <DoughnutExample
        ref="skills_chart"
        :chart-data="chartData"
        :options="options">
      </DoughnutExample>

    </div>
  </div>
</template>

<script>
import DoughnutExample from './Doughnut.vue'
import Chart from "chart.js";
// import randomColor from 'randomcolor';

const options = {
    legend: {
        display: false,
        position: "bottom",
        align: "center",
        labels: {
            boxWidth: 7,
            padding: 14,
            usePointStyle: true
        }
    },
    tooltips: {
        enabled: true,
        mode: 'point',
        titleFontColor: "black",
        bodyFontColor: "black",
        backgroundColor: "#eee"
    },
    maintainAspectRatio: false,
}


export default {
  name: "App",
  components: { DoughnutExample },
  data() {
    return {
        data_center: 11,
        options, 
        chartData: {
        labels: ["air terisi", "air belum terisi"], 
                datasets: [{
                    label: "air",
                    backgroundColor: [
                        "#00ACFF", "#DBECF8", "#76DDFB", "#73A6C9"
                    ],
                    data: [0, 19],
                }]
        },
        connection: {
        host: 'localhost',
        port: 1882,
        endpoint: '/mqtt',
        clean: true, // Reserved session
        connectTimeout: 4000, // Time out
        reconnectPeriod: 4000, // Reconnection interval
        // Certification Information
        clientId: 'mqttjs_3be2c321',
        username: 'anisa',
        password: 'anisa',
        },
        subscription: {
            topic: ['topic/mqttx', 'topic/mk'],
            qos: 0,
        },
        publication: {
            topic: 'user/mode/store',
            qos: 0,
            payload: '{ "msg": "Hello, I am browser." }',
        },
        receiveNews: '',
        qosList: [
            { label: 0, value: 0 },
            { label: 1, value: 1 },
            { label: 2, value: 2 },
        ],
        client: {
            connected: false,
        },
        subscribeSuccess: false,
    }
  },
  computed: {
    currentDataSet () {
      return this.chartData.datasets[0].data
    }
  },
  mounted(){
    this.textCenter(this.data_center);
  },
  methods: {
    updateChart () {
      this.$refs.skills_chart.update();
    },
    updateAmount (amount) {
        let max_watter = 19;
        let sisa = 19 - amount;
        this.chartData.datasets[0].data[0] = amount;
        this.chartData.datasets[0].data[1] = sisa;
        this.updateChart();
    },
    textCenter(val) {
      Chart.pluginService.register({
      beforeDraw: function(chart) {
          var width = chart.chart.width;
          var height = chart.chart.height;
          var ctx = chart.chart.ctx;
          
          ctx.restore();
          var fontSize = (height / 114).toFixed(2);
          ctx.font = fontSize + "em sans-serif";
          ctx.textBaseline = "middle";

          var text = val + "%";
          var textX = Math.round((width - ctx.measureText(text).width) / 2);
          var textY = height / 2;
          ctx.fillText(text, textX, textY);
          ctx.save();
        }
      });
      this.updateChart();
    },
    // Create connection
    createConnection() {
      // Connect string, and specify the connection method used through protocol
      // ws unencrypted WebSocket connection
      // wss encrypted WebSocket connection
      // mqtt unencrypted TCP connection
      // mqtts encrypted TCP connection
      // wxs WeChat mini app connection
      // alis Alipay mini app connection
      const { host, port, endpoint, username, password,  ...options } = this.connection
      const connectUrl = `ws://${host}:${port}`
      try {
        this.client = mqtt.connect(connectUrl, {
          username,
          password
        })
      } catch (error) {
        console.log('mqtt.connect error', error)
      }
      this.client.on('connect', () => {
        console.log('Connection succeeded!')
      })
      this.client.on('error', error => {
        console.log('Connection failed', error)
      })
      this.client.on('message', (topic, message) => {
        this.receiveNews = this.receiveNews.concat(message)
        this.updateAmount(parseInt(`${message}`))
        console.log(`${message}`);
        // console.log(`Received message ${message} from topic ${topic}`)
      })
    },
    doSubscribe() {
      const { topic, qos } = this.subscription
      this.client.subscribe(topic, { qos }, (error, res) => {
        if (error) {
          console.log('Subscribe to topics error', error)
          return
        }
        this.subscribeSuccess = true
        console.log('Subscribe to topics res', res)
        })
    },
    doPublish() {
      const { topic, qos, payload } = this.publication
      this.client.publish(topic, payload, qos, error => {
        if (error) {
          console.log('Publish error', error)
        }
      })
    }
  },
  mounted(){
      this.createConnection();
      this.doSubscribe();
  }
};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
