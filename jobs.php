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
    <title>Dashboard | Job Porta</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-dark bg-dark h1">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Portal</a>
      </div>
    </nav>
    <div class="sidebar">
      <a href="index.php">Jobs</a>
      <a
        class="active"
        href="#applied"
        data-bs-toggle="collapse"
        role="button"
        aria-expanded="false"
        aria-controls="expand"
        >Candidates Applied</a
      >
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
    <div class="content">
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Candidate Name</th>
            <th scope="col">Position</th>
            <th scope="col">Resumne</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Larry Page</td>
            <td>Web developer</td>
            <td>
              <a href=""><i class="fa fa-download" aria-hidden="true"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
      <script src="https://use.fontawesome.com/32da77db27.js"></script>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
