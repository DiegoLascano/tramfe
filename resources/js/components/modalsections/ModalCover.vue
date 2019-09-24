<template>
    <section class="bg-cover bg-center h-auto">
        <div class="modal-layer w-full h-full py-20">
          <div class="container-800 mx-auto w-4/5 md:w-full">
              <p class="text-2xl md:text-4xl text-center md:max-w-lg lg:max-w-xl mx-auto text-cyan-050">
                  <slot></slot>
              </p>
          </div>
        </div>
    </section>
</template>

<script>
export default {
    
}
</script>

<style>
    .modal-cover-profile{
        background-image: url('../../../images/photos/modal/alpes.jpg');
    }
    .modal-cover-clinical{
        background-image: url('../../../images/photos/modal/clinical.jpg');
    }
    .modal-cover-neuro{
        background-image: url('../../../images/photos/modal/alpes.jpg');
    }
    .modal-cover-cognitive{
        background-image: url('../../../images/photos/modal/alpes.jpg');
    }
    .modal-cover-edu{
        background-image: url('../../../images/photos/modal/alpes.jpg');
    }
    .modal-cover-tele{
        background-image: url('../../../images/photos/modal/alpes.jpg');
    }
    .modal-cover-training{
        background-image: url('../../../images/photos/modal/alpes.jpg');
    }
</style>