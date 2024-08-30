<?php
    include "../includes/db_conn.php";
    $ID = $_GET['ID'];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST["full_name"];
    $chairmanship = $_POST["chairmanship"];
    $position = $_POST["position"];
    $termstart = $_POST["termstart"];
    $termend = $_POST["termend"];
    $status = $_POST["status"];

    $sql = "UPDATE `brgyoffice` SET `Fullname`='$full_name',`Chairmanship`='$chairmanship',`Position`='$position',`Termstart`='$termstart',`Termend`='$termend',`Status`='$status' WHERE ID = $ID;";
        $result = mysqli_query($conn, $sql);
                    
    if($result){
        header("location: ../officials.php");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
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
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.form{
    max-width: 700px;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 1px 1px 15px 1px black;


}
.con{
  padding-top: 10px;
}
@media (max-width: 720px) {
    .form{
        max-width: 80%;
        margin: auto;
    }
    
}
.logout{
    text-decoration: none;
    color: white;
}
label,h3{
  font-weight: bold;
}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
        <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
          <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
          <a href="sign_in.php" class="w3-bar-item w3-right" logout>Logout</a>
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
            <a href="../dashboard.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>&nbsp;Dashboard</a>
            <a href="../officials.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>&nbsp; Brgy Officials and Staff</a>
            <a href="../residentsRecord.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bullseye fa-fw"></i>&nbsp; Residents Record</a>
            <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br>
          </div>
          
        </nav>
        <?php
        include "../includes/db_conn.php";
        $sql = "SELECT * FROM `residents` WHERE res_id = $ID LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
    <div class="w3-main con w-75" style="margin-left:300px;margin-top:43px;">
    <form action="includes/residentInsert.php" method="post">
                <div class="mb-3 row">
                  <div class="col-3">
                    <center><img src="<?php echo $row["image"];?>" alt="" width="200px" height="200px" class="mb-3" id="image">
                    <br>
                    <input type="file" name="image" id="inputimage"  style="width:200px;">
                    </center>
                  </div>

                  <div class="col">
                    <div class="row">
                      <div class="col">
                      <label for="firstname" class="form-label">First Name :</label>
                      <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["firstname"];?>" required>
                      </div>
                      <div class="col">
                      <label for="middlename" class="form-label">Middle Name :</label>
                      <input type="text" class="form-control" name="middlename" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["middlename"];?>">
                    </div>
                    <div class="col">
                      <label for="lastname" class="form-label">Last Name :</label>
                      <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["lastname"];?>" required>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col">
                    <label for="full_name" class="form-label">Place Of Birth :</label>
                    <input type="text" class="form-control" name="placeofbirth" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["placeofbirth"];?>" required>
                  </div>
                  <div class="col">
                    <label for="birthdate" class="form-label">Birth Date :</label>
                    <input type="date" class="form-control" name="birthdate" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["birthdate"];?>" required>
                  </div>
                  <div class="col">
                    <label for="age" class="form-label">Age :</label>
                    <input type="number" class="form-control" name="age" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["age"];?>" required>
                  </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="civilstatus" class="form-label">Civil Status :</label>
                        <select name="civilstatus" id="" class="form-control">
                        <option value=""><?php echo $row["civilstatus"];?></option>
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="gender" class="form-label">Gender :</label>
                        <select name="gender" id="" class="form-control">
                        <option value=""><?php echo $row["gender"];?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="voterstatus" class="form-label">Voter Status :</label>
                        <select name="voterstatus" id="" class="form-control">
                        <option value=""><?php echo $row["voterstatus"];?></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="email" class="form-label">Email :</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@gmail.com" value="<?php echo $row["email"];?>" required>
                        </div>
                        <div class="col">
                          <label for="contact" class="form-label">Contact No. :</label>
                          <input type="number" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["contact"];?>"required>
                        </div>
                        <div class="col">
                          <label for="occupation" class="form-label">Occupation :</label>
                          <input type="text" class="form-control" name="occupation" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["occupation"];?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <label for="citizenship" class="form-label">Citizenship :</label>
                          <input type="text" class="form-control" name="citizenship" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["citizenship"];?>"required>
                        </div>
                        <div class="col">
                          <label for="purok" class="form-label">Purok :</label>
                          <input type="text" class="form-control" name="purok" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["purok"];?>" required>
                        </div>
                        <div class="col">
                          <label for="full_name" class="form-label">household No. :</label>
                          <input type="number" class="form-control" name="householdno" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["householdno"];?>" required>
                        </div>
                      </div>
                      <div class="row">
                       <div class="col">
                          <label for="address" class="form-label">Address :</label>
                          <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row["address"];?>" required>
                        </div>
                      </div>
                  </div>
                  </div>

                </div>
              <div class="modal-footer">
                <a href="../residentsRecord.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
        </div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
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

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>