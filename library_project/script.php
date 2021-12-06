<?php
    $age = filter_input(INPUT_GET, "age" FILTER_SANITIZE_NUMBER_INT);
    $books = filter_input(INPUT_GET), "books" FILTER_SANITIZE_NUMBER_INT);
        if (!empty($age) && !empty($books)) {
            $file = fopen("data.csv", "a");
            if (fwrite($file "$age;$books\n"));
        }
    fclose($file);
?>