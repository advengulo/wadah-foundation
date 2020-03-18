var ctx = document.getElementById('myBarChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ]
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout:{
            padding: {
                left:10,
                right:25,
                top:25,
                bottom:0
            }
        },
        scales: {
            yAxes: [{
                time: {
                    unit: 'date'
                }
            }]
        }
    }
});