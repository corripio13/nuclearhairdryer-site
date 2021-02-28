<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $username     = htmlspecialchars($_POST['username']);
  $password     = htmlspecialchars($_POST['password']);
  $category     = htmlspecialchars($_POST['category']);
  $title        = htmlspecialchars($_POST['title']);
  $date         = date("Y-m-d");
  $content      = htmlspecialchars($_POST['content']);

  if ($password == '>5p0Ok!NuSM$yZj)f+Hz2Sg0Q'){

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '>5p0Ok!NuSM$yZj)f+Hz2Sg0Q';
         $dbname = 'blog';
                 //create connection
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
     //check connection
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }

         echo 'Connected successfully \n';


         $sql = "INSERT INTO entries(username, date, title, category, content)
         VALUES ('$username', '$date', '$title', $category, $content)";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


         mysqli_close($conn);
}

?>

