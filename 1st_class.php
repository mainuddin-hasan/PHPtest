<html>
<head>
    <title>5BM Mainuddin_C193070</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<p style ="text-align-last: center; font-size: 50px; color: blue;">Welcome To Student Panel</p>

<div class="container-fluid" >
    <div class="row">
        <div  class="col-md-4" style="margin-left: auto;margin-right: auto; margin-top: 200px;">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Sign Up</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <table class="table table-bordered table-hover table-striped">
                       <tr>
                            <td>Student Name</td>
                            <td>
                                <input class="form-control" type="text" name="studentName" id="studentName">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Student ID</td>
                            <td>
                                <input class="form-control" type="text" name="studentId" id="studentId">
                            </td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td>
                                <input class="form-control" type="password" name="password" id="password">
                            </td>
                        </tr>

                        <tr>
                            <td>Gender</td>
                            <td>
                            <select name="Gender">
                                <option disabled selected value="">Select gender</option>
                                <option>male</option>
                                <option>female</option>
                            </select><br></label>
                            </td>  
                        </tr>
                        
                        <tr>
                            <td>Adress</td>
                            <td>
                                <input class="form-control" type="text" name="adress" id="adress">
                            </td>
                        </tr>

                        <tr>
                            <td>Phone</td>
                            <td>
                                <input class="form-control" type="text" name="phone" id="phone">
                            </td>
                        </tr>

                        <tr>
                            <td>Department</td>
                            <td>
                            <select name="Department">
                                <option disabled selected value="">Select department</option>
                                <option>CSE</option>
                                <option>EEE</option>
                                <option>ETE</option>
                                <option>CE</option>
                            </select><br></label>
                            </td>
                        </tr>

                        <tr>
                            <td>Blood Grp</td>
                            <td>
                            <select name="bloodgrp">
                                <option disabled selected value="">Select bloodgrp</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>O+</option>
                                <option>AB+</option>
                            </select><br></label>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input  class="btn btn-success " value="Submit" type="submit">
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>

</body>
</html>



<?php


// echo "<pre>" ;
    // print_r($_POST);
    $stuname       = $_POST['studentName'] ;
    $stuid         = $_POST['studentId'] ;
    $pass         = $_POST['password'] ;
    $gender        = $_POST['Gender'] ;
    $address       = $_POST['adress'] ;
    $phn           = $_POST['phone'] ;
    $dprtmnt    = $_POST['Department'] ;
    $bldgrp      = $_POST['bloodgrp'] ;
    

    //echo $stuname," ",$stuid;

    $user = "root";
    $pass = "";
    $db = "iiuc";
    $db =mysqli_connect("localhost",$user,$pass,$db);
    mysqli_query($db,"INSERT INTO student_panel(stuname,stuid,pass,gender,adress,phn,dprtmnt,bldgrp) values('$stuname','$stuid','$pass','$gender','$address','$phn','$dprtmnt','$bldgrp')");







// echo "Hello I am Mainuddin" ;
// echo "<br>" ;

// $first_variable_in_php = 0;

// echo "My first variable in php is : $first_variable_in_php <br>";

// $data = array(1,2,3,4,5);

// echo "<br>For loop : <br>" ;

// for ($x = 0; $x < 5; $x++) {
//     echo "The $x number is: $data[$x] <br>";
// }


// $friend_name = array("Abid","Hasan","Hosen","Takib","Rakib");

// echo "<br>Foreach loop : <br>" ;
// foreach ($friend_name as $value) {
//     echo "$value <br>";
// }

?>
