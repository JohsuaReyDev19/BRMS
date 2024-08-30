
<!DOCTYPE html>
<html>
<head>
<title>B R M S</title>
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
          <a href="officials.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>&nbsp; Brgy Officials and Staff</a>
          <a href="residentsRecord.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>&nbsp; Residents Record</a>
          <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br>
        </div>
        
      </nav>
      <div class="w3-main w3-padding" style="margin-left:300px;margin-top:43px;">
        <head>
          <h3 class="mt-3 mb-3">Residents Record</h3>
        </head>
      <div class="container">
      <nav class="navbar">
        <div class="container-fluid">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Add New
        </button>
          <form class="d-flex" method="get" role="search">
            <a href="searchResidents.php" class="btn btn-outline-success" type="submit">Go to Search</a>
          </form>
        </div>
      </nav>
      <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Residents</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form action="includes/residentInsert.php" method="post">
                <div class="mb-3 row">
                  <div class="col-3">
                    <center><img src="" alt="" width="200px" height="200px" class="mb-3" id="image">
                    <br>
                    <input type="file" name="image" id="inputimage"  style="width:200px;">
                    </center>
                  </div>

                  <div class="col">
                    <div class="row">
                      <div class="col">
                      <label for="firstname" class="form-label">First Name :</label>
                      <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                      <div class="col">
                      <label for="middlename" class="form-label">Middle Name :</label>
                      <input type="text" class="form-control" name="middlename" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                      <label for="lastname" class="form-label">Last Name :</label>
                      <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col">
                    <label for="full_name" class="form-label">Place Of Birth :</label>
                    <input type="text" class="form-control" name="placeofbirth" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                  <div class="col">
                    <label for="birthdate" class="form-label">Birth Date :</label>
                    <input type="date" class="form-control" name="birthdate" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                  <div class="col">
                    <label for="age" class="form-label">Age :</label>
                    <input type="number" class="form-control" name="age" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="civilstatus" class="form-label">Civil Status :</label>
                        <select name="civilstatus" id="" class="form-control">
                        <option value="">--select--</option>
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="gender" class="form-label">Gender :</label>
                        <select name="gender" id="" class="form-control">
                        <option value="">--select--</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="voterstatus" class="form-label">Voter Status :</label>
                        <select name="voterstatus" id="" class="form-control">
                        <option value="">--select--</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="email" class="form-label">Email :</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@gmail.com" required>
                        </div>
                        <div class="col">
                          <label for="contact" class="form-label">Contact No. :</label>
                          <input type="number" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col">
                          <label for="occupation" class="form-label">Occupation :</label>
                          <input type="text" class="form-control" name="occupation" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <label for="citizenship" class="form-label">Citizenship :</label>
                          <input type="text" class="form-control" name="citizenship" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col">
                          <label for="purok" class="form-label">Purok :</label>
                          <input type="text" class="form-control" name="purok" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col">
                          <label for="full_name" class="form-label">household No. :</label>
                          <input type="number" class="form-control" name="householdno" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col">
                          <label for="address" class="form-label">Address :</label>
                          <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                      </div>
                  </div>
                  </div>

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
                <th scope="col">Age</th>
                <th scope="col">Civil Status</th>
                <th scope="col">Gender</th>
                <th scope="col">Voter Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
        

            <tbody>
                <?php 
                    include "includes/db_conn.php";
                    $sql = "SELECT * FROM `residents`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['res_id']?></td>
                            <td><?php echo $row['firstname']?> <?php echo $row['middlename']?> <?php echo $row['lastname']?></td>
                            <td><?php echo $row['age']?></td>
                            <td><?php echo $row['civilstatus']?></td>
                            <td><?php echo $row['gender']?></td>
                            <td>
                            <?php 
                            if($row['voterstatus'] == 'Yes'){
                              echo '<span style="letter-spacing: 1px;" class="badge text-bg-success">'. $row['voterstatus'] .'</span>';
                            }else{
                              echo '<span style="letter-spacing: 1px;" class="badge text-bg-danger">'.$row['voterstatus'].'</span>';
                            }
                              ?>
                              </td>
                            <td>
                                <a href="edit.php?ID=<?php echo $row['res_id']?>" class="link-dark"><i class="fa-solid fa-eye" style="color: #1b48d0;"></i></a>&nbsp &nbsp &nbsp
                                <a href="edit/editResidents.php?ID=<?php echo $row['res_id']?>" class="link-dark"><i  class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                
                                <a href="includes/deleteresidents.php?ID=<?php echo $row['res_id']?>" class="link-dark"><i  class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                
            </tbody>
            </table>
    </div>
    <script>
      const image = document.getElementById("image");
      const input = document.getElementById("inputimage");

      input.addEventListener("change", () => {
          image.src = URL.createObjectURL(input.files[0]);
      });
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