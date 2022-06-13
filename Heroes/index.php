<?php include_once("app/_head.php") ?>
<body>
<?php
    // db conn
    require("app/_conn.php");
    
    // insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        // escapes special characters in a string
        $name = mysqli_real_escape_string($conn, $name);
            
        $weapon = stripslashes($_REQUEST['weapon']);
        $weapon = mysqli_real_escape_string($conn, $weapon );
            
        $studio = stripslashes($_REQUEST['studio_id']);
        $studio = mysqli_real_escape_string($conn, $studio );
            
        $query   = "INSERT into `charact` (name, weapon, studio_id)
                    VALUES ('$name', '$weapon', '$studio')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form-container'>
                    <div class='form-title'>
                        <h3>Hodnoty úspěšně vloženy!</h3><br/>
                    </div>
                    <p class='form-link'>Klikněte zde pro <br> <a href='index.php'>vložení novýh hodnot</a>.</p>
                </div>";
        } else {
            echo "<div class='form-container'>
                    <div class='form-title'>
                        <h3>Upsík... něco se pokazilo.</h3><br/>
                    </div>
                    <p class='form-link'>Klikněte zde pro <br> <a href='index.php'>vložení novýh hodnot</a>.</p>
                </div>";
        }
    } else {
?>
    <form class="form-container" action="" method="post">
        <div class="form-title">
            <h2>Vytvoření hrdniny</h2>
        </div>
        <input type="text" name="name" placeholder="Jméno" required />
        <input type="text" name="weapon" placeholder="Zbraň"><br>
        <input type="radio" name="studio_id" value="1">
        <label for="html">DC Comics</label><br>
        <input type="radio" name="studio_id" value="2">
        <label for="html">Marvel Studios</label><br>
        <input type="radio" name="studio_id" value="3">
        <label for="html">The Walt Disney Studios</label><br>
        <br><input type="submit" name="submit" value="Vytvořit">
    </form>
<?php
    }
?>
</body>
</html>