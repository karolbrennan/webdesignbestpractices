
</div>

<footer>
    <div class="row">
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
    $('.cta, .nav-item, .link').on('click', function(){
        var target = this.getAttribute('data-target');
        $('.active-item').removeClass('active-item');
        $(this).addClass('active-item');
        $('.unfocus').removeClass('unfocus');
        $('.focus').removeClass('focus').addClass('unfocus');
        $('#' + target).addClass('focus');
    });
</script>

</body>
</html>
