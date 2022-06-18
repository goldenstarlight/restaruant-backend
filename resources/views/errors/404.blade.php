<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Soft UI Dashboard PRO by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="../../assets/css/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show g-sidenav-pinned  bg-gray-100">

<main class="main-content  mt-0">
    <section class="my-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-1 text-bolder text-gradient text-danger">{{ __('Error 404') }}</h1>
                    <h2>{{ __('Erm. Page not found') }}</h2>
                    <p class="lead">{{ __('We suggest you to go to the homepage while we solve this issue.') }}</p>
                    <a href={{ route('default') }} type="button"
                        class="btn bg-gradient-dark mt-4">{{ __('Go to Homepage') }}</a>
                </div>
                <div class="col-lg-6 my-auto position-relative">
                    <img class="w-100 position-relative" src="../../../assets/img/illustrations/error-404.png"
                        alt="404-error">
                </div>
            </div>
        </div>
    </section>
</main>
</body>

</html>



