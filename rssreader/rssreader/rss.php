<?php

if (isset($_POST) && !empty($_POST['feeds'])) {
    $adress = $_POST['feeds'];
    header("location: {$adress}");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <form action="" method="post" name="form" id="form">
        <label for="feeds">Select an Url</label><br>
        <select name="feeds" id="feeds">
            <?php
            $url = "https://www.feedforall.com/sample.xml";
            $xml = simplexml_load_file($url) or die("Can't connect to url");

            foreach ($xml->channel->item->link as $url) {

            /*ADAUGAT */
                if (isset($xml)) {
                $site = $xml->channel->item->link;
                $sitelink = $xml->channel->link;
            }
                    echo "<option>" . $site.  "</option>";
                    echo "<option>" . $site . "</option>";
                    echo "<option>" . $site . "</option>";?>
                    

            <?php } ?>
        </select>
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>

</body>

</html>