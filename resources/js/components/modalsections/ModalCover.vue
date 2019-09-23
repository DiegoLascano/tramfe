<template>
    <section id="modal-cover" class="modal-cover bg-cover bg-center h-auto">
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

<style lang="">
    
</style>