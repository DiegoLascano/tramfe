<template>
    <div>
        <form method="POST" action="">
            <div class="flex flex-col">
                <div class="flex-1">
                    <div class="section-title">Contacto</div>
                    <p class="text-cool-grey-600 text-lg mb-10">Lorem ipsum dolor sit amet consectetur adipiscing, elit fringilla nullam velit lacus at, 
                        tempus nunc vel posuere lectus, lobortis scelerisque maecenas vivamus semper. Magnis egestas 
                        nisl id pharetra praesent lacus, curabitur porta condimentum habitasse bibendum gravida lectus, 
                        iaculis libero dignissim congue eleifend. Praesent erat nascetur lacinia faucibus mi, vehicula 
                        interdum vel justo quam gravida, pellentesque vivamus ultricies phasellus.</p>
                </div>
                <div class="flex-1 flex flex-col -mx-2">
                    <div class="flex flex-col md:flex-row">
                        <input class="form-input" type="text" name="name" id="form-name" placeholder="Nombre" required>
                        <input class="form-input" type="email" name="email" id="form-email" placeholder="E-mail" required>
                    </div>
                    <textarea class="form-input" name="message" id="form-message" rows="6" placeholder="Mensaje" required></textarea>
                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary text-cyan-050 tracking-wider">
                            Enviar
                        </button>
                    </div>
                </div>
                <div class="flex-1 flex flex-col sm:flex-row justify-around">
                    <div class="m-auto py-10">
                        <div>
                            Icon
                        </div>
                        <label>
                            Whatsapp
                        </label>
                    </div>
                    <div class="m-auto py-10">
                        <div>
                            Icon
                        </div>
                        <label>
                            Email
                        </label>
                    </div>  
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    mounted() {
    }
}
</script>

<style scoped>
.form-input{
    @apply bg-cool-grey-100 font-thin flex-1 text-lg rounded-lg py-4 px-6 m-2;
}
.form-input:hover{
    @apply bg-cool-grey-200 text-cyan-700;
}
::placeholder {
    color: #857F72;
    opacity: 1;
}
.form-input:hover::placeholder, .form-input:focus::placeholder{
    color: #0E7C86;
    opacity: 1;
}
</style>