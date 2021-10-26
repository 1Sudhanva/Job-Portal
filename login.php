<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-image: url(logbg.jpg);
        color: black;
      }
      .row {
        margin-top: 7%;
        padding: 3%;
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid white;
      }
      .col-6 {
        margin-top: 5%;
      }
      .img {
        border-radius: 30% 0% 30%/ 30% 0% 30%;
        border: solid 2px black;
      }
      a {
        color: #fd7e14;
      }
    </style>
    <title>Login | Job Portal</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img class="img" src="login.png" alt="login" />
        </div>
        <div class="col-6">
          <div class="h1">Login</div>
          <form method="POST" action="config.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                name="email"
                required
              />
              <div id="emailHelp" class="">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                name="password"
                required
              />
            </div>
            <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
          </form>
          <div class="text-center">
            Not having an account ? <br /><a href="register.php">
              Create Account</a
            >
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
