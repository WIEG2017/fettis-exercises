<?php
    $errors = array();
    if(isset($_GET["engine"]) && isset($_GET["query"]))
    {
        $query = urlencode($_GET["query"]);
        
        if(empty($_GET["query"]))
        {
            $errors[] = "Your query was empty, please try again!";
        }
        else
        {
            if(empty($_GET["engine"]))
            {
                $errors[] = "Some how you didn't choose either of the two search engines... Please don't manually edit the URL!";
            }
            elseif ($_GET["engine"] == "duckduck")
            {
                header("Location: https://duckduckgo.com/?q=" . $query);
            }
            elseif ($_GET["engine"] == "google")
            {
                header("Location: https://www.google.se/search?q=" . $query);
            }
            else
            {
                $errors[] = "Some how you didn't choose either of the two search engines... Please don't manually edit the URL!";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Find it for me!</title>
    </head>
    <?php
        if(!empty($errors))
        {
            echo '<div id="errors">';
            foreach($errors as $error)
            {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
        }
    ?>
    <body>
        <form method="GET" action="finditforme.php">
            <select name="engine">
                <option value="google">Google</option>
                <option value="duckduck">DuckDuckGo</option>
            </select>
            <input type="text" name="query" placeholder="Search Query">
            <input type="submit" value="Find it for me!">
        </form>
    </body>
</html>