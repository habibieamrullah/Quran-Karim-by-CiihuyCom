<?php
	include("dtcnxion.php"); 
	include("functions.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quran Karim by CiihuyCom</title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="Quran Karim is simple and flexible online Quran. You can modify this online Quran appearance and choose any theme you like.">
		<meta name="keywords" content="Online Quran, Online Quran Translation">
		<meta name="author" content="CiihuyCom">
		<link rel="stylesheet" type="text/css" href="quranflexi.css">
		<link rel="icon" href="favicon.png">
		<script src="quranflexi.js"></script>
		<script src="quranflexi.lang.js"></script>
	</head>
	<body id="thebody">
		<!-- PRELOADING -->
		<div id="preloading">
			<p align="center">Loading...</p>
		</div>
		<!-- CONTENTS -->
		<div id="thecontent">
			<!-- QURAN TEXT -->
			<div class="quran" id="quran">
				<?php
					if(isset($_GET["surah"]) && $_GET["surah"] != "" && isset($_GET["lang"]) && $_GET["lang"] != ""){
						$surahToGo = mysqli_real_escape_string($connection, $_GET["surah"]);
						$lang = mysqli_real_escape_string($connection, $_GET["lang"]);
						$quranTrans = "quran_" . $lang;
						$sql = mysqli_query($connection, "SELECT * FROM quran_ar WHERE SuraID = $surahToGo ORDER BY id");
						if(mysqli_num_rows($sql) > 0){
							echo "<div class='surahbar'>" . surahName($surahToGo) . " : <input id='versenavigator' type='text' style='width: 50px;' placeholder='123' > <span onclick='getnavigatedverse()'>>>></span></div>";
							while($result = mysqli_fetch_array($sql)){
								$currentVerse = $result["VerseID"];
								echo "<div class='separator'><p align='center' id='versenum" . $currentVerse ."'  class='versenum'><img src=\"prtz1.png\" style=\"vertical-align: middle\" /> " . $surahToGo . " : " . $currentVerse . " <img src=\"prtz2.png\" style=\"vertical-align: middle\" /></p>";
								echo "<p align='center' class='qurantext'>" .	$result["AyahText"] . "</p>";
								$sqlTrans = mysqli_query($connection, "SELECT * FROM $quranTrans WHERE SuraID = $surahToGo AND VerseID = $currentVerse");
								if(mysqli_num_rows($sqlTrans) > 0){
									while($resultTrans = mysqli_fetch_array($sqlTrans)){
										echo "<p align='center' class='translationtext'>" . $resultTrans["AyahText"] . "</p>";
									}
								}		
								echo "</div>";
							}
							//create next prev surah button
							$currentSurahId = (int)$surahToGo;
							if($currentSurahId == 1){
								$nextSurah = $currentSurahId + 1;
								?>
									<div class="nextbut">
										<a href="https://ciihuy.com/qurankarim/index.php?lang=<?php echo $lang ?>&surah=<?php echo $nextSurah ?>"><img src="next.png" width="45px"/></a>
									</div>
								<?php
							}else if($currentSurahId == 114){
								$prevSurah = $currentSurahId - 1;
								?>
									
									<div class="prevbut">
										<a href="https://ciihuy.com/qurankarim/index.php?lang=<?php echo $lang ?>&surah=<?php echo $prevSurah ?>"><img src="prev.png" width="45px" /></a>
									</div>
								<?php
							}else{
								$nextSurah = $currentSurahId + 1;
								$prevSurah = $currentSurahId - 1;
								?>
									<div class="nextbut">
										<a href="https://ciihuy.com/qurankarim/index.php?lang=<?php echo $lang ?>&surah=<?php echo $nextSurah ?>"><img src="next.png" width="45px" /></a>
									</div>
									<div class="prevbut">
										<a href="https://ciihuy.com/qurankarim/index.php?lang=<?php echo $lang ?>&surah=<?php echo $prevSurah ?>"><img src="prev.png" width="45px" /></a>
									</div>
								<?php
							}
							//echo "<div class='totop' onclick='scrollToTop();'>^</div>";
							?>
							<script>
								document.getElementById("versenavigator").addEventListener("keydown", function(e) {
									if (e.keyCode == 13) {
										var x = document.getElementById("versenavigator").value;
										scrollToVerse(x); 
									}
								}, false);
							</script>
							<?php
						}else{
							echo "<p>Serious problem occured.</p>";
						}
					}else if(isset($_GET["lang"]) && !isset($_GET["search"])){
						if($_GET["lang"] == "en"){
							?>
								<script>setLang2("en");</script>
								<h1>Quran Flexi - English</h1>
								<p>Quran Flexi is online Quran with several translations. Quran Flexi is simple, fast and flexible.</p>
								<h1>Surah List</h1>
							<?php
							showSurahDir("en");
						}else if($_GET["lang"] == "id"){
							?>
								<script>setLang2("id");</script>
								<h1>Quran Flexi - Bahasa Indonesia</h1>
								<p>Quran Flexi adalah aplikasi web Quran online dengan terjemahan dalam berbagai bahasa. Quran Flexi sederhana, cepat dan fleksibel.</p>
								<h1>Daftar Surah</h1>
							<?php
							showSurahDir("id");
						}else if($_GET["lang"] == "ja"){
							?>
								<script>setLang2("ja");</script>
								<h1>Quran Flexi - 日本語</h1>
								<p>Quran Flexi はオンラインでいくつかの翻訳を行っています。 Quran Flexi は、高速でシンプルでフレキシブルです。</p>
								<h1>章を選択</h1>
							<?php
							showSurahDir("ja");
						}else if($_GET["lang"] == "fr"){
							?>
								<script>setLang2("fr");</script>
								<h1>Quran Flexi - Français</h1>
								<p>Quran Flexi est en ligne avec certaines traductions. Quran Flexi est simple, rapide et flexible.</p>
								<h1>Chapitres</h1>
							<?php
							showSurahDir("fr");
						}else{
							echo "<p>Serrious problem occured.</p>";
						}
					}else if(isset($_GET["wc"])){
						echo "<h1>What's changed</h1>";
						echo "<p>26.04.2017 - We added French translation.</p>";
						echo "<p>22.04.2017 - A favicon has been generated.</p>";
						echo "<p>22.04.2017 - Basic search functionality in Quran texts and its localized translation.</p>";
						echo "<p>19.04.2017 - Next and previous surah quick navigation button.</p>";
						echo "<p>18.04.2017 - We added Japanese translation.</p>";
						echo "<p>06.04.2017 - Better floating box of surah and verse navigator.</p>";
						echo "<p>01.04.2017 - We added English and Bahasa Indonesia translations.</p>";
						echo "<p>20.03.2017 - Quran Flexi has been launched.</p>";
					}else if(isset($_GET["cr"])){
						echo "<h1>Credit</h1>";
						echo "<p>Quran Karim is programmed by CiihuyCom. Quran and translation database provided by <a href='https://qurandatabase.org/'>https://qurandatabase.org/</a></p>";
					}else if(isset($_GET["donate"])){
						?>
							<p align="center">Please consider to support this project by your donation.</p>
							<p align="center"><b>PayPal:</b></p>
							<div style="text-align:center">
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="MVPM77FK23SQ8">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
							</div>
							<p align="center"><b>WebMoney:</b> Z611000691602</p>
							<p align="center">For wire transfer:</p>
							<p align="center"><b>Bank Central Asia</b><br />Swift Code: CENAIDJA<br />Acc Number: 2582113956<br />Account Holder: Moch Habibie Amrullah</p>
						<?php
					}else if (isset($_GET["search"])){
						?>
						<h1 id="lang_searchresult">Search Result:</h1>
						<script>localizeSearchPage();</script>
						<?php
						if($_GET["search"] != "" && $_GET["lang"] != ""){
							$word = $_GET["search"];
							$lang = $_GET["lang"];
							$word = mysqli_real_escape_string($connection, $word);
							$lang = mysqli_real_escape_string($connection, $lang);
							$table = "quran_ar";
							if($lang == "ar") $table = "quran_ar";
							else if($lang != "ar") $table = "quran_" . $lang;
							$sql = mysqli_query($connection, "SELECT * FROM $table WHERE AyahText LIKE '%$word%' ");
							if(mysqli_num_rows($sql) > 0){
								while($result = mysqli_fetch_array($sql)){
									$surah = $result["SuraID"];
									$verse = $result["VerseID"];
									echo "<div class='separator'><p align='center' class='versenum'>---( " . surahName($surah) . " : " . $verse . " )---</p>";
									$sqlArabic = mysqli_query($connection, "SELECT * FROM quran_ar WHERE SuraID = $surah AND VerseID = $verse");
									if(mysqli_num_rows($sqlArabic) > 0){
										while($resultAr = mysqli_fetch_array($sqlArabic)){
											echo "<p align='center' class='qurantext'>" .	$resultAr["AyahText"] . "</p>";
										}
									}
									echo "<p align='center' class='translationtext'>" . $result["AyahText"] . "</p>";
									echo "</div>";
								}
							}else{
								echo "<p>We didn't find anything.</p>";
							}
						}else{
							echo "<p>We didn't find anything.</p>";
						}
					}else{
						?>
							<p align="center" class="qurantext" onclick="goToSurahList()"><img src="icon.png" width="150px" /></p>
							<div style="text-align: center;">
								<div style="margin: 10px;">
									<input id="searchinput" class="searchInput" type="text" autofocus> 
								</div>
								<div style="margin: 10px;">
									<select class="searchSelect" id="searchin" onchange="setSearchParam();">
										<option value="" id="lang_searchin">Search in...</option>
										<option value="quran" id="lang_quran">Quran</option>
										<option value="translation" id="lang_translation">Translation</option>
									</select>
								</div>
								<p style="font-size: 12px" id="lang_diacriticsnote">*Don't forget to include diacritics if you want to search for Arabic word in Arabic Quran text.</p>
								<div style="margin: 10px;">
									<button onclick="search();"><span id="lang_search">Search</span></button>
								</div>
								<script>
									var myAction = "https://ciihuy.com/qurankarim/index.php?search";
									function setSearchParam(){
										var selectedSearchIn = document.getElementById("searchin").options[document.getElementById("searchin").selectedIndex].value;
										var myWord = document.getElementById("searchinput").value;
										var myLang = localStorage.getItem("lang");
										if(selectedSearchIn == "quran") myAction = "https://ciihuy.com/qurankarim/index.php?search=" + myWord + "&lang=ar";
										else if(selectedSearchIn == "translation") myAction = "https://ciihuy.com/qurankarim/index.php?search=" + myWord + "&lang=" + myLang;
										else myAction = "https://ciihuy.com/qurankarim/index.php?searchasasaas";
									}
									function search(){
										location.href = myAction;
									}
								</script>
								<script>localizeHomePage();</script>
							</div>
						<?php
					}
				?>
				<div class="lowerlinks">
					<p>
						<span id="lang_qurantranslation">Quran translation</span>: 
						<a href="https://ciihuy.com/qurankarim/index.php?lang=en">English</a> | 
						<a href="https://ciihuy.com/qurankarim/index.php?lang=id">Bahasa Indonesia</a> | 
						<a href="https://ciihuy.com/qurankarim/index.php?lang=ja">日本語</a> | 
						<a href="https://ciihuy.com/qurankarim/index.php?lang=fr">Français</a>
					</p>
					<p>
						<span id="lang_quicklinks">Quick links</span>: <a href="https://ciihuy.com/qurankarim/index.php?wc">What's changed?</a> | <a href="https://ciihuy.com/qurankarim/index.php?cr">Credit</a>
					</p>
				</div>
			</div>
			<!-- NAVIGATION AND SETTINGS -->
			<div id="settings">
				<h2 id="lang_navigation" align="center">Navigation</h2>
				<p id="lang_surah">Surah:</p>
				<select id="surahOptions" onchange="navigateGo()">
					<option value="" id="lang_surah2">Select surah...</option>
					<?php
						for($i = 1; $i < 115; $i++){
							echo "<option value='$i'>";
							echo $i . " - " . surahName($i);
							echo "</option>";
						}
					?>
				</select>
				<h2 id="lang_settings" align="center">Settings</h2>
				<p id="lang_language">Language:</p>
				<select id="languageOptions" onchange="setLang();">
					<option value="en" id="lang_language2">Select language...</option>
					<option value="en">English</option>
					<option value="id">Bahasa Indonesia</option>
					<option value="ja">日本語</option>
					<option value="fr">Français</option>
				</select>
				<p id="lang_artextsize">Arabic Text Size:</p>
				<select id="qts" onchange="setFontSize(1,0);">
					<option value="12" id="lang_artextsize2">Select font size...</option>
					<option value="12">12</option>
					<option value="14">14</option>
					<option value="16">16</option>
					<option value="18">18</option>
					<option value="20">20</option>
					<option value="22">22</option>
					<option value="24">24</option>
					<option value="26">26</option>
					<option value="28">28</option>
					<option value="30">30</option>
					<option value="32">32</option>
					<option value="34">34</option>
					<option value="36">36</option>
					<option value="38">38</option>
					<option value="40">40</option>
				</select>
				<p id="lang_transtextsize">Translation Text Size:</p>
				<select id="tts" onchange="setFontSize(2,0);">
					<option value="12" id="lang_transtextsize2">Select font size...</option>
					<option value="12">12</option>
					<option value="14">14</option>
					<option value="16">16</option>
					<option value="18">18</option>
					<option value="20">20</option>
					<option value="22">22</option>
					<option value="24">24</option>
					<option value="26">26</option>
					<option value="28">28</option>
					<option value="30">30</option>
					<option value="32">32</option>
					<option value="34">34</option>
					<option value="36">36</option>
					<option value="38">38</option>
					<option value="40">40</option>
				</select>
				<p id="lang_theme">Theme:</p>
				<select id="themeOptions" onchange="setTheme(1, '');">
					<option value="default" id="lang_theme2">Select theme...</option>
					<option value="default">Default</option>
					<option value="bright">Bright</option>
					<option value="dark">Dark</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
				</select>
				<script>showDonateBtn(1);</script>
			</div>
			<!-- APP BAR -->
			<div id="appbar">
				<p><span class="qf"><a href="https://ciihuy.com/qurankarim/">Quran Karim</a></span><span class="zk">by CiihuyCom</span></p>
				<div class="menubutton" onclick="togglenav()"><img src="menubutton.png" width="40px" /></div>
			</div>
		</div>
		<div class="footer">
		    <div id="applulad"></div>
		    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script>
            	setTimeout(function(){
            		$.ajax({
            			url: "https://applulbayt.ciihuy.com/applulbayt/applulad.php?regular=ciihuy",
            			dataType: "script"
            		});
            	}, 500);
            </script>
			<p>&copy; 2019 - Proudly developed by <a href="https://ciihuy.com/">CiihuyCom</a></p>
			<script>showDonateBtn(1);</script>
		</div>
		<script>
			localize();
			applyStyle();
		</script>
	</body>
</html>