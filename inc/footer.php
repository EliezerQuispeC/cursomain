<footer class="site-footer">
        <div class="footer-top light-black">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_about_us">
                                <!-- <h4>Courseware</h4> -->
                                <img class="footer-logo" src="images/logo2.png" alt="Site Logo">
                                <div class="widget-details">
                                    <p>
                                        We are a team of different geeks that believe in producing top-quality courses and category based on best videos. 
                                    </p>
                                    <ul>
                                        <li> <i class="fa fa-phone-square"></i> 088 12345 67890</li>
                                        <li> <i class="fa fa-envelope-square"></i> <a href="#"> info@courseware.com</a></li>
                                    </ul>
                                    <div class="widget-social text-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-square"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div><!-- /.widget-social -->
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-padding -->
        </div><!-- /.footer-top -->

        <div class="footer-bottom black-bg">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="copy-right float-left">
                                <span> Copyright © 2018 <a href="https://demos.jeweltheme.com/courseware" target="_blank" rel="nofollow">Courseware</a>, All rights reservs  </span>
                            </div><!-- /.copy-right -->
                        </div>
                        <div class="col-md-4">
                            <ul class="menu float-right">
                                <li class="menu-item"><a href="#"> Privacy</a></li>
                                <li class="menu-item"><a href="#"> Terms</a></li>
                                <li class="menu-item"><a href="#"> Sitemap</a></li>
                            </ul>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-padding -->
        </div><!-- /.footer-bottom -->
    </footer><!-- /.site-footer -->



    


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            "use strict"; 
            // home contact info
            $(".trggericon").on("click", function(e){ 
              $(this).parent('.top-contact').addClass('togglecontact');
            });
            $(".top-contact .close").on("click", function(e){ 
              $(this).parent('.top-contact').removeClass('togglecontact');
            });
        });
    </script>

</body>

</html>