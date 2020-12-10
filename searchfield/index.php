<?php
    include 'header.php';
?>



<div class="header">
  <h2>BLOGGER</h2>
    <form action="search.php" method="post">
    <input type="text" id="fname" name="search" placeholder="Search">
    <button type="submit" class="button button2" name="submit-search">Search</button>
</form>
</div>
    <!--<div class="row">-->
        <?php
        $sql = "SELECT * from article;";
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
    include 'footer.php';
?>
