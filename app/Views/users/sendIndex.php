<!DOCTYPE html>
<html>
<head>
    <title>Greenhouse Monitoring</title>
</head>
<body>
    <div class="card-body">
        <div class="height-400">
            <canvas id="chart"></canvas>
        </div>
    </div>
    <button onclick="sendEmail()">Send Email Notification</button>
    <script>
        // Function to fetch temperature, humidity, and heat index data from the database
        function fetchTemperatureHumidityHeatIndexFromDatabase() {
            return new Promise((resolve, reject) => {
                fetch('fetch_data_from_database.php')
                    .then(response => response.json())
                    .then(data => resolve(data))
                    .catch(error => reject(error));
            });
        }

        // Function to update the chart with new data
        function updateChart() {
            var ctx = document.getElementById('chart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Temperature (°C)',
                        borderColor: 'rgb(255, 99, 132)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: false,
                        data: [],
                        yAxisID: 'y-axis-1'
                    }, {
                        label: 'Humidity (%)',
                        borderColor: 'rgb(75, 192, 192)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: false,
                        data: []
                    }, {
                        label: 'Heat Index',
                        borderColor: 'rgb(255, 206, 86)',
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        fill: false,
                        data: []
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Time'
                            }
                        }],
                        yAxes: [{
                            id: 'y-axis-1',
                            type: 'linear',
                            position: 'left',
                            scaleLabel: {
                                display: true,
                                labelString: 'Temperature (°C)'
                            }
                        }, {
                            id: 'y-axis-2',
                            type: 'linear',
                            position: 'right',
                            scaleLabel: {
                                display: true,
                                labelString: 'Humidity (%)'
                            }
                        }, {
                            id: 'y-axis-3',
                            type: 'linear',
                            position: 'right',
                            scaleLabel: {
                                display: true,
                                labelString: 'Heat Index'
                            }
                        }],
                    }
                }
            });

            // Update the data every hour
            setInterval(function () {
                fetchTemperatureHumidityHeatIndexFromDatabase()
                    .then(data => {
                        var time = new Date();
                        var hour = time.getHours();
                        var minute = time.getMinutes();
                        var second = time.getSeconds();

                        // Add leading zeros for minute and second
                        minute = (minute < 10 ? '0' : '') + minute;
                        second = (second < 10 ? '0' : '') + second;

                        var timeString = hour + ':' + minute + ':' + second;

                        chart.data.labels.push(timeString);
                        chart.data.datasets[0].data.push(data.temperature);
                        chart.data.datasets[1].data.push(data.humidity);
                        chart.data.datasets[2].data.push(data.heatIndex);

                        // Limit the number of data points to display
                        var maxDataPoints = 10;
                        if (chart.data.labels.length > maxDataPoints) {
                            chart.data.labels.shift();
                            chart.data.datasets[0].data.shift();
                            chart.data.datasets[1].data.shift();
                            chart.data.datasets[2].data.shift();
                        }

                        chart.update();
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            }, 3600000); // 3600000 milliseconds = 1 hour
        }

        // Initial update
        updateChart();

        // Function to send email notification
        function sendEmail() {
            fetch('send_email.php')
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error sending email:', error);
                });
        }

    </script>
    
</body>
</html>