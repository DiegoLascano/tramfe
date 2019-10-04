<template>
<div class="z-10">
    <nav class="navbar-fixed-top fixed w-full flex items-center justify-between flex-wrap bg-transparent p-3 lg:p-5">
        <!-- Logo -->
        <div class="logo"> 
            <inline-svg name="logo-valeria" classes="h-14 w-14" class="logo-vvv"></inline-svg>
            <span class="logo-name">Valeria Valladares</span>
            <!-- <inline-svg name="logo-valeria" classes="absolute left-0 top-0 h-12 w-12 -ml-12 -mt-6" class="logo-vvv"></inline-svg>
            <span class="logo-name">Valeria Valladares</span> -->
        </div>
        <!-- Menu Icon -->
        <div class="block lg:hidden">
            <button @click="triggerMethods()" class="menu-button flex items-center px-3 py-2 text-cyan-050 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-8 w-8 icon-menu"><path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
            </button>
        </div>
        <!-- Links displayed on large size pages -->
        <div class="w-full hidden lg:block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="nav-links-list">
                <a v-for="link in links" v-bind:key="link.id" :href="link.ref" class="nav-link block lg:inline-block lg:mx-3">
                    {{ link.name }}
                </a>
            </div>
        </div>
    </nav>

    <!-- This is for the modal displayed for mobile -->
    <transition name="fade">
        <div v-show="shouldShow" class="overlay z-10">
            <div class="flex flex-col">
                <button @click="triggerMethods()" class="close text-cyan-050">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current icon-close h-12 w-12">
                        <path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/>
                    </svg>
                </button>
                <div class="flex flex-col justify-center h-screen">
                    <a v-for="link in links" v-bind:key="link.id" :href="link.ref" @click="toggleModal()" class="nav-link text-cyan-050 hover:text-cyan-600 text-xl text-center my-2">
                        {{ link.name }}
                    </a>
                </div>
            </div>
        </div>
    </transition>
</div>
</template>

<script>
export default {
    data(){
        return{
            links: [
                // {id: 0, name: 'Home', ref: '#'},
                {id: 1, name: 'TRAMFE', ref: '#concept'},
                {id: 2, name: 'Mi Perfil', ref: '#profile'},
                {id: 3, name: 'Servicios', ref: '#services'},
                {id: 4, name: 'Plataforma GNPT', ref: '#platform-gnpt'},
                {id: 5, name: 'Contacto', ref: '#contact'},
            ],
            shouldShow: false,
        }
    },
    methods: {
        triggerMethods(){
            this.toggleModal();
            this.emitEvent();
        },
        toggleModal(){
            this.shouldShow = !this.shouldShow;
        },
        emitEvent(){
            this.$eventBus.$emit('menu-toggled', this.shouldShow);
        }
    },
}
</script>

<style scoped>
    .navbar-fixed-top.scrolled {
        background-color: #E4E7EB !important;
        transition: background-color 600ms ease;
    }

    .navbar-fixed-top.scrolled .nav-link {
        @apply text-cool-grey-600
    }
    .nav-link{
        @apply text-cyan-050;
        transition: color .5s ease;
    }
    .nav-link:hover{
        @apply text-cyan-300;
    }
    .navbar-fixed-top.scrolled .nav-link:hover {
        @apply text-cyan-600;
    }
    .logo{
        @apply flex items-center flex-shrink-0 text-cyan-600 -ml-48;
        transition: transform .5s ease-in-out;
    }
    .navbar-fixed-top.scrolled .logo{
        transform: translateX(15rem);
    }
    .logo-vvv{
        @apply absolute left-0 top-0 -ml-14 -mt-3;
    }
    .navbar-fixed-top.scrolled .menu-button{
        @apply text-cyan-600;
    }
    .logo-name{
        @apply font-semibold text-xl tracking-tight ml-2;
    }
    .nav-links-list{
        @apply text-sm;
        transition: all .3s ease;
    }
    @screen lg{
        .nav-links-list{
            @apply flex-grow flex justify-end;
        }
        /* .navbar-fixed-top.scrolled .nav-links-list{
            transform: translateX(10rem);
            @apply justify-end;
        } */
    }
    .overlay {
        /* visibility: hidden; */
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: rgba(0, 0, 0, .4); */
        /* background-image: linear-gradient(118.91deg, #14919B -3.92%, rgba(84, 209, 219, 1) 66.37%); */
        background: linear-gradient(120deg, rgba(0, 62, 107, 1) 0%, rgba(10, 108, 116, 1) 50%, rgba(20, 145, 155, 1) 100%);
        /* transition: opacity .3s; */
        /* opacity: 0; */
    }
    .modal {
        position: relative;
        width: 500px;
        max-width: 80%;
        background: transparent;
        border-radius: 4px;
        padding: 2.5em;
        box-shadow: 0 5px 11px rgba(36, 37, 38, 0.08);
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
</style>