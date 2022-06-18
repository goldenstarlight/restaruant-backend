<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="row mt-4">
                <div class="col-sm-8">
                    {{-- Revenue --}}
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Revenue</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success"></i>
                                <span class="font-weight-bold">48% more</span> in 2022
                            </p>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-md badge-dot me-4">
                                    <i class="bg-primary"></i>
                                    <span class="text-dark text-xs">By card</span>
                                </span>
                                <span class="badge badge-md badge-dot me-4">
                                    <i class="bg-info"></i>
                                    <span class="text-dark text-xs">By cash</span>
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="300px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    {{-- cards --}}
                    <div class="card mb-5"
                        style="background: url(assets/img/card1.png); background-size: 100% 100%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="text-center">
                                        <div class="chart" height="50">
                                            <canvas id="chart-bar" class="chart-canvas" height="65"></canvas>
                                        </div>
                                        <h4 class="font-weight-bold mt-n5">
                                            <i class="fas fa-star" style="color: #834EBD" aria-hidden="true"></i>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-sm-9"></div>
                            </div>
                            <div>
                                <h4 class="mt-3 mb-0">85 <span class="text-secondary text-sm">%</span></h4>
                                <p class="mb-0">Satisfaction</p>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="background-color: #FFF4F2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="text-center">
                                        <div class="chart" height="50">
                                            <canvas id="chart-bar2" class="chart-canvas" height="65"></canvas>
                                        </div>
                                        <h4 class="font-weight-bold mt-n5">
                                            <i class="fas fa-comments" style="color: #F9904B" aria-hidden="true"></i>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-sm-9">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="mt-3 mb-0">58 <span class="text-secondary text-sm">%</span></h4>
                                    <p class="mb-0">Chat replied</p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="d-flex row">
                                        <div class="col-1 text-center">
                                            <a href="javascript:;" class="avatar  rounded-circle ">
                                                <img alt="Image placeholder" src="../../../assets/img/team-4.jpg"
                                                    width="40px">
                                            </a>
                                        </div>
                                        <div class="col-1 text-center">
                                            <a href="javascript:;" class="avatar  rounded-circle ">
                                                <img alt="Image placeholder" src="../../../assets/img/team-5.jpg"
                                                    width="40px">
                                            </a>
                                        </div>
                                        <div class="col-1 text-center">
                                            <a href="javascript:;" class="avatar  rounded-circle ">
                                                <img alt="Image placeholder" src="../../../assets/img/ivana-square.jpg"
                                                    width="40px">
                                            </a>
                                        </div>
                                        <div class="col-1 text-center">
                                            <a href="javascript:;" class="avatar rounded-circle ">
                                                <img alt="Image placeholder" src="../../../assets/img/team-3.jpg"
                                                    width="40px"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-4">
                    {{-- Scans --}}
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <h6>Scans in last 7d</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-down text-danger"></i>
                                <span class="font-weight-bold">0.5%</span>
                            </p>
                            <div class="chart pt-3">
                                <canvas id="chart-cons-week" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    {{-- Orders --}}
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">Orders in Progress</h6>
                                <button type="button"
                                    class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="See which websites are sending traffic to your website">
                                    <i class="fas fa-info"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div
                                                                class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                                                <i class="ni ni-watch-time text-md opacity-10"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 ms-2 text-sm">Table 1</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold"> 15 mins </span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold"> Credit Card </span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="font-weight-bold">69$ </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div
                                                                class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                                                <i class="ni ni-watch-time text-md opacity-10"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 ms-2 text-sm">Table 2</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold"> 15 mins </span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold"> Credit Card </span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="font-weight-bold">69$ </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div
                                                                class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                                                                <i class="ni ni-watch-time text-md opacity-10"
                                                                    aria-hidden="true"></i>
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 ms-2 text-sm">Table 3</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold"> 15 mins </span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold"> Credit Card </span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="font-weight-bold">69$ </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center pt-6">
            {{-- Your earning --}}
            <h5>Your earnings this month</h5>
            <h1>$ {{ 2369.34 }}</h1>
            <button class="btn btn-info mt-3">
                Export Report
            </button>
            <p class="mt-6">Total earnings</p>
            <h3>$ {{ 34654.56 }}</h3>
            <p class="mt-5">Reviews</p>
            <h3>132</h3>
            <button class="btn btn-sm btn-secondary">
                Check what people think <br>about your food
            </button>
        </div>
    </div>

</div>

<script src="../../assets/js/plugins/chartjs.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    // Line chart
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            datasets: [{
                    label: "By card",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#cb0c9f",
                    borderColor: "#cb0c9f",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6
                },
                {
                    label: "By Cash",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#17c1e8",
                    borderColor: "#17c1e8",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                },
            },
        },
    });

    // Chart Consumption by day
    var ctx3 = document.getElementById("chart-cons-week").getContext("2d");

    new Chart(ctx3, {
        type: "bar",
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets: [{
                label: "Watts",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "#9E53AF",
                data: [150, 230, 380, 220, 420, 200, 70],
                maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    },
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false
                    },
                    ticks: {
                        beginAtZero: true,
                        font: {
                            size: 12,
                            family: "Open Sans",
                            style: 'normal',
                        },
                        color: "#9ca2b7"
                    },
                },
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
            },
        },
    });


    var ctx4 = document.getElementById("chart-bar").getContext("2d");
    new Chart(ctx4, {
        type: "doughnut",
        data: {
            // labels: ['Done', 'In progress'],
            datasets: [{
                label: "Projects",
                weight: 9,
                cutout: "80%",
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ['#2152ff', '#a8b8d8'],
                data: [85, 15],
                fill: false,
                backgroundColor: [
                    '#834EBD',
                    'rgb(255, 255, 255)',
                ],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
            },

        },
    });
    var ctx5 = document.getElementById("chart-bar2").getContext("2d");
    new Chart(ctx5, {
        type: "doughnut",
        data: {
            // labels: ['Done', 'In progress'],
            datasets: [{
                label: "Projects",
                weight: 9,
                cutout: "80%",
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ['#2152ff', '#a8b8d8'],
                data: [85, 15],
                fill: false,
                backgroundColor: [
                    '#F9904B',
                    'rgb(255, 255, 255)',
                ],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
            },

        },
    });
</script>
