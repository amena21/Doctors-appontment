
<html>
<head>
   <link type="text/css" rel="stylesheet" href="../../resource/cdn-cgi/css/log-style.css">
</head>
<body>
<div class="login-page">
    <div class="form">
        <?php
              echo "
                            <samp id='message' style='color: #009688;padding: 10px;font-size: 18px;text-align: center'>  $msg </samp>
                            ";?>
        <form class="login-form" method="POST" action="admin/log/log.php">
            <h3 style="color: #2F4F4F;">E-Learning <span class="lite">System </span></h3>
            <input type="email" placeholder="Email" name="email"/>
            <input type="password" placeholder="password" name="password"/>
            <button>login</button>
            <p class="message"> <a href="#">Forget Password?</a></p>
        </form>
    </div>

</div>
<script>
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
</body>
</html>

