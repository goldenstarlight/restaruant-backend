<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active  active " data-bs-toggle="tab"
                                    href="../../../examples/pages/account/settings.html" role="tab"
                                    aria-controls="profile" aria-selected="true">
                                    Recent
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                                    href="../../../examples/pages/account/billing.html" role="tab"
                                    aria-controls="dashboard" aria-selected="false">
                                    All Notifications
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <h4 class="mt-4 mb-2">Recent Notifications</h4>
            <div class="card-body pt-3">
                @for ($i = 0; $i < 4; $i++)
                    {{-- Message --}}
                    <div class="d-flex">
                        <i class="fas fa-comments text-info text-gradient fs-3 mt-1"></i>
                        <div class="my-auto ms-3">
                            <div class="h-100">
                                <h5 class="mb-0">Table 5</h5>
                                <p class="mb-0 text-sm">Sent you a message</p>
                            </div>
                        </div>
                        <p class="text-sm text-secondary ms-auto me-3">1:28 PM</p>
                    </div>
                    <div class="ps-5 ms-3">
                        <div class="d-flex bg-gray-100 border-radius-lg p-2 my-4">
                            <p class="text-sm font-weight-bold my-auto ps-2 pe-2">“Consectetur adipiscing elit, sed do
                                lore eiusmod tempor incididunt”</p>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    {{-- Order --}}
                    <div class="d-flex">
                        <i class="fas fa-hamburger text-success text-gradient fs-3 mt-1"></i>
                        <div class="my-auto ms-3">
                            <div class="h-100">
                                <h5 class="mb-0">Table 3</h5>
                                <p class="mb-0 text-sm">Just made an order</p>
                            </div>
                        </div>
                        <p class="text-sm text-secondary ms-auto me-3">12:50 AM</p>
                    </div>
                    <hr class="horizontal dark">
                    {{-- Reservation --}}
                    <div class="d-flex">
                        <i class="fas fa-file-alt text-warning text-gradient fs-3 mt-1"></i>
                        <div class="my-auto ms-3">
                            <div class="h-100">
                                <h5 class="mb-0">Table 2</h5>
                                <p class="mb-0 text-sm">Just reserved table</p>
                            </div>
                        </div>
                        <p class="text-sm text-secondary ms-auto me-3">11:50 AM</p>
                    </div>
                    <hr class="horizontal dark">
                @endfor

            </div>
        </div>
        <div class="col-md-3">
            <div class="card position-sticky top-2 p-3">
                <div class="input-group input-group-lg">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Search keywords...">
                </div>
                <h4 class="mt-4">Filters</h4>
                <div class="d-flex align-items-center mt-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    </div>
                    <h6 class="mt-1">Messages</h6>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    </div>
                    <h6 class="mt-1">Orders</h6>
                </div>
                <div class="d-flex align-items-center mt-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                    </div>
                    <h6 class="mt-1">Reservations</h6>
                </div>
                <button class="btn btn-block btn-info mt-3">Filter</button>
            </div>
        </div>
        <div class="col-md-4 text-center pt-6">
            <a href="javascript:;" class="avatar  rounded-circle ">
                <img alt="Image placeholder" src="../../../assets/img/team-1.jpg"
                    style="width:120px;box-shadow: 1px 1px 3px 3px lightgray;">
            </a>
            <h5 class="mt-2">Pizzeria Italiana</h5>
            <div class="mt-8">
                <a href="javascript:;">
                    <img alt="Image placeholder" src="/assets/img/chat.png" style="width:40%"> </a>
                <p class="mt-2">Connect and chat regularly<br> with members</p>
                <button class="btn btn-success mt-3">Chat now!</button>
            </div>
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
