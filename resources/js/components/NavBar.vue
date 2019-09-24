<template>
<div>
    <nav class="navbar-fixed-top fixed w-full flex items-center justify-between flex-wrap bg-transparent p-3 lg:p-5">
        <!-- Logo -->
        <div class="logo flex items-center flex-shrink-0 text-cyan-050 mr-6"> 
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight">Valeria Valladares</span>
        </div>
        <!-- Menu Icon -->
        <div class="block lg:hidden">
            <button @click="toggleModal()" class="menu-button flex items-center px-3 py-2 text-cyan-050 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-8 w-8 icon-menu"><path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
            </button>
        </div>
        <div class="w-full hidden lg:block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow lg:flex lg:justify-end">
                <a v-for="link in links" v-bind:key="link.id" :href="link.ref" class="nav-link block lg:inline-block text-lg text-cyan-050 hover:text-cyan-700 lg:mx-3">
                    {{ link.name }}
                </a>
            </div>
        </div>
    </nav>
    <transition name="fade">
        <div v-show="shouldShow" class="overlay">
            <div class="flex flex-col">
                <button @click="toggleModal()" class="close text-cyan-050">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current icon-close h-12 w-12">
                        <path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/>
                    </svg>
                </button>
                <div class="flex flex-col justify-center h-screen">
                    <a v-for="link in links" v-bind:key="link.id" :href="link.ref" @click="toggleModal()" class="nav-link text-cyan-050 hover:text-cyan-700 text-xl text-center my-2">
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
                {id: 0, name: 'Home', ref: '#'},
                {id: 1, name: 'Concepto', ref: '#concept'},
                {id: 2, name: 'Perfil', ref: '#profile'},
                {id: 3, name: 'Servicios', ref: '#services'},
                {id: 4, name: 'Plataforma GNPT', ref: '#platform-gnpt'},
                {id: 5, name: 'Contacto', ref: '#contact'},
            ],
            shouldShow: false,
        }
    },
    methods: {
        toggleModal(){
            this.shouldShow = !this.shouldShow;
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
    .navbar-fixed-top.scrolled .nav-link:hover {
        @apply text-cyan-600
    }
    .navbar-fixed-top.scrolled .logo{
        @apply text-cyan-600;
    }
    .navbar-fixed-top.scrolled .menu-button{
        @apply text-cyan-600;
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