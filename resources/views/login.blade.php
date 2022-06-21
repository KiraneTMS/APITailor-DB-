<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <title>S-Tailor</title>
</head>
<body>
    <section>

        <div class="box">

          <div class="square" style="--i:0;"></div>
          <div class="square" style="--i:1;"></div>
          <div class="square" style="--i:2;"></div>
          <div class="square" style="--i:3;"></div>
          <div class="square" style="--i:4;"></div>
          <div class="square" style="--i:5;"></div>

         <div class="container">
          <div class="form">
            <h2>LOGIN to S-Tailor</h2>
                <form action="login" method="POST">
                    <div class="inputBx">
                        @csrf
                        <input type="text" name="email" required="required">
                        <span>Login</span>
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="inputBx password">
                        <input id="password-input" type="password" name="password" required="required">
                        <span>Password</span>
                        <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                        <i class="fas fa-key"></i>
                    </div>
                    <label class="remember"><input type="checkbox">
                        Remember</label>
                    <div class="inputBx">
                        <input type="submit" value="Log in">
                    </div>
                </form>
            <p>Forgot password? <a href="#">Click Here</a></p>
            <p>Don't have an account <a href="#">Sign up</a></p>
          </div>
        </div>

        </div>
      </section>
      <script src="{{ URL::asset('js/login.js') }}"></script>
</body>
</html>
