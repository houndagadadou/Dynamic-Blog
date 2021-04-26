<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Local CSS -->
  <link rel="stylesheet" href="adminstyle.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
    integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous" />
  <title>Admin Panel</title>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-dark background-dark p-0">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">Admin Panel</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span
          class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="dashboard.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.php" class="nav-link active">Posts</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- HEADER -->
    <header id="main-header" class="py-2 background-primary">
      <div class="container">
        <div class="row">
          <div class="col align-self-center" id="header-div">
            <h3><i class="fas fa-pencil-alt"></i> Posts</h3>
          </div>
        </div>
      </div>
    </header>
   <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col" id="postAllParent">
          <div class="card" id="postAllContainer">
            <div class="card-header text-center">
              <h4>All Posts</h4>
            </div>
            <table class="table table-striped" id="postAllTable">
              <thead class="background-dark">
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody id="postAllTableBody">
              </tbody>
            </table>
            <!-- PAGINATION -->
            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer  style="background-color: rgba(192,208,221,1); height: 50px;">&copy;2020 All rights reserved
          <div class="iconns">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-f"></i>
          </div>
  </footer>
</body>
</html>