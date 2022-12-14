<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logoWebsite.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/css/apex-charts.css') }}" />

    <!-- Kit code for icons -->
    <script src="https://kit.fontawesome.com/1c6258baf1.js" crossorigin="anonymous"></script>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('vendor/js/config.js') }}"></script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('vendor/js/jquery.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/js/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('vendor/js/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('vendor/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('vendor/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- JS and CSS for charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script type="text/javascript"
        src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <script src="{{ asset('vendor/js/chart.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/css/chart.css') }}" />
</head>


<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="" class="app-brand-link">
                        <!--! Input link here -->
                        <span class="app-brand-text menu-text fw-bolder ms-2"><img
                                src="{{ asset('img/android-icon-36x36.png') }}"></span>
                        <span class="app-brand-text menu-text fw-bolder ms-2">MF Manager</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="app-brand-1 demo-1">
                    @if (Session()->has('LoginID'))
                        <div class="welcome"
                            style="magin-top: 12px; background-color: white; color:rgb(35, 179, 90); display:inline-block">
                            <p style="margin-right: 1px"><i class="fas fa-user-tie"></i> | <?php echo session()->get('Name'); ?></p>
                            {{-- username --}}
                        </div>
                        <a style="margin-left: 10px;" class="nav-icon position-relative text-decoration-none"
                            href="{{ url('adminLogOut') }}">
                            <i class="fas fa-sign-out-alt fa-lg"></i>
                        </a>
                    @else
                        <a class="nav-icon position-relative text-decoration-none" href="{{ url('loginAdmin') }}">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        </a>
                    @endif
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="{{ url('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-house"></i>
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>

                    <!-- Accounts -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Accounts</span>
                    </li>
                    {{-- Admins --}}
                    <li class="menu-item">
                        <a href="{{ url('listAdmin') }}" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-user"></i>
                            <div data-i18n="Admins">Admins</div>
                        </a>
                    </li>
                    {{-- Customers --}}
                    <li class="menu-item">
                        <a href="{{ url('listCustomer') }}" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-people-group"></i>
                            <div data-i18n="Customers">Customers</div>
                        </a>
                    </li>

                    <!-- Products -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Products</span>
                    </li>
                    <!-- Categories -->
                    <li class="menu-item">
                        <a href="{{ url('listCategory') }}" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-arrow-down-short-wide"></i>
                            <div data-i18n="Categories">Categories</div>
                        </a>
                    </li>
                    <!-- Products -->
                    <li class="menu-item">
                        <a href="{{ url('listProduct') }}" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-shirt"></i>
                            <div data-i18n="Products">Products</div>
                        </a>
                    </li>

                    <!-- Orders -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Orders</span>
                    </li>
                    {{-- Orders --}}
                    <li class="menu-item">
                        <a href="{{ url('listOrders') }}" class="menu-link">
                            <i class="menu-icon tf-icons fa-solid fa-user"></i>
                            <div data-i18n="Orders">Orders</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->
            <div class="layout-page">
                <div class="content-wrapper" style="align-content: center">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0"
                                style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; background-color: #FFF; padding:15px">
                                <canvas id="myChart"></canvas>
                                <script>
                                    function color() {
                                        var r = () => Math.random() * 250 >> 0;
                                        var color = `rgb(${r()}, ${r()}, ${r()})`;
                                        return color;
                                    }

                                    var xValues = [
                                        <?php foreach ($categories as $category) {
                                            echo '"' . $category->Category_Name . '",';
                                        } ?>
                                    ];

                                    var yValues = [
                                        <?php foreach ($categories as $category) {
                                            $number = 0;
                                            foreach ($products as $product) {
                                                if ($product->Category_ID == $category->Category_ID) {
                                                    $number += $product->Available;
                                                }
                                            }
                                            echo $number . ',';
                                        } ?>
                                    ];

                                    var barColors = [
                                        <?php foreach ($categories as $category) {
                                            echo 'color(),';
                                        } ?>
                                    ];

                                    new Chart("myChart", {
                                        type: "doughnut",
                                        data: {
                                            labels: xValues,
                                            datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues,
                                                label: "There are yValues"
                                            }],
                                        },
                                        options: {
                                            title: {
                                                display: true,
                                                text: "Product number by categories",
                                                fontSize: 40 //font-size of the title
                                            },
                                            legend: {
                                                display: true,
                                                position: 'bottom',
                                                labels: {
                                                    fontSize: 20, //font-size of the label above the donut
                                                    textAlign: 'left'
                                                }
                                            },
                                            animation: {
                                                animation: true,
                                                easing: "easeOutSine",
                                                percentageInnerCutout: 60,
                                                segmentShowStroke: false
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="col-lg-12 mb-2 order-0"
                                style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; background-color: #FFF; padding:15px">
                                <canvas id="bar-chart"></canvas>
                                <script>
                                    new Chart(document.getElementById("bar-chart"), {
                                        type: 'bar',
                                        data: {
                                            labels: [<?php
                                            foreach ($top5Prod as $name) {
                                                echo '"' . $name->Product_Name . '"' . ',';
                                            }
                                            ?>],
                                            datasets: [{
                                                label: "Total sales (products)",
                                                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                                                data: [<?php
                                                foreach ($top5Prod as $sum) {
                                                    echo $sum->sum . ',';
                                                }
                                                ?>]
                                            }]
                                        },
                                        options: {
                                            legend: {
                                                display: false
                                            },
                                            title: {
                                                display: true,
                                                text: 'Top 5 best selling products',
                                                fontSize: 40
                                            },
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <?php
                            // Total income
                            $totalIncome = 0;
                            $income = 0;
                            foreach ($order_details as $orderDetail) {
                                $smallIncome = $orderDetail->Price * $orderDetail->Quantity;
                                $totalIncome += $smallIncome;
                            }

                            //Total income of today
                            $incomeToday = 0;
                            $incomeToday1 = 0;
                            foreach ($orders as $order) {
                                $incomeToday1 = $order->Price * $order->Quantity;
                                $incomeToday += $incomeToday1;
                            }
                            ?>
                            <div class="col-lg-2 mb-4 order-0"
                                style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; background-color: #FFF; padding:10px; text-align:center">
                                <select name="income" id="income" onchange="changeIncome()">
                                    <option value="total">Total income</option>
                                    <option value="today">Today income</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-4 order-0" 
                                style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; background-color: #FFF; padding:10px">
                                <div style="align-items: center"><i class="fa-solid fa-sack-dollar"></i>
                                    $<span id="test"></span>
                                    <script>
                                        function changeIncome(){
                                            if(document.getElementById("income").value == "total"){
                                                document.getElementById("test").innerHTML = {{$totalIncome}}
                                            }
                                            else if(document.getElementById("income").value == "today"){
                                                document.getElementById("test").innerHTML = {{$incomeToday}}
                                            }
                                        }
                                        changeIncome();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
