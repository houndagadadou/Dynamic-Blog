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
          <a href="addpost.php" class="btn background-primary btn-block" >
            <i class="fas fa-plus"></i> Add Post
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- POSTS -->

  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9" id="postLatestParent">
          <div class="card" id="postLatestContainer">
            <div class="card-header text-center">
              <h4 class="display-5 mb-0">Latest Posts</h4>
            </div>
<?php
$conn  = mysqli_connect('localhost', 'root', '', 'dynamic-blog');
$query="SELECT * FROM posts";
$query_run = mysqli_query($conn,$query)

?>
            <table class="table table-striped" id="postLatestTable">
              <thead class="background-dark text-center">
                <tr>
                  <th>id</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody >
              <?php
              if(mysqli_num_rows($query_run)>0)
              {
                while($row = mysqli_fetch_assoc($query_run))
                {
                  ?>

                
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                      <a href="details.php" class="btn background-primary btn-block" >
                      <i class="fas fa-chevron-right"></i> Details
                      </a>
                    </td>
                </tr>
                <?php
                }
              }
              else{
                echo "No Record Found";
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center background-primary mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h4 class="display-4">
                <i class="fas fa-pencil-alt"></i>
                <span id="postCount"></span>
              </h4>
              <a href="posts.php" class="btn btn-outline-light btn-sm">View</a>
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