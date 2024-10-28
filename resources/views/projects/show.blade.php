<canvas id="progressChart"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var ctx = document.getElementById('progressChart').getContext('2d');
var progressChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Task 1', 'Task 2'],
        datasets: [{
            label: 'Progress',
            data: [10, 20],
        }]
    }
});
</script>