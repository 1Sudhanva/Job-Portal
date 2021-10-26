<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <title>Registeration | Job Portal</title>
    <style>
      body {
        background-image: url(logbg.jpg);
        color: rgb(0, 0, 0);
      }
      .row {
        background: rgba(0, 0, 0, 0.25);
        box-shadow: 0 8px 32px 0 rgba(34, 42, 151, 0.3);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border-radius: 10px;
        border: 2px solid rgb(0, 0, 0);
        margin-top: 3%;
        padding: 2%;
      }
      .col-6 {
        margin-top: 5%;
      }
      form {
        margin-top: 2%;
      }
      input[type="text"] {
        background-color: rgba(80, 80, 80, 0.555);
        border: solid 1px black;
      }
      input[type="email"] {
        background-color: rgba(80, 80, 80, 0.555);
        border: solid 1px black;
      }
      input[type="tel"] {
        background-color: rgba(80, 80, 80, 0.555);
        border: solid 1px black;
      }
      input[type="password"] {
        background-color: rgba(80, 80, 80, 0.555);
        border: solid 1px black;
      }
      .al {
        color: #6f42c1;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img class="img" src="login.png" alt="login" />
        </div>
        <div class="col-6">
          <form method="POST" action="config.php">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control"
                id="floatingName"
                placeholder="Full Name"
                name="name"
                required
              />
              <label for="floatingName">Full Name</label>
            </div>
            <div class="form-floating">
              <input
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                name="email"
                required
              />
              <label for="floatingInput">Email address</label>
            </div>
            <div id="emailHelp" class="text-lg-center m-2">
              We'll never share your email with anyone else.
            </div>
            <div class="form-floating mb-3">
              <input
                type="tel"
                class="form-control"
                id="floatingPhone"
                placeholder="Phone No"
                name="phone"
                required
              />
              <label for="floatingPhone">Phone No</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="password"
                class="form-control"
                id="floatingPassword1"
                placeholder="Password"
                name="password"
                required
              />
              <label for="floatingPassword1">Password</label>
            </div>
            <div class="form-floating mb-2">
              <input
                type="password"
                class="form-control"
                id="floatingPassword2"
                placeholder="Password"
                required
              />
              <label for="floatingPassword2">Confirm Password</label>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" value="Submit" name="submit"><a>Submit</a></button>
            </div>
          </form>
        </div>
        <div class="col text-center al">
          Already Registered
          <a class="link-warning" href="login.php">Login In</a>
        </div>
      </div>
    </div>
  </body>
</html>
