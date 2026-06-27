var ctx = document.getElementById('myChart').getContext('2d');
const days = new Array(31).fill(0).map((_, i) => i + 1);
// إنشاء الرسم البياني
var myChart = new Chart(ctx, {
    type: 'line',  // نوع الرسم (يمكن تغييره إلى bar, pie, etc.)
    data: {
        labels: days,
        datasets: [{
            label: 'Blood surgar level',
            data: [50,105,50,59,50, 52, 80, 50, 52, 56, 56, 83,  83,105,50, 52, 56, 83,105,50,59,50,59,50, 52,56, 83,105,50,59,77,350],
            borderColor: 'blue',
            backgroundColor: 'rgba(0, 0, 255, 0.2)',
            borderWidth: 2,
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true
            }
        }
    }
});
const temperatureData = [
    { day: 1, temperature: 37.6 },
    { day: 2, temperature: 37.8 },
    { day: 3, temperature: 37.5 },
    { day: 4, temperature: 37.7},
    { day: 5, temperature: 37.7 },
    { day: 6, temperature: 37.6 },
    { day: 7, temperature: 37.4 },
    { day: 8, temperature: 37.4},
    { day: 9, temperature: 37.2 },
    { day: 10, temperature: 37.6 },
    { day: 11, temperature: 37.3 },
    { day: 12, temperature: 37.5 },
    { day: 13, temperature: 37.9 },
    { day: 14, temperature: 37.6 },
    { day: 15, temperature: 37.5 },
    { day: 16, temperature: 37.4 },
    { day: 17, temperature: 37.6 },
    { day: 18, temperature: 37.6 },
    { day: 19, temperature: 37.4 },
    { day: 20, temperature: 37.6},
    { day: 21, temperature: 37.5 },
    { day: 22, temperature: 37.2 },
    { day: 23, temperature: 37.5 },
    { day: 24, temperature: 37.5 },
    { day: 25, temperature: 37.5},
    { day: 26, temperature: 37.6 },
    { day: 27, temperature: 37.5},
    { day: 28, temperature: 37.5},
    { day: 29, temperature: 37.5},
    { day: 30, temperature: 37.6 },
    { day: 31, temperature: 37.5 },
    
];


const ct = document.getElementById("mychart").getContext("2d");

const labels = temperatureData.map(data => `Day ${data.day}`);
const temperatures = temperatureData.map(data => data.temperature);
new Chart(ct, {
    type: "line",
    data: {
        labels: labels,
        datasets: [{
            label: "Temperature (°C)",
            data: temperatures,
            borderColor: "red",
            fill: false,
            tension: 0.3
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                min: 35, // أقل قيمة على المحور Y
                max: 40 // أعلى قيمة على المحور Y
            }
        }
    }
});
// __________________________________________________
const ctx2 = document.getElementById('bloodPressureChart').getContext('2d');
        
const days2 = Array.from({length: 31}, (_, i) => i + 1); // الأيام من 1 إلى 30
const systolic = days2.map(() => Math.floor(Math.random() * (140 - 110) + 110)); // الضغط الانقباضي
const diastolic = days2.map(() => Math.floor(Math.random() * (90 - 70) + 70)); // الضغط الانبساطي

new Chart(ctx2, {
    type: 'line',
    data: {
        labels: days2,
        datasets: [
            {
                label: 'Systolic pressure',
                data: systolic,
                borderColor: 'red',
                fill: false
            },
            {
                label: 'diastolic pressure',
                data: diastolic,
                borderColor: 'blue',
                fill: false
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: false,
                min: 60,
                max: 150
            }
        }
    }
});