<template>
    <div class="overflow-x-hidden md:overflow-hidden">
        <div :class="{'justify-center items-center' : loaderShow}" class="bg-primary flex md:flex-col h-screen items-center justify-center lg:gap-14 w-screen relative overflow-hidden">
                <div class="p-10 lg:hidden relative " :class="{'hidden' : loaderShow}">
                    <h1 class="font-nunito font-bold text-3xl text-center text-gray-100 relative z-50">Smart Tandon</h1>
                        <h1 class="font-semibold text-lg text-center text-gray-100 text-opacity-50 mt-5 relative z-50">Masuk untuk menggunakan smarttandon</h1>
                </div>
                <!-- icon isometric -->
                <div class="flex justify-end md:mt-16" :class="{'hidden' : loaderShow}">
                    <svg class="md:animate-pulse md:w-80 md:h-80" xmlns="http://www.w3.org/2000/svg" width="529.996" height="431.962" viewBox="0 0 529.996 431.962"><g transform="translate(30.872 -0.02)"><path d="M210.527,76.63l330.649,190.9L341.829,383.376,11.18,192.48Z" transform="translate(-42.052 48.606)" fill="#68d0ee" opacity="0.1"/><g transform="translate(12.854 139.358)"><path d="M111.709,77.07l-.019,12.177L72.96,111.754l.019-12.119Z" transform="translate(44.63 -66.527)" fill="#323a3b"/><path d="M140.49,104.537l-.019,12.158L92.87,89.247l.019-12.177Z" transform="translate(63.45 -66.527)" fill="#232829"/><path d="M136.179,91.19l-.019,12.158L97.43,125.893l.019-12.177Z" transform="translate(67.761 -53.18)" fill="#1d1f1f"/><path d="M120.58,116.1l-.019,12.177-47.6-27.486.019-12.119Z" transform="translate(44.63 -55.562)" fill="#141515"/><path d="M37.68,112.78v12.138l-12.8,7.411.039-12.119Z" transform="translate(-0.817 -32.772)" fill="#323a3b"/><path d="M79.041,140.266,79,152.4,31.46,124.918V112.78Z" transform="translate(5.402 -32.772)" fill="#232829"/><path d="M85.242,140.266l-12.78,7.372L24.9,120.211l12.761-7.431Z" transform="translate(-0.798 -32.772)" fill="#a9d6ea"/><path d="M72.48,144.028l-.019,12.177L24.88,128.719l.039-12.119Z" transform="translate(-0.817 -29.161)" fill="#141515"/><path d="M62.14,126.91,62.1,139.048,49.34,146.46l.019-12.177Z" transform="translate(22.304 -19.416)" fill="#1d1f1f"/><path d="M188.9,94.52l-.019,12.2L53.57,185.324l.019-12.158Z" transform="translate(26.302 -50.032)" fill="#323a3b"/><path d="M302.268,197.968l-.019,12.158L123.13,106.717l.019-12.2Z" transform="translate(92.053 -50.032)" fill="#232829"/><path d="M232.727,238.34l-.058,12.177L53.57,147.108l.019-12.158Z" transform="translate(26.302 -11.816)" fill="#303637"/><path d="M280.99,147.7l-.019,12.158L145.64,238.465l.058-12.177Z" transform="translate(113.331 0.236)" fill="#454e4f"/><path d="M368.01,197.968,232.718,276.556,53.58,173.166,188.892,94.52Z" transform="translate(26.311 -50.032)" fill="#a9d6ea"/><path d="M448.675,167,708.211,316.784l-156.456,90.96L292.18,257.96ZM551.19,393.524,686.5,314.936,507.363,211.488,372.052,290.134Zm-93.8-165.988,38.691-22.526-47.62-27.467L409.77,200.069,457.39,227.5ZM363.8,281.867l12.761-7.372L329,247.008l-12.741,7.528Z" transform="translate(-292.161 -167)" fill="#def6ff"/><path d="M159.3,104.537l-38.73,22.526L72.97,99.635,111.7,77.07Z" transform="translate(44.64 -66.527)" fill="#a9d6ea"/><path d="M302.445,148.68l-.039,12.138L145.93,251.778l.039-12.138Z" transform="translate(113.605 1.162)" fill="#a9d6ea"/><path d="M272.084,268.262l-.039,12.138L12.51,130.538l.019-12.138Z" transform="translate(-12.51 -27.46)" fill="#a9d6ea"/></g><path d="M410.992,230.744c-28.615,16.535-28.751,43.34-.311,59.875s74.7,16.515,103.332,0,28.79-43.34.331-59.855S439.626,214.229,410.992,230.744Z" transform="translate(-187.371 20.913)" opacity="0.1"/><path d="M396.211,164.88s-6.283,8.17-6.828,10.31-3.112,11.2,1.4,17.313c2.432,3.326,3.754-1.342,4.357-7.411.272-2.743-.117-4.824,3.462-7.781a31.615,31.615,0,0,0,6.614-8.715C406.326,166.32,396.211,164.88,396.211,164.88Z" transform="translate(-188.579 -29.646)" fill="#efb185"/><path d="M403.713,167.879c-1.089,2.237-4.26,6.147-4.746,9.473-.6,4.007-4.922,3.891-5.194,6.555-.486,4.727-1.5,8.656-2.976,8.559.622-3.56-3.54-6.244.856-14.512a59.233,59.233,0,0,1,10-11.885C403.441,166.965,404.141,167.043,403.713,167.879Z" transform="translate(-187.211 -28.521)" fill="#e6a376"/><path d="M399.4,166.07s-1.245,11.516-2.12,14.959-2.937,5.447-3.346,4.707,1.614-11.068-2.14-10.777C389.831,175.115,398.838,167.685,399.4,166.07Z" transform="translate(-185.409 -28.521)" fill="#efb185"/><path d="M426.752,118.231s-11.672-2.548-16.126,20.464-4.416,31.96-7.684,39.858S390.92,212.07,390.92,212.07s7.314.292,10.193,5.738c0,0,18.558-31.727,22.117-45.636S438.832,124.456,426.752,118.231Z" transform="translate(-185.973 -73.82)" fill="#5fb9e6"/><path d="M402.942,178.021c3.268-7.9,3.171-16.846,7.684-39.858,2.49-12.508,7-17.507,10.679-19.452,10.971,7.1-.661,39.878-4.163,53.533-2.684,10.427-13.383,31.766-18.655,41.9a13.481,13.481,0,0,0-7.567-2.684S399.635,185.938,402.942,178.021Z" transform="translate(-185.973 -73.288)" fill="#77d2ff"/><path d="M443.927,228.178s3.054,7.159,0,9.007-3.482,3.89-8.4,3.482-4.2,1.226-5.836,3.073-19.063,9.415-22.332,5.719,5.933-7.995,9.182-10.135,11.068-10.738,11.282-13.189S443.927,228.178,443.927,228.178Z" transform="translate(-171.09 27.564)" fill="#111114"/><path d="M443.933,235.6c-3.073,1.848-3.482,3.89-8.4,3.482s-4.2,1.226-5.836,3.074-19.063,9.415-22.332,5.719c-1.128-1.245-.8-2.587.272-3.89,1.206.233,2.879.545,5.1.914,5.116.895,11.672-5,14.259-7.2s5.836-1.342,10.154-2.062,3.774-7.45,3.774-7.45l3.249-1.109C444.711,228.656,446.52,234.025,443.933,235.6Z" transform="translate(-171.096 29.149)" fill="#0a0a0a"/><path d="M451.195,238.809s1.284,8.462-1.945,13.033-10.407,12.527-13.481,12.177-3.6-1.77-3.6-1.77a30.753,30.753,0,0,1,.973-13.753,43.654,43.654,0,0,0,2.451-9.726Z" transform="translate(-147.331 40.199)" fill="#111114"/><path d="M446.687,251.823c-2.859,4.046-8.734,10.64-12.2,11.963,4.571-5.836-2.315-4.688,2.859-7.509,7.12-3.89,2.568-7.061,5.836-7.976s.856-8.734.856-8.734l1.712-.778h3S449.935,247.252,446.687,251.823Z" transform="translate(-144.788 40.218)" fill="#0a0a0a"/><path d="M432.015,174.031s-14.628-1.6-19.453-12.411a357.913,357.913,0,0,0,1.634,51.568c2.937,27.681,5.408,76.371,5.408,76.371s9.454,8.909,19.219,0c0,0,2.743-32.135,0-49.954,0,0,1.828-31.124-1.226-46.8S432.015,174.031,432.015,174.031Z" transform="translate(-165.792 -32.727)" fill="#ea49bd"/><path d="M419.654,291.3s-2.47-48.631-5.408-76.37A440.893,440.893,0,0,1,412.3,159.74c3.56,7.937,12.7,14.512,17.138,15.562-.35,10.563-1.342,41.706-1.187,52.074.156,9.843,2.081,50.576,2.9,67.792a15.562,15.562,0,0,1-11.5-3.871Z" transform="translate(-165.919 -34.504)" fill="#ff61cb"/><path d="M459.646,167.12s1.42,16.2,1.712,41.356,2.14,34.645,2.762,38.5,2.743,45.966,1.517,58.241c0,0-7.937,12.275-20.464,0,0,0-2.12-43.146-4.26-52.989s-14.1-57.54-18.927-74.659c-2.12-7.567-2.626-10.446-2.626-10.446S440.427,182.274,459.646,167.12Z" transform="translate(-159.09 -27.528)" fill="#ea49bd"/><path d="M447.329,306.65s-2.12-43.146-4.26-52.989-14.1-57.54-18.927-74.659a40.033,40.033,0,0,0-7.061-13.4s13.831,9.726,25.813,9.726c.525,3.7,5.6,38.9,6.789,54.331s11.671,69.017,8.812,82.5C455.421,312.272,451.647,310.891,447.329,306.65Z" transform="translate(-161.245 -28.965)" fill="#ff61cb"/><path d="M440.34,117.25s23.81,8.034,24.588,9.726,7.158,4.883,1.79,25.541c0,0-7.9,22.759.72,43.068a134.228,134.228,0,0,0,8.793,17.741s-7.684,16.029-36.824,9.921c-5.836-1.225-16.34-7.47-20.075-13.15a145.271,145.271,0,0,0-6.614-39.041c-6.555-20.6-12.508-47.7-1.07-53.125C411.647,117.873,414.156,113.768,440.34,117.25Z" transform="translate(-172.483 -75.991)" fill="#77d2ff"/><path d="M428.993,107.36s-2.626,12.158,4.96,16.749c4.241,2.548.973,13.811-10.679,17.507,0,0-5.563.739-5.836-1.3-.447-4.63-3.035-6.342-6.089-8.851S428.993,107.36,428.993,107.36Z" transform="translate(-166.952 -84.016)" fill="#efb185"/><path d="M429.163,123.609a3.151,3.151,0,0,1,1.187,1.284c-5.952-2.7-14.239.136-14.239.136l6.167-16.126.895-.953.739.934C423.522,112.5,423.5,120.147,429.163,123.609Z" transform="translate(-162.162 -83.459)" fill="#dd9569"/><path d="M437.26,112.21s2.2,13.909-4.377,23.129c-5.836,8.209-13.617,15.134-18.908,6.439-4.2-6.906-15.173-24.393-10.1-30.715,6.575-8.17,7.314-15.406,18.48-15.562C422.359,95.481,435.528,96.278,437.26,112.21Z" transform="translate(-174.966 -95.227)" fill="#efb185"/><path d="M436.819,110.971a30.929,30.929,0,0,1-4.26,23.343,40.85,40.85,0,0,1-5.836,6.808,37.583,37.583,0,0,0,4.746-10.679c1.751-4.941-5.622-.428-3.891-12.041.584-3.891-6.828,3.735-8.87,4.474-12.158,4.357-13.947-2.879-15.309-5.7a23.88,23.88,0,0,1-.37-3.89l.292-2.626a1.247,1.247,0,0,1,.156-.739,46.011,46.011,0,0,1,2.257-5.836c5.213-1.945,19.978-7.256,20.289-7.275a88.343,88.343,0,0,1,7.684,4.766A21.126,21.126,0,0,1,436.819,110.971Z" transform="translate(-174.526 -93.989)" fill="#e6a376"/><path d="M437.071,126.795s6.264-12.722-2.081-24.257A16.087,16.087,0,0,0,417.191,96c-5.738,1.459-15.017,6.069-14.92,18.733,0,3.89,2.743,11.01,14.92,2.218,1.731-1.245,6.614-3.89,9.084-2.976s3.891,3.891,3.988,6.906c.136,2.587,2.237,2.043,2.334,1.459s.136-8.151,3.618-6.536C439.308,117.243,437.129,126.25,437.071,126.795Z" transform="translate(-175.244 -95.339)" fill="#341c09"/><path d="M429.821,126.144c0-.545,2.237-9.551-.856-10.991-3.482-1.615-3.521,5.952-3.618,6.536s-2.2,1.128-2.334-1.459c-.136-2.957-1.517-5.972-3.988-6.906s-6.458,1.653-9.084,2.976c1.673-2.3,5.972-4.532,6.127-8.89.175-5.836,2.276-9.357,4.785-11.341a16.709,16.709,0,0,1,6.886,5.836C436.084,113.441,429.821,126.144,429.821,126.144Z" transform="translate(-167.994 -94.688)" fill="#221101"/><path d="M418.417,117.137a19.452,19.452,0,0,0,7.392-13.617,7.625,7.625,0,0,1,3.463-6.4s-6.517-4.338-17.04.642c-4.941,2.334-8.6,9.162-9.318,10.641C399.2,116.048,404.43,127.72,418.417,117.137Z" transform="translate(-175.731 -95.35)" fill="#341c09"/><path d="M445.131,123.828c.817,1.615,7.159,4.883,1.79,25.541,0,0-7.9,22.759.72,43.068a134.241,134.241,0,0,0,8.793,17.741s-3.891,7.917-16.262,10.485c-7.022-17.507-10.5-50.44-13.617-72.966-1.945-14.531,3.229-23.557,7.976-28.576C439.86,121.1,444.781,123.108,445.131,123.828Z" transform="translate(-152.687 -72.9)" fill="#5fb9e6"/><path d="M428.5,127.448c.817-6.322,9.22-13.617,16.632-1.187s21.2,52.133,16.126,57.891c-1.945,2.257-5.524,4.98-8.831,2.782-5.155-3.463-10.271-14.122-12.275-20.153C436.847,156.86,427.743,133.381,428.5,127.448Z" transform="translate(-150.491 -72.552)" fill="#77d2ff"/><path d="M83.89,153.232l47.367-34.042-10.329,6.05Z" transform="translate(67.816 112.645)" fill="#aac6c3"/><path d="M83.89,161.3l37.038-27.992L97.059,110.65Z" transform="translate(67.816 104.573)" fill="#def6ff"/><path d="M217.68,40.608l-114.75,164.7,10.329-6.05L227.873,34.48Z" transform="translate(85.814 32.573)" fill="#c2e7f2"/><path d="M208.841,33.41,94.11,198.075l17.157,8.248,114.75-164.7Z" transform="translate(77.476 31.562)" fill="#def6ff"/><path d="M205.274,25.95,90.66,190.713l6.711,14.414L212.1,40.462Z" transform="translate(74.215 24.51)" fill="#c2e7f2"/><path d="M156.408,43.449l17.177,8.209,10.193-6.128-6.808-14.414L159.812,22.79,149.58,28.937Z" transform="translate(129.909 21.523)" fill="#a9d5e0"/><path d="M158.165,36.074l7.528,3.638,4.494-2.626-3.074-6.419-7.489-3.7-4.493,2.684Z" transform="translate(135.156 25.475)" fill="#def6ff"/><path d="M83.89,161.3l19.88-36.24L97.059,110.65Z" transform="translate(67.816 104.573)" fill="#c2e7f2"/><path d="M88.033,134.271l-4.143,7.373,2.665-10.193Z" transform="translate(67.816 124.234)" fill="#5a5c5d"/><path d="M88.033,132.9l3.618,1.887-7.762,5.486Z" transform="translate(67.816 125.605)" fill="#6d6f70"/><path d="M431.909,157.907s-8.773.973-10.621-.331-4.221.856-1.945,2.2a13.266,13.266,0,0,0,5.388,1.4s-9.726,3.307-11.438.661,1.128,7.995,6.128,8.734,10.329,2.509,18.11-7.586A8.851,8.851,0,0,0,431.909,157.907Z" transform="translate(-165.297 -36.931)" fill="#e6a376"/><path d="M468,157.144s-12.839,17.215-42.8,20.62a10.408,10.408,0,0,0-3.326-9.1S471.056,126.934,468,157.144Z" transform="translate(-156.708 -47.334)" fill="#77d2ff"/></g></svg>
                </div>
                <!-- /icon isometric -->

                <!-- menu login -->
                <div :class="{'hidden' : loaderShow}"
                class="flex flex-col md:mt-16 justify-center items-center relative z-50">
                    <!-- logo -->
                    <div class="mt-10 bg-opacity-90 rounded-xl md:hidden">
                        <svg class="w-28 h-28 animate-pulse" id="logo_os" data-name="logo os" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35.037" height="30.041" viewBox="0 0 35.037 30.041">
                        <defs >
                            <linearGradient id="linear-gradient" x1="-0.136" y1="0.45" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                            <stop offset="0" stop-color="#9374ec" stop-opacity="0.302"/>
                            <stop offset="1" stop-color="#3106ab"/>
                            </linearGradient>
                        </defs>
                        <path id="Path_5" data-name="Path 5" d="M59.96,0H43V5.653H59.96v5.653h5.653V0Z" transform="translate(-37.347)" fill="url(#linear-gradient)"/>
                        <path id="Path_6" data-name="Path 6" d="M0,48.653v16.96H16.96V59.96H5.653V43H0Z" transform="translate(0 -37.347)" fill="url(#linear-gradient)"/>
                        <path id="Path_7" data-name="Path 7" d="M155.328,105.719v-5.653h-5.588V100h-5.653v11.241H138.5v5.653h11.307v-5.653h-.066v-5.522Z" transform="translate(-120.291 -86.853)" fill="#EDEFF2"/>
                        </svg>
                    </div>
                    <!-- end logo -->
                    <div class="p-10 md:hidden flex flex-col" :class="{'hidden' : loaderShow}">
                        <h1 class="font-nunito font-bold text-5xl text-center text-gray-100 relative z-50">Smart Tandon</h1>
                        <h1 class="font-semibold text-lg text-center text-gray-100 text-opacity-50 mt-5 relative z-50">Masuk untuk menggunakan smarttandon</h1>
                    </div>
                    <div :class="{'hidden' : loaderShow}" class="shadow-xl">
                        <button @click="AuthProvider('google')" class="flex gap-3 items-center bg-gray-500 bg-opacity-20 shadow-lg px-5 py-2 rounded-full hover:bg-opacity-80 transition-opacity duration-300">
                            <span class="text-gray-100 font-semibold">Masuk dengan google</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 25.092 25.016">
                            <g id="google-plus" transform="translate(202.046 -439.492)">
                                <path id="Path_3782" data-name="Path 3782" d="M12.583,4.548a8.013,8.013,0,0,1,6.368,3.207L22.18,4.5a12.5,12.5,0,1,0,2.433,11.416,12.125,12.125,0,0,0,.478-3.411V11.371H13.721v4.547h6.027a7.913,7.913,0,0,1-7.164,4.549,8.034,8.034,0,0,1-8.035-7.96,8.034,8.034,0,0,1,8.035-7.96Zm0,0" transform="translate(-202.046 439.492)" fill="#fff"/>
                            </g>
                            </svg>

                        </button>
                    </div>
                </div>
                <!-- /menu login -->

                
                <!-- gelembung -->
                <div class="absolute -bottom-24 -left-20 z-0">
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
                <div class="absolute top-60 -right-44 opacity-25 z-0">
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
                <div class="absolute -top-40 right-44 opacity-40 z-0">
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
                <loader class="absolute z-50 h-28 w-28" :class="{
                'transition-opacity duration-200 transform opacity-100 ease-in-out' : loaderShow,
                'transition-opacity duration-200 transform opacity-0 ease-in-out invisible' : !loaderShow,
                }"></loader>

        </div>
        <!-- footer -->
        <footers :class="{'hidden' : loaderShow}"></footers> 
        <!-- /footer -->
</div>
</template>

<script>
import loader from '../../components/Loader.vue'
import footers from '../../components/home/Footer.vue'

export default {
    name: 'login',
    components: {
        loader,
        footers,
    },
    data(){
        return {
            loaderShow : false
        }
    },
    methods: {
        AuthProvider(provider) {
              var self = this
              // console.log(provider);
              this.$auth.authenticate(provider).then(response =>{
                // console.log(provider,response);
                this.loaderShow = true
                self.SocialLogin(provider,response)

                }).catch(err => {
                    console.log({err:err})
                })

        },

        async SocialLogin(provider,response){

            await this.$http.post('/sociallogin/'+provider,response).then(response => {
                // console.log(response);
                // this.loaderShow = false
                if(response.status == 200){
                    this.$swal.fire({
                        text:'Berhasil masuk!.',
                        icon: 'success',
                        position: 'center',
                        showConfirmButton: false,
                        timer: 3000,
                        width: '15em',
                    })
                    localStorage.token = response.data.token
                    localStorage.dataUsageAnalytics = response.data.dataUsageAnalytics
                    this.$router.push('/dashboard');
                }else{
                    this.$swal.fire({
                        text:'Ada yang salah!.',
                        icon: 'error',
                        position: 'center',
                        showConfirmButton: false,
                        timer: 3000,
                        width: '15em',
                    })
                }
                // console.log(response.data);
            }).catch(err => {
                this.$swal.fire({
                    text:'Ada yang salah!.',
                    icon: 'error',
                    position: 'center',
                    showConfirmButton: false,
                    timer: 3000,
                    width: '15em',
                })
                console.log({err:err})
            })

            this.loaderShow = false
        },
        async checkSession(){
            let authAxios = axios.create({
            headers: {
              'Authorization': `Bearer ${localStorage.token}`
            }
          })
          this.loaderShow = true
          await authAxios.get('/user').then(re => {
              if(re.status == 200){
                  this.$router.push('/dashboard')
              }
          }).catch(err => {
              if(err.response.status == 422){
                    this.$swal.fire({
                        text:'Anda harus login ulang.',
                        icon: 'error',
                        position: 'center',
                        showConfirmButton: false,
                        timer: 3000,
                        width: '15em',
                    })
              }
          })
          this.loaderShow = false
        }
    },
    mounted(){
        this.checkSession()
    }
}
</script>