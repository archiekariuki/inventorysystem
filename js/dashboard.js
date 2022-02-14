let ctx = document.getElementById('myChart').getContext('2d');

let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

let chart = new Chart(ctx,{
    type: 'bar',
    data: {
        labels: months,
        datasets:[{
            label:'Number of meetings',
            data:[12,2,4,7,8,9,2],
            backgroundColor:[
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ]
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