<template>
  <div>
    <canvas id="chart" width="400" height="200"></canvas>
  </div>
</template>

<script>
import Chart from 'chart.js/auto';

export default {
  name: 'Gráfica',
  mounted() {
    const ctx = document.getElementById('chart').getContext('2d');
    const chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
          label: 'Puntuación',
          data: [100, 150, 200, 250, 300, 350],
          borderColor: '#000',
          backgroundColor: '#ccc',
        }],
      },
      options: {
        title: {
          text: 'Gráfico de líneas simple',
        },
      },
    });
  },
};
</script>
