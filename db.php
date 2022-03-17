<body>

  <!-- First establish DB connection-->
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "youngskilful";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //  echo "Connected successfully";

  ?>


<h2 class="w3-lobster">Calligraphy Articles</h2>
<?php
    $sql = "SELECT * FROM articles WHERE category='calligraphy';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_query($conn, $sql);
    if ($resultCheck){
      while ($row = mysqli_fetch_assoc($result)){
        Calligraphy( $row['image'], $row['title'], $row['description'], $row['link'], $row['category'], $row['id']);}
      }

      function Calligraphy($image, $title, $description, $link, $category, $id){
      $element="

             <div class=\"article\">
               <img class=\"cover\" src=$image style=\"width:100%\">
               <div class=\"container\">
                 <h4><b>$title</b></h4>
               </p>$description</p>
               <a href=$link class=\"w3-btn w3-teal\">Read Article</a>
               </div>
             </div>

      ";
      echo $element;
    }
    ?>
    <h2 class="w3-lobster">Pottery Articles</h2>

<?php
    $sql2 = "SELECT * FROM articles WHERE category='pottery';";
    $result = mysqli_query($conn, $sql2);
    $resultCheck = mysqli_query($conn, $sql2);
    if ($resultCheck){
      while ($row = mysqli_fetch_assoc($result)){
        pottery( $row['image'], $row['title'], $row['description'], $row['link'], $row['category'], $row['id']);}
      }

      function pottery($image, $title, $description, $link, $category, $id){
      $element="

      <div class=\"article\">
        <img class=\"cover\" src=$image style=\"width:100%\">
        <div class=\"container\">
          <h4><b>$title</b></h4>
        </p>$description</p>
        <a href=$link class=\"w3-btn w3-teal\">Read Article</a>
        </div>
      </div>
      ";
      echo $element;
    }
  ?>

  <h2 class="w3-lobster">Photography Articles</h2>

<?php
  $sql3 = "SELECT * FROM articles WHERE category='photography';";
  $result = mysqli_query($conn, $sql3);
  $resultCheck = mysqli_query($conn, $sql3);
  if ($resultCheck){
    while ($row = mysqli_fetch_assoc($result)){
      photography( $row['image'], $row['title'], $row['description'], $row['link'], $row['category'], $row['id']);}
    }

    function photography($image, $title, $description, $link, $category, $id){
    $element="

    <div class=\"article\">
      <img class=\"cover\" src=$image style=\"width:100%\">
      <div class=\"container\">
        <h4><b>$title</b></h4>
      </p>$description</p>
      <a href=$link class=\"w3-btn w3-teal\">Read Article</a>
      </div>
    </div>
    ";
    echo $element;
  }
?>
<h2 class="w3-lobster">Video-editing Articles</h2>

<?php
$sql4 = "SELECT * FROM articles WHERE category='video';";
$result = mysqli_query($conn, $sql4);
$resultCheck = mysqli_query($conn, $sql4);
if ($resultCheck){
  while ($row = mysqli_fetch_assoc($result)){
    video( $row['image'], $row['title'], $row['description'], $row['link'], $row['category'], $row['id']);}
  }

  function video($image, $title, $description, $link, $category, $id){
  $element="

  <div class=\"article\">
    <img class=\"cover\" src=$image style=\"width:100%\">
    <div class=\"container\">
      <h4><b>$title</b></h4>
    </p>$description</p>
    <a href=$link class=\"w3-btn w3-teal\">Read Article</a>
    </div>
  </div>
  ";
  echo $element;
}
?>
</body>
