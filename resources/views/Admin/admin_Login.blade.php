
<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href= "{{asset('public/admin_asset/css/style.css')}}" type="text/css">

</head>
<body>
<div class="container">

    <header>
        <h1>Login Form</h1>
    </header>
    <section>
        <div id="container_demo" >
            <div id="wrapper">
                <div id="login" class="animate form">
                    <h3 style="color:green"> <?php   $message=Session::get('message');
                        if($message)
                            {
                                echo $message;
                                Session::put('message',"");
                            }

                        ?>

                    </h3>
                    <h2 style="color:red">
                        <?php   $exception=Session::get('exception');
                        if($exception)
                        {
                            echo $exception;
                            Session::put('exception',"");
                        }

                        ?>

                    </h2>
                    {{--<form  action="adminlogin.php" autocomplete="on" method="post">--}}
                    {!!  Form::open(['url'=>'admin-login-check']) !!}
                        <h1>Log in</h1>
                        <p>
                            <label for="username" class="uname" > Your username </label>
                            <input  name="admin_email" required="required" type="email" placeholder="myusername"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Keep me logged in</label>
                        </p>
                        <p class="signin button">
                            <input type="submit" name="submit" value="Log In"/>
                        </p>
                    {{--</form>--}}

                    {!! Form::close()  !!}
                </div>
            </div>
    </section>
</div>
</body>
</html>
