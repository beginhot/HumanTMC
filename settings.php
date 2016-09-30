<?Php

  $root_file  = "top_slide_index.html";
  if(file_exists($root_file)) {
    unlink($root_file);
  }

      $content="Hello World ...<a href='index.html'>Go to Home</a>";
      $myfile = fopen($root_file, "w") or die("Unable to open file!");
      fwrite($myfile, $content);
      fclose($myfile);

      header("refresh: 2; url=http://localhost/www/HumanTMC/".$root_file);
?>
