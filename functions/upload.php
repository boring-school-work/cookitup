<?php

/**
 * Uploads an image to the server
 * @param Array $image
 * @return file_path in uploads folder
 */
function upload_image($image)
{
  $target_dir = "../assets/uploads/";
  $target_file = $target_dir . basename($image["name"]);
  move_uploaded_file($image["tmp_name"], $target_file);
  return "assets/uploads/" . basename($image["name"]);
}

// test if file was uploaded
/* if (move_uploaded_file($image["tmp_name"], $target_file)) { */
/*   echo "The file " . htmlspecialchars(basename($image["name"])) . " has been uploaded."; */
/* } else { */
/*   echo "Sorry, there was an error uploading your file."; */
/* } */
