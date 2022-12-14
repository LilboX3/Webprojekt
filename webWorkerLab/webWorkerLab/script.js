"use strict";
/*
 * MTD280 Online Multimedia
 * http://www.fh-ooe.at/mtd
 *
 * Simple Vue.js 3 Application Template
 *
 */


Vue.createApp({
    data: function() {
        return {
        }
	},

    methods: {
        startDraw: function() {
            let r,g,b;

            r = ~~(Math.random()*255); // ~~ == Math.floor()
            g = ~~(Math.random()*255); // ~~ == Math.floor()
            b = ~~(Math.random()*255); // ~~ == Math.floor()

            this.ctx.fillStyle = this.ctx.strokeStyle = 'rgb('+[r,g,b].join(',')+')'; // eg. rgb(2,345,17)

            this.drawing = true;
        },

        stopDraw: function() {
            this.drawing = false;
        },

        doDraw: function(e) {
            if (this.drawing) {
                this.ctx.beginPath();
                this.ctx.arc(
                    e.clientX - this.ctx.canvas.offsetLeft,
                    e.clientY - this.ctx.canvas.offsetTop,
                    5,0,Math.PI*2,true);
                this.ctx.fill();
                this.ctx.closePath();
            }
        },

        buttonClick: function() {
            // while(true) console.log("hello");
            this.working = true;

            this.worker.postMessage(this.lastPrime);


        },

        pauseClick: function() {
            this.working = false;
        },

        resetClick: function() {
            this.lastPrime = 2;
            this.primeSpan.innerHTML = 2;
        },

        workerResponse: function(e) {
            this.lastPrime = e.data;
            if(++this.numberOfPrimes%100 == 0){
                this.primeSpan.innerHTML = e.data;
            }
            if(this.working){
                this.worker.postMessage(this.lastPrime);
            }
        }

    },

    mounted: function() {

        this.working = false;

        this.lastPrime = 2;
        this.numberOfPrimes = 0;
        this.ctx = this.$refs.draw.getContext('2d');
        this.drawing = false;

        this.primeSpan = this.$refs.prime;

        this.worker = new Worker("theWorker.js"); // SOP !!!
        this.worker.onmessage = this.workerResponse;

    }
}).mount('#app');
