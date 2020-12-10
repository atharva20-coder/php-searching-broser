<?php
    include 'header.php';
?>



<div class="header">
  <h2>BLOGS</h2>
</div>
    <!--<div class="row">-->
        <?php
        
        $title = mysqli_real_escape_string($conn, $_GET['title']);
        $date = mysqli_real_escape_string($conn, $_GET['date']);

        $sql = "SELECT * from article WHERE a_title='$title' AND a_date='$date';";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        
        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "
                <div class='row'>
                <div class='leftcolumn'>
                <div class='card'>
                <h2>".$row['a_title']."</h2>
                <h5>".$row['a_date']."</h5>
                <div class='fakeimg' style='height:200px;'>Image</div>
                <p>".$row['a_author']."</p>
                <p>".$row['a_text']."</p>
                </div>
                </div>
                </div>";
            }
        }
        ?>
<!--  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>
-->
<?php
    include 'footer.php';
?>
