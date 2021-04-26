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
            <a href="dashboard.php" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.php" class="nav-link">Posts</a>
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
  <header id="main-header" class="py-2 background-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col align-self-center" id="header-div">
          <h3><i class="fas fa-cog"></i> Dashboard</h3>
        </div>
      </div>
    </div>
  </header>
    <!-- ACTIONS -->
    <section id="actions" class="py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <a href="#" class="btn background-primary btn-block" >
                <i class="fas fa-check"></i> Add Post
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Add Post</h4>
            </div>
            <div class="card-body">
              <form action="create.php" method="POST">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" >
                </div>
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" name="date">
                </div> 
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="editor1"class="form-control" id="description" name="description"></textarea>
                </div>
                <button type="submit"class="btn background-primary btn-block">
                  <a href="#">
                  <i class="fas fa-check"></i> Add Post
              </a>
                </button>
              </form>
            </div>
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