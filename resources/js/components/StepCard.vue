<template>
    <div class="flex flex-col bg-cool-grey-050 rounded-xl">
        <div id="step-card-title" class="text-cool-grey-600 font-semibold p-2 border-b-2 border-cool-grey-200 text-center">
            <slot name="step-card-title"></slot>
        </div>
        <div class="flex flex-col md:flex-row">
            <!-- <div id="step-card-image" :class="stepClass" class="bg-cover bg-center h-24 w-32 mx-auto mx-4 mt-4 md:m-4">
            </div> -->
            <div id="step-card-image" class="mx-auto mx-4 mt-4 md:m-6">
                <inline-svg :name="iconName" classes="h-32 md:h-40 w-32 md:w-40"></inline-svg>
            </div>
            <div id="step-card-body" class="text-cool-grey-600 text-lg p-4 m-auto">
                <slot name="step-card-body"></slot>
            </div>
        </div>
    </div>
</template>

<script>
import InlineSvg from './InlineSvg';
export default {
    props: ['image', 'iconName'],
    data(){
        return{
            stepClass: this.image,
        }
    },
}
</script>

<style scoped>
    .step-1{
        background-image: url('../../images/logos/guttmann.png');
    }
    .step-2{
        background-image: url('../../images/photos/cover/hands.jpg');
    }
    .step-3{
        background-image: url('../../images/photos/modal/alpes.jpg');
    }
</style>