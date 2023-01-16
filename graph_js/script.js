const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Value 1', 'Value 2', 'Value 3', 'Value 4', 'Value 5'],
    datasets: [{
      label: '# of items sold',
      data: [20, 15, 10, 8, 5],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});