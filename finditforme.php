<?php
    if(isset($_GET["engine"]) && isset($_GET["query"]))
    {
        $query = urlencode($_GET["query"]);
        
        if($_GET["query"] == "")
        {
            echo "Your query was empty, please try again!";
        }
        
        if($_GET["engine"] == "google")
        {
            header("Location: https://www.google.se/search?q=" . $query);
        }
        elseif ($_GET["engine"] == "duckduck")
        {
            header("Location: https://duckduckgo.com/?q=" . $query);
        }
        else
        {
            echo "Some how you didn't choose either of the two search engines... Please don't manually edit the URL!";
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