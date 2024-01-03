<!-- resources/js/Components/Seguridad.vue -->

<template>
    <div>
        <form @submit.prevent="subirArchivo" enctype="multipart/form-data">
            @csrf
            <input type="file" name="archivo" ref="archivo" required>
            <button type="submit">Subir Excel</button>
        </form>
        <div v-if="mensaje" :class="{ 'success-message': mensaje.tipo === 'success', 'error-message': mensaje.tipo === 'error' }">
            {{ mensaje.texto }}
        </div>
        <!-- Agrega el resto de tu contenido del componente aquí -->
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            mensaje: null,
        };
    },
    methods: {
        subirArchivo() {
            const archivo = this.$refs.archivo.files[0];

            if (!archivo) {
                this.mensaje = { tipo: 'error', texto: 'Por favor, selecciona un archivo.' };
                return;
            }

            const formData = new FormData();
            formData.append('archivo', archivo);

            // Enviar el archivo al servidor utilizando axios
            axios.post('/procesar-archivo', formData)
                .then(response => {
                    // Actualizar mensaje con éxito
                    this.mensaje = { tipo: 'success', texto: response.data };
                })
                .catch(error => {
                    // Actualizar mensaje con error detallado
                    this.mensaje = { tipo: 'error', texto: 'Error al procesar el archivo. Detalles: ' + error.response.data.error };
                    console.error(error);
                });
        }
    }
}
</script>

<style scoped>
.success-message {
    color: green;
}

.error-message {
    color: red;
}
</style>
