    <footer>
        <div class="container">
            <section id="social">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="https://www.facebook.com/BC-STEEL-1693374730930004/" target="_blank">Facebook</a>
                        <a href="https://twitter.com/carniadesign" target="_blank">Instagram</a>
                        <!-- <a href="https://www.linkedin.com/company/carnia-design-studio" target="_blank">Linkedin</a> -->
                        <!-- <a href="#" target="_blank">Google+</a> -->
                    </div>
                </div>
            </section>
            <section id="logo">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <strong>BC</strong>STEEL
                        <!-- <img src="/img/logo90.png" class="img-responsive" alt="Carnia Design Logo"> -->
                    </div>
                </div>
            </section>
            <hr>
            <section id="copyright">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <small>&copy; 1991 - <?php echo date('Y'); ?> BCSTEEL. All Rights Reserved.</small><br>
                        <small><?php echo time() ?></small>
                    </div>
                </div>
            </section>
        </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var map;
        function initialize() {
          var mapOptions = {
            zoom: 16,
            scrollwheel: false,
            center: new google.maps.LatLng(42.138149,21.726343),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          map = new google.maps.Map(document.getElementById('googleMapCanvas'),
              mapOptions);
          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(42.138149,21.726343),
              map: map,
              title: 'IPConsulting',
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        $(function() {
            $('a[href*=#]:not([href=#])').on('click',function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 78
                        }, 300);
                        return false;
                    }
                }
            });
        });
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-52042510-1', 'carniadesign.com');ga('send', 'pageview');
    </script>
    </body>
</html>