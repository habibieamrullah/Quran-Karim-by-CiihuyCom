<?php
	include("dtcnxion.php"); 
	include("functions.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>QuranX by Zofia Kreasi</title><link rel="stylesheet" type="text/css" href="qf.css">
	</head>
	<body>
		<?php
			if(isset($_GET["lang"]) && isset($_GET["surahnum"])){
				//single surah page
				echo "<div class=\"surahbar\">" . surahName($_GET["surahnum"]) . "</div>";
				$lang = mysqli_real_escape_string($connection, $_GET["lang"]);
				$surahnum = mysqli_real_escape_string($connection, $_GET["surahnum"]);
				$quranTrans = "quran_" . $lang;
				$sql = mysqli_query($connection, "SELECT * FROM quran_ar WHERE SuraID = " . $surahnum . " ORDER BY id");
				if(mysqli_num_rows($sql) > 0){
					while($result = mysqli_fetch_array($sql)){
						$currentVerse = $result["VerseID"];
						echo "<div class='separator'><p align='center' id='versenum" . $currentVerse . "'  class='versenum'><img src=\"prtz1.png\" style=\"vertical-align: middle\" /> " . $surahnum . " : " . $currentVerse . " <img src=\"prtz2.png\" style=\"vertical-align: middle\" /></p>";
						echo "<p align='center' class='qurantext'>" .	$result["AyahText"] . "</p>";
						$sqlTrans = mysqli_query($connection, "SELECT * FROM $quranTrans WHERE SuraID = $surahnum AND VerseID = $currentVerse");
						if(mysqli_num_rows($sqlTrans) > 0){
							while($resultTrans = mysqli_fetch_array($sqlTrans)){
								echo "<p align='center' class='translationtext'>" . $resultTrans["AyahText"] . "</p>";
							}
						}
						echo "</div>";
					}
				}
				echo "<script src=\"qf.js\"></script>";
			}else if(isset($_GET["lang"]) && !isset($_GET["surah"])){
				//index page
				$lang = $_GET["lang"];
				echo "<div class=\"surahbar\">QuranX</div>";
				showSurahDirOFFLINE("$lang");
			}else{
				echo "<p>Welcome!</p>";
			}
		?>
	</body>
</html>