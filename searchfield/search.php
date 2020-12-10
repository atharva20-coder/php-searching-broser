<?php
    include 'header.php';
?>
<h2>Search Page</h2>

<div class="row">
<div class="leftcolumn">
<div class="card">
<?php
    if(isset($_POST['submit-search'])){
        
        //getting search word that user typed in
        $search = mysqli_real_escape_string($conn, $_POST['search']);    //prevent sql injection by preventing use of special character
        //querying inside database
        $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%';";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        
        echo "There are ".$queryResult." results!";
        
        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "
                <a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='row'>
                <div class='leftcolumn'>
                <div class='card'>
                <h2>".$row['a_title']."</h2>
                <h5>".$row['a_date']."</h5>
                <div class='fakeimg' style='height:200px;'>Image</div>
                <p>".$row['a_author']."</p>
                <p>".$row['a_text']."</p>
                </div>
                </div>
                </div></>"; 
            }
        }else{
            echo "No-Results";
        }
    }
?> 
</div>
</div>
</div>