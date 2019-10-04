<template>
    <!-- in the main div, class overlay -->
    <div class=""> 
        <div class="absolute"></div>
        <div class="cover-bg-gradient min-h-screen flex flex-col sm:flex-row items-center justify-between">
            <inline-svg name="logo-name" classes="h-96 md:h-112 w-96 md:w-112" class="m-auto"></inline-svg>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style>
    /* Images are working only whitin vue components. Somehow, url() doesnt work in scss files */
    .cover{
        background-image: url('../../images/photos/cover/down.jpg');
    }
    .cover-bg-gradient{
    background-image:  linear-gradient(120deg, rgba(0, 62, 107, 1) 20%, rgba(10, 108, 116, 1) 50%, rgba(20, 145, 155, 1) 100%);
}
</style>