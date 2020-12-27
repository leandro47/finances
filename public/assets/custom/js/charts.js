
//DashBoard / chart movements monthly
function chartMovementsMonthly(arrMonth = [], arrRevenue = [], arrExpense = []) {

    var chart_labels = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
    var chart_data = [100, 70, 90, 70, 85, 60, 75, 60, 90, 80, 110, 100];
    var chart_data2 = [50, 20, 50, 50, 85, 60, 75, 60, 90, 80, 110, 100];

    var ctx = document.getElementById("chartMonthlySpend").getContext("2d");

    //Revenues 
    var gradientRevenues = ctx.createLinearGradient(0, 230, 0, 50);
    gradientRevenues.addColorStop(1, 'rgba(112,198,153,0.2)');
    gradientRevenues.addColorStop(0.4, 'rgba(112,198,153,0.0)');
    gradientRevenues.addColorStop(0, 'rgba(112,198,153,0)'); //green colors

    //Expenses
    var gradientExpenses = ctx.createLinearGradient(0, 230, 0, 50);
    gradientExpenses.addColorStop(1, 'rgba(240,69,153,0.2)');
    gradientExpenses.addColorStop(0.4, 'rgba(240,69,153,0.0)');
    gradientExpenses.addColorStop(0, 'rgba(240,69,153,0)'); //red colors

    var myChart = new Chart(ctx, {
        type: 'bar',
        responsive: true,
        legend: {
            display: false
        },
        data: {
            labels: chart_labels,
            datasets: [
                {
                    label: "Receita :",
                    fill: true,
                    backgroundColor: gradientRevenues,
                    hoverBackgroundColor: gradientRevenues,
                    borderColor: '#70C699',
                    borderWidth: 2,
                    borderDash: [],
                    borderDashOffset: 0.0,
                    data: chart_data,
                },
                {
                    label: "Despesa :",
                    fill: true,
                    backgroundColor: gradientExpenses,
                    hoverBackgroundColor: gradientExpenses,
                    borderColor: '#F04599',
                    borderWidth: 2,
                    borderDash: [],
                    borderDashOffset: 0.0,
                    data: chart_data2,
                }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ' ' + formatarMoeda(tooltipItem.yLabel.toLocaleString('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }));
                    }
                }
            },
            responsive: true,
            scales: {
                yAxes: [{

                    gridLines: {
                        drawBorder: false,
                        color: 'rgba(29,140,248,0.1)',
                        zeroLineColor: "transparent",
                    },
                    ticks: {
                        min: 0,
                        maxTicksLimit: 7,
                        suggestedMin: 60,
                        suggestedMax: 120,
                        padding: 20,
                        fontColor: "#9e9e9e",
                        callback: function (value, index, values) {
                            return '' + formatarMoeda(value).toLocaleString('pt-BR', {
                                style: 'currency',
                                currency: 'BRL'
                            });
                        }
                    }
                }],

                xAxes: [{

                    gridLines: {
                        drawBorder: false,
                        color: 'rgba(29,140,248,0.1)',
                        zeroLineColor: "transparent",
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "#9e9e9e"
                    }
                }]
            }
        }
    });
}

// chart movements by category 
function ChartBarChartCategory() {
    var ctx = document.getElementById("ChartBarChartCategory").getContext("2d");

    var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

    gradientStroke.addColorStop(1, 'rgba(224, 78, 174,0.8)');
    gradientStroke.addColorStop(0, 'rgba(224, 78, 174,0)'); 


    var myChart = new Chart(ctx, {
        type: 'bar',
        responsive: true,
        data: {
            labels: ['Casa', 'Mercado', 'Transporte', 'Financiamento'],
            datasets: [{
                label: "Data",
                fill: true,
                backgroundColor: gradientStroke,
                hoverBackgroundColor: gradientStroke,
                borderColor: '#e04eae',
                borderWidth: 2,
                borderDash: [],
                borderDashOffset: 0.0,
                data: [80, 100, 70, 80],
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: '#f5f5f5',
                titleFontColor: '#333',
                bodyFontColor: '#666',
                bodySpacing: 4,
                xPadding: 12,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ' ' + formatarMoeda(tooltipItem.yLabel.toLocaleString('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }));
                    }
                }
            },
            responsive: true,
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: 'rgba(253,93,147,0.1)',
                        zeroLineColor: "transparent",
                    },
                    ticks: {
                        min: 0,
                        maxTicksLimit: 7,
                        suggestedMin: 60,
                        suggestedMax: 120,
                        padding: 20,
                        fontColor: "#9e9e9e",
                        callback: function (value, index, values) {
                            return '' + formatarMoeda(value).toLocaleString('pt-BR', {
                                style: 'currency',
                                currency: 'BRL'
                            });
                        }
                    }
                }],

                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: 'rgba(253,93,147,0.1)',
                        zeroLineColor: "transparent",
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "#9e9e9e"
                    }
                }]
            }
        }
    });
}

function ChartBarChartAccount() {
    var ctx = document.getElementById("ChartBarChartAccount").getContext("2d");

    var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

    gradientStroke.addColorStop(1, 'rgba(38, 88, 230,0.8)');
    gradientStroke.addColorStop(0, 'rgba(38, 88, 230,0)'); 


    var myChart = new Chart(ctx, {
        type: 'bar',
        responsive: true,
        data: {
            labels: ['Casa', 'Mercado', 'Transporte', 'Financiamento'],
            datasets: [{
                label: "Data",
                fill: true,
                backgroundColor: gradientStroke,
                hoverBackgroundColor: gradientStroke,
                borderColor: '#2658e6',
                borderWidth: 2,
                borderDash: [],
                borderDashOffset: 0.0,
                data: [80, 100, 70, 80],
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: '#f5f5f5',
                titleFontColor: '#333',
                bodyFontColor: '#666',
                bodySpacing: 4,
                xPadding: 12,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ' ' + formatarMoeda(tooltipItem.yLabel.toLocaleString('pt-BR', {
                            style: 'currency',
                            currency: 'BRL'
                        }));
                    }
                }
            },
            responsive: true,
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: 'rgba(253,93,147,0.1)',
                        zeroLineColor: "transparent",
                    },
                    ticks: {
                        min: 0,
                        maxTicksLimit: 7,
                        suggestedMin: 60,
                        suggestedMax: 120,
                        padding: 20,
                        fontColor: "#9e9e9e",
                        callback: function (value, index, values) {
                            return '' + formatarMoeda(value).toLocaleString('pt-BR', {
                                style: 'currency',
                                currency: 'BRL'
                            });
                        }
                    }
                }],

                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: 'rgba(253,93,147,0.1)',
                        zeroLineColor: "transparent",
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "#9e9e9e"
                    }
                }]
            }
        }
    });
}

