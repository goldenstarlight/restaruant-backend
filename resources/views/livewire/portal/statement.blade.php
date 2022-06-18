<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-9">
                    {{-- Revenue --}}
                    <div class="card mb-4 p-3">
                        <div class="card-header pb-0 p-3">
                            <h5 class="mb-0">Earning Report</h5>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Total Earning this month</p>
                                    <h3>$ 2,341</h3>
                                    @if (rand(1, 10) > 5)
                                        <span class="badge badge-success text-lower">
                                            <i class="fa fa-arrow-up"></i> + 3.4% this month
                                        </span>
                                    @else
                                        <span class="badge badge-danger text-lower">
                                            <i class="fa fa-arrow-down"></i> - 2.7% this month
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-7">
                                    <div class="chart pt-3">
                                        <canvas id="chart-cons-week" class="chart-canvas" height="270"></canvas>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark my-2">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex px-3 py-1">
                                        <div
                                            class="icon icon-shape bg-success-soft shadow text-center border-radius-md shadow-none">
                                            <i class="fa fa-wallet text-lg text-success text-gradient opacity-10"
                                                aria-hidden="true"></i>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h4 class="mb-0 text-sm">Total Earnings</h4>
                                            <p class="font-weight-bold text-secondary mb-0 text-lg"><span
                                                    class="text-success">$</span> 34300</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col">
                                        <div class="d-flex px-3 py-1">
                                            <div
                                                class="icon icon-shape bg-warning-soft shadow text-center border-radius-md shadow-none">
                                                <i class="fa fa-wallet text-lg text-warning text-gradient opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h4 class="mb-0 text-sm">Order Earnings</h4>
                                                <p class="font-weight-bold text-secondary mb-0 text-lg"><span
                                                        class="text-warning">$</span> 25487</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-0">Statement</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active  " data-bs-toggle="tab"
                                        href="../../../examples/pages/account/settings.html" role="tab"
                                        aria-controls="profile" aria-selected="true">
                                        Last Week
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                                        href="../../../examples/pages/account/billing.html" role="tab"
                                        aria-controls="dashboard" aria-selected="false">
                                        Last Month
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab"
                                        href="../../../examples/pages/account/settings.html" role="tab"
                                        aria-controls="profile" aria-selected="true">
                                        All
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-9">
                        <p class="mt-2">
                            A lightweight, extendable, dependency-free javascript HTML table plugin.
                        </p>
                    </div>
                    <div class="col-sm-3 d-flex justify-content-end align-items-center">
                        <button class="btn bg-white px-3">
                            <i class="fa fa-trash text-warning"></i>
                        </button>
                        <button class="btn bg-white mx-2 px-3">
                            <i class="fa fa-download text-info"></i>
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order ID
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fee</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment
                                    methods</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 50; $i++)
                                <tr>
                                    <td class="text-sm font-weight-normal">13 Apr 2022</td>
                                    <td class="text-sm font-weight-normal">@902{{ $i }}</td>
                                    <td class="text-sm font-weight-normal">$235.2{{ $i }}</td>
                                    <td class="text-sm font-weight-normal">${{ 15 + $i }}</td>
                                    <td class="text-sm font-weight-normal">
                                        <span class="text-warning">viw32nvw35</span>
                                    </td>
                                    <td class="text-sm font-weight-normal">2011/04/25</td>
                                    <td class="text-sm font-weight-normal">
                                        @if ($i % 2)
                                            <span class="badge badge-success">Paid</span>
                                        @else
                                            <span class="badge badge-warning">Cash</span>
                                        @endif
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
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
    var ctx3 = document.getElementById("chart-cons-week").getContext("2d");

    new Chart(ctx3, {
        type: "bar",
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets: [{
                label: "Earning $",
                barPercentage: 0.8,
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 15,
                borderSkipped: false,
                backgroundColor: "#B857A4",
                data: [150, 230, 380, 220, 420, 200, 70],
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
</script>

<script src="../../assets/js/plugins/datatables.js"></script>

<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: false,
        fixedHeight: true
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true
    });
</script>
