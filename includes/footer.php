<footer>
    <div class="row expanded">
        <div class="small-12 medium-4 columns">
        </div>
        <div class="small-12 medium-8 columns text-right">
            <p>&copy; <?= date('Y'); ?> <a href="http://karolbrennan.com">Karol Brennan</a></p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/foundation@6.2.1(foundation.min.js+js/foundation.dropdown.js+js/foundation.dropdownMenu.js)"></script>
<script>
    $(document).foundation();

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
        $(this).addClass('active-item');
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

</body>
</html>
