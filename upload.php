<?php

if (isset($_FILES['file']['name'])) {
    if (0 < $_FILES['file']['error']) {
        echo 'Error during file upload' . $_FILES['file']['error'];
    } else {
        if (file_exists('images/' . $_FILES['file']['name'])) {
            echo 'File already exists : images/' . $_FILES['file']['name'];
        } else {
            move_uploaded_file($_FILES['file']['tmp_name'], 'images/' . $_FILES['file']['name']);
            echo 'File successfully uploaded : images/' . $_FILES['file']['name'];
            session_start();
            $path="images/".$_FILES['file']['name'];
            $_SESSION["path"]=$path;
        }
    }
} else {
    echo "Please choose a file";
}
?>