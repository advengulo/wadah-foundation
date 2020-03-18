var chart = document.getElementById('myPieChart').getContext('2d');
var myChart = new Chart(chart, {
    type: 'pie',
    data: {
        labels: ['User Aktif', 'User Inaktif'],
        datasets: [{
            data: [1000, 200],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
                
            ],
        }],    
    },
    option : {
        legend : {
            display: true,
            position: 'bottom',
            labels: {
                usePointStyle: false,
                

            }
        }
    }
});

