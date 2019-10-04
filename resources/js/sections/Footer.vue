<template>
    <div class="w-full cover-bg-gradient h-64">
        <div class="flex w-full h-full">
            <div class="m-auto text-cyan-050 text-center">
                <div class="text-center py-4 flex justify-center">
                    <!-- <div> -->
                        Siguenos:
                    <!-- </div> -->
                    <a href="#" target="_blank">
                        <inline-svg name="icon-facebook" classes="h-6 w-6" class="icon inline-block px-3"></inline-svg>
                    </a>
                    <a href="https://twitter.com/tr_tramfe" target="_blank">
                        <inline-svg name="icon-twitter" classes="h-6 w-6" class="icon inline-block px-3"></inline-svg>
                    </a>
                </div>
                <inline-svg name="logo-valeria" classes="h-24 w-24 m-auto"></inline-svg>
                &copy; Valeria Valladares.
                <p>Todos los derechos reservados</p>
                <p>Made with &hearts; by 
                    <a href="mailto:diegolascanodalgo@gmail.com" class="underline hover:text-cyan-300">
                        Diego Lascano
                    </a>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import InlineSvg from '../components/InlineSvg';

export default {
    components:{
        InlineSvg,
    }
}
</script>

<style scoped>
    .icon{
        fill: #E0FCFF;
        transition: fill .3s ease;
    }
    .icon:hover{
        fill: #54D1DB;
    }

</style>