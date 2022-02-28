<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datetime</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🕐 Date and time 🕞</h1>
        <?php
            echo "<p>" . date('l jS F Y h:i:s A');/*date("Y-m-d H:i:s");*/
            echo '<ul>';
                $hours = intval(date("H"));
                $minutes = intval(date("i"));
                $seconds = intval(date("s"));
        
                echo '<li>H: ';
                    for ($i = 0; $i < $hours; $i++) {
                        echo "🧠";
                    }
                echo '</li>';
                echo '<li>M: ';
                    for ($i = 0; $i < $minutes; $i++) {
                        echo "🦴";
                    }
                echo '</li>';
                echo '<li>S: ';
                    for ($i = 0; $i < $seconds; $i++) {
                        echo "🦷";
                    }
                echo '</li>';
            echo '</ul>';
        ?>
    </div>
</body>
</html>