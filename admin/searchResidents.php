
<!DOCTYPE html>
<html>
<head>
<title>System Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
th{
  letter-spacing: 2px;
  font-style: italic;
}
label,h3{
  font-weight: bold;
}
#status{
    padding: 5px 15px;
    border-radius: 10px;
}
td{
  border: 0.3px solid #00000058;
}
.logout{
    text-decoration: none;
    color: white;
}
</style>
</head>
<body class="w3-light-grey">

      <!-- Top container -->
      <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
        <a href="sign_in.php" class="w3-bar-item w3-right logout">Logout</a>
      </div>

      <!-- Sidebar/menu -->
      <nav class="w3-sidebar w3-collapse w3-white" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container w3-row">
          <div class="w3-col s4">
            <img src="wallpaperflare.com_wallpaper.jpg" class="w3-circle w3-margin-right" style="width:46px; height: 46px;">
          </div>
          <div class="w3-col s8 w3-bar">
            <span>Welcome, <strong>Josh</strong></span><br>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
          </div>
        </div>
        <hr>
        <div class="w3-bar-block">
          <a href="dashboard.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>&nbsp;Dashboard</a>
          <a href="officials.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>&nbsp; Brgy Officials and Staff</a>
          <a href="residentsRecord.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>&nbsp; Residents Record</a>
          <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br>
        </div>
        
      </nav>
      <div class="w3-main w3-padding" style="margin-left:300px;margin-top:43px;">
        <head>
          <h3 class="mt-3 mb-3">List of Brgy Officials and Staff</h3>
        </head>
      <div class="container">
      <nav class="navbar">
        <div class="container-fluid">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Add New
        </button>
          <form class="d-flex" method="get" role="search">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Officials</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form action="includes/insert.php" method="post">
                <div class="mb-3">
                  <label for="full_name" class="form-label">Full Name:</label>
                  <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="chairmanship" class="form-label">Chairmanship:</label>
                  <select name="chairmanship" class="form-control" required>
                    <option value="">slect chairmanship</option>
                    <option value="one">one</option>
                    <option value="two">two</option>
                    <option value="three">three</option>
                  </select>
                </div>
                <div class="mb-3">
                <label for="position" class="form-label">Position:</label>
                  <select name="position" class="form-control" required>
                    <option value="">select position</option>
                    <option value="one">one</option>
                    <option value="two">two</option>
                    <option value="three">three</option>
                  </select>
                </div>
                <div>
                <div class="mb-3">
                  <label for="termstart" class="form-label">Term Start:</label>
                  <input type="date" class="form-control" name="termstart" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="termend" class="form-label">Term End:</label>
                  <input type="date" class="form-control" name="termend" aria-describedby="emailHelp" required>
                </div>
                </div>
                <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                  <select id="status" name="status" class="form-control" required>
                    <option value="">select status</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                  </select>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
              </div>
            </div>
          </div>
        </div>
        
        <table class="table table-hover text-center">
            <thead >
                <tr class=" bg-dark">
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Chairmanship</th>
                <th scope="col">Position</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    include "includes/db_conn.php";
                    if(isset($_GET['search'])){
                      $filtervalues = $_GET['search'];
                      $query = "SELECT * FROM residents WHERE CONCAT(Fullname,Chairmanship,Position,Status) LIKE '%$filtervalues%' ";
                      $query_run = mysqli_query($conn, $query);

                      if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $items){
                          ?>
                            <tr>
                              <td><?= $items['ID']?></td>
                              <td><?= $items['Fullname']?></td>
                              <td><?= $items['Chairmanship']?></td>
                              <td><?= $items['Position']?></td>
                              <td><?php 
                                  if($items['Status'] == 'Active'){
                                    echo '<span style="letter-spacing: 1px;" class="badge text-bg-success">'. $items['Status'] .'</span>';
                                  }else{
                                    echo '<span style="letter-spacing: 1px;" class="badge text-bg-danger">'.$items['Status'].'</span>';
                                  }
                              ?></td>
                              <td>
                                <a href="edit.php?ID=<?php echo  $items['ID']?>" class="link-dark"><i  class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="includes/delete.php?ID=<?php echo  $items['ID']?>" class="link-dark"><i  class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                            </tr>
                        <?php
                        }
                      }else{
                        ?>
                        <tr>
                          <td colspan="6">no record found</td>
                        </tr>
                        <?php
                      }
                    }
                ?>
                
            </tbody>
            </table>
    </div>
    <script>

    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <script>
      var mySidebar = document.getElementById("mySidebar");
      

      var overlayBg = document.getElementById("myOverlay");

      function w3_open() {
        if (mySidebar.style.display === 'block') {
          mySidebar.style.display = 'none';
          overlayBg.style.display = "none";
        } else {
          mySidebar.style.display = 'block';
          overlayBg.style.display = "block";
        }
      }

      function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
      }
      </script>

</body>
</html>