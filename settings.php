<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:login.php');
}
include "header.php";
include "connection.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>User Settings</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <!-- <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <!-- <div class="x_title">
                                <h2>Dashboard</h2>

                                <div class="clearfix"></div>
                            </div> -->
                            <div class="x_content">
                                <!-- Add content to the page ... -->



                                <!-- <div class="login_wrapper"> -->
<?php
// $id=$_GET['id'];
$sql="select * from student_registration where email='$_SESSION[email]'";
$result= $conn->query($sql);
$row=$result->fetch_array()
?>
                                        <section class="login_content" style="margin-top: -40px;">
                                            <form name="form1" action="" method="post">
                                                <h2>Your Profile</h2><br>

                                                <div>
                                                    <input type="text" class="form-control" placeholder="FirstName" name="firstname" value="<?php echo $row['firstname']; ?>"/>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="LastName" name="lastname" value="<?php echo $row['lastname']; ?>"/>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="contact" name="phone" value="<?php echo $row['phone']; ?>"/>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $row['email']; ?>"/>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="DOB" name="DOB" value="<?php echo $row['DOB']; ?>"/>
                                                </div>
                                                <div>
                                                    <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $row['password']; ?>"/>
                                                </div>
                                                <div>
                                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" value="<?php echo $row['confirm_password']; ?>"/>
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
                                                    <input class="btn btn-default submit " type="submit" name="submit1" value="Update">
                                                </div>

                                            </form>
                                        </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php
      if(isset($_POST['submit1'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $contact = $_POST['phone'];
        // $email = $_POST['email'];
        $DOB = $_POST['DOB'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $preference= implode(',', $_POST['enr']);

        // $id=$_GET['id'];

    $sql = "UPDATE student_registration SET firstname='".$firstname."', lastname = '".$lastname."' ,phone='".$contact."',email='".$email."',DOB='".$DOB."',password='".$password."',confirm_password='".$confirm_password."',article_preferences='".$preference."' WHERE email='$_SESSION[email]'" ;

    $conn->query($sql);
    ?>
    <script type="text/javascript">
    alert('Article Updated successfully');
    </script>
<?php
}
?>

<?php
include "footer.php";
?>
