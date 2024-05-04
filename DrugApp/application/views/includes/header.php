<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="../assets/style.css" rel="stylesheet">
    <link href="../assets/signin.css" rel="stylesheet">
    <link href="../assets/dashboard.css" rel="stylesheet"> -->
    <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/signin.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dashboard.css'); ?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" rel="stylesheet">


    <title>Antinorcotics</title>

    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        <img class="rounded-circle" src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="logo" style="width: 210px; height:55px;" />
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="<?php echo base_url('index.php/DashboardController/logout'); ?>">Sign out</a>
        </div>
    </div>
</header>

</head>

<body>