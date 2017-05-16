<?php require_once("../includes/header.php"); ?>

<section id="index">
    <div class="row">
        <div class="small-12 text-center columns">
            <h1>So, you want to build a website?</h1>
            <div class="intro"><p>From planning to deployment, and development to support.<br>Whether it's your personal site, or a project for a client.<br>Let this site guide you through building a web presence that is both informative and easy to use.</p></div>
            <p class="text-center calltoaction"><a class="cta" data-target="planning" data-section="index">Let's Get Started</a></p>
        </div>
    </div>
</section>

<?php
    require_once('planning.php');
    require_once('content.php');
    require_once('design.php');
    require_once('development.php');
    require_once('testing.php');
    require_once('followup.php');
    require_once("../includes/footer.php"); ?>