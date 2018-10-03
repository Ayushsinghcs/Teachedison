<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form  </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">

    <script>
    function validateForm()
    {
        var firstname = document.forms["form1"]["firstname"];
        var lastname = document.forms["form1"]["lastname"];
        var phone = document.forms["form1"]["phone"];
        var email = document.forms["form1"]["email"];
        var password = document.forms["form1"]["password"];
        var confirm_password = document.forms["form1"]["confirm_password"];
        var enr =  form1.elements["enr[]"];
        var dob = document.forms["form1"]["DOB"];
        var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;


        if (firstname.value == "")
        {
            window.alert("Please enter your Firstname.");
            firstname.focus();
            return false;
        }
        if (lastname.value == "")
        {
            window.alert("Please enter your Lastname.");
            lastname.focus();
            return false;
        }
        if (phone.value == "")
        {
            window.alert("Please enter your phone number.");
            phone.focus();
            return false;
        }

        if(phone.value.length!=10){

          alert("Please enter a 10 digit phone number");
          phone.focus();
          return false;
        }
        if (isNaN(phone.value))
        {
            alert("Please enter phone number in digit");
            phone.focus();
            return false;
        }

        if (email.value == "")
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }

        if (email.value.indexOf("@", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }

        if (email.value.indexOf(".", 0) < 0)
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
        if (dob.value == "")
        {
            window.alert("Please enter DOB");
            dob.focus();
            return false;
        }
        if (dob.value == null || dob.value == "" || !pattern.test(dob.value)) {
          window.alert("Invalid DOB");
          dob.focus();
          return false;
          }

        if (password.value == "")
        {
            window.alert("Please enter your password");
            password.focus();
            return false;
        }

        if (confirm_password.value == "")
        {
            window.alert("Please enter your confirm password");
            confirm_password.focus();
            return false;
        }
       if(password.value != confirm_password.value )
       {
         window.alert("Password aren't matching ");
         confirm_password.focus();
         return false;
       }
        // if (enr[].selectedIndex < 1)
        //    {
        //        alert("Please enter your course.");
        //        enr[].focus();
        //        return false;
        //    }
        if (enr.selectedIndex == -1) {
          alert("Please select an item.");
          enr.focus();
          return false;
        }

        return true;
    }
  </script>


</head>

<br>




<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post" onsubmit = "return validateForm()">
                    <h2>User Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="phone"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" name="email"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="DOB" name="DOB"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password"/>
                    </div>
                    <div>
                      <select multiple class="form-control" name="enr[]" >
                        <option value="volvo">choose your preference...</option>
                        <option value="Business">Business</option>
                        <option value="Cricket">Cricket</option>
                        <option value="entertainment">entertainment</option>
                        <option value="International">International</option>
                      </select>
                    </div>




                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>
                    <div class="col-lg-6  col-lg-push-3">
                      Already Registered ? :  <a href="login.php">Click to login </a>
                    </div>

                </form>
            </section>

   <?php
   if(isset($_POST['submit1'])){

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $contact = $_POST['phone'];
 $email = $_POST['email'];
 $DOB = $_POST['DOB'];
 $password = $_POST['password'];
 $confirm_password = $_POST['confirm_password'];
 $preference= implode(',', $_POST['enr']);


$sql = "INSERT INTO student_registration(firstname,lastname,phone,email,DOB,password,confirm_password,article_preferences) VALUES ('$firstname','$lastname','$contact','$email','$DOB','$password','$confirm_password','$preference' )";

if ($conn->query($sql) === TRUE) {

    ?>
    <div class="alert alert-success col-lg-12 col-lg-push-0">
        Registration successfully, You can login now.
    </div>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


   }


   ?>


    </div>



</body>
</html>
