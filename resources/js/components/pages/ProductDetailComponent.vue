<template>
    <div>

        {{thisProduct.desc}}
        <img :src="thisProduct.imagepath" alt="">
        <h1>{{thisProduct.name}}</h1>


    </div>
</template>

<script>
    export default {

        props: ['product'],
        methods: {
            getData: function(id) {
                console.log(this[id]);
                return this[id];
            }
        },
        computed: {
            thisProduct() {
                return this.getData(this.product);
            }
        },
        data() {
            return {
                eazy:
                    {
                        name: "B.One Eazy®",
                        imagepath: "/static/products/b1easy.png",
                        manualpath: "/static/products/manuals/B.One_Easy_UserManual.pdf",
                        desc: "The revolutionary automation device that will make your life smarter than ever before. Now get used to enjoying complete control over all the IR devices and Wi-Fi enabled smart devices at your home/business.",
                        benefits: [
                            "B.One Eazy allows you to combine and control all your infrared remotes & Wi-Fi supported devices into one easy to use mobile application acting as a universal remote. ",
                            "Using B.One Voice Act smart home skills for Google Home and Alexa, you can automate complex tasks with simple voice commands. For example, say ‘Alexa, turn on the AC’ to power ON your AC. ",
                            "Schedule your activities as per your convenience on a daily basis through the B.One app, making your life simpler and smarter. For example, ‘Turn off AC at 11pm.’",
                            "Control your B.One supported devices from anywhere in the world using your smartphone.",
                            "Works with over 110+ devices and is compatible with remotes of most brands.",
                        ],
                        tech: [
                            "Built-in Sensor: Temperature and Illuminance",
                            "Supported Communication Method: Wi-Fi (2.4 GHz Only), IR(Infrared)",
                            "Effective Range/Effective Distance of Infrared Ray: 360 degrees/10meters",
                            "Smartphone: Android 4.2 or later / iOS 10.0 or later",
                            "Power Supply: 100V to 240V AC",
                            "Size: 85x85x22mm"
                        ],
                    },
                edge:
                    {
                        name: "B.One Edge®",
                        imagepath: "/static/products/b1edge.png",
                        manualpath: "/static/products/manuals/B.One_Edge_UserManual.pdf",
                        desc: "B.One Edge® incorporates a state-of-the-art parallel processing architecture with Hard Real Time Performance to make it the fastest and first of its kind Edge Computing IOT gateway in the market.",
                        benefits: [
                            "Edge is a multi-protocol gateway with Z-Wave, Zigbee, BLE, BT, Wi-Fi (Dual Band), LTE Cat 4 and Universal Infrared Remote Learner and Repeater.",
                            "Delivers ultra low latency and high real-time experience in command execution and performance. Enables faster communication of real-time data from smart devices and published services.",
                            "Sensors, devices and actuators driven data is computed and executed at the edge of the network reducing the reliability on low and intermittent connectivity to cloud services.",
                            "Helps save bandwidth, storage, time and costs by limiting the data that needs to be transmitted to the cloud causing Network latencies.",
                            "High value-Short term (smoke alerts, Intrusions etc.) data processed at real time (no dependency on Cloud latency) to help in emergency situations where the user requires immediate actions.",
                            "User has the ability to keep their data secure and use the cloud when needed, ensuring privacy of all data generated at their homes. In addition, Military grade encryption at the “EDGE” ensures security of data against hacking.",
                            "Ability to move analysis and Intelligence to the Edge of the network where the data is generated, enabling faster “call to actions”.",
                            "Battery back up of upto two hours in case of power failure.",
                            "LTE Sim card enabled (forward compatible with some 5G networks) to provide internet back up and redundancy in case of Wi-Fi failure. "
                        ],
                        tech: [
                            "Power supply: 5V DC, 3.0A",
                            "Operating conditions: 0~40°C, 0%~90% RH",
                            "Supported protocol: Wi-Fi, LTE, Z-Wave Plus, BT, BLE, Zigbee, and IR",
                            "Z-Wave radio frequency: 868.42MHz (EU) 908.42MHz (US) 921.42 MHz (ANZ)",
                            "Battery Backup: Up to 2 hours",
                            "On-board Sensors: Motion Sensor, Temperature Sensor, and Light Sensor"
                        ],
                    },
                wattsup:
                    {
                        name: "WattsUP Energy Meter",
                        imagepath: "/static/products/wattsup.png",
                        manualpath: "",
                        desc: "B.One WattsUP- A Smart Meter to help you know how much electricity your Office / Home is using in real-time with 99% accuracy.",
                        benefits: [
                            "Budgeting and monitoring of energy loads.",
                            "Real-time data on Running, Off and Stand By loads of all appliances.",
                            "AI enabled NILM for load detection, optimisation and preventive maintenance of appliances.",
                            "Data on consumption and generation of alternate power such as solar, battery back up and diesel generators.",
                            "Monitoring of the elderly by tracking usage patterns of lights and appliances.",
                        ],
                        tech: [
                            "Operating Voltage & Frequency: 180~260V AC 50Hz",
                            "Load Current: 60A (Max)",
                            "Working & Storage temperature: Operating: 8°-50°C RH≤80%  Storage: -20°-70°C RH≤80%",
                            "Radio Technology: IEEE 802.11b/g/n",
                            "Wireless Type: WiFi 2.4G 1T1R",
                        ],
                    },
                a10socket:
                    {
                        name: "10 Amp Smart Socket",
                        imagepath: "/static/products/10amp.png",
                        manualpath: "/static/products/manuals/Smart_Socket_UserManual.pdf",
                        desc: "B.One Wi-Fi Smart Socket is used to control lights, devices and appliances and monitor their energy consumption from anywhere. Set schedules or ‘Actions’ with your smartphone using the B.One app.",
                        benefits: [
                            "CONTROL FROM ANYWHERE: Turn appliances on or off from anywhere with your smartphone using the B.One app (Compatible with Android & iOS)",
                            "VOICE CONTROL: Works with Amazon Alexa, Google Assistant and supported devices for a hands free experience.",
                            "SCHEDULES: Schedule the Smart Socket to automatically switch on and off appliances when away or set an action for controlling many devices with a single button.",
                            "SAVE ENERGY: Prevent power-hungry devices from being left on longer than needed and based on your geo-location.",
                            "AUTO-SHUTOFF: Protects your appliance by turning it off when high & low voltages are detected.",
                            "ENERGY MONITORING: Know the actual and energy costs incurred in real time. Monitor current and historical power consumption of your appliance.",
                        ],
                        tech: [
                            "Operating Voltage & Frequency: 180~260V AC 50Hz",
                            "Load Current: 10A (Max)",
                            "Working & Storage temperature: Operating: 8°-50°C RH≤80%  Storage: -20°-70°C RH≤80%",
                            "Radio Technology: IEEE 802.11b/g/n",
                            "Size: 67 mm x 43 mm x 32 mm",
                            "For indoor use only",
                        ],
                    },
                a16socket:
                    {
                        name: "16 Amp Smart Socket",
                        imagepath: "/static/products/16amp.png",
                        manualpath: "/static/products/manuals/Smart_Socket_UserManual.pdf",
                        desc: "B.One Wi-Fi Smart Socket is used to control lights, devices and appliances and monitor their energy consumption from anywhere. Set schedules or ‘Actions’ with your smartphone using the B.One app.",
                        benefits: [
                            "CONTROL FROM ANYWHERE: Turn appliances on or off from anywhere with your smartphone using the B.One app (Compatible with Android & iOS)",
                            "VOICE CONTROL: Works with Amazon Alexa, Google Assistant and supported devices for a hands free experience.",
                            "SCHEDULES: Schedule the Smart Socket to automatically switch on and off appliances when away or set an action for controlling many devices with a single button.",
                            "SAVE ENERGY: Prevent power-hungry devices from being left on longer than needed and based on your geo-location.",
                            "AUTO-SHUTOFF: Protects your appliance by turning it off when high & low voltages are detected.",
                            "ENERGY MONITORING: Know the actual and energy costs incurred in real time. Monitor current and historical power consumption of your appliance.",
                        ],
                        tech: [
                            "Operating Voltage & Frequency: 180~260V AC 50Hz",
                            "Load Current: 16A (Max)",
                            "Working & Storage temperature: Operating: 8°-50°C RH≤80%  Storage: -20°-70°C RH≤80%",
                            "Radio Technology: IEEE 802.11b/g/n",
                            "Size: 70 mm x 48 mm x 34 mm",
                            "For indoor use only",
                            "Requires a secured 2.4 gigahertz Wi-Fi network connection."
                        ],
                    },
                flooddetector:
                    {
                        name: "Flood Detector",
                        imagepath: "/static/products/flooddetector.jpg",
                        manualpath: "",
                        desc: "B.One Flood Sensor alerts the connected Z-Wave Controller in times of Flood.",
                        benefits: [],
                        tech: [],
                    },
                motionsensor:
                    {
                        name: "Motion Sensor",
                        imagepath: "/static/products/motionsensor.jpg",
                        manualpath: "/static/products/manuals/Motion_Sensor_UserManual.pdf",
                        desc: "B.One Motion sensor is a Z-Wave based ultra low power consuming P.I.R motion detector. It communicates with an associated Z-Wave Controller / Gateway whenever there is a human motion in its vicinity",
                        benefits: [
                            "Z-Wave plus certified for wide compatibility ( 500 series )",
                            "Supports S2 protected mode with AES-128 bit encryption.",
                            "Upon tampering or detection of vibration / shock, the sensor reports to the connected Controller / Gateway automatically.",
                            "Battery lasts for up to 1 year when operated for 10 times per day.",
                            "Motion Sensor can even alert Controller / Gateway of low battery status.",
                            "Supports OTA firmware updates.",
                        ],
                        tech: [
                            "Power supply: 1xCR123A,3V or USB",
                            "Storage environment: -40~70°C, 0%~90% RH",
                            "Operating Temperature: 0~40°C",
                            "Radio protocol: Z-Wave Plus",
                            "Radio frequency: 908.42MHz(US) 868.42MHz(EU) 921.42MHz(AU)",
                            "Range: More than 100m outdoors about 30m indoors",
                            "Dimensions: 50mm( ∅ )",
                            "Working current: About 55mA",
                            "Standby current: About 20uA",
                            "Recommended installation height: 2m~4m",
                        ],
                    },
                smartsensor:
                    {
                        name: "Smart Sensor",
                        imagepath: "/static/products/smartsensor.png",
                        manualpath: "/static/products/manuals/Smart_Sensor_UserManual.pdf",
                        desc: "B.One Smart Sensor senses the opening and closing of any door / window to which it is fixed.",
                        benefits: [
                            "Z-Wave Plus certified for wide compatibility (500 series of products). ",
                            "B.One Door Sensor improves your security system. Monitoring your entrances 24/7, this sensor can detect when a door or window has been opened. If your connected alarm is armed, the sensor will alert your smart phone immediately.",
                            "Easy Installation. Use double-sided tape to stick this sensor on windows or doors, Can be easily moved from place to place as needed.",
                            "The sensor has a in-built tamper switch. The sensor sends notifications to the connected controller/gateway if tampered with. ",
                            "Get real time alerts to your smart device when a door or window is opened or closed. ",
                            "Batteries used in the door sensor last upto 1 year. The sensor notifies the user when the battery is low. ",
                            "Supports OTA firmware updates.",
                        ],
                        tech: [
                            "Power supply: Two AAA 1.5V Batteries",
                            "Storage environment: -10~50°C, 0%~90% RH",
                            "Operating Temperature: 0~40°C",
                            "Radio protocol: Z-Wave Plus",
                            "Radio frequency: 908.42MHz(US) 868.42MHz(EU) 921.42MHz(AU)",
                            "Range: More than 100m outdoors about 30m indoors",
                            "Dimensions: 50mm( ∅ )",
                            "Dimensions: Sensor body: 75 x 28 x 18mm, Magnet: 75 x 12 x 18mm",
                            "Working current: About 60mA",
                            "Standby current: About 30uA",
                        ],
                    },
                domesiren:
                    {
                        name: "Dome Siren",
                        imagepath: "/static/products/siren.jpg",
                        manualpath: "/static/products/manuals/Siren_UserManual.pdf",
                        desc: "B.One’s Z-Wave based wireless dome siren with strobe light helps alert owners in case of a security breach or a safety concern.",
                        benefits: [
                            "Z-Wave plus certified for wide compatibility ( 500 series )",
                            "Supports S2 protected mode with AES-128 bit encryption.",
                            "Provides visual alerts via strobe lite.",
                            "B.One dome siren also acts as a Z-Wave signal repeater.",
                            "Supports OTA firmware updates.",
                        ],
                        tech: [
                            "Power supply: AC110-240V",
                            "Operating Temperature: -10°C ~ 50°C",
                            "Humidity: ≤ 95% RH",
                            "Radio protocol: Z-Wave Plus",
                            "Radio frequency: 908.42MHz(US) 868.42MHz(EU) 921.42MHz(AU)",
                            "Range: More than 100m outdoors about 30m indoors",
                            "Decibel: 110db",
                            "Dimensions: ( ∅ )80mm x 32mm (plug not included)",
                            "Working current: About 55mA",
                            "Battery Backup: Up to 4 hours",
                        ],
                    },
                dimmer:
                    {
                        name: "Dimmer",
                        imagepath: "/static/products/dimmer.jpg"
                    },
                dualrelay:
                    {
                        name: "Dual Relay Switch",
                        imagepath: "/static/products/dualrelay.png"
                    }
            }
        }
    }
</script>