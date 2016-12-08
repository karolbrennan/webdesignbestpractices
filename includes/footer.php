
</div>

<footer>
    <div class="row">
        <div class="small-12 medium-4 columns">
            <p><a href="/"><?= $sitetitle; ?></a></p>
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

    $('#menutoggle').on('click', function(){
        $('nav').toggleClass('open');
    });

    // Need to write a function for this for the menu up top
    $('.cta').on('click', function(){
        var id = this.getAttribute('data-target');
        $('section#' + id).toggleClass('active');
        var parentId = this.getAttribute('data-section');
        $('section#' + parentId).toggleClass('active');
    })

</script>

</body>
</html>
