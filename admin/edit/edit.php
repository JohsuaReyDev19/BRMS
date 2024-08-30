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
            <a href="dashboard.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>&nbsp;Dashboard</a>
            <a href="officials.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>&nbsp; Brgy Officials and Staff</a>
            <a href="residentsRedor" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>&nbsp; Residents Record</a>
            <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br>
          </div>
          
        </nav>
        <?php
        include "../includes/db_conn.php";
        $sql = "SELECT * FROM `brgyoffice` WHERE ID = $ID LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
    <div class="w3-main con" style="margin-left:300px;margin-top:43px;">
        <form method="post" class="form">
          <div>
            <h3>Edit Official</h3>
          </div>
                <div class="mb-3">
                  <label for="full_name" class="form-label">Full Name:</label>
                  <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['Fullname']?>" required>
                </div>
                <div class="mb-3">
                  <label for="chairmanship" class="form-label">Chairmanship:</label>
                  <select name="chairmanship" class="form-control" required>
                    <option value="">select chairmanship</option>
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
                  <input type="date" class="form-control" name="termstart" aria-describedby="emailHelp" value="<?php echo $row['Termstart']?>" required>
                </div>
                <div class="mb-3">
                  <label for="termend" class="form-label">Term End:</label>
                  <input type="date" class="form-control" name="termend" aria-describedby="emailHelp" value="<?php echo $row['Termend']?>" required>
                </div>
                </div>
                <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                  <select name="status" class="form-control" required>
                    <option value="">select status</option>
                    <option value="Active"><span class="badge text-bg-success">Active</span></option>
                    <option value="Inactive"><span class="badge text-bg-danger">Inactive</span></option>
                  </select>
                </div>
              <div class="modal-footer">
                <a href="../officials.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                <button type="submit" style="margin: 20px;" class="btn btn-primary">Update</button>
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