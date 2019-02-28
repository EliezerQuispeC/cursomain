<footer class="site-footer">
        <div class="footer-top light-black">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_about_us">
                                <!-- <h4>Courseware</h4> -->
                                <h1>MainGlobal Courses</h1>
                                <div class="widget-details">
                                    <p>
                                        Brindamos educación actualizada al alcance de todos.
                                    </p>
                                    <ul>
                                        <li> <i class="fa fa-phone-square"></i> 950000000 </li>
                                        <li> <i class="fa fa-envelope-square"></i> <a href="#"> info@mainglobal.com.pe</a></li>
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
                                <span> Copyright © 2018 <a href="https://demos.jeweltheme.com/courseware" target="_blank" rel="nofollow">MainGlobal</a>, Todos los derechos reservados</span>
                            </div><!-- /.copy-right -->
                        </div>
                        <div class="col-md-4">
                            <ul class="menu float-right">
                                <li class="menu-item"><a href="#"> Privacidad</a></li>
                                <li class="menu-item"><a href="#"> Terminos y condiciones</a></li>
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
    <script src="assets/js/jquery.selectric.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script> 

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
    <script>
        $(function() {
            $('.filter-select').selectric();
        });
    </script>

</body>

</html>