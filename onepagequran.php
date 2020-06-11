<?php
    include("dtcnxion.php"); 
    include("functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>OnePageQuran</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
		    @font-face{
            	font-family:'arabic';
            	src:url('quran.ttf');
            }
            body{
                font-family: arabic;
                direction: rtl;
            }
		</style>
    </head>
    <body>
        <?php
        for($i = 1; $i <= 114; $i++){
            $sql = "SELECT * FROM quran_ar WHERE SuraID = $i";
            $result = mysqli_query($connection, $sql);
            $ayahcount = mysqli_num_rows($result)/2;
            echo "<h1>" . surahName($i) . "</h1>";
            $curcounter = 1;
            while($row = mysqli_fetch_assoc($result)){
                echo "<p>" . $row["AyahText"] . " (" . $row["VerseID"] . ")</p>";
                $curcounter++;
                if($curcounter > $ayahcount)
                    break;
            }
        }
        ?>
    </body>
</html>