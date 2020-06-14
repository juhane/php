<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
       if(isset($_GET['id'])){
         echo $_GET['id'];
         //echo isset($_GET['id']);
       } else {
         echo "Welcome";
       }
      ?>

    </title>
  </head>
  <body>
    <h1><a href="index.php">PHP YL Project</a></h1>
    <ol>
    <?php
         $dir    = 'data';
         $files1 = scandir($dir);
         $files2 = scandir($dir, 1);

         //print_r($files1);
         //echo (count($files1));
         echo ("<hr>");
         //print_r($files2);
         //var_dump ($files1);
         $cntMax = count($files1);
         $cnt = 0;

              /* This is the correct way to loop over the directory. */
              while ($cntMax > $cnt) {
                if (( $files1[$cnt] != '.') && ( $files1[$cnt] != '..')){

                   echo "<li><a href=\"index.php?id=$files1[$cnt]\">$files1[$cnt]</a></li>";



                }
                $cnt = $cnt + 1;
              }
     ?>
   </ol>

   <h2>
           <?php
            if(isset($_GET['id'])){
              echo $_GET['id'];
              //echo isset($_GET['id']);
            } else {
              echo "Welcome";
            }
           ?>
    </h2>

     <?php
      if(isset($_GET['id'])){
        //echo file_get_contents ("data/".$_GET['id']);
        echo htmlspecialchars(file_get_contents ("data/".$_GET['id']));
      } else {
        echo "Hello PHP";
      }
     ?>

    <!-- Add new file on data directory ---------------------------->

    <!-------------------------------------------------------------->
    <!-------------------------------------------------------------->
    <!--
    <?php
     if(isset($_GET['id'])){
       echo $_GET['id'];
       echo isset($_GET['id']);
     } else {
       echo "Welcome";
     }
    ?>

    <?php

      $myfile = fopen("data/HTML", "r") or die("Unable to open file!");
      echo "filesize ==> ";
      echo (filesize("data/HTML"));
      //echo fread($myfile,filesize("data/HTML"));

      echo "------------------------------------------";
      echo fgets($myfile);
      fclose($myfile);
    ?>
    <hr>

    <?php
      echo ('file_get_contents');
      echo (file_get_contents ("data/html"));
     ?>

   -->
   <!--
     <?php
         if ($handle = opendir('data')) {
              echo "Directory handle: $handle\n";
              echo "Entries:\n";

              /* This is the correct way to loop over the directory. */
              while (false !== ($entry = readdir($handle))) {
                  echo "$entry\n";
              }

              /* This is the WRONG way to loop over the directory. */
              while ($entry = readdir($handle)) {
                  echo "$entry\n";
              }

              closedir($handle);
          }
     ?>

     <hr>

     <?php
          $dir    = 'data';
          $files1 = scandir($dir);
          $files2 = scandir($dir, 1);

          print_r($files1);
          print_r($files2);
      ?>
    -->
    <!--
    <h2>
    <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
        echo isset($_GET['id']);
      } else {
        echo "Welcome";
      }
     ?>
     <hr>
   </h2>
 -->

  </body>
</html>
