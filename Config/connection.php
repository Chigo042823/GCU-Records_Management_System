<?php
$servername = "localhost";
$username = "AAP";
$password = "123456";
$dbname = "GCU-WRMS";

function insertCRF1($servername, $username, $password, $dbname) {
    if (isset($_POST['submit'])) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_SESSION['email'];
        $Lname = $_POST['Lname'];
        $Fname = $_POST['Fname'];
        $Mname = $_POST['Mname'];
        $phone = $_POST['phone'];
        $sex = $_POST['sex'];
        $religion = $_POST['religion'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $PlaceofBirth = $_POST['PlaceofBirth'];
        $nationality = $_POST['nationality'];

        $sql = mysqli_query($con, "INSERT INTO studfillup VALUES ('$email', '$Lname', '$Fname', '$Mname', '$phone', '$sex', '$religion', '$address', '$birthday', '$PlaceofBirth', '$nationality')");

        header("Location: CRF2.php");

        mysqli_close($con);
    }
}

function insertCRF2($servername, $username, $password, $dbname) {
    if (isset($_POST['submit'])) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_SESSION['email'];
        $gLevel = $_POST['gLevel'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $genhealth = $_POST['genhealth'];
        $pastCondition = $_POST['pastCondition'];
        $ailment = $_POST['ailment'];
        $residence = $_POST['residence'];
        $transportation = $_POST['transportation'];

        $sql = mysqli_query($con, "INSERT INTO studfillup2 VALUES ('$email', '$gLevel', '$height', '$weight', '$genhealth', '$pastCondition', '$ailment', '$residence', '$transportation')");

        header("Location: CRF2.php");

        mysqli_close($con);
    }

}

function register($servername, $username, $password, $dbname) {
    if (isset($_POST['submit'])) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }
      
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $dup = mysqli_query($con, "SELECT * FROM studlog WHERE StudLog_Email = '$email' OR Username = '$username'");
      
        if (mysqli_num_rows($dup) > 0) {
          echo "Email or Username Already Exists";
        } else {
          $sql = mysqli_query($con, "INSERT INTO studlog (Username, Studlog_Email, Password, TypeID) VALUES ('$username', '$email', '$pass', '1')");
          echo "New Record Created Succesfully";
          header("Location: pages-login.php");
        }
      
        mysqli_close($con);
      }
}

function login($con) {
    if (isset($_POST['submit'])) {
        $emailL = $_POST['emailL'];
        $passL = $_POST['passwordL'];
        
        $passV = 'SELECT * FROM `studlog` WHERE StudLog_Email = "'.$emailL. '" AND Password = "' . $passL . '"';
        // echo $passV;
        // echo die();
        $resultL = mysqli_query($con, $passV);
        
        $adminpassV = 'SELECT * FROM `adminlog` WHERE Email = "' . $emailL . '" AND Password = "' . $passL . '"';
        
        $resultA = mysqli_query($con, $adminpassV);
        
          if (mysqli_num_rows($resultL)) {
            while ($row = mysqli_fetch_assoc($resultL)) {;
              $_SESSION['num'] = $row['num'];
              $_SESSION['username'] = $row['Username'];
              $_SESSION['email'] = $row['StudLog_Email'];
              $_SESSION['typeID'] = $row['TypeID'];
              header("Location: index-student.php");
            }
          } else {
            if (mysqli_num_rows($resultA)) {
              while ($row = mysqli_fetch_assoc($resultA)) {
                $_SESSION['num'] = $row['num'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['typeID'] = $row['TypeID'];
                header("Location: index.php");
              }
            } else {
            echo "invalid";
            }
          }
          
        }
}

function usertype($con) {
    $TID = $_SESSION['typeID'];
    $usertypeG = 'SELECT Type FROM `usertype` WHERE TypeID = ' . $TID;
    $resultT = mysqli_query($con, $usertypeG);
    if (mysqli_num_rows($resultT)) {
        while ($row = mysqli_fetch_assoc($resultT)) {
            $_SESSION['type'] = $row['Type'];
        }
    }
}

function usernum($con) {
    $studnum = mysqli_query($con, "SELECT * FROM studlog;");
    $snum = 0;

    while ($rows = mysqli_fetch_array($studnum)) {
        $snum += 1;
    }
    echo $snum;
}

function sessionvalidation() {
    if ($_SESSION['typeID'] != 3) {
        header("Location: pages-login.php");
      }
      
      if (!isset($_SESSION['email'])) {
        header("Location: pages-login.php");
      }
}

function submissioncheck($con) {
    $sql1 = "SELECT * FROM studlog";
$result = mysqli_query($con, $sql1);

$subcheck = mysqli_query($con, "SELECT *
FROM studlog LEFT JOIN studfillup ON studlog.StudLog_Email=studfillup.Email;");

if (mysqli_num_rows($subcheck)) {
  while ($row = mysqli_fetch_assoc($subcheck)) {
if ($row['Email'] != "") {
      $em = $row['StudLog_Email'];
      $subinput = mysqli_query($con, "INSERT INTO studsubmission VALUES ('$em', 'Submitted')");
    } else {
      $em = $row['StudLog_Email'];
      $subinput = mysqli_query($con, "INSERT INTO studsubmission VALUES ('$em', 'Not Submitted')");
    }
  }


}
}

function submissiontable($con) {
    $sql3 = "SELECT * FROM studlog INNER JOIN studsubmission ON studlog.StudLog_Email = studsubmission.Email";
    $result3 = mysqli_query($con, $sql3);
    if (mysqli_num_rows($result3) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result3)) {
        $substat = $row['Substatus'];
        echo "<tr>" . "<th scope='row'><a href='#'>#2457</a></th>" . "<td>" . $row["Username"] . "</td><td>Cumulative Record Form</td>
      <td><span class='badge bg-success'>" . $substat . "</span></td>
    </tr>";
      }
    } else {
      echo "0 results";
    }
}

function report($con) {
    $sql1 = "SELECT * FROM studfillup";
    $result = mysqli_query($con, $sql1);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>" . "Full Name: " . $row["FirstName"] . " " . $row["MiddleName"] . " " . $row["LastName"] . "<br>" . "Phone Number: " . $row["ContactNo."] . "<br>" . "Sex: " . $row["Sex"] . "<br>" . "Religion: " . $row["Religion"] . "<br>" . "Address: " . $row["Address"] . "<br>" . "Birthday: " . $row["Birthday"] . "<br>" . "Place of Birth: " . $row["PlaceofBirth"] . "<br>" . "Nationality: " . $row["Nationality"];
        }
    } else {
        echo "0 results";
    } 
}

?>