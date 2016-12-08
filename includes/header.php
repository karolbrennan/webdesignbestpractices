<?php $sitetitle = 'Web Design Best Practices'; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $sitetitle; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/foundation@6.2.1(foundation.min.css),foundation-icons@3.0">
    <link href="https://fonts.googleapis.com/css?family=Glass+Antiqua|Montserrat|Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<header>
    <div class="row">
        <div class="small-12 medium-8 columns">
            <h1><a href="/" class="logo"><?= $sitetitle; ?></a></h1>
        </div>
        <div class="small-12 medium-4 columns">
            <?php include("../includes/nav.php"); ?>
        </div>
    </div>
</header>

<div id="container">