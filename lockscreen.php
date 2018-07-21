<html class="lockscreen"><head>
    <meta charset="UTF-8">
    <title>AdminLTE | Lockscreen</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="assets/css/lokcsreenc.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <!-- Automatic element centering using js -->
        <div class="center" style="position: absolute; top: 71px; left: 585.5px;">            
            <div class="headline text-center" id="time">12:35:31 PM</div><!-- /.headline -->

            <!-- User name -->
            <div class="lockscreen-name">fsola</div>

            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                    <img />
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <div class="lockscreen-credentials">   

                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="password">
                         <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                    </div>
                   
                </div><!-- /.lockscreen credentials -->

            </div><!-- /.lockscreen-item -->

            <div class="lockscreen-link">
                <a href="login.html">Or sign in as a different user</a>
            </div>            
        </div><!-- /.center -->

        <!-- jQuery 2.0.2 -->
        <script src="files/js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="files/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                startTime();
                $(".center").center();
                $(window).resize(function() {
                    $(".center").center();
                });
            });

            /*  */
            function startTime()
            {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();

                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);



                //Add time to the headline and update every 500 milliseconds
                $('#time').html(h + ":" + m + ":" + s);
                setTimeout(function() {
                    startTime()
                }, 500);
            }

            function checkTime(i)
            {
                if (i < 10)
                {
                    i = "0" + i;
                }
                return i;
            }

            /* CENTER ELEMENTS IN THE SCREEN */
            jQuery.fn.center = function() {
                this.css("position", "absolute");
                this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
                                         $(window).scrollTop()) - 30 + "px");
                this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
                                          $(window).scrollLeft()) + "px");
                return this;
            }
        </script>

    </body></html>