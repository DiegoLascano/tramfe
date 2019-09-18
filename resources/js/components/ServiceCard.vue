<template>
    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 text-cool-grey-700 hover:text-cyan-700 md:my-3 lg:my-4">
        <div class="m-3 flex flex-col rounded-lg h-56 width-xxs bg-cool-grey-100 hover:bg-cool-grey-200 mx-auto">
            <div class="flex-1 flex">
                <label class="m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-add-circle icon-36">
                        <circle cx="12" cy="12" r="10" class="primary"/>
                        <path class="secondary" d="M13 11h4a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4z"/>
                    </svg>
                </label>
            </div>
            <div class="flex-1 flex font-thin">
                <label class="m-auto">
                    <slot></slot>
                </label>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
.icon-36{
    height: 50px;
    widows: 50px;
}
@screen sm{
    .width-xxs{
        max-width: 17rem;
    }
}
</style>