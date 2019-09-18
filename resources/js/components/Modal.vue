<template>
    <div>
        <transition name="fade">
            <div v-show="show" class="overlay">
                <div class="modal bg-cool-grey-050">
                    <button @click="toggleShow()" class="close text-cyan-050">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-close-circle h-12 w-12">
                            <linearGradient x1="0%" y1="0%" x2="100%" y2="200%" id="Gradient1" >
                                <stop offset="10%" class="gradient-10"/>
                                <stop offset="30%" class="gradient-30"/>
                                <stop offset="100%" class="gradient-100"/>
                            </linearGradient>
                            <circle cx="12" cy="12" r="10" class="primary"/>
                            <path class="secondary" d="M13.41 12l2.83 2.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 1 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12z"/>
                        </svg>
                    </button>
                    <slot></slot>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
export default {
    props: ['eventName'],
    data(){
        return{
            show: false,
        }
    },
    created(){
        this.$eventBus.$on(this.eventName, (data) => {
            this.toggleShow();
        })
    },
    mounted(){
        // console.log(this.eventName);
    },
    methods: {
        toggleShow(){
            this.show = !this.show;
        }
    },
}
</script>

<style scoped>
    .overlay{
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(118.91deg, #14919B -3.92%, rgba(84, 209, 219, 1) 66.37%);   
    }
    .modal{
        @apply relative w-full h-full;
    }
    .close {
        position: absolute;
        top: 15px;
        right: 15px;
        text-decoration: none;
    }
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
    @screen sm{
        .modal{
            height: 93%;
            width: 90%;
        }
    }
    .primary {
        /* fill: #2CB1BC;  */
        fill: url(#Gradient1);
    }
    .secondary {
        fill: #E0FCFF; 
    }
    .gradient-10{
        stop-color:rgba(0, 62, 107, 0.9);
    }
    .gradient-30{
        stop-color:rgba(10, 108, 116, 0.85);
    }
    .gradient-100{
        stop-color:rgba(20, 145, 155, 0.9);
    }
</style>