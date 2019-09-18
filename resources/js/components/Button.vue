<template>
    <div>
        <button @click="emitEvent()" class="btn btn-primary text-cyan-050 tracking-wider">
            This is a button
        </button>
    </div>
</template>

<script>
export default {
    props: ['eventName'],
    data(){
        return{
            
        }
    },
    mounted(){
        // console.log(this.eventName);
    },
    methods:{
        emitEvent(){
            this.$eventBus.$emit(this.eventName, 'toggle');
        }
    }
}
</script>

<style scoped>
    
</style>