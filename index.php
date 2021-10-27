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
    <link rel="stylesheet" href="sidebar.css" />
    <title>Dashboard | Job Portal</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-dark bg-dark h1">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Portal</a>
      </div>
    </nav>
    <div class="sidebar">
      <a class="active" href="">Jobs</a>
      <a href="jobs.php">Candidates Applied</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
    <div class="content">
      <div class="p-3">
        <a
          class="btn btn-success"
          data-bs-toggle="collapse"
          href="#posted"
          role="button"
          aria-expanded="false"
          aria-controls="expand"
          >Post New Jobs</a
        >
      </div>
      <div class="row">
        <div class="col p-3">
          <div class="collapse collapse-vertical" id="posted">
            <div class="card card-body">
              <form action="config.php" method="POST">
                <div class="mb-3">
                  <label for="company name" class="form-label"
                    >Company Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="company name"
                    aria-describedby="emailHelp"
                    name="cname"
                  />
                </div>
                <div class="mb-3">
                  <label for="position" class="form-label">Position</label>
                  <input type="text" class="form-control" id="position" name="pos"/>
                </div>
                <div class="mb-3">
                  <label for="descjob" class="form-label">Job Description</label
                  ><br />
                  <textarea
                    name="descjob"
                    id="descjob"
                    cols="143"
                    rows="5"
                    name="Jdesc"
                  ></textarea>
                </div>
                <div class="mb-3">
                  <label for="ctc" class="form-label">CTC</label>
                  <input type="text" class="form-control" id="ctc" name="CTC"/>
                </div>
                <button type="submit" class="btn btn-primary" name="job">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Company Name</th>
            <th scope="col">Position</th>
            <th scope="col">CTC</th>
          </tr>
        </thead>
        <tbody>
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
            echo"<tbody>
                <tr>
                <td>".++$i."</td>
                <td>".$rows['cname']."</td>
                <td>".$rows['pos']."</td>
                <td>".$rows['CTC']."</td>
                </tr>";
            }}
          ?>
        </tbody>
      </table>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
