
</section>

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
