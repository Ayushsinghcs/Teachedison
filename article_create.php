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
                        <h3>Create An Article</h3>
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
                                <h2>Send Notification to Student</h2>

                                <div class="clearfix"></div>
                            </div> -->
                            <div class="x_content">
                                <!-- Add content to the page ... -->
                                <form  action="" method="post" class="col-lg-6" enctype="multipart/form-data">
                                  <table class="table table-bordered">


                                      <tr>
                                      <td>  <input type="text" name="desc" class="form-control" placeholder="Article Desription"> </td>
                                      </tr>
                                      <tr>
                                        <td>choose your preference...
                                      <select multiple class="form-control" name="enr[]" >
                                        <option value="Business">Business</option>
                                        <option value="Cricket">Cricket</option>
                                        <option value="entertainment">entertainment</option>
                                        <option value="International">International</option>
                                      </select>
                                    </td>
                                    </tr>
                                      <tr>
                                      <td> Article: <br><textarea name="msg" class="form-control"></textarea> </td>
                                      </tr>
                                      <tr>
                                        <td><input type="submit" name="submit1" class="form-control btn btn-default"></td>
                                      </tr>
                                    </table>
                                  </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
                                                      <?php

                                                      if(isset($_POST['submit1']))
                                                      {
                                                        $preference= implode(',', $_POST['enr']);

                                                        $sql= "INSERT INTO article_create(id,article_description,article_category,textarea) VALUES ('','$_POST[desc]','".$preference."','$_POST[msg]')";
                                                        $conn->query($sql);

                                                        ?>
                                                        <script type="text/javascript">
                                                        alert('Article Created successfully');
                                                        </script>
                                        <?php
                                      }
                                      ?>
<?php
include "footer.php";
?>
