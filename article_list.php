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
                        <h3>List of Articles</h3>
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



<?php
echo "<table class='table table-bordered'>";
echo "<tr>";
   echo "<th>";echo "Article Desription";  echo "</th>";
   echo "<th>";echo "Category";  echo "</th>";
   echo "<th>";echo "Text";  echo "</th>";
echo "</tr>";
 $sql = "select * from article_create";
$result = $conn->query($sql);
  while($row=$result->fetch_array())
  {

    echo "<tr>";
       echo "<td>";echo $row['article_description'];  echo "</td>";
       echo "<td>";echo $row['article_category'];  echo "</td>";
       echo "<td>";echo $row['textarea'];  echo "</td>";
    echo "</tr>";
  }
echo "</table>";
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content


<?php
include "footer.php";
?>
