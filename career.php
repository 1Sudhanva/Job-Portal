<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Career | Job Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
      crossorigin="anonymous"
    />
    <style>
      .char {
        background-image: url("career.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        padding: 5%;
      }
      .line {
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        padding: 2%;
      }
      h1 {
        font-family: "Montserrat", sans-serif;
        color: rgb(255, 255, 255);
        text-shadow: 2px 2px 10px black;
        font-size: 50px;
      }
      .card1 {
        width: fit-content; 
        border-radius: 50px;
        box-shadow: 5px 5px 15px black;
      }
      h3 {
        color: rgb(255, 255, 255);
      }
      h2 {
        font-family: "Montserrat", sans-serif;
        text-shadow: 2px 2px 10px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="char">
        <div class="line text-center">
          <h1 class="h1">JOB PORTAL</h1>
          <h3>
            Choose a job you love and you will never have to work in your life
          </h3>
        </div>
      </div>
      <div class="card card1 bg-opacity-10 p-4 m-3">
        <div class="text-center">
          <h2>Google</h2>
          <h4>Web developer</h4>
        </div>
        <p>
          You will not get a better job than this... Visit the Official web site
          for more information.
        </p>
        <p><b>CTC:</b>10LPA</p>
      </div>
      <?php
      $server='localhost';
      $username='root';
      $password='';
      $database='jobs';
      
      $conn= mysqli_connect($server,$username,$password,$database);
        $sql="SELECT `cname`,`pos`,`CTC` FROM `jobs`";
        $result=mysqli_query($conn,$sql);
            $i=0;
            if(($result->num_rows)>0){
              while($rows=$result->fetch_assoc()){
                '<div class="card card1 bg-opacity-10 p-4 m-3">
                <div class="text-center">
                  <h2></h2>
                  <h4></h4>
                </div>
                <p>
                  You will not get a better job than this... Visit the Official web site
                  for more information.
                </p>
                <p><b>CTC:</b>10LPA</p>
              </div>'
              }

    ?>
    </div>
  </body>
</html>