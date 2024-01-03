<template>
 <div>
  <canvas id="chart" width="400" height="150"></canvas>
 </div>
</template>

<script>
import axios from 'axios';
import Chart from 'chart.js/auto';

export default {
 data() {
  return {
   rentabilidades: [], // Datos de rentabilidades
  };
 },
 created() {
  // Llamar a la API o realizar una solicitud Axios para obtener las rentabilidades
  axios.get('/api/rentabilidades')
   .then(response => {
    this.rentabilidades = response.data;

    // Crear la gráfica después de cargar los datos
    this.crearGrafica();
   })
   .catch(error => {
    console.error('Error al obtener rentabilidades', error);
   });
 },
 watch: {
  rentabilidades: {
   handler() {
    this.crearGrafica();
   },
   deep: true,
  },
 },
 methods: {
  crearGrafica() {
   console.log('Chart Library:', Chart);

   const ctx = document.getElementById('chart');
    
   // Verifica si el elemento del gráfico está presente
   if (!ctx) {
    console.error('Elemento del gráfico no encontrado.');
    return;
   }

   console.log('Chart Element:', ctx);

   const chart = new Chart(ctx, {
    type: 'line',
    data: {
     labels: this.rentabilidades.map(item => new Date(item.fecha)),
     datasets: [{
      label: 'Valor de rentabilidad',
      data: this.rentabilidades.map(item => item.valor),
      borderColor: '#000',
      backgroundColor: '#ccc',
     }],
    },
    options: {
     scales: {
      xAxes: [{
       type: 'time',
       time: {
        unit: 'day',
        formatter: 'DD/MM/YYYY',
       },
      }],
      yAxes: [{
       type: 'linear',
       position: 'left',
       title: {
        display: true,
        text: 'Valor',
       },
      }],
     },
     plugins: {
      legend: {
       display: true,
       position: 'top',
      },
      title: {
       display: true,
       text: 'Gráfico de Rentabilidades',
      },
     },
    },
   });

   console.log('Chart Instance:', chart);
  },
 },
};
</script>

<style scoped>
/* Agrega estilos específicos del componente aquí si es necesario */
</style>