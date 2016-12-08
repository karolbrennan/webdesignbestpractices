<?php require("../includes/header.php"); ?>

<section id="index" class="active">
    <div class="row">
        <div class="small-12 text-center columns">
            <h1>So, you want to build a website?</h1>
            <p class="text-center calltoaction"><a class="cta" data-target="intro" data-section="index" href="#">Let's Get Started</a></p>
        </div>
    </div>
</section>

<?php
    require_once('content.php');
    require_once('design.php');
    require_once('development.php');
    require_once('followup.php');
    require_once('intro.php');
    require_once('planning.php');
    require_once('testing.php');
    require("../includes/footer.php"); ?>