<footer>
    <div class="row expanded">
        <div class="small-12 medium-4 columns">
        </div>
        <div class="small-12 medium-8 columns text-right">
            <p>&copy; <?= date('Y'); ?> <a href="http://karolbrennan.com">Karol Brennan</a></p>
        </div>
    </div>
</footer>

<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script>
    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 500) {
            console.log('small window');
            $('.focus aside').insertBefore('.focus .calltoaction');
        } else {
            $('.focus aside').insertAfter('.focus h2');
        }
    }

    function fixHeader(e) {
        var elem = $(e.currentTarget);
        if(elem[0].scrollTop > 1){
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }
    }

    $(window).on("resize", function (e) {
        checkScreenSize();
        console.log('change window size');
    });

    $('.cta, .nav-item, .link').on('click', function(){
        var target = this.getAttribute('data-target');
        $('.active-item').removeClass('active-item');
        $('.nav-item[data-target=' + target + ']').addClass('active-item');
        $('.unfocus').removeClass('unfocus');
        $('.focus').removeClass('focus').addClass('unfocus');
        $('#' + target).addClass('focus');
        checkScreenSize();
    });

    $(document).ready(function () {
        checkScreenSize();
        $('section').bind('scroll', fixHeader);
    });

    $('#menutoggle').on('click', function(){
        $('nav').toggle().toggleClass('open');
    });


</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89776307-3', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
