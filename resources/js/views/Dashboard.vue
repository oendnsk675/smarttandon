<template>

<div class="w-full flex bg-primary h-screen lg:overflow-hidden overflow-x-hidden relative" @click="hideMenu">
    
  <sidebar class="relative z-30" :state="state" :role="user.role" :settings="user.settings" v-on:change_state_pompa="updateStatePompa($event)"></sidebar>


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


  <!-- Body -->
  <div class="lg:w-full lg:flex lg:justify-center lg:gap-3 lg:pb-7 lg:pt-2 bg relative z-30">
    <div class="lg:pt-4 lg:pl-7 p-5 pt-6 lg:w-5/12">
      <!-- header -->
      <header-content :user="user" :state="state" :client="client" @menu_setting_mobile_state="menu_setting_mobile_state_emited" @emit_update_notification="updateNotification()"/>
      <!-- end header -->

      <!-- content -->
        <div class="flex md:flex-col justify-center lg:gap-4 ">
          <!-- info -->
          <div class="md:flex p-2 justify-between mt-5 w-full">
            <div class="lg:h-80 h-52 md:w-full flex gap-3 md:px-2 justify-center lg:flex-col items-center bg-gray-500 bg-opacity-10 rounded-xl">

              <!-- chart -->
                <div class="Chart">
                  <DoughnutExample
                    :width="140" 
                    :height="140"
                    ref="skills_chart"
                    :chart-data="chartData"
                    :options="options">
                  </DoughnutExample>
                </div>
              <!-- /chart -->

              <!-- info data -->
              <div class="flex items-center flex-col gap-3">

                <!-- state pompa -->
                <div :class="{
                  'bg-secondary' : user.statePompa,
                  'bg-secondary4' : !user.statePompa
                  }" class="mb-1 h-6 w-24 bg-secondary rounded-lg flex justify-center items-center">
                  <span class="text-gray-200 font-sans text-xs">{{(user.statePompa?'Pompa menyala': 'Pompa mati')}}</span>
                </div>
                <!-- /state pompa -->

                <!-- info -->
                <div class="flex items-center justify-center gap-4">
                    <div class="flex flex-col justify-center lg:gap-3 gap-1">
                      <div class="flex items-center gap-1">
                      <div class="w-3 h-3 bg-secondary rounded-full"></div>
                      <span class="text-gray-200 font-sans text-xs">Air terisi</span>
                      </div>
                      <div class="flex items-center gap-1">
                      <div class="w-3 h-3 bg-secondary5 rounded-full"></div>
                      <span class="text-gray-200 font-sans text-xs">Air tidak terisi</span>
                      </div>
                    </div>
                    <div class="flex flex-col gap-1 justify-center lg:gap-3">
                        <div class="flex items-center gap-1">
                        <div class="w-3 h-3 rounded-md bg-red-500 "></div>
                        <span class="text-gray-200 font-sans text-xs">Bulan lalu 1500L</span>
                        </div>
                        <div class="flex items-center gap-1">
                        <div class="w-3 h-3 rounded-md bg-green-300 "></div>
                        <span class="text-gray-200 font-sans text-xs">Bulan ini 800L</span>
                        </div>
                    </div>
                </div>
                <!-- /info -->
                
              </div>
              <!-- /info data -->

            </div>
          </div>
          <!-- end of info -->

          <!-- controll -->
          <div class="lg:mt-7 mt-3 gap-5 lg:w-6/12 md:flex">
            <!-- kiri -->
            <div :class="{
              'bg-gradient-to-br from-secondary to to-secondary2': controller_left.bgGradient.bgGradient,
              'bg-secondary3': controller_left.bgGradient.bg
              }" class="md:w-1/2 h-36 rounded-3xl p-4 transition-all lg:mb-8 ease-in-out duration-500 hover:opacity-90">
              <div :class="{
                'bg-secondary2' : controller_left.bgIcon.bgSecondary, 
                'bg-secondary3' : controller_left.bgIcon.bg
              }" class="w-min p-2 rounded-xl">
                <svg id="automation" fill="white" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 25.832 25.832">
                  <g id="Page-1_19_" transform="translate(0)">
                    <g id="_x30_20---Automation-Technology" transform="translate(0)">
                      <g id="Group_1" data-name="Group 1">
                        <path id="Path_179_" d="M295.511.431V2.161c-.146,0-.288-.009-.431-.009s-.284,0-.431.009V.431a.431.431,0,1,1,.861,0Z" transform="translate(-282.164)"  fill-rule="evenodd"/>
                        <path id="Path_178_" d="M379.806,20.752a1.572,1.572,0,0,0,.056.431h-2.639a.431.431,0,0,0-.431.431v2.579a8.855,8.855,0,0,0-.861-.357V21.613a1.3,1.3,0,0,1,1.292-1.292h2.639A1.573,1.573,0,0,0,379.806,20.752Z" transform="translate(-360.001 -19.46)"  fill-rule="evenodd"/>
                        <circle id="Oval_19_" cx="0.861" cy="0.861" r="0.861" transform="translate(20.666 0.431)" />
                        <path id="Path_177_" d="M144.854,21.614v2.222a8.852,8.852,0,0,0-.861.357V21.614a.431.431,0,0,0-.431-.431h-2.639a1.684,1.684,0,0,0,0-.861h2.639A1.3,1.3,0,0,1,144.854,21.614Z" transform="translate(-134.952 -19.461)"  fill-rule="evenodd"/>
                        <circle id="Oval_18_" cx="0.861" cy="0.861" r="0.861" transform="translate(3.444 0.431)" />
                        <path id="Path_176_" d="M2.153,295.079c0,.142,0,.284.009.431H.431a.431.431,0,1,1,0-.861H2.166c-.009.146-.013.288-.013.431Z" transform="translate(0 -282.164)"  fill-rule="evenodd"/>
                        <path id="Path_175_" d="M24.191,143.994a8.851,8.851,0,0,0-.357.861H21.613a1.3,1.3,0,0,1-1.292-1.292v-2.639a1.684,1.684,0,0,0,.861,0v2.639a.431.431,0,0,0,.431.431Z" transform="translate(-19.46 -134.952)"  fill-rule="evenodd"/>
                        <circle id="Oval_17_" cx="0.861" cy="0.861" r="0.861" transform="translate(0.431 3.444)" />
                        <path id="Path_174_" d="M24.192,376.792H21.614a.431.431,0,0,0-.431.431v2.639a1.684,1.684,0,0,0-.861,0v-2.639a1.3,1.3,0,0,1,1.292-1.292h2.222A8.821,8.821,0,0,0,24.192,376.792Z" transform="translate(-19.461 -360.001)"  fill-rule="evenodd"/>
                        <circle id="Oval_16_" cx="0.861" cy="0.861" r="0.861" transform="translate(0.431 20.666)" />
                        <path id="Path_173_" d="M295.511,558.516v1.731a.431.431,0,1,1-.861,0v-1.735c.146.009.288.013.431.013S295.365,558.521,295.511,558.516Z" transform="translate(-282.164 -534.846)"  fill-rule="evenodd"/>
                        <path id="Path_172_" d="M144.854,498.314v2.222a1.3,1.3,0,0,1-1.292,1.292h-2.639a1.684,1.684,0,0,0,0-.861h2.639a.431.431,0,0,0,.431-.431v-2.579A8.855,8.855,0,0,0,144.854,498.314Z" transform="translate(-134.952 -476.857)"  fill-rule="evenodd"/>
                        <circle id="Oval_15_" cx="0.861" cy="0.861" r="0.861" transform="translate(3.444 23.679)" />
                        <path id="Path_171_" d="M379.806,501.4a1.572,1.572,0,0,0,.056.431h-2.639a1.3,1.3,0,0,1-1.292-1.292v-2.222a8.851,8.851,0,0,0,.861-.357v2.579a.431.431,0,0,0,.431.431h2.639A1.573,1.573,0,0,0,379.806,501.4Z" transform="translate(-360.001 -476.856)"  fill-rule="evenodd"/>
                        <circle id="Oval_14_" cx="0.861" cy="0.861" r="0.861" transform="translate(20.666 23.679)" />
                        <path id="Path_170_" d="M560.679,295.079a.431.431,0,0,1-.43.431h-1.735c.009-.146.013-.288.013-.431s0-.284-.009-.431h1.731A.431.431,0,0,1,560.679,295.079Z" transform="translate(-534.847 -282.164)"  fill-rule="evenodd"/>
                        <path id="Path_169_" d="M501.828,377.223v2.639a1.684,1.684,0,0,0-.861,0v-2.639a.431.431,0,0,0-.431-.431h-2.579a8.85,8.85,0,0,0,.357-.861h2.222A1.3,1.3,0,0,1,501.828,377.223Z" transform="translate(-476.857 -360.001)"  fill-rule="evenodd"/>
                        <circle id="Oval_13_" cx="0.861" cy="0.861" r="0.861" transform="translate(23.679 20.666)" />
                        <path id="Path_168_" d="M501.827,140.924v2.639a1.3,1.3,0,0,1-1.292,1.292h-2.222a8.847,8.847,0,0,0-.357-.861h2.579a.431.431,0,0,0,.431-.431v-2.639A1.684,1.684,0,0,0,501.827,140.924Z" transform="translate(-476.856 -134.952)"  fill-rule="evenodd"/>
                        <circle id="Oval_12_" cx="0.861" cy="0.861" r="0.861" transform="translate(23.679 3.444)" />
                        <circle id="Oval_11_" cx="1.292" cy="1.292" r="1.292" transform="translate(11.624 11.624)" />
                      </g>
                      <path id="Shape_37_" d="M220.313,216.5a2.853,2.853,0,0,0-.347-.838.43.43,0,0,1,.015-.476l.318-.447c-.069-.081-.142-.161-.22-.239s-.157-.15-.239-.22l-.448.318a.431.431,0,0,1-.474.015,2.842,2.842,0,0,0-.837-.347.431.431,0,0,1-.325-.349l-.089-.539a3.846,3.846,0,0,0-.653,0l-.089.539a.43.43,0,0,1-.325.349,2.842,2.842,0,0,0-.837.347.43.43,0,0,1-.474-.015l-.448-.318c-.081.069-.161.142-.238.22s-.151.157-.22.239l.318.447a.43.43,0,0,1,.015.476,2.852,2.852,0,0,0-.347.838.431.431,0,0,1-.349.325l-.538.088c-.009.111-.014.215-.014.326s0,.219.014.326l.538.088a.431.431,0,0,1,.349.325,2.852,2.852,0,0,0,.347.838.43.43,0,0,1-.015.476l-.318.447c.069.081.142.161.22.239s.157.15.239.22l.448-.318a.431.431,0,0,1,.474-.015,2.84,2.84,0,0,0,.837.347.431.431,0,0,1,.325.349l.089.539a3.8,3.8,0,0,0,.653,0l.089-.539a.431.431,0,0,1,.325-.349,2.841,2.841,0,0,0,.837-.347.431.431,0,0,1,.474.015l.448.318c.081-.069.161-.142.238-.22s.151-.157.22-.239l-.318-.447a.43.43,0,0,1-.015-.476,2.853,2.853,0,0,0,.347-.838.431.431,0,0,1,.349-.325l.538-.088c.009-.111.014-.215.014-.326s0-.219-.014-.326l-.538-.088A.431.431,0,0,1,220.313,216.5Zm-2.974,2.893a2.153,2.153,0,1,1,2.153-2.153A2.153,2.153,0,0,1,217.34,219.391Z" transform="translate(-204.424 -204.322)" />
                      <path id="Shape_36_" d="M90.839,80.058a.61.61,0,0,0-.514-.526l-1.315-.215a8.143,8.143,0,0,0-1.17-2.821l.775-1.086a.613.613,0,0,0-.006-.737,8.127,8.127,0,0,0-.625-.687,9.181,9.181,0,0,0-.689-.625.613.613,0,0,0-.737-.006l-1.086.775a8.148,8.148,0,0,0-2.82-1.17l-.215-1.315a.61.61,0,0,0-.526-.514,8.726,8.726,0,0,0-1.856,0,.61.61,0,0,0-.526.514l-.215,1.315A8.148,8.148,0,0,0,76.5,74.132l-1.086-.775a.613.613,0,0,0-.737.006,9.184,9.184,0,0,0-.687.625,8.129,8.129,0,0,0-.625.687.613.613,0,0,0-.006.737l.775,1.086a8.145,8.145,0,0,0-1.17,2.82l-1.315.215a.61.61,0,0,0-.514.526,8.725,8.725,0,0,0,0,1.856.617.617,0,0,0,.514.526l1.315.215a8.148,8.148,0,0,0,1.172,2.82l-.775,1.086a.612.612,0,0,0,.006.736,9.091,9.091,0,0,0,.625.689c.223.223.452.427.687.625a.613.613,0,0,0,.737.006l1.086-.775a8.148,8.148,0,0,0,2.82,1.17l.215,1.315a.61.61,0,0,0,.526.514,8.726,8.726,0,0,0,1.856,0,.61.61,0,0,0,.526-.514l.215-1.315a8.148,8.148,0,0,0,2.82-1.174l1.086.775a.613.613,0,0,0,.737-.006c.235-.2.464-.4.689-.625a9.115,9.115,0,0,0,.625-.689.612.612,0,0,0,.006-.736l-.775-1.086a8.148,8.148,0,0,0,1.17-2.82l1.315-.215a.617.617,0,0,0,.514-.526,8.725,8.725,0,0,0,0-1.856Zm-9.853,7.386a6.458,6.458,0,1,1,6.458-6.458A6.458,6.458,0,0,1,80.987,87.444Z" transform="translate(-68.071 -68.07)" />
                      <path id="Shape_35_" d="M178.322,172.725a5.6,5.6,0,1,0,5.6,5.6A5.6,5.6,0,0,0,178.322,172.725Zm4.708,5.089a4.684,4.684,0,0,1,0,1.026.732.732,0,0,1-.618.645l-.357.059a3.728,3.728,0,0,1-.231.56l.212.3a.728.728,0,0,1-.02.889,5.068,5.068,0,0,1-.344.384c-.121.122-.248.235-.38.344a.732.732,0,0,1-.9.014l-.288-.2a3.681,3.681,0,0,1-.557.231l-.059.352a.732.732,0,0,1-.651.617,4.713,4.713,0,0,1-1.026,0,.732.732,0,0,1-.648-.617l-.059-.357a3.714,3.714,0,0,1-.557-.231l-.3.212a.727.727,0,0,1-.889-.019c-.136-.112-.263-.224-.384-.344a4.988,4.988,0,0,1-.344-.38.732.732,0,0,1-.015-.9l.2-.288a3.733,3.733,0,0,1-.231-.56l-.354-.056a.732.732,0,0,1-.617-.653,4.684,4.684,0,0,1,0-1.026.732.732,0,0,1,.617-.646l.357-.059a3.728,3.728,0,0,1,.231-.56l-.212-.3a.728.728,0,0,1,.02-.889,5.068,5.068,0,0,1,.344-.384c.121-.122.248-.235.38-.344a.732.732,0,0,1,.9-.014l.288.2a3.684,3.684,0,0,1,.557-.231l.059-.352a.732.732,0,0,1,.651-.617,4.724,4.724,0,0,1,1.026,0,.732.732,0,0,1,.648.617l.059.357a3.712,3.712,0,0,1,.557.231l.3-.212a.727.727,0,0,1,.889.019c.136.112.263.224.384.344a4.988,4.988,0,0,1,.344.38.732.732,0,0,1,.015.9l-.2.288a3.725,3.725,0,0,1,.231.56l.358.059A.732.732,0,0,1,183.03,177.814Z" transform="translate(-165.406 -165.406)" />
                    </g>
                  </g>
                </svg>
              </div>
              <h1 class="font-nunito text-xl text-gray-100 mt-2">Automatis</h1>
              <div class="mt-2 flex justify-between">
                <span class="text-gray-100">{{(controller_left.label? 'On': 'Off')}}</span>
                <div @click="toggle" class="relative inline-block w-12 mr-2 align-middle select-none transition duration-200 ease-in">
                    <input type="checkbox" :class="{'right-0': controller_left.toggle.pin}" name="toggles" id="togglesLeft"
                        class="border-white absolute block w-6 h-6 rounded-full focus:outline-none bg-secondary border-4 appearance-none cursor-pointer" />
                    <label @click.self="toggle" :class="{'bg-gray-700 ': controller_left.toggle.bgSecondary, 'bg-white': controller_left.toggle.bgWhite}" for="togglesLeft"
                        class="tl block overflow-hidden h-6 rounded-full cursor-pointer"></label>
                </div>
              </div>
            </div>
            <!-- /kiri -->

            <!-- kanan -->
            <div 
              :class="{
                      'bg-gradient-to-br from-secondary to to-secondary2': controller_right.bgGradient.bgGradient,
                      'bg-secondary3': controller_right.bgGradient.bg
              }" 
              class="md:w-1/2 h-36 rounded-3xl p-4 transition-all ease-in-out duration-500 hover:opacity-90"
            > <div class="flex justify-between">
                <div 
                :class="{
                  'bg-secondary2' : controller_right.bgIcon.bgSecondary, 
                  'bg-secondary3' : controller_right.bgIcon.bg
                }" 
                class="w-min p-2 rounded-xl"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24.598 24.214">
                  <g id="setup" transform="translate(205.137 -704.383)">
                    <g id="Group_3" data-name="Group 3" transform="translate(-205.137 704.383)">
                      <path id="Path_7" data-name="Path 7" d="M9.326,12.639l1.387.173a2.052,2.052,0,0,0,.216.374l-.543,1.288a.721.721,0,0,0,.3.9l2.5,1.441a.72.72,0,0,0,.935-.189l.849-1.122c.147.009.289.011.427.007l.844,1.115a.721.721,0,0,0,.935.189l2.5-1.441a.721.721,0,0,0,.3-.9l-.543-1.288q.108-.177.207-.373l1.4-.174a.72.72,0,0,0,.631-.715V9.042a.72.72,0,0,0-.631-.715l-1.387-.173a2.057,2.057,0,0,0-.219-.378l.549-1.339a.721.721,0,0,0-.306-.9L17.176,4.1a.721.721,0,0,0-.935.189l-.849,1.122C15.245,5.4,15.1,5.4,14.965,5.4l-.843-1.115a.721.721,0,0,0-.935-.189l-2.5,1.441a.721.721,0,0,0-.306.9l.549,1.339q-.11.178-.209.377l-1.4.174a.721.721,0,0,0-.631.715v2.883a.721.721,0,0,0,.631.715Zm.81-2.961L11.3,9.533a.721.721,0,0,0,.576-.437,3.589,3.589,0,0,1,.444-.8.721.721,0,0,0,.093-.71l-.457-1.114,1.4-.808.7.92a.721.721,0,0,0,.666.28,3.588,3.588,0,0,1,.914.015A.72.72,0,0,0,16.3,6.6l.708-.935,1.4.808-.465,1.134a.721.721,0,0,0,.093.709,2.2,2.2,0,0,1,.451.78.721.721,0,0,0,.575.436l1.166.146v1.61l-1.163.145a.721.721,0,0,0-.576.437,3.588,3.588,0,0,1-.444.8.72.72,0,0,0-.091.717l.448,1.063-1.394.805-.7-.92a.72.72,0,0,0-.666-.28,3.591,3.591,0,0,1-.914-.015.72.72,0,0,0-.666.28l-.708.935-1.394-.805.457-1.083a.721.721,0,0,0-.09-.716,2.2,2.2,0,0,1-.451-.78.721.721,0,0,0-.575-.436l-1.166-.146Zm5.045,2.967a2.162,2.162,0,1,0-2.162-2.162A2.164,2.164,0,0,0,15.181,12.645Zm0-2.883a.721.721,0,1,1-.721.721A.721.721,0,0,1,15.181,9.762Zm9.205,8.368a3.939,3.939,0,0,0-2.8-1.161h0a3.939,3.939,0,0,0-2.8,1.159l-2.354,2.312a2.351,2.351,0,0,0-2.338-2.221H5.656a4,4,0,0,0-2.8,1.175L.207,22.076a.721.721,0,0,0,0,1.016c1.4,1.4,3.455,3.5,4.864,4.912a.721.721,0,0,0,1.019,0C7.7,26.4,7.146,26.866,7.855,26.145h6.486a7.3,7.3,0,0,0,5.14-2.092l4.905-4.9a.721.721,0,0,0,0-1.019Zm-5.924,4.9a5.852,5.852,0,0,1-4.121,1.67H7.555a.721.721,0,0,0-.51.211c-.971.971-.454.532-1.462,1.557-1.189-1.2-2.657-2.694-3.849-3.893l2.139-2.168a2.548,2.548,0,0,1,1.782-.752h8.434a.916.916,0,0,1,.636,1.56.881.881,0,0,1-.631.265H8.366a.721.721,0,1,0,0,1.441h5.975a4,4,0,0,0,2.8-1.168L19.8,19.149a2.527,2.527,0,0,1,2.986-.436Z" transform="translate(0.001 -4.001)" fill="#fff"/>
                    </g>
                  </g>
                </svg>
                </div>
                <button 
                  v-if="user.stateMode"
                  @click="toggle_pompa"  
                  :class="{'bg-secondary3 opacity-75' : user.statePompa, 'bg-secondary' : !user.statePompa}"
                  class="px-3 rounded-xl shadow-md"
                >
                  <span class="text-xs text-gray-100">{{(user.statePompa? 'Off' : 'On')}}</span>
                </button>
              </div>
              <h1 class="font-nunito text-xl text-left text-gray-100 mt-2">Manual</h1>
              <div class="mt-2 flex justify-between">
                <span class="text-gray-100">{{(controller_right.label? 'On': 'Off')}}</span>
                <div @click="toggle" class="relative inline-block w-12 mr-2 align-middle select-none transition duration-200 ease-in">
                    <input type="checkbox" :class="{'right-0': controller_right.toggle.pin}" name="toggles" id="togglesRight"
                        class="border-white absolute block w-6 h-6 rounded-full focus:outline-none bg-secondary border-4 appearance-none cursor-pointer" />
                    <label @click="toggle" :class="{'bg-gray-700 ': controller_right.toggle.bgSecondary, 'bg-white': controller_right.toggle.bgWhite}" for="togglesRight"
                        class="tl block overflow-hidden h-6 rounded-full cursor-pointer"></label>
                </div>
              </div>
            </div>
            <!-- /kanan -->

          </div>
          <!-- end ofcontroll -->
        </div>


      <!-- end of content -->
      
    </div>

    <!-- analisa chart -->
        <div class="bg-gray-500 md:hidden bg-opacity-10 flex flex-col gap-4 shadow-xl w-3/12 mt-4 rounded-xl">
        <div class=" w-full h-56 flex flex-col justify-center items-center">
            <span class="text-gray-200 text-sm">Penggunaan Bulan Ini</span>
            <H1 class="text-gray-200 text-4xl font-extrabold text-center">{{user.currentMonth.usages ? user.currentMonth.usages : '0'}} Liter</H1>
            <span class="text-gray-300 text-opacity-80 text-sm font-thin mt-3">{{getCurrentDate()}}</span>
        </div>
        <div class="px-4">
            <h2 class="text-gray-100 font-semibold">Penggunaan bulanan</h2>
            <div class="flex flex-col items-center w-full mt-2">
              <div class="relative flex items-center">
                <select :disabled="updateAnlyticsBussy" @change="updateAnlytics" v-model="user.dataUsageAnalytics" @click="arrow_cursor_selected = !arrow_cursor_selected" @blur="closeSelect" class="selectMonth w-full relative z-20 text-secondary focus:outline-none hover:opacity-75 cursor-pointer border-b-2">
                  <option disabled value="">Please salah satu</option>
                  <option value="1">Jan-Feb-Mar</option>
                  <option value="2">Apr-Mei-Jun</option>
                  <option value="3">Jul-Aug-Sep</option>
                  <option value="4">Okt-Nov-Des</option>
                </select>
                <div class="pointer absolute right-0 z-10 transform transition duration-200" 
                :class="{'rotate-90' : arrow_cursor_selected, 'rotate-0' : !arrow_cursor_selected}">
                  <svg class="h-6 w-6" fill="#68D0EE" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                </div>
              </div> 
              <line-chart
              :chartData="chartLineData"
              ref="lineChart"
              :width="140" 
              :height="267"
              class="w-full">
              </line-chart>
              
            </div> 
        </div>
        </div>
    <!-- /analisa chart -->

    <div class="w-3/12 lg:ml-5 mt-4 relative">
        <!-- info -->
          <div class="w-full md:hidden flex items-center gap-2">
              <div class="w-1/5 py-2 rounded-md bg-green-500 bg-opacity-20 flex justify-center items-center cursor-pointer hover:bg-opacity-50" @click.stop="showMenuWeb('device')">
                  <svg v-if="getStateDevice" xmlns="http://www.w3.org/2000/svg" width="23.037" height="24.381" viewBox="0 0 23.037 24.381"><g transform="translate(-28.756 599.271)"><path d="M14.319,21.716a1.234,1.234,0,0,1-1.23-1.234V18.548h-1v1.934a1.232,1.232,0,1,1-2.463,0V18.548h-1v1.934a1.231,1.231,0,1,1-2.462,0V18.549a3.25,3.25,0,0,1-3-3H1.234a1.231,1.231,0,1,1,0-2.462H3.167v-1H1.234a1.232,1.232,0,1,1,0-2.463H3.167v-1H1.234a1.231,1.231,0,1,1,0-2.462H3.166a3.266,3.266,0,0,1,3-3V1.234a1.231,1.231,0,1,1,2.462,0V3.167h1V1.234a1.232,1.232,0,1,1,2.464,0V3.167h.31a6.211,6.211,0,0,0,1.08,2.391H7.655a2.1,2.1,0,0,0-2.1,2.1v6.407a2.1,2.1,0,0,0,2.1,2.1h6.405a2.1,2.1,0,0,0,2.1-2.1V7.65a6.3,6.3,0,0,0,5.552-.395,1.276,1.276,0,0,1,.008.142,1.234,1.234,0,0,1-1.234,1.231H18.549v1h1.933a1.231,1.231,0,1,1,0,2.462H18.549v1h1.932a1.231,1.231,0,1,1,0,2.462H18.549a3.266,3.266,0,0,1-3,3v1.932A1.234,1.234,0,0,1,14.319,21.716Zm-.334-7.6H7.732a.13.13,0,0,1-.13-.13V7.732a.131.131,0,0,1,.13-.13h6.253a.13.13,0,0,1,.13.13v6.253A.13.13,0,0,1,13.985,14.115Z" transform="translate(28.756 -596.607)" fill="#fff"/><path d="M265.015,4.5a4.5,4.5,0,1,1-4.5-4.5A4.5,4.5,0,0,1,265.015,4.5Zm0,0" transform="translate(-213.222 -599.271)" fill="#68d0ee" class="animate-pulse"/></g></svg>
                  <svg v-else xmlns="http://www.w3.org/2000/svg" width="21.716" height="21.716" viewBox="0 0 21.716 21.716"><g transform="translate(-28.756 596.606)"><g transform="translate(28.756 -596.606)"><g transform="translate(0 0)"><path d="M22.129,15.745H15.876a.131.131,0,0,0-.131.131v6.254a.13.13,0,0,0,.131.13h6.253a.13.13,0,0,0,.13-.13V15.876A.131.131,0,0,0,22.129,15.745Z" transform="translate(-8.144 -8.144)" fill="#fff"/><path d="M20.482,12.09a1.231,1.231,0,1,0,0-2.462H18.549v-1h1.933a1.231,1.231,0,1,0,0-2.463H18.549a3.25,3.25,0,0,0-3-3V1.235a1.231,1.231,0,1,0-2.462,0V3.168h-1V1.235a1.232,1.232,0,1,0-2.463,0V3.168h-1V1.235a1.231,1.231,0,1,0-2.462,0V3.168a3.25,3.25,0,0,0-3,3H1.234a1.231,1.231,0,1,0,0,2.463H3.167v1H1.234a1.231,1.231,0,1,0,0,2.463H3.167v1H1.234a1.231,1.231,0,1,0,0,2.462H3.167a3.249,3.249,0,0,0,3,3v1.933a1.231,1.231,0,1,0,2.462,0V18.55h1v1.934a1.232,1.232,0,1,0,2.463,0V18.55h1v1.934a1.231,1.231,0,1,0,2.462,0V18.55a3.249,3.249,0,0,0,3-3h1.933a1.231,1.231,0,1,0,0-2.462H18.549v-1Zm-4.325,1.972a2.091,2.091,0,0,1-2.1,2.1H7.655a2.091,2.091,0,0,1-2.1-2.1V7.656a2.091,2.091,0,0,1,2.1-2.1h6.406a2.091,2.091,0,0,1,2.1,2.1v6.407Z" transform="translate(0 -0.001)" fill="#fff"/></g></g></g></svg>
              </div>
              <div class="w-1/5 py-2 rounded-md bg-green-500 bg-opacity-20 flex justify-center items-center cursor-pointer hover:bg-opacity-50" @click.stop="showMenuWeb('broker')">
                  <svg v-if="client.connected" xmlns="http://www.w3.org/2000/svg" width="32.235" height="21.566" viewBox="0 0 32.235 21.566"><g transform="translate(0 -104.618)"><path d="M26.506,20.242H5.729a5.533,5.533,0,0,1-4.037-1.781,6.284,6.284,0,0,1-.3-8.231,5.712,5.712,0,0,1,3.4-2.049V8.1A7.848,7.848,0,0,1,12.34,0a7.381,7.381,0,0,1,6.473,3.939,5.436,5.436,0,0,1,1.4-.665,6.868,6.868,0,0,0-.036.7A6.761,6.761,0,0,0,30.428,9.764a6.279,6.279,0,0,1,.115,8.7A5.533,5.533,0,0,1,26.506,20.242Z" transform="translate(0 105.942)" fill="#fff"/><path d="M266.618,5.3a5.3,5.3,0,1,1-5.3-5.3A5.3,5.3,0,0,1,266.618,5.3Zm0,0" transform="translate(-234.382 104.618)" fill="#68d0ee" class="animate-pulse"/></g></svg>
                  <svg v-else xmlns="http://www.w3.org/2000/svg" width="33.235" height="21.242" viewBox="0 0 33.235 21.242"><g transform="translate(0.5 -105.441)"><path d="M27.383,114.169a5.813,5.813,0,0,0-5.6-5.133,5.35,5.35,0,0,0-2.971.9A7.415,7.415,0,0,0,12.34,106a7.849,7.849,0,0,0-7.555,8.1c0,.028,0,.056,0,.084A6.029,6.029,0,0,0,0,120.169a5.938,5.938,0,0,0,5.729,6.073H26.506a5.938,5.938,0,0,0,5.729-6.073A6.022,6.022,0,0,0,27.383,114.169Z" transform="translate(0 -0.059)" fill="#e23c47" stroke="#f2dddd" stroke-width="1"/></g></svg>
              </div>
              <div class="w-1/5 py-2 rounded-md bg-green-500 bg-opacity-20 flex justify-center items-center cursor-pointer hover:bg-opacity-50" @click.stop="showMenuWeb('notification')">
                  <svg v-if="notification_reading_cond" xmlns="http://www.w3.org/2000/svg" width="19.98" height="22.542" viewBox="0 0 19.98 22.542"><g transform="translate(0 0)"><path d="M18.2,619.419H2.7a1.644,1.644,0,0,1-1.069-2.893A6.305,6.305,0,0,0,3.876,611.7v-2.618a6.579,6.579,0,0,1,5.636-6.5v-1.014a.939.939,0,1,1,1.878,0v.552a6.475,6.475,0,0,0,4.535,11.1,6.532,6.532,0,0,0,1.256-.122,6.25,6.25,0,0,0,2.079,3.42,1.644,1.644,0,0,1-1.061,2.9Z" transform="translate(-1.059 -600.633)" fill="#fff"/><path d="M138.4,450.818A3.528,3.528,0,0,0,141.855,448h-6.9a3.528,3.528,0,0,0,3.451,2.818Zm0,0" transform="translate(-129.011 -428.275)" fill="#fff"/><path d="M266.238,5.113A5.113,5.113,0,1,1,261.125,0,5.113,5.113,0,0,1,266.238,5.113Zm0,0" transform="translate(-246.258 1)" fill="#68d0ee" class="animate-pulse"/></g></svg>
                  <svg v-else xmlns="http://www.w3.org/2000/svg" width="18.785" height="22.542" viewBox="0 0 18.785 22.542"><g transform="translate(0 0)"><path d="M18.2,15.886a6.292,6.292,0,0,1-2.234-4.814V8.454a6.58,6.58,0,0,0-5.636-6.5V.94a.939.939,0,0,0-1.879,0V1.954a6.579,6.579,0,0,0-5.636,6.5v2.619A6.3,6.3,0,0,1,.575,15.894a1.644,1.644,0,0,0,1.069,2.892h15.5a1.644,1.644,0,0,0,1.06-2.9Zm0,0" fill="#fff"/><path d="M138.4,450.818A3.528,3.528,0,0,0,141.855,448h-6.9a3.528,3.528,0,0,0,3.451,2.818Zm0,0" transform="translate(-129.011 -428.275)" fill="#fff"/></g></svg>
              </div>
              <div class="w-2/5 px-1 py-2 bg-opacity-40 hover:bg-opacity-80 rounded-md bg-red-400 font-semibold text-gray-100 flex justify-center items-center cursor-pointer">{{user.role ? user.role : '...'}}</div>
          </div>
          <!-- menu setting web -->
          <div  
              :class="{
                  'invisible' : !user.menu_setting_web.status, 
                  'transition-all duration-300 transform translate-y-4 ease-in-out' : user.menu_setting_web.status,
                  'transition-all duration-300 transform translate-y-0 ease-in-out' : !user.menu_setting_web.status,
              }"
              class="w-11/12 md:hidden pt-2 pb-1 px-3 absolute left-0 z-40 bg-secondary2 bg-opacity-90 shadow-xl rounded-xl mt-2"
              @click.stop
          >   
              <div :class="{'pb-10' : user.menu_setting_web.state == 'notification'}" class="relative">
                  <!-- notifikasi section -->
                  <div v-if="user.menu_setting_web.state == 'notification'">
                      <div :class="{'hidden': !loader_notifikasi}" class="absolute h-full w-full flex justify-center items-center">
                        <loader  class="h-28 w-28"></loader>
                      </div>
                      <h2 class="text-normal font-semibold text-gray-100 text-center">Notifikasi</h2>
                      <hr class="mt-1">
                      <ul :class="{'invisible': loader_notifikasi}" class="mt-2">
                          <li v-for="(notification, i) in user.notifications.data" :key="i">
                              <span :class="{'font-bold text-opacity-100' : notification_reading_cond}" class="text-sm text-white text-opacity-90">
                                  {{notification.description ? notification.description : '...'}}
                              </span>
                              <h3 class="text-xs font-thin text-gray-200 mt-1 italic">
                                  {{notification.created_at ? notification.created_at : '...'}}
                              </h3>
                              <hr class="mt-1 opacity-40">
                          </li>
                      </ul>
                      <div class="flex justify-center mt-1 gap-2">
                          <button :disabled="user.notifications.prev_page_url == null || loader_notifikasi" @click="pageChange(user.notifications.prev_page_url)" :class="{'opacity-60' : user.notifications.prev_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Previous</button>
                          <button :disabled="user.notifications.next_page_url == null || loader_notifikasi" @click="pageChange(user.notifications.next_page_url)" :class="{'opacity-60' : user.notifications.next_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Next</button>
                      </div>
                      <div class="w-full flex justify-center absolute bottom-2">
                        <h1 @click="destroyNotifications()" class="text-gray-100 text-sm font-semibold hover:text-opacity-70 cursor-pointer">Hapus semua notifikasi</h1>
                      </div>
                  </div>
                  <!-- /notifikasi section -->

                  <!-- device section -->
                  <div v-if="user.menu_setting_web.state == 'device'">
                      <loader :class="{'invisible': !loader_device}" class="absolute h-28 w-28"></loader>
                      <h2 class="text-normal font-semibold text-gray-100 text-center">Perangkat terhubung</h2>
                      <hr class="mt-1">
                      <ul :class="{'invisible': loader_device}" class="mt-2">
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
                                  {{device.updated_at ? `Terakhir aktif ${device.updated_at}` : '...'}}
                              </h3>
                              <hr class="mt-1 opacity-40">
                          </li>
                      </ul>
                      <div class="flex justify-center mt-1 gap-2">
                          <button :disabled="user.devices.prev_page_url == null || loader_device" @click="pageChange(user.devices.prev_page_url)" :class="{'opacity-60' : user.devices.prev_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Previous</button>
                          <button :disabled="user.devices.next_page_url == null || loader_device" @click="pageChange(user.devices.next_page_url)" :class="{'opacity-60' : user.devices.next_page_url == null}" class="text-base font-semibold text-gray-100 hover:text-opacity-95">Next</button>
                      </div>
                  </div>
                  <!-- device section -->

                  <!-- broker section -->
                  <div v-if="user.menu_setting_web.state == 'broker'">
                      <h2 class="text-normal font-semibold text-gray-100 text-center">Broker</h2>
                      <hr class="mt-1">
                      <ul :class="{'invisible': loader_notifikasi}" class="mt-2">
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
                  </div>
                  <!-- broker section -->

              </div>
          </div>
          <!-- /menu setting web -->
        <!-- /info -->

      <!-- profile account -->
        <div class="bg-gray-500 w-full pb-6 pt-4 md:hidden bg-opacity-10 flex flex-col justify-center px-4 shadow-xl mt-4 rounded-xl">
        
            <h1 class="text-center mb-4 text-gray-100  font-semibold text-xl">Profile account</h1>
            <div class="flex justify-center">
                    <div class="rounded-full p-1 border-2 border-dashed border-secondary overflow-hidden flex items-center justify-center">
                            <img :src="user.photo" class="w-32 h-32 rounded-full border-2 border-opacity-50 object-cover" alt="" srcset="">
                        </div>
                        </div>
                        <h1 class="text-center mt-2 text-gray-300 font-nunito text-2xl">{{user.name}}</h1>
                        <!-- <router-link to="/account" class="my-2 text-gray-100 text-sm text-center hover:opacity-75">Lihat detail profile</router-link> -->

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
                              <button  type="submit" class="bg-secondary w-full rounded h-9 flex items-center justify-center gap-2 text-primary hover:opacity-75 transition-opacity">
                                <loader :class="{'hidden': !loader_update}" class="w-5 h-5"></loader>
                                <span>Update</span>
                              </button>
                            </div>
                        </form>
        </div>
      <!-- /profile account -->
    </div>
            
  </div>
  <!-- end of body -->
  <!-- menu mobile info -->
    <menuMobileComponent 
    :class="{
        'invisible' : !user.menu_setting_mobile.status, 
        'transition-all duration-300 ease-in-out' : user.menu_setting_mobile.status,
        'transition-all duration-300 ease-in-out' : !user.menu_setting_mobile.status,  
    }" 
    class="lg:hidden absolute z-40"
    :user="user"
    :client="client"
    @hideMenuMobile="user.menu_setting_mobile.status = false"
    @emit_destroy_notifications="destroyNotifications()"
    ></menuMobileComponent>
  <!-- /menu mobile info -->

  <menubar class="z-30" :state="state" :settings="user.settings" v-on:change_state_pompa="updateStatePompa($event)" />
</div>

</template>


<script>
import mqtt from 'mqtt'
import loader from '../components/Loader.vue'
import menubar from '../components/MenuBar.vue'
import headerContent from '../components/HeaderContent.vue'
import DoughnutExample from '../components/Doughnut.vue'
import menuMobileComponent from '../components/mobile/Menu.vue'
// import BarChart from '../components/LineChart.vue'
import Chart from "chart.js";
import sidebar from "../components/SideBar.vue";
import lineChart from "../components/LineChart.vue";

const options = {
    legend: {
        display: false
    },
    tooltips: {
        enabled: true,
        mode: 'point',
        titleFontColor: "black",
        bodyFontColor: "black",
        backgroundColor: "#eee"
    },
    maintainAspectRatio: false,
    responsive: false,
}


export default {
    name: 'dashboard',
    components: {
      loader,
      menubar,
      headerContent,
      sidebar,
      lineChart,
      DoughnutExample,
      menuMobileComponent,
    },
    data() {
        return {
            user: {
                id: null,
                name: '',
                email: '',
                monthly_fee: '',
                photo: '',
                role: '', 
                api_key: '',
                info: '',
                lastMonth: {
                  'usages' : 0,
                  'costs' : 0,
                },
                currentMonth: {
                  'usages' : 0,
                  'costs' : 0,
                },
                dataUsageAnalytics: localStorage.dataUsageAnalytics,
                statePompa: true,
                stateMode: '',
                settings: {
                  speechOn: '',
                  speechOff: '',
                },
                menu_setting: 0,
                menu_setting_web: {
                    status: false,
                    state: ''
                },
                menu_setting_mobile: {
                    status: false,
                    state: ''
                },
                notifications: [],
                devices: []
            },
            controller_left: {
              label: false,
              toggle: {
                pin: false,
                bgSecondary: true,
                bgWhite: false
              },
              bgIcon:{
                bgSecondary : false,
                bg : true
              },
              bgGradient:{
                bgGradient : false,
                bg : true
              }
            },
            controller_right: {
              label: true,
              toggle: {
                pin: true,
                bgSecondary: false,
                bgWhite: true
              },
              bgIcon:{
                bgSecondary : true,
                bg : false
              },
              bgGradient:{
                bgGradient : true,
                bg : false
              }
            },
            options,
            gradient2: null, 
            chartData: {
                    labels: ["air terisi", "air belum terisi"], 
                    datasets: [{
                        label: "air",
                        backgroundColor: [
                            "#00ACFF", "#DBECF8"
                        ],
                        data: [0, 19],
                    }]
            },
            chartLineData: {
              data : [null, null, null],
              labels : [],
            },
            connection: {
              host: '192.168.43.51',
              // host: '192.168.1.3',
              // host: '192.168.1.5',
              // host: '192.168.1.2',
              port: 8888,
              endpoint: '/mqtt',
              clean: true, // Reserved session
              connectTimeout: 4000, // Time out
              reconnectPeriod: 4000, // Reconnection interval
              // Certification Information
            },
            subscription: {
                topic: [`mc/data`, `mc/data/curva`, `mc/status/online`, `mc/status/offline`, `mc/controll/toggle`],
                qos: 0,
            },
            stateBroker: false,
            publication: {
                topic: [`user/control/mode`, `user/control/toggle`],
                qos: 0
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
            state: "dashboard",
            // state_pompa: true,
            // user.stateMode: true,
            arrow_cursor_selected: false,
            updateAnlyticsBussy: false,
            loader_notifikasi : false,
            loader_update : false,
            loader_device : false,
          }
    },
    computed: {
        getStateDevice(){
            if (typeof this.user.devices.data !== 'undefined' ){
              return this.user.devices.data.some(code => code.status == '1')
            }
        },
        notification_reading_cond(){
            // let condition = true
            if (typeof this.user.notifications.data !== 'undefined' ) {
              return this.user.notifications.data.some(code => code.read == '0')
            }
        },
    },
    methods: {
      randomString(length, chars) {
          var mask = '';
          if (chars.indexOf('a') > -1) mask += 'abcdefghijklmnopqrstuvwxyz';
          if (chars.indexOf('A') > -1) mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          if (chars.indexOf('#') > -1) mask += '0123456789';
          if (chars.indexOf('!') > -1) mask += '~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';
          var result = '';
          for (var i = length; i > 0; --i) result += mask[Math.floor(Math.random() * mask.length)];
          return result;
      },
      buttonLactivate(){
        //   console.log(`buttonLactivate`);
          // left
          this.controller_left.bgGradient.bg = false
          this.controller_left.bgGradient.bgGradient = true
          
          this.controller_left.bgIcon.bg = false
          this.controller_left.bgIcon.bgSecondary = true

          this.controller_left.label = true
          
          this.controller_left.toggle.bgSecondary = false
          this.controller_left.toggle.bgWhite = true
          this.controller_left.toggle.pin = true
          // /left
          // non aktifkan right
          this.controller_right.bgGradient.bg = true
          this.controller_right.bgGradient.bgGradient = false
          
          this.controller_right.bgIcon.bg = true
          this.controller_right.bgIcon.bgSecondary = false

          this.controller_right.label = false
          
          this.controller_right.toggle.bgSecondary = true
          this.controller_right.toggle.bgWhite = false
          this.controller_right.toggle.pin = false
          // non aktifkan right
          this.user.stateMode = 0
      },
      buttonRactivate(){
        //   console.log(`buttonRactivate`);
          // right
          this.controller_right.bgGradient.bg = false
          this.controller_right.bgGradient.bgGradient = true
          
          this.controller_right.bgIcon.bg = false
          this.controller_right.bgIcon.bgSecondary = true

          this.controller_right.label = true
          
          this.controller_right.toggle.bgSecondary = false
          this.controller_right.toggle.bgWhite = true
          this.controller_right.toggle.pin = true
          // /right
          // non aktifkan left
          this.controller_left.bgGradient.bg = true
          this.controller_left.bgGradient.bgGradient = false
          
          this.controller_left.bgIcon.bg = true
          this.controller_left.bgIcon.bgSecondary = false

          this.controller_left.label = false
          
          this.controller_left.toggle.bgSecondary = true
          this.controller_left.toggle.bgWhite = false
          this.controller_left.toggle.pin = false
          // non aktifkan left
          this.user.stateMode = 1
      },
      toggle(){
          // right
          this.controller_right.bgGradient.bgGradient = !this.controller_right.bgGradient.bgGradient
          this.controller_right.bgGradient.bg = !this.controller_right.bgGradient.bg

          this.controller_right.bgIcon.bgSecondary = !this.controller_right.bgIcon.bgSecondary
          this.controller_right.bgIcon.bg = !this.controller_right.bgIcon.bg

          this.controller_right.label = !this.controller_right.label

          this.controller_right.toggle.pin = !this.controller_right.toggle.pin 
          this.controller_right.toggle.bgSecondary = !this.controller_right.toggle.bgSecondary 
          this.controller_right.toggle.bgWhite = !this.controller_right.toggle.bgWhite 
          // /right
          
          // left
          this.controller_left.toggle.pin = !this.controller_left.toggle.pin 
          this.controller_left.toggle.bgSecondary = !this.controller_left.toggle.bgSecondary 
          this.controller_left.toggle.bgWhite = !this.controller_left.toggle.bgWhite 
          this.controller_left.label = !this.controller_left.label
          this.controller_left.bgGradient.bgGradient = !this.controller_left.bgGradient.bgGradient
          this.controller_left.bgGradient.bg = !this.controller_left.bgGradient.bg
          this.controller_left.bgIcon.bgSecondary = !this.controller_left.bgIcon.bgSecondary
          this.controller_left.bgIcon.bg = !this.controller_left.bgIcon.bg
          // /left
          
          this.user.stateMode = !this.user.stateMode
          if(this.user.stateMode){
            this.doPublish('user/control/mode', '0');
            this.doSaveMode('0');
          }else{
            this.doPublish('user/control/mode', '1');
            this.doSaveMode('1');
          }
      },
      updateChart () {
        // console.log('boom');
        this.$refs.skills_chart.update();
        this.$refs.lineChart.update();
      },
      getIndexMonth(){
        const dateObj = new Date();
          let listMonth = [
              [1, 2, 3],
              [4, 5, 6],
              [7, 8, 9],
              [10, 11, 12]
          ];
          let indexMonth;
          listMonth.forEach(el=>{
            if(el.indexOf( dateObj.getMonth() + 1 ) != -1) {
              indexMonth = el.indexOf(dateObj.getMonth() + 1)
            } 
          })
          return indexMonth
      },
      updateCurvaDoughnatChart (amount) {
          let max_watter = 19;
          let sisa = 19 - amount;
          this.chartData.datasets[0].data[0] = amount;
          this.chartData.datasets[0].data[1] = sisa;
          console.log(`amount : ${amount} , sisa ${sisa}`);
          this.updateChart();
      },
      updateCurvaChartLine () {
          let indexThisMonth = this.getIndexMonth()
          let data = parseInt(this.user.currentMonth.usages) + 1
          this.chartLineData.data[indexThisMonth] = data;
          this.user.currentMonth.usages = parseInt(this.user.currentMonth.usages) + 1;
          this.updateChart();
          // console.log(data);
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
        const { host, port, endpoint, ...options } = this.connection
        const connectUrl = `ws://${host}:${port}`
        try {
          this.client = mqtt.connect(connectUrl, {
            clientId : `${this.user.api_key}_${this.randomString(8, '#Ab1')}_web`,
            username: this.user.api_key,
            password: this.user.api_key
          })
        } catch (error) {
          console.log('mqtt.connect error', error)
        }
        this.client.on('connect', () => {
            this.$swal.fire({
                text:'Berhasil terhubung ke broker.',
                icon: 'success',
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 3000,
            })
        })
        this.client.on('error', error => {
          console.log('Connection failed', error)
        })
        this.client.on('message', (topic, message) => {
            // topic = `${this.user.key}/`
            // console.log(topic);
            this.receiveNews = this.receiveNews.concat(message)
            let amount = parseInt(`${message}`)
            console.log(`topic : ${topic}, message ${message}`);
            if(topic == `${this.user.api_key}/mc/data`){
              // update data curva chart line with data usage and monthly
              this.updateCurvaChartLine()
              // console.log(`mc/data : ${message}`);
            }else if(topic == `${this.user.api_key}/mc/data/curva`){
              // this is just display curva right now, not calculate to data usage and monthly
              this.updateCurvaDoughnatChart(message)
              // console.log(`mc/data/curva : ${message}`);
            }else if(topic == `${this.user.api_key}/mc/controll/toggle`){
              // this is just display curva right now, not calculate to data usage and monthly
              // console.log(`toggle from mc : ${message}`);
              if (message > 0) {
                  this.doSavePompa('1')
                  this.user.statePompa = true
              }else{
                this.doSavePompa('0')
                this.user.statePompa = false
              }
            }else if(topic == `${this.user.api_key}/mc/status/online`){
                let data = message.toString().split('_')
              // notif dan info devices untuk online dan offline
              
                this.getNotifications()
                this.$swal.fire({
                    text:'Perangkat baru telah terhubung!.',
                    icon: 'success',
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000,
                })
                  
                // push new device to this.user.devices
                // pertama cek dulu apakah devices ada di data atau tidak
                if(this.user.devices.data.some(code => code.name == data[1])){
                  console.log(`new device online`);
                  // cek posisi device di array dan ganti statusnya
                  let pos = this.user.devices.data.findIndex(item => item.name == data[1]) 
                  this.user.devices.data[pos].status = '1'
                  this.user.devices.data[pos].updated_at = this.getCurrentDate()
                }else{
                  // kita insert device baru di array devices
                  this.user.devices.data.unshift({
                    'id' : 1,
                    'name' : data[1],
                    'status' : '1',
                    'created_at' : this.getCurrentDate(),
                    'updated_at' : this.getCurrentDate(),
                  })
                }
                  // this.user.devices.data.unshift(re.data.notification)
            }else if(topic == `${this.user.api_key}/mc/status/offline`){
                let data = message.toString().split('_')
                this.getNotifications()
                this.$swal.fire({
                    text:'Perangkat baru memutuskan sambungan!.',
                    icon: 'warning',
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000,
                })
                // update device ke offline yang di data array devices
                if(this.user.devices.data.some(code => code.name == data[1])){
                    // cek posisi device di array dan ganti statusnya
                    let pos = this.user.devices.data.findIndex(item => item.name == data[1])
                    console.log(`pos : ${pos}`);
                    this.user.devices.data[pos].status = '0'
                    this.user.devices.data[pos].updated_at = this.getCurrentDate()
                }else{
                    console.log(`new device offline`);

                    // kita insert device baru di array devices
                    this.user.devices.data.unshift({
                      'id' : 1,
                      'name' : data[1],
                      'status' : '0',
                      'created_at' : this.getCurrentDate(),
                      'updated_at' : this.getCurrentDate(),
                    })
                }
            }
          // console.log(`Received message ${message} from topic ${topic}`)
        })
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
      doPublish(topic, payload) {
        // console.log(topic, payload);
        this.client.publish(topic, payload, error => {
          if (error) {
            console.log('Publish error', error)
          }
        })
      },
      toggle_pompa(){
        // this.state_pompa = !this.state_pompa
        this.user.statePompa = !this.user.statePompa
        if(this.user.statePompa) {
          this.doPublish('user/control/toggle', '1')
          this.doSavePompa('1')
        }else if(!this.user.statePompa){
          this.doPublish('user/control/toggle', '0')
          this.doSavePompa('0')
        }else{
          alert('Something went wrong');
        }
      },
      doSaveMode(data){
        let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
        })
        authAxios.patch('/user/control/mode', {'mode' : data}).then(re => {
            // console.log(re);
        }).catch(err => {
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
      },
      doSavePompa(data, type = null){
        let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
        })
        console.log("nodle", data);
        authAxios.patch('/user/control/pompa', {'pompa' : data}).then(re => {
            if(re.status == 200){
              if (type == null) {
                  if(data == '1'){
                    this.$swal.fire({
                              text:`Pompa berhasil dinyalakan`,
                              icon: 'success',
                              position: 'center',
                              showConfirmButton: false,
                              timer: 3000,
                              width: '15em',
                      })
                  }else if(data == '0'){
                      this.$swal.fire({
                              text:`Pompa berhasil dimatikans`,
                              icon: 'success',
                              position: 'center',
                              showConfirmButton: false,
                              timer: 3000,
                              width: '15em',
                      })
                  }
              }
            }
            // console.log(re);
        }).catch(err => {
            if (err.response.status == 422) {
                  this.$swal.fire({
                      text:'Gagal di update!.',
                      icon: 'error',
                      position: 'center',
                      showConfirmButton: false,
                      timer: 3000,
                      width: '15em',
                  })
                  this.user.statePompa = !this.user.statePompa
            }
            console.error(err);
        })
      },
      dataUser(data){
          this.user.id = data.id;
              this.user.name = data.name;
              this.user.email = data.email;
              this.user.monthly_fee = `Rp ${data.monthly_fee}`;
              this.user.api_key = data.api_key;
              this.connection.clientId = `${data.api_key}_${this.randomString(8, '#Ab1')}_web`
              this.user.photo = data.photo;
              this.user.role = data.role;
              this.user.info = data.info;

              // current month data usages and costs
              this.user.currentMonth.usages = data.dataUsageCurrentLast[0] == null ? null : data.dataUsageCurrentLast[0].total_usages;
              this.user.currentMonth.costs = data.dataUsageCurrentLast[0] == null ? null : data.dataUsageCurrentLast[0].total_cost;
              // last month data usages and costs
              this.user.lastMonth.usages = data.dataUsageCurrentLast[1] == null ? null : data.dataUsageCurrentLast[1].total_usages;
              this.user.lastMonth.costs = data.dataUsageCurrentLast[1] == null ? null : data.dataUsageCurrentLast[1].total_cost;

              this.user.statePompa = data.statePompa;
              this.user.stateMode = data.stateMode;
              this.user.settings.speechOn = data.speechOn;
              this.user.settings.speechOff = data.speechOff;
      },
      updateStatePompa(value){
        this.user.statePompa = value;
        if(this.user.statePompa) {
          this.doPublish('user/control/toggle', '1')
          this.doSavePompa('1', "voice")
        }else if(!this.user.statePompa){
          this.doPublish('user/control/toggle', '0')
          this.doSavePompa('0', "voice")
        }else{
          alert('Something went wrong');
        }
      },
      async getUserInfo()  {
          let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
          })

          await authAxios.get('/user').then(re => {
            // console.log(re.data[0].name);
            // console.log(re.data[0]);
            if(re.status == 200){
              this.dataUser(re.data[0])

              if(this.user.stateMode == 0) {
                this.buttonRactivate()
              } else if(this.user.stateMode == 1){
                this.buttonLactivate()
              };
            }
          }).then(re => {
              this.createConnection();
              this.doSubscribe();
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
                // console.log(err.response.status);
          })
      },
      async update(){
          let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
          })

          if(this.user.id != null){
              this.loader_update = true
              let monthly_fee = parseInt(this.user.monthly_fee.split('Rp ')[1])
              // console.log(this.user.id);
              await authAxios.patch(`/user/${this.user.id}`, {
                  name : this.user.name,
                  monthly_fee,
                  speechOn : this.user.settings.speechOn,
                  speechOff : this.user.settings.speechOff
              }).then( re => {
                  // console.log(re);
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
                  this.loader_update = false
                  // this.dataUser(re.data[0])
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
          }else{
              this.$swal.fire({
                  text:'Gagal di update!.',
                  icon: 'error',
                  position: 'center',
                  showConfirmButton: false,
                  timer: 3000,
                  width: '15em',
              })
          }
          
      },
      async updateAnlytics(){
          localStorage.dataUsageAnalytics = this.user.dataUsageAnalytics
          this.updateAnlyticsBussy = true
          let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
          })
          await authAxios.get(`user/data-usage/${this.user.dataUsageAnalytics}`).then(re => {
            // console.log(re.data);
            let data = re.data
            
            this.chartLineData.data[0] = data[0].total_usages;
            this.chartLineData.data[1] = data[1].total_usages;
            this.chartLineData.data[2] = data[2].total_usages;
            this.chartLineData.labels[0] = data[0].created_at;
            this.chartLineData.labels[1] = data[1].created_at;
            this.chartLineData.labels[2] = data[2].created_at;
            this.updateChart();
          }).catch(err => {
            console.log(err);
          })
          this.updateAnlyticsBussy = false
          
      },
      closeSelect(){
        this.arrow_cursor_selected = false
      },
      showMenuWeb(state){
          if(!this.user.menu_setting_web.status){
            this.user.menu_setting_web.status = true
          }
          this.user.menu_setting_web.state = state
          if(state == 'notification') this.updateNotification()
      },
      updateNotification(){
          let authAxios = axios.create({
              headers: {
              'Authorization': `Bearer ${localStorage.token}`
              }
          })

          authAxios.patch('/user/notification/update', {'read' : '1'}).then(res => {
              if(res.status == 200) {
                  this.user.notifications.data.forEach(data => {
                      data.read = "1"
                  })
              }
          }).catch(err => {
              if(err.response.status != 200){
                  this.$swal.fire({
                      text:'Koneksi bermasalah!',
                      icon: 'error',
                      position: 'top-center',
                      showConfirmButton: false,
                      toast: true,
                      timer: 3000,
                  })
              }
          })
      },
      hideMenu(){
          this.user.menu_setting = false
          this.user.menu_setting_web.status = false
      },
      async pageChange(url){
              // alert(url.split('http://127.0.0.1:8000/api')[1])
              // console.log(url);
              this.loader_notifikasi = true
              let authAxios = axios.create({
                  headers: {
                  'Authorization': `Bearer ${localStorage.token}`
                  }
              })

              await authAxios.get(url.split('http://127.0.0.1:8000/api')[1]).then(re => {
                  this.user.notifications = re.data
                  this.loader_notifikasi = false
                  // console.log(re);
              }).catch()
      },
      async getDevices(){
          let authAxios = axios.create({
              headers: {
              'Authorization': `Bearer ${localStorage.token}`
              }
          })

          await authAxios.get('/user/device')
          .then(re => {
              this.user.devices = re.data
          })
          .catch(err => {
              if(err.response.status != 200){
                  this.$swal.fire({
                      text:'Koneksi bermasalah!',
                      icon: 'error',
                      position: 'top-center',
                      showConfirmButton: false,
                      toast: true,
                      timer: 3000,
                  })
              }
          })
      },
      async getNotifications(){
          let authAxios = axios.create({
              headers: {
              'Authorization': `Bearer ${localStorage.token}`
              }
          })

          await authAxios.get('/user/notification').then(re => {
              this.user.notifications = re.data
              // console.log(re);
          }).catch()
      },
      menu_setting_mobile_state_emited(data){
        this.user.menu_setting_mobile.state = data.state
        this.user.menu_setting_mobile.status = data.status
      },
      async destroyNotifications(){
        this.loader_notifikasi = true
        let authAxios = axios.create({
            headers: {
            'Authorization': `Bearer ${localStorage.token}`
            }
        })

        await authAxios.delete('/user/notification').then(re => {
            this.getNotifications();
            this.loader_notifikasi = false
            this.$swal.fire({
                text:'Berhasil hapus notifikasi',
                icon: 'success',
                position: 'center',
                showConfirmButton: false,
                timer: 3000,
                width: '15em',
            })
            // console.log(re);
        }).catch(err => {
            this.$swal.fire({
                text:'Terjadi kesalahan koneksi!',
                icon: 'error',
                position: 'center',
                showConfirmButton: false,
                timer: 3000,
                width: '15em',
            })
        })
      }
    },
    mounted(){
      // this.toggle();
      this.getUserInfo();
      this.getNotifications();
      this.getDevices();
      this.updateAnlytics();
      
    }
}

</script>

<style scoped>
.selectMonth{
  border: 0 0 1px 0;
  border-bottom-color: #68D0EE;
  background:none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background: transparent;
  /* background-image: url("data:image/svg+xml,%3Csvg fill='%2368D0EE' version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='17' height='17' viewBox='0 0 451.847 451.847' style='enable-background:new 0 0 451.847 451.847;' xml:space='preserve'%3E%3Cg%3E%3Cpath d='M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751 c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0 c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z'/%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3Cg%3E%3C/g%3E%3C/svg%3E%0A");
  background-repeat: no-repeat;
  background-position-x: 100%;
  background-position-y: 5px; */
}
</style>