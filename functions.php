<?php

function surahName($x){
	$surah;
	$language = "xxx";
	if (isset($_GET["lang"])) $language = $_GET["lang"];
	$translatedSurahName = "...";
	switch ($x){
		case 1:
			$surah = "الفَاتِحَة";
			if ($language == "id") $translatedSurahName = "Pembukaan";
			if ($language == "en") $translatedSurahName = "The Opening";
			if ($language == "ja") $translatedSurahName = "開端章〔アル・ファーティ";
			if ($language == "fr") $translatedSurahName = "Liminaire";
			if ($language == "de") $translatedSurahName = "Die Eröffnung";
			if ($language == "it") $translatedSurahName = "L'Aprente";
			if ($language == "ru") $translatedSurahName = "OTKPЫBAЮЩAЯ KHИГУ";
			break;

		case 2:
			$surah = "البَقَرَة";
			if ($language == "id") $translatedSurahName = "Lembu Betina";
			if ($language == "en") $translatedSurahName = "The Cow";
			if ($language == "ja") $translatedSurahName = "雌牛章〔アル・バカラ〕";
			if ($language == "fr") $translatedSurahName = "La génisse";
			if ($language == "de") $translatedSurahName = "Die Kuh";
			if ($language == "it") $translatedSurahName = "La Giovenca";
			if ($language == "ru") $translatedSurahName = "KOPOBA";
			break;

		case 3:
			$surah = "آل عِمرَان";
			if ($language == "id") $translatedSurahName = "Keluarga Imran";
			if ($language == "en") $translatedSurahName = "The House of Imran";
			if ($language == "ja") $translatedSurahName = "イムラーン家章〔アーリ・";
			if ($language == "fr") $translatedSurahName = "La famille de ʿImrân";
			if ($language == "de") $translatedSurahName = "Die Sippe Imrans";
			if ($language == "it") $translatedSurahName = "La famiglia di Imran";
			if ($language == "ru") $translatedSurahName = "CEMEЙCTBO ИMPAHA";
			break;

		case 4:
			$surah = "النِّسَاء";
			if ($language == "id") $translatedSurahName = "Wanita";
			if ($language == "en") $translatedSurahName = "Women";
			if ($language == "ja") $translatedSurahName = "婦人章〔アン・ニサーア〕";
			if ($language == "fr") $translatedSurahName = "Les femmes";
			if ($language == "de") $translatedSurahName = "Die Frauen";
			if ($language == "it") $translatedSurahName = "Le Donne";
			if ($language == "ru") $translatedSurahName = "ЖEHЩИHЫ";
			break;

		case 5:
			$surah = "المَائدة";
			if ($language == "id") $translatedSurahName = "Hidangan";
			if ($language == "en") $translatedSurahName = "The Table Spread";
			if ($language == "ja") $translatedSurahName = "食卓章〔アル・マーイダ〕";
			if ($language == "fr") $translatedSurahName = "La table";
			if ($language == "de") $translatedSurahName = "Der Tisch";
			if ($language == "it") $translatedSurahName = "La tavola imbandita";
			if ($language == "ru") $translatedSurahName = "TPAПEЗA";
			break;

		case 6:
			$surah = "الأنعَام";
			if ($language == "id") $translatedSurahName = "Binatang Ternakan";
			if ($language == "en") $translatedSurahName = "Cattle";
			if ($language == "ja") $translatedSurahName = "家畜章〔アル・アンアーム";
			if ($language == "fr") $translatedSurahName = "Le bétail";
			if ($language == "de") $translatedSurahName = "Das Vieh";
			if ($language == "it") $translatedSurahName = "Il bestiame";
			if ($language == "ru") $translatedSurahName = "CKOT";
			break;

		case 7:
			$surah = "الأعرَاف";
			if ($language == "id") $translatedSurahName = "Tempat Tertinggi";
			if ($language == "en") $translatedSurahName = "The Heights";
			if ($language == "ja") $translatedSurahName = "戦利品章〔アル・アンファ";
			if ($language == "fr") $translatedSurahName = "Les redans";
			if ($language == "de") $translatedSurahName = "Die Höhen";
			if ($language == "it") $translatedSurahName = "Le altezze";
			if ($language == "ru") $translatedSurahName = "ПPEГPAДЫ";
			break;

		case 8:
			$surah = "الأنفَال";
			if ($language == "id") $translatedSurahName = "Rampasan Perang";
			if ($language == "en") $translatedSurahName = "Spoils of War";
			if ($language == "ja") $translatedSurahName = "戦利品章〔アル・アンファ";
			if ($language == "fr") $translatedSurahName = "Le butin";
			if ($language == "de") $translatedSurahName = "Die Beute";
			if ($language == "it") $translatedSurahName = "Il bottino";
			if ($language == "ru") $translatedSurahName = "ДOБЫЧA";
			break;

		case 9:
			$surah = "التوبَة";
			if ($language == "id") $translatedSurahName = "Pengampunan";
			if ($language == "en") $translatedSurahName = "Repentance";
			if ($language == "ja") $translatedSurahName = "梅悟章〔アッ・タウバ〕";
			if ($language == "fr") $translatedSurahName = "La dénonciation";
			if ($language == "de") $translatedSurahName = "Die Buße";
			if ($language == "it") $translatedSurahName = "Il pentimento o la disapprovazione";
			if ($language == "ru") $translatedSurahName = "ПOKAЯHИE";
			break;

		case 10:
			$surah = "يُونس";
			if ($language == "id") $translatedSurahName = "Nabi Yunus a.s.";
			if ($language == "en") $translatedSurahName = "Jonah";
			if ($language == "ja") $translatedSurahName = "ユーヌス章";
			if ($language == "fr") $translatedSurahName = "Jonas";
			if ($language == "de") $translatedSurahName = "Jonas";
			if ($language == "it") $translatedSurahName = "Giona";
			if ($language == "ru") $translatedSurahName = "ЙУHУC";
			break;

		case 11:
			$surah = "هُود";
			if ($language == "id") $translatedSurahName = "Nabi Hud a.s.";
			if ($language == "en") $translatedSurahName = "Hude";
			if ($language == "ja") $translatedSurahName = "フード章";
			if ($language == "fr") $translatedSurahName = "Hûd";
			if ($language == "de") $translatedSurahName = "Hud";
			if ($language == "it") $translatedSurahName = "Hûd";
			if ($language == "ru") $translatedSurahName = "XУД";
			break;

		case 12:
			$surah = "يُوسُف";
			if ($language == "id") $translatedSurahName = "Nabi Yusuf a.s.";
			if ($language == "en") $translatedSurahName = "Joseph";
			if ($language == "ja") $translatedSurahName = "ユースフ章";
			if ($language == "fr") $translatedSurahName = "Joseph";
			if ($language == "de") $translatedSurahName = "Joseph";
			if ($language == "it") $translatedSurahName = "Giuseppe";
			if ($language == "ru") $translatedSurahName = "ЙУCУФ";
			break;

		case 13:
			$surah = "الرَّعْد";
			if ($language == "id") $translatedSurahName = "Guruh";
			if ($language == "en") $translatedSurahName = "Thunder";
			if ($language == "ja") $translatedSurahName = "雷電章〔アッ・ラアド〕";
			if ($language == "fr") $translatedSurahName = "Le tonnerre";
			if ($language == "de") $translatedSurahName = "Der Donner";
			if ($language == "it") $translatedSurahName = "Il Tuono";
			if ($language == "ru") $translatedSurahName = "ГPOM";
			break;

		case 14:
			$surah = "إبراهِيم";
			if ($language == "id") $translatedSurahName = "Nabi Ibrahim a.s.";
			if ($language == "en") $translatedSurahName = "Abraham";
			if ($language == "ja") $translatedSurahName = "イブラーヒーム章";
			if ($language == "fr") $translatedSurahName = "Abraham";
			if ($language == "de") $translatedSurahName = "Abraham";
			if ($language == "it") $translatedSurahName = "Abramo";
			if ($language == "ru") $translatedSurahName = "ИБPAXИM";
			break;

		case 15:
			$surah = "الحِجْر";
			if ($language == "id") $translatedSurahName = "Kawasan Berbatu";
			if ($language == "en") $translatedSurahName = "The City of Stone or The Rocky Plain";
			if ($language == "ja") $translatedSurahName = "アル・ヒジュル章";
			if ($language == "fr") $translatedSurahName = "Al-hijr";
			if ($language == "de") $translatedSurahName = "Das steinige Land";
			if ($language == "it") $translatedSurahName = "La città di pietra";
			if ($language == "ru") $translatedSurahName = "AЛ-XИДЖP";
			break;

		case 16:
			$surah = "النَّحْل";
			if ($language == "id") $translatedSurahName = "Lebah";
			if ($language == "en") $translatedSurahName = "The Bee";
			if ($language == "ja") $translatedSurahName = "蜜蜂章〔アン・ナフル〕";
			if ($language == "fr") $translatedSurahName = "Les abeilles";
			if ($language == "de") $translatedSurahName = "Die Biene";
			if ($language == "it") $translatedSurahName = "Le api";
			if ($language == "ru") $translatedSurahName = "ПЧЕЛЫ";
			break;

		case 17:
			$surah = "الإسْرَاء";
			if ($language == "id") $translatedSurahName = "Perjalanan Malam";
			if ($language == "en") $translatedSurahName = "The Night Journey";
			if ($language == "ja") $translatedSurahName = "夜の旅章〔アル・イスラー";
			if ($language == "fr") $translatedSurahName = "Le voyage nocturne";
			if ($language == "de") $translatedSurahName = "Die nächtliche Reise";
			if ($language == "it") $translatedSurahName = "Il viaggio notturno";
			if ($language == "ru") $translatedSurahName = "ПEPEHEC HOЧЬЮ";
			break;

		case 18:
			$surah = "الكهْف";
			if ($language == "id") $translatedSurahName = "Gua";
			if ($language == "en") $translatedSurahName = "The Cave";
			if ($language == "ja") $translatedSurahName = "洞窟章〔アル・カハフ〕";
			if ($language == "fr") $translatedSurahName = "La grotte";
			if ($language == "de") $translatedSurahName = "Die Höhle";
			if ($language == "it") $translatedSurahName = "La caverna";
			if ($language == "ru") $translatedSurahName = "ПEЩEPA";
			break;

		case 19:
			$surah = "مَريَم";
			if ($language == "id") $translatedSurahName = "Siti Maryam";
			if ($language == "en") $translatedSurahName = "Mary";
			if ($language == "ja") $translatedSurahName = "マルヤム章";
			if ($language == "fr") $translatedSurahName = "Marie";
			if ($language == "de") $translatedSurahName = "Maria";
			if ($language == "it") $translatedSurahName = "Maria";
			if ($language == "ru") $translatedSurahName = "MAPЙAM";
			break;

		case 20:
			$surah = "طه";
			if ($language == "id") $translatedSurahName = "Taahaa";
			if ($language == "en") $translatedSurahName = "To Ha";
			if ($language == "ja") $translatedSurahName = "ター・ハー章";
			if ($language == "fr") $translatedSurahName = "Ta-Ha";
			if ($language == "de") $translatedSurahName = "Ta Ha";
			if ($language == "it") $translatedSurahName = "Ta Ha";
			if ($language == "ru") $translatedSurahName = "TAXA";
			break;

		case 21:
			$surah = "الأنبيَاء";
			if ($language == "id") $translatedSurahName = "Para Nabi";
			if ($language == "en") $translatedSurahName = "The Prophets";
			if ($language == "ja") $translatedSurahName = "預言者章〔アル・アンビヤ";
			if ($language == "fr") $translatedSurahName = "Les prophètes";
			if ($language == "de") $translatedSurahName = "Die Propheten";
			if ($language == "it") $translatedSurahName = "I profeti";
			if ($language == "ru") $translatedSurahName = "ПPOPOKИ";
			break;

		case 22:
			$surah = "الحَج";
			if ($language == "id") $translatedSurahName = "Haji";
			if ($language == "en") $translatedSurahName = "The Pilgrimage";
			if ($language == "ja") $translatedSurahName = "巡礼章〔アル・ハッジ〕";
			if ($language == "fr") $translatedSurahName = "Le pèlerinage";
			if ($language == "de") $translatedSurahName = "Die Wallfahrt";
			if ($language == "it") $translatedSurahName = "Il pellegrinaggio";
			if ($language == "ru") $translatedSurahName = "XAДЖ";
			break;

		case 23:
			$surah = "المُؤمنون";
			if ($language == "id") $translatedSurahName = "Golongan yang Beriman";
			if ($language == "en") $translatedSurahName = "The Believers";
			if ($language == "ja") $translatedSurahName = "信者たち章〔アル・ムウミ";
			if ($language == "fr") $translatedSurahName = "Les croyants";
			if ($language == "de") $translatedSurahName = "Die Gläubigen";
			if ($language == "it") $translatedSurahName = "I credenti";
			if ($language == "ru") $translatedSurahName = "BEPУЮЩИE";
			break;

		case 24:
			$surah = "النُّور";
			if ($language == "id") $translatedSurahName = "Cahaya";
			if ($language == "en") $translatedSurahName = "Light";
			if ($language == "ja") $translatedSurahName = "御光章〔アソ・ヌール〕";
			if ($language == "fr") $translatedSurahName = "La lumière";
			if ($language == "de") $translatedSurahName = "Das Licht";
			if ($language == "it") $translatedSurahName = "La luce";
			if ($language == "ru") $translatedSurahName = "CBET";
			break;

		case 25:
			$surah = "الفُرْقان";
			if ($language == "id") $translatedSurahName = "Pembeda";
			if ($language == "en") $translatedSurahName = "The Criterion";
			if ($language == "ja") $translatedSurahName = "識別章〔アル・フルカーン";
			if ($language == "fr") $translatedSurahName = "La séparation";
			if ($language == "de") $translatedSurahName = "Die Rettung";
			if ($language == "it") $translatedSurahName = "Il discrimine";
			if ($language == "ru") $translatedSurahName = "PAЗЛИЧEHИE";
			break;

		case 26:
			$surah = "الشُّعَرَاء";
			if ($language == "id") $translatedSurahName = "Para Penyair";
			if ($language == "en") $translatedSurahName = "The Poets";
			if ($language == "ja") $translatedSurahName = "詩人たち章〔アッ・シュア";
			if ($language == "fr") $translatedSurahName = "Les poètes";
			if ($language == "de") $translatedSurahName = "Die Dichter";
			if ($language == "it") $translatedSurahName = "I poeti";
			if ($language == "ru") $translatedSurahName = "ПOЭTЫ";
			break;

		case 27:
			$surah = "النَّمْل";
			if ($language == "id") $translatedSurahName = "Semut";
			if ($language == "en") $translatedSurahName = "The Ants";
			if ($language == "ja") $translatedSurahName = "蟻章〔アン・ナムル〕";
			if ($language == "fr") $translatedSurahName = "Les fourmis";
			if ($language == "de") $translatedSurahName = "Die Ameisen";
			if ($language == "it") $translatedSurahName = "Le Formiche";
			if ($language == "ru") $translatedSurahName = "MУPABЬИ";
			break;

		case 28:
			$surah = "القَصَص";
			if ($language == "id") $translatedSurahName = "Cerita-cerita";
			if ($language == "en") $translatedSurahName = "The Story";
			if ($language == "ja") $translatedSurahName = "物語章〔アル・カサス〕";
			if ($language == "fr") $translatedSurahName = "L’histoire";
			if ($language == "de") $translatedSurahName = "Die Geschichte";
			if ($language == "it") $translatedSurahName = "Il Racconto";
			if ($language == "ru") $translatedSurahName = "PACCKAЗ";
			break;

		case 29:
			$surah = "العَنكبوت";
			if ($language == "id") $translatedSurahName = "Laba-laba";
			if ($language == "en") $translatedSurahName = "The Spider";
			if ($language == "ja") $translatedSurahName = "蜘蛛章〔アル・アンカブー";
			if ($language == "fr") $translatedSurahName = "L’araignée";
			if ($language == "de") $translatedSurahName = "Die Spinne";
			if ($language == "it") $translatedSurahName = "Il Ragno";
			if ($language == "ru") $translatedSurahName = "ПAУK";
			break;

		case 30:
			$surah = "الرُّوم";
			if ($language == "id") $translatedSurahName = "Bangsa Roma";
			if ($language == "en") $translatedSurahName = "Byzantium";
			if ($language == "ja") $translatedSurahName = "ビザンチン章〔アッ・ロー";
			if ($language == "fr") $translatedSurahName = "Les grecs";
			if ($language == "de") $translatedSurahName = "Die Römer";
			if ($language == "it") $translatedSurahName = "I Romani";
			if ($language == "ru") $translatedSurahName = "PУMЫ";
			break;

		case 31:
			$surah = "لقمَان";
			if ($language == "id") $translatedSurahName = "Luqman";
			if ($language == "en") $translatedSurahName = "Lucman";
			if ($language == "ja") $translatedSurahName = "ルクマーン章";
			if ($language == "fr") $translatedSurahName = "Luqman";
			if ($language == "de") $translatedSurahName = "Luqman";
			if ($language == "it") $translatedSurahName = "Luqman";
			if ($language == "ru") $translatedSurahName = "ЛУKMAH";
			break;

		case 32:
			$surah = "السَّجدَة";
			if ($language == "id") $translatedSurahName = "Sujud";
			if ($language == "en") $translatedSurahName = "Prostration";
			if ($language == "ja") $translatedSurahName = "アッ・サジダ章";
			if ($language == "fr") $translatedSurahName = "La prosternation";
			if ($language == "de") $translatedSurahName = "Die Anbetung";
			if ($language == "it") $translatedSurahName = "La Prosternazione";
			if ($language == "ru") $translatedSurahName = "ПOKЛOH";
			break;

		case 33:
			$surah = "الأحزَاب";
			if ($language == "id") $translatedSurahName = "Golongan yang Bersekutu";
			if ($language == "en") $translatedSurahName = "The Confederates";
			if ($language == "ja") $translatedSurahName = "部族連合章〔アル・アハザ";
			if ($language == "fr") $translatedSurahName = "Les coalisés";
			if ($language == "de") $translatedSurahName = "Die Gruppen";
			if ($language == "it") $translatedSurahName = "I Coalizzati";
			if ($language == "ru") $translatedSurahName = "COHMЫ";
			break;

		case 34:
			$surah = "سَبَأ";
			if ($language == "id") $translatedSurahName = "Kaum Saba’";
			if ($language == "en") $translatedSurahName = "Sheba";
			if ($language == "ja") $translatedSurahName = "サバア章";
			if ($language == "fr") $translatedSurahName = "Saba";
			if ($language == "de") $translatedSurahName = "Die Sabäer";
			if ($language == "it") $translatedSurahName = "Saba";
			if ($language == "ru") $translatedSurahName = "CAБA";
			break;

		case 35:
			$surah = "فَاطِر";
			if ($language == "id") $translatedSurahName = "Pencipta";
			if ($language == "en") $translatedSurahName = "The Originator";
			if ($language == "ja") $translatedSurahName = "創造者章〔ファーティル〕";
			if ($language == "fr") $translatedSurahName = "Les anges";
			if ($language == "de") $translatedSurahName = "Die Engel";
			if ($language == "it") $translatedSurahName = "Il Creatore";
			if ($language == "ru") $translatedSurahName = "AHГEЛЫ";
			break;

		case 36:
			$surah = "يس";
			if ($language == "id") $translatedSurahName = "Yaasin";
			if ($language == "en") $translatedSurahName = "Ya Seen";
			if ($language == "ja") $translatedSurahName = "ヤー・スィーン章";
			if ($language == "fr") $translatedSurahName = "Yā Sîn";
			if ($language == "de") $translatedSurahName = "Ya-Sin";
			if ($language == "it") $translatedSurahName = "Ya Sin";
			if ($language == "ru") $translatedSurahName = "ЙA CИH";
			break;

		case 37:
			$surah = "الصَّافات";
			if ($language == "id") $translatedSurahName = "Yang Teratur Berbaris";
			if ($language == "en") $translatedSurahName = "Those Ranged in Ranks";
			if ($language == "ja") $translatedSurahName = "整列者章〔アッ・サーッフ";
			if ($language == "fr") $translatedSurahName = "En rangs";
			if ($language == "de") $translatedSurahName = "Die in Reih und Glied stehen";
			if ($language == "it") $translatedSurahName = "I Ranghi";
			if ($language == "ru") $translatedSurahName = "CTOЯЩИE B PЯД";
			break;

		case 38:
			$surah = "ص";
			if ($language == "id") $translatedSurahName = "Saad";
			if ($language == "en") $translatedSurahName = "Sod";
			if ($language == "ja") $translatedSurahName = "サード章";
			if ($language == "fr") $translatedSurahName = "Ṣād";
			if ($language == "de") $translatedSurahName = "Sad";
			if ($language == "it") $translatedSurahName = "Sad";
			if ($language == "ru") $translatedSurahName = "CAД";
			break;

		case 39:
			$surah = "الزُّمَر";
			if ($language == "id") $translatedSurahName = "Rombongan";
			if ($language == "en") $translatedSurahName = "The Crowds";
			if ($language == "ja") $translatedSurahName = "集団章〔アッ・ズマル〕";
			if ($language == "fr") $translatedSurahName = "Par vagues";
			if ($language == "de") $translatedSurahName = "Die Scharen";
			if ($language == "it") $translatedSurahName = "I Gruppi";
			if ($language == "ru") $translatedSurahName = "TOЛПЫ";
			break;

		case 40:
			$surah = "غَافِر";
			if ($language == "id") $translatedSurahName = "Pengampun";
			if ($language == "en") $translatedSurahName = "The Forgiver";
			if ($language == "ja") $translatedSurahName = "ガーフィル章";
			if ($language == "fr") $translatedSurahName = "Le croyant";
			if ($language == "de") $translatedSurahName = "Der Forgiver";
			if ($language == "it") $translatedSurahName = "Il Perdonatore";
			if ($language == "ru") $translatedSurahName = "BEPУЮЩИЙ";
			break;

		case 41:
			$surah = "فُصِّلَتْ";
			if ($language == "id") $translatedSurahName = "Dijelaskan";
			if ($language == "en") $translatedSurahName = "Expounded";
			if ($language == "ja") $translatedSurahName = "フッスィラ章";
			if ($language == "fr") $translatedSurahName = "Ils s’articulent";
			if ($language == "de") $translatedSurahName = "Auseinandergesetzt sind";
			if ($language == "it") $translatedSurahName = "Esposti chiaramente";
			if ($language == "ru") $translatedSurahName = "PAЗ'ЯCHEHЫ";
			break;

		case 42:
			$surah = "الشُّورَى";
			if ($language == "id") $translatedSurahName = "Permusyawaratan";
			if ($language == "en") $translatedSurahName = "Counsel";
			if ($language == "ja") $translatedSurahName = "相談章〔アッ・シューラー";
			if ($language == "fr") $translatedSurahName = "La concertation";
			if ($language == "de") $translatedSurahName = "Die Beratung";
			if ($language == "it") $translatedSurahName = "La Consultazione";
			if ($language == "ru") $translatedSurahName = "COBET";
			break;

		case 43:
			$surah = "الزُّخْرُف";
			if ($language == "id") $translatedSurahName = "Perhiasan Emas";
			if ($language == "en") $translatedSurahName = "Gold Ornaments";
			if ($language == "ja") $translatedSurahName = "金の装飾章〔アッ・ズフル";
			if ($language == "fr") $translatedSurahName = "L’ornement";
			if ($language == "de") $translatedSurahName = "Der Prunk";
			if ($language == "it") $translatedSurahName = "Gli Ornamenti d'Oro";
			if ($language == "ru") $translatedSurahName = "УKPAШEHИЯ";
			break;

		case 44:
			$surah = "الدخَان";
			if ($language == "id") $translatedSurahName = "Asap";
			if ($language == "en") $translatedSurahName = "Smoke";
			if ($language == "ja") $translatedSurahName = "煙霧章〔アッ・ドハーン〕";
			if ($language == "fr") $translatedSurahName = "Les enjolivures";
			if ($language == "de") $translatedSurahName = "Der Rauch";
			if ($language == "it") $translatedSurahName = "Il Fumo";
			if ($language == "ru") $translatedSurahName = "ДЫM";
			break;

		case 45:
			$surah = "الجَاثيَة";
			if ($language == "id") $translatedSurahName = "Yang Berlutut";
			if ($language == "en") $translatedSurahName = "Kneeling";
			if ($language == "ja") $translatedSurahName = "跪く時章〔アル・ジャーシ";
			if ($language == "fr") $translatedSurahName = "Assise sur les talons";
			if ($language == "de") $translatedSurahName = "Das Knien";
			if ($language == "it") $translatedSurahName = "La Genuflessa";
			if ($language == "ru") $translatedSurahName = "KOЛEHOПPEKЛOHEHHAЯ";
			break;

		case 46:
			$surah = "الأحْقاف";
			if ($language == "id") $translatedSurahName = "Bukit-bukit Pasir";
			if ($language == "en") $translatedSurahName = "The Sand Dunes";
			if ($language == "ja") $translatedSurahName = "砂丘章〔アル・アハカーフ";
			if ($language == "fr") $translatedSurahName = "Al-Ahqâf";
			if ($language == "de") $translatedSurahName = "Die Dünen";
			if ($language == "it") $translatedSurahName = "Le dune di sabbia";
			if ($language == "ru") $translatedSurahName = "ПECKИ";
			break;

		case 47:
			$surah = "محَمَّد";
			if ($language == "id") $translatedSurahName = "Nabi Muhammad SAW";
			if ($language == "en") $translatedSurahName = "Muhammed";
			if ($language == "ja") $translatedSurahName = "ムハンマド章";
			if ($language == "fr") $translatedSurahName = "Mahomet";
			if ($language == "de") $translatedSurahName = "Mohammed";
			if ($language == "it") $translatedSurahName = "Muhammad";
			if ($language == "ru") $translatedSurahName = "MУXAMMAД";
			break;

		case 48:
			$surah = "الفَتْح";
			if ($language == "id") $translatedSurahName = "Kemenangan";
			if ($language == "en") $translatedSurahName = "Victory";
			if ($language == "ja") $translatedSurahName = "勝利章〔アル・ファトフ〕";
			if ($language == "fr") $translatedSurahName = "Tout s’ouvre";
			if ($language == "de") $translatedSurahName = "Der Erfolg";
			if ($language == "it") $translatedSurahName = "La Vittoria";
			if ($language == "ru") $translatedSurahName = "ПOБEДA";
			break;

		case 49:
			$surah = "الحُجرَات";
			if ($language == "id") $translatedSurahName = "Bilik-bilik";
			if ($language == "en") $translatedSurahName = "The Private Chambers";
			if ($language == "ja") $translatedSurahName = "部屋章〔アル・フジュラー";
			if ($language == "fr") $translatedSurahName = "Les appartements privés";
			if ($language == "de") $translatedSurahName = "Die Gemächer";
			if ($language == "it") $translatedSurahName = "Le Stanze Intime";
			if ($language == "ru") $translatedSurahName = "KOMHATЫ";
			break;

		case 50:
			$surah = "ق";
			if ($language == "id") $translatedSurahName = "Qaaf";
			if ($language == "en") $translatedSurahName = "Coff";
			if ($language == "ja") $translatedSurahName = "カ―フ章";
			if ($language == "fr") $translatedSurahName = "Qāf";
			if ($language == "de") $translatedSurahName = "Qaf";
			if ($language == "it") $translatedSurahName = "Qaf";
			if ($language == "ru") $translatedSurahName = "KAФ";
			break;

		case 51:
			$surah = "الذَّاريَات";
			if ($language == "id") $translatedSurahName = "Angin yang Menerbangkan";
			if ($language == "en") $translatedSurahName = "The Scattering Winds";
			if ($language == "ja") $translatedSurahName = "撤き散らすもの章〔アッ・";
			if ($language == "fr") $translatedSurahName = "Vanner";
			if ($language == "de") $translatedSurahName = "Das Aufwirbeln";
			if ($language == "it") $translatedSurahName = "Quelle che spargono";
			if ($language == "ru") $translatedSurahName = "PACCEИBAЮЩИE";
			break;

		case 52:
			$surah = "الطُّور";
			if ($language == "id") $translatedSurahName = "Bukit";
			if ($language == "en") $translatedSurahName = "The Mountain";
			if ($language == "ja") $translatedSurahName = "山章〔アッ・トール〕";
			if ($language == "fr") $translatedSurahName = "Le Mont";
			if ($language == "de") $translatedSurahName = "Der Berg";
			if ($language == "it") $translatedSurahName = "Il Monte";
			if ($language == "ru") $translatedSurahName = "ГOPA";
			break;

		case 53:
			$surah = "النَّجْم";
			if ($language == "id") $translatedSurahName = "Bintang";
			if ($language == "en") $translatedSurahName = "The Star";
			if ($language == "ja") $translatedSurahName = "星章〔アン・ナジュム〕";
			if ($language == "fr") $translatedSurahName = "L’étoile";
			if ($language == "de") $translatedSurahName = "Der Stern";
			if ($language == "it") $translatedSurahName = "La Stella";
			if ($language == "ru") $translatedSurahName = "ЗBEЗДA";
			break;

		case 54:
			$surah = "القَمَر";
			if ($language == "id") $translatedSurahName = "Bulan";
			if ($language == "en") $translatedSurahName = "The Moon";
			if ($language == "ja") $translatedSurahName = "月章〔アル・カマル〕";
			if ($language == "fr") $translatedSurahName = "La Lune";
			if ($language == "de") $translatedSurahName = "Der Mond";
			if ($language == "it") $translatedSurahName = "La Luna";
			if ($language == "ru") $translatedSurahName = "MECЯЦ";
			break;

		case 55:
			$surah = "الرحمن";
			if ($language == "id") $translatedSurahName = "Yang Maha Pemurah";
			if ($language == "en") $translatedSurahName = "The Compassionate";
			if ($language == "ja") $translatedSurahName = "慈悲あまねく御方章〔アッ";
			if ($language == "fr") $translatedSurahName = "Le Tout Miséricordieux";
			if ($language == "de") $translatedSurahName = "Der Barmherzige";
			if ($language == "it") $translatedSurahName = "Il Compassionevole";
			if ($language == "ru") $translatedSurahName = "MИЛOCEPДHЫЙ";
			break;

		case 56:
			$surah = "الوَاقِعَة";
			if ($language == "id") $translatedSurahName = "Peristiwa yang Tidak Dapat Dielakkan";
			if ($language == "en") $translatedSurahName = "The Inevitable";
			if ($language == "ja") $translatedSurahName = "出来事章〔アル・ワーキア";
			if ($language == "fr") $translatedSurahName = "L’échéante";
			if ($language == "de") $translatedSurahName = "Die hereinbrechende Katastrophe";
			if ($language == "it") $translatedSurahName = "L'Evento";
			if ($language == "ru") $translatedSurahName = "ПAДAЮЩEE";
			break;

		case 57:
			$surah = "الحَديد";
			if ($language == "id") $translatedSurahName = "Besi";
			if ($language == "en") $translatedSurahName = "Iron";
			if ($language == "ja") $translatedSurahName = "鉄章〔アル・ハディード〕";
			if ($language == "fr") $translatedSurahName = "Le fer";
			if ($language == "de") $translatedSurahName = "Das Eisen";
			if ($language == "it") $translatedSurahName = "Il Ferro";
			if ($language == "ru") $translatedSurahName = "ЖEЛEЗO";
			break;

		case 58:
			$surah = "المجَادلة";
			if ($language == "id") $translatedSurahName = "Perempuan yang Mengajukan Gugatan";
			if ($language == "en") $translatedSurahName = "She who Disputes";
			if ($language == "ja") $translatedSurahName = "抗弁する女章〔アル・ムジ";
			if ($language == "fr") $translatedSurahName = "La protestataire";
			if ($language == "de") $translatedSurahName = "Der Streit";
			if ($language == "it") $translatedSurahName = "La Disputante";
			if ($language == "ru") $translatedSurahName = "ПPEПИPATEЛЬCTBO";
			break;

		case 59:
			$surah = "الحَشر";
			if ($language == "id") $translatedSurahName = "Pengusiran";
			if ($language == "en") $translatedSurahName = "The Gathering";
			if ($language == "ja") $translatedSurahName = "集合章〔アル・ハシュル〕";
			if ($language == "fr") $translatedSurahName = "Le regroupement";
			if ($language == "de") $translatedSurahName = "Die Versammlung";
			if ($language == "it") $translatedSurahName = "L'Esodo";
			if ($language == "ru") $translatedSurahName = "COБPAHИE";
			break;

		case 60:
			$surah = "المُمتَحنَة";
			if ($language == "id") $translatedSurahName = "Wanita yang Diuji";
			if ($language == "en") $translatedSurahName = "She who is Examined";
			if ($language == "ja") $translatedSurahName = "試問される女章〔アル・ム";
			if ($language == "fr") $translatedSurahName = "L’examinante";
			if ($language == "de") $translatedSurahName = "Die Prüfung";
			if ($language == "it") $translatedSurahName = "L'Esaminata";
			if ($language == "ru") $translatedSurahName = "ИCПЫTУEMAЯ";
			break;

		case 61:
			$surah = "الصَّف";
			if ($language == "id") $translatedSurahName = "Satu Barisan";
			if ($language == "en") $translatedSurahName = "The Ranks";
			if ($language == "ja") $translatedSurahName = "戦列章〔アッ・サッフ〕";
			if ($language == "fr") $translatedSurahName = "En ligne";
			if ($language == "de") $translatedSurahName = "Reih und Glied";
			if ($language == "it") $translatedSurahName = "I Ranghi Serrati";
			if ($language == "ru") $translatedSurahName = "PЯДЫ";
			break;

		case 62:
			$surah = "الجُمُعَة";
			if ($language == "id") $translatedSurahName = "Hari Jum’at";
			if ($language == "en") $translatedSurahName = "The Congregation";
			if ($language == "ja") $translatedSurahName = "合同礼拝章〔アル・ジュム";
			if ($language == "fr") $translatedSurahName = "Le vendredi";
			if ($language == "de") $translatedSurahName = "Der Freitag";
			if ($language == "it") $translatedSurahName = "Il Venerdi'";
			if ($language == "ru") $translatedSurahName = "COБPAHИE";
			break;

		case 63:
			$surah = "المنَافِقون";
			if ($language == "id") $translatedSurahName = "Orang-orang yang Munafik";
			if ($language == "en") $translatedSurahName = "The Hypocrites";
			if ($language == "ja") $translatedSurahName = "偽信者たち章〔アル・ムナ";
			if ($language == "fr") $translatedSurahName = "Les hypocrites";
			if ($language == "de") $translatedSurahName = "Die Heuchler";
			if ($language == "it") $translatedSurahName = "Gli Ipocriti";
			if ($language == "ru") $translatedSurahName = "ЛИЦEMEPЫ";
			break;

		case 64:
			$surah = "التغَابُن";
			if ($language == "id") $translatedSurahName = "Hari Dinampakkan Kesalahan-kesalahan";
			if ($language == "en") $translatedSurahName = "Mutual Disposession";
			if ($language == "ja") $translatedSurahName = "騙し合い章〔アッ・タガー";
			if ($language == "fr") $translatedSurahName = "La duperie réciproque";
			if ($language == "de") $translatedSurahName = "	Die Übervorteilung";
			if ($language == "it") $translatedSurahName = "Il Reciproco Inganno";
			if ($language == "ru") $translatedSurahName = "BЗAИMHOE OБMAHЫBAHИE";
			break;

		case 65:
			$surah = "الطلَاق";
			if ($language == "id") $translatedSurahName = "Talak";
			if ($language == "en") $translatedSurahName = "Divorce";
			if ($language == "ja") $translatedSurahName = "離婚章〔アッ・タラーク〕";
			if ($language == "fr") $translatedSurahName = "La répudiation";
			if ($language == "de") $translatedSurahName = "Die Entlassung (Scheidung)";
			if ($language == "it") $translatedSurahName = "Il Divorzio";
			if ($language == "ru") $translatedSurahName = "PAЗBOД";
			break;

		case 66:
			$surah = "التحْريم";
			if ($language == "id") $translatedSurahName = "Mengharamkan";
			if ($language == "en") $translatedSurahName = "Forbiddance";
			if ($language == "ja") $translatedSurahName = "禁止章〔アッ・タハリーム";
			if ($language == "fr") $translatedSurahName = "L’interdiction";
			if ($language == "de") $translatedSurahName = "Das Verbot";
			if ($language == "it") $translatedSurahName = "L'lnterdizione";
			if ($language == "ru") $translatedSurahName = "ЗAПPEЩEHИE";
			break;

		case 67:
			$surah = "المُلْك";
			if ($language == "id") $translatedSurahName = "Kerajaan";
			if ($language == "en") $translatedSurahName = "Dominion";
			if ($language == "ja") $translatedSurahName = "大権章〔アル・ムルク〕";
			if ($language == "fr") $translatedSurahName = "La Royauté";
			if ($language == "de") $translatedSurahName = "Die Herrschaft";
			if ($language == "it") $translatedSurahName = "La Sovranità";
			if ($language == "ru") $translatedSurahName = "BЛACTЬ";
			break;

		case 68:
			$surah = "القَلَم";
			if ($language == "id") $translatedSurahName = "Pena";
			if ($language == "en") $translatedSurahName = "The Pen";
			if ($language == "ja") $translatedSurahName = "筆章〔アル・カラム〕";
			if ($language == "fr") $translatedSurahName = "Le calame";
			if ($language == "de") $translatedSurahName = "Die Schreibfeder";
			if ($language == "it") $translatedSurahName = "Il Calamo";
			if ($language == "ru") $translatedSurahName = "ПИCЬMEHHAЯ TPOCTЬ";
			break;

		case 69:
			$surah = "الحَاقَّة";
			if ($language == "id") $translatedSurahName = "Hari Kiamat";
			if ($language == "en") $translatedSurahName = "The Undeniable Reality";
			if ($language == "ja") $translatedSurahName = "真実章〔アル・ハーッカ〕";
			if ($language == "fr") $translatedSurahName = "L’inéluctable";
			if ($language == "de") $translatedSurahName = "Die Wahrheit";
			if ($language == "it") $translatedSurahName = "L'lnevitabile";
			if ($language == "ru") $translatedSurahName = "HEИЗБEЖHOE";
			break;

		case 70:
			$surah = "المعَارج";
			if ($language == "id") $translatedSurahName = "Tempat Naik";
			if ($language == "en") $translatedSurahName = "The Ascending Ways";
			if ($language == "ja") $translatedSurahName = "階段章〔アル・マアーリジ";
			if ($language == "fr") $translatedSurahName = "Les paliers";
			if ($language == "de") $translatedSurahName = "Die Himmelsleiter";
			if ($language == "it") $translatedSurahName = "Le vie dell'Ascesa";
			if ($language == "ru") $translatedSurahName = "CTУПEHИ";
			break;

		case 71:
			$surah = "نُوح";
			if ($language == "id") $translatedSurahName = "Nabi Nuh a.s.";
			if ($language == "en") $translatedSurahName = "Noah";
			if ($language == "ja") $translatedSurahName = "ヌーフ章";
			if ($language == "fr") $translatedSurahName = "Noé";
			if ($language == "de") $translatedSurahName = "Noah";
			if ($language == "it") $translatedSurahName = "Noè";
			if ($language == "ru") $translatedSurahName = "HУX";
			break;

		case 72:
			$surah = "الجِن";
			if ($language == "id") $translatedSurahName = "Jin";
			if ($language == "en") $translatedSurahName = "The Jinn";
			if ($language == "ja") $translatedSurahName = "アル・ジン（幽精）章";
			if ($language == "fr") $translatedSurahName = "Les djinns";
			if ($language == "de") $translatedSurahName = "Die Jinn";
			if ($language == "it") $translatedSurahName = "I Demoni";
			if ($language == "ru") $translatedSurahName = "ДЖИHHЫ";
			break;

		case 73:
			$surah = "المُزَّمِّل";
			if ($language == "id") $translatedSurahName = "Orang yang Berselimut";
			if ($language == "en") $translatedSurahName = "The Enwrapped One";
			if ($language == "ja") $translatedSurahName = "衣を纒う者章〔アル・ムッ";
			if ($language == "fr") $translatedSurahName = "L’emmitouflé";
			if ($language == "de") $translatedSurahName = "Der sich eingehüllt hat";
			if ($language == "it") $translatedSurahName = "L'Avvolto";
			if ($language == "ru") $translatedSurahName = "ЗABEPHУBШИЙCЯ";
			break;

		case 74:
			$surah = "المُدَّثِّر";
			if ($language == "id") $translatedSurahName = "Orang yang Berkemul";
			if ($language == "en") $translatedSurahName = "The Covered One";
			if ($language == "ja") $translatedSurahName = "包る者章〔アル・ムッダッ";
			if ($language == "fr") $translatedSurahName = "Il s’est couvert d’une cape";
			if ($language == "de") $translatedSurahName = "Der sich zugedeckt hat";
			if ($language == "it") $translatedSurahName = "L'Avvolto nel Mantello";
			if ($language == "ru") $translatedSurahName = "ЗABEPHУBШИЙCЯ";
			break;

		case 75:
			$surah = "القِيَامَة";
			if ($language == "id") $translatedSurahName = "Kiamat";
			if ($language == "en") $translatedSurahName = "Resurrection";
			if ($language == "ja") $translatedSurahName = "復活章〔アル・キヤーマ〕";
			if ($language == "fr") $translatedSurahName = "La résurrection";
			if ($language == "de") $translatedSurahName = "Die Auferstehung	";
			if ($language == "it") $translatedSurahName = "La Resurrezione";
			if ($language == "ru") $translatedSurahName = "ВОСКРЕСЕНИЕ";
			break;

		case 76:
			$surah = "الإنسَان";
			if ($language == "id") $translatedSurahName = "Manusia";
			if ($language == "en") $translatedSurahName = "The Human";
			if ($language == "ja") $translatedSurahName = "人間章〔アル・インサーン";
			if ($language == "fr") $translatedSurahName = "L’Homme";
			if ($language == "de") $translatedSurahName = "Der Mensch";
			if ($language == "it") $translatedSurahName = "L'Uomo";
			if ($language == "ru") $translatedSurahName = "ЧЕЛОВЕК";
			break;

		case 77:
			$surah = "المُرسَلات";
			if ($language == "id") $translatedSurahName = "Malaikat-Malaikat Yang Diutus";
			if ($language == "en") $translatedSurahName = "Those Sent Forth";
			if ($language == "ja") $translatedSurahName = "送られるもの章〔アル・ム";
			if ($language == "fr") $translatedSurahName = "	Les envoyés";
			if ($language == "de") $translatedSurahName = "Die Gesandten";
			if ($language == "it") $translatedSurahName = "Le Inviate";
			if ($language == "ru") $translatedSurahName = "ПОСЫЛАЕМЫЕ";
			break;

		case 78:
			$surah = "النَّبَأ";
			if ($language == "id") $translatedSurahName = "Berita besar";
			if ($language == "en") $translatedSurahName = "The Tiding";
			if ($language == "ja") $translatedSurahName = "消息章〔アン・ナバア〕";
			if ($language == "fr") $translatedSurahName = "L’Annonce";
			if ($language == "de") $translatedSurahName = "Die Ankündigung";
			if ($language == "it") $translatedSurahName = "L'Annuncio";
			if ($language == "ru") $translatedSurahName = "ВЕСТЬ";
			break;

		case 79:
			$surah = "النّازعَات";
			if ($language == "id") $translatedSurahName = "Malaikat-Malaikat Yang Mencabut";
			if ($language == "en") $translatedSurahName = "The Snatchers";
			if ($language == "ja") $translatedSurahName = "引き離すもの章〔アン・ナ";
			if ($language == "fr") $translatedSurahName = "Ceux qui arrachent";
			if ($language == "de") $translatedSurahName = "Die ausziehen";
			if ($language == "it") $translatedSurahName = "Le Strappanti Violente";
			if ($language == "ru") $translatedSurahName = "ВЫРЫВАЮЩИЕ";
			break;

		case 80:
			$surah = "عَبَس";
			if ($language == "id") $translatedSurahName = "Ia Bermuka Masam";
			if ($language == "en") $translatedSurahName = "He Frowned";
			if ($language == "ja") $translatedSurahName = "眉をひそめて章〔アバサ〕";
			if ($language == "fr") $translatedSurahName = "Il s’est renfrogné";
			if ($language == "de") $translatedSurahName = "Er zog die Stirne kraus";
			if ($language == "it") $translatedSurahName = "Si Accigliò";
			if ($language == "ru") $translatedSurahName = "НАХМУРИЛСЯ";
			break;

		case 81:
			$surah = "التَّكوير";
			if ($language == "id") $translatedSurahName = "Menggulung";
			if ($language == "en") $translatedSurahName = "The Enfolding";
			if ($language == "ja") $translatedSurahName = "包み隠す章〔アッ・タクウ";
			if ($language == "fr") $translatedSurahName = "Le redéploiement";
			if ($language == "de") $translatedSurahName = "Das Einhüllen";
			if ($language == "it") $translatedSurahName = "L'Oscuramento";
			if ($language == "ru") $translatedSurahName = "СКРУЧИВАНИЕ";
			break;

		case 82:
			$surah = "الانفِطار";
			if ($language == "id") $translatedSurahName = "Terbelah";
			if ($language == "en") $translatedSurahName = "The Splitting";
			if ($language == "ja") $translatedSurahName = "裂ける章〔アル・インフィ";
			if ($language == "fr") $translatedSurahName = "La rupture du ciel";
			if ($language == "de") $translatedSurahName = "Die Spaltung";
			if ($language == "it") $translatedSurahName = "Lo Squarciarsi";
			if ($language == "ru") $translatedSurahName = "РАСКАЛЫВАНИЕ";
			break;

		case 83:
			$surah = "المطفِّفِين";
			if ($language == "id") $translatedSurahName = "Orang-orang yang Curang";
			if ($language == "en") $translatedSurahName = "The Defrauders";
			if ($language == "ja") $translatedSurahName = "量を減らす者章〔アル・ム";
			if ($language == "fr") $translatedSurahName = "Les fraudeurs";
			if ($language == "de") $translatedSurahName = "Die Betrüger";
			if ($language == "it") $translatedSurahName = "I Frodatori";
			if ($language == "ru") $translatedSurahName = "ОБВЕШИВАЮЩИЕ";
			break;

		case 84:
			$surah = "الانْشِقَاق";
			if ($language == "id") $translatedSurahName = "Terbelah";
			if ($language == "en") $translatedSurahName = "The Bursting Open";
			if ($language == "ja") $translatedSurahName = "割れる章〔アル・インシカ";
			if ($language == "fr") $translatedSurahName = "La fissuration";
			if ($language == "de") $translatedSurahName = "Das Zerbrechen";
			if ($language == "it") $translatedSurahName = "La Fenditura";
			if ($language == "ru") $translatedSurahName = "РАСКАЛЫВАНИЕ";
			break;

		case 85:
			$surah = "البرُوج";
			if ($language == "id") $translatedSurahName = "Gugusan bintang";
			if ($language == "en") $translatedSurahName = "The Constellations";
			if ($language == "ja") $translatedSurahName = "星座章〔アル・ブルージュ";
			if ($language == "fr") $translatedSurahName = "Les constellations";
			if ($language == "de") $translatedSurahName = "Die Türme";
			if ($language == "it") $translatedSurahName = "Le Costellazioni";
			if ($language == "ru") $translatedSurahName = "БАШНИ";
			break;

		case 86:
			$surah = "الطَّارِق";
			if ($language == "id") $translatedSurahName = "Yang Datang di Malam Hari";
			if ($language == "en") $translatedSurahName = "The Night Visitant";
			if ($language == "ja") $translatedSurahName = "夜訪れるもの章〔アッ・タ";
			if ($language == "fr") $translatedSurahName = "L’arrivant du soir";
			if ($language == "de") $translatedSurahName = "Der bei Nacht kommende";
			if ($language == "it") $translatedSurahName = "L'Astro Notturno";
			if ($language == "ru") $translatedSurahName = "ИДУЩИЙ НОЧЬЮ";
			break;

		case 87:
			$surah = "الأَعْلى";
			if ($language == "id") $translatedSurahName = "Yang Paling Tinggi";
			if ($language == "en") $translatedSurahName = "The Highest";
			if ($language == "ja") $translatedSurahName = "至高者章〔アル・アアラー";
			if ($language == "fr") $translatedSurahName = "Le Très-Haut";
			if ($language == "de") $translatedSurahName = "Der Allerhöchste";
			if ($language == "it") $translatedSurahName = "L'Altissimo";
			if ($language == "ru") $translatedSurahName = "ВЫСОЧАЙШИЙ";
			break;

		case 88:
			$surah = "الغَاشِية";
			if ($language == "id") $translatedSurahName = "Hari Pembalasan";
			if ($language == "en") $translatedSurahName = "The Overwhelming Event";
			if ($language == "ja") $translatedSurahName = "圧倒的事態章〔アル・ガー";
			if ($language == "fr") $translatedSurahName = "L’occultante";
			if ($language == "de") $translatedSurahName = "Die zudecken wird";
			if ($language == "it") $translatedSurahName = "L'Avvolgente";
			if ($language == "ru") $translatedSurahName = "ПОКРЫВАЮЩЕЕ";
			break;

		case 89:
			$surah = "الفَجْر";
			if ($language == "id") $translatedSurahName = "Fajar";
			if ($language == "en") $translatedSurahName = "The Dawn";
			if ($language == "ja") $translatedSurahName = "暁章〔アル・ファジュル〕";
			if ($language == "fr") $translatedSurahName = "L’aube";
			if ($language == "de") $translatedSurahName = "Die Morgendämmerung";
			if ($language == "it") $translatedSurahName = "L'Alba";
			if ($language == "ru") $translatedSurahName = "ЗAPЯ";
			break;

		case 90:
			$surah = "البَلَد";
			if ($language == "id") $translatedSurahName = "Negeri";
			if ($language == "en") $translatedSurahName = "The City";
			if ($language == "ja") $translatedSurahName = "町章〔アル・バラド〕";
			if ($language == "fr") $translatedSurahName = "La ville";
			if ($language == "de") $translatedSurahName = "Die Stadt";
			if ($language == "it") $translatedSurahName = "La Contrada";
			if ($language == "ru") $translatedSurahName = "ГOPOД";
			break;

		case 91:
			$surah = "الشَّمْس";
			if ($language == "id") $translatedSurahName = "Matahari";
			if ($language == "en") $translatedSurahName = "The Sun";
			if ($language == "ja") $translatedSurahName = "太陽章〔アッ・シャムス〕";
			if ($language == "fr") $translatedSurahName = "Le soleil";
			if ($language == "de") $translatedSurahName = "Die Sonne";
			if ($language == "it") $translatedSurahName = "Il Sole";
			if ($language == "ru") $translatedSurahName = "COЛHЦE";
			break;

		case 92:
			$surah = "الليْل";
			if ($language == "id") $translatedSurahName = "Malam";
			if ($language == "en") $translatedSurahName = "The Night";
			if ($language == "ja") $translatedSurahName = "夜章〔アッ・ライル〕";
			if ($language == "fr") $translatedSurahName = "La nuit";
			if ($language == "de") $translatedSurahName = "Die Nacht";
			if ($language == "it") $translatedSurahName = "La Notte";
			if ($language == "ru") $translatedSurahName = "HOЧЬ";
			break;

		case 93:
			$surah = "الضُّحَى";
			if ($language == "id") $translatedSurahName = "Waktu Dhuha";
			if ($language == "en") $translatedSurahName = "The Morning Brightness";
			if ($language == "ja") $translatedSurahName = "朝章〔アッ・ドハー〕";
			if ($language == "fr") $translatedSurahName = "La clarté du jour";
			if ($language == "de") $translatedSurahName = "Der Morgen";
			if ($language == "it") $translatedSurahName = "La Luce del Mattino";
			if ($language == "ru") $translatedSurahName = "УTPO";
			break;

		case 94:
			$surah = "الشَّرْح";
			if ($language == "id") $translatedSurahName = "Melapangkan";
			if ($language == "en") $translatedSurahName = "Expansion";
			if ($language == "ja") $translatedSurahName = "胸を広げる章〔アッ・シャ";
			if ($language == "fr") $translatedSurahName = "L’épanouissement";
			if ($language == "de") $translatedSurahName = "Das Weiten";
			if ($language == "it") $translatedSurahName = "L'Apertura";
			if ($language == "ru") $translatedSurahName = "PAЗBE MЫ HE PACKPЫЛИ";
			break;

		case 95:
			$surah = "التِّين";
			if ($language == "id") $translatedSurahName = "Buah Tin";
			if ($language == "en") $translatedSurahName = "The Fig";
			if ($language == "ja") $translatedSurahName = "無花果章〔アッ・ティーン";
			if ($language == "fr") $translatedSurahName = "Le figuier";
			if ($language == "de") $translatedSurahName = "Die Feigenbäume";
			if ($language == "it") $translatedSurahName = "Il Fico";
			if ($language == "ru") $translatedSurahName = "CMOKOBHИЦA";
			break;

		case 96:
			$surah = "العَلَق";
			if ($language == "id") $translatedSurahName = "Segumpal Darah";
			if ($language == "en") $translatedSurahName = "The Blood Clot";
			if ($language == "ja") $translatedSurahName = "凝血章〔アル・アラク〕";
			if ($language == "fr") $translatedSurahName = "L’accrochement";
			if ($language == "de") $translatedSurahName = "Der Blutklumpen";
			if ($language == "it") $translatedSurahName = "L'Aderenza";
			if ($language == "ru") $translatedSurahName = "CГУCTOK";
			break;

		case 97:
			$surah = "القَدْر";
			if ($language == "id") $translatedSurahName = "Kemuliaan";
			if ($language == "en") $translatedSurahName = "Power";
			if ($language == "ja") $translatedSurahName = "みいつ章〔アル・カドル〕";
			if ($language == "fr") $translatedSurahName = "Le décret";
			if ($language == "de") $translatedSurahName = "Die Bestimmung";
			if ($language == "it") $translatedSurahName = "Il Destino";
			if ($language == "ru") $translatedSurahName = "MOГУЩECTBO";
			break;

		case 98:
			$surah = "البَينَة";
			if ($language == "id") $translatedSurahName = "Pembuktian";
			if ($language == "en") $translatedSurahName = "The Clear Proof";
			if ($language == "ja") $translatedSurahName = "明証章〔アル・バイイナ〕";
			if ($language == "fr") $translatedSurahName = "La preuve décisive";
			if ($language == "de") $translatedSurahName = "Der klare Beweis";
			if ($language == "it") $translatedSurahName = "La Prova";
			if ($language == "ru") $translatedSurahName = "ЯCHOE ЗHAMEHИE";
			break;

		case 99:
			$surah = "الزلزَلة";
			if ($language == "id") $translatedSurahName = "Kegoncangan";
			if ($language == "en") $translatedSurahName = "The Earthquake";
			if ($language == "ja") $translatedSurahName = "地震章〔アッ・ザルザラ〕";
			if ($language == "fr") $translatedSurahName = "Le tremblement de terre";
			if ($language == "de") $translatedSurahName = "Das Beben";
			if ($language == "it") $translatedSurahName = "Il Terremoto";
			if ($language == "ru") $translatedSurahName = "ЗEMЛETPЯCEHИE";
			break;

		case 100:
			$surah = "العَادِيات";
			if ($language == "id") $translatedSurahName = "Berlari Kencang";
			if ($language == "en") $translatedSurahName = "The Chargers";
			if ($language == "ja") $translatedSurahName = "進撃する馬章〔アル・アー";
			if ($language == "fr") $translatedSurahName = "Les Coursiers rapides";
			if ($language == "de") $translatedSurahName = "Das Laufen";
			if ($language == "it") $translatedSurahName = "Le Scalpitanti";
			if ($language == "ru") $translatedSurahName = "MЧAЩИECЯ";
			break;

		case 101:
			$surah = "القَارِعة";
			if ($language == "id") $translatedSurahName = "Hari Kiamat";
			if ($language == "en") $translatedSurahName = "The Catastrophe";
			if ($language == "ja") $translatedSurahName = "恐れ戦く章〔アル・カーリ ";
			if ($language == "fr") $translatedSurahName = "Celle qui fracasse";
			if ($language == "de") $translatedSurahName = "Die Polternde";
			if ($language == "it") $translatedSurahName = "La Percotente";
			if ($language == "ru") $translatedSurahName = "ПOPAЖAЮЩEE";
			break;

		case 102:
			$surah = "التَّكَاثر";
			if ($language == "id") $translatedSurahName = "Bermegah-megahan";
			if ($language == "en") $translatedSurahName = "Vying for Increase";
			if ($language == "ja") $translatedSurahName = "蓄積章〔アッ・タカースル";
			if ($language == "fr") $translatedSurahName = "La rivalité";
			if ($language == "de") $translatedSurahName = "Die Sucht, mehr zu haben";
			if ($language == "it") $translatedSurahName = "Il Rivaleggiare";
			if ($language == "ru") $translatedSurahName = "OXOTA K УMHOЖEHИЮ";
			break;

		case 103:
			$surah = "العَصْر";
			if ($language == "id") $translatedSurahName = "Masa";
			if ($language == "en") $translatedSurahName = "Time";
			if ($language == "ja") $translatedSurahName = "時間章〔アル・アスル〕";
			if ($language == "fr") $translatedSurahName = "Le temps";
			if ($language == "de") $translatedSurahName = "Der Nachmittag";
			if ($language == "it") $translatedSurahName = "Il Tempo";
			if ($language == "ru") $translatedSurahName = "ПPEДBEЧEPHEE BPEMЯ";
			break;

		case 104:
			$surah = "الهُمَزَة";
			if ($language == "id") $translatedSurahName = "Pengumpat";
			if ($language == "en") $translatedSurahName = "The Slanderer";
			if ($language == "ja") $translatedSurahName = "中傷者章〔アル・フマザ〕";
			if ($language == "fr") $translatedSurahName = "Le Détracteur";
			if ($language == "de") $translatedSurahName = "Der Stichler";
			if ($language == "it") $translatedSurahName = "Il Diffamatore";
			if ($language == "ru") $translatedSurahName = "XУЛИTEЛЬ";
			break;

		case 105:
			$surah = "الفِيل";
			if ($language == "id") $translatedSurahName = "Gajah";
			if ($language == "en") $translatedSurahName = "The Elephant";
			if ($language == "ja") $translatedSurahName = "象章〔アル・フィール〕";
			if ($language == "fr") $translatedSurahName = "L’éléphant";
			if ($language == "de") $translatedSurahName = "Der Elefant";
			if ($language == "it") $translatedSurahName = "L'Elefante";
			if ($language == "ru") $translatedSurahName = "CЛOH";
			break;

		case 106:
			$surah = "قُرَيْش";
			if ($language == "id") $translatedSurahName = "Suku Quraisy";
			if ($language == "en") $translatedSurahName = "Quraysh";
			if ($language == "ja") $translatedSurahName = "クライシュ族章";
			if ($language == "fr") $translatedSurahName = "Quraysh";
			if ($language == "de") $translatedSurahName = "Die Quraisch";
			if ($language == "it") $translatedSurahName = "I Coreisciti";
			if ($language == "ru") $translatedSurahName = "KУPAЙШ";
			break;

		case 107:
			$surah = "المَاعُون";
			if ($language == "id") $translatedSurahName = "Barang-barang yang Berguna";
			if ($language == "en") $translatedSurahName = "Assistance";
			if ($language == "ja") $translatedSurahName = "慈善章〔アル・マーウーン";
			if ($language == "fr") $translatedSurahName = "Le nécessaire";
			if ($language == "de") $translatedSurahName = "Die Hilfeleistung";
			if ($language == "it") $translatedSurahName = "L'Utensile";
			if ($language == "ru") $translatedSurahName = "ПOДAЯHИE";
			break;

		case 108:
			$surah = "الكَوْثَر";
			if ($language == "id") $translatedSurahName = "Nikmat yang Berlimpah";
			if ($language == "en") $translatedSurahName = "Abundance";
			if ($language == "ja") $translatedSurahName = "潤沢章〔アル・カウサル〕";
			if ($language == "fr") $translatedSurahName = "L’abondance";
			if ($language == "de") $translatedSurahName = "Die Fülle";
			if ($language == "it") $translatedSurahName = "L'abbondanza";
			if ($language == "ru") $translatedSurahName = "OБИЛЬHЫЙ";
			break;

		case 109:
			$surah = "الكَافِرُون";
			if ($language == "id") $translatedSurahName = "Orang-orang Kafir";
			if ($language == "en") $translatedSurahName = "Disbelievers";
			if ($language == "ja") $translatedSurahName = "不信者たち章〔アル・カー";
			if ($language == "fr") $translatedSurahName = "Les incrédules";
			if ($language == "de") $translatedSurahName = "Die Ungläubigen";
			if ($language == "it") $translatedSurahName = "I Miscredenti";
			if ($language == "ru") $translatedSurahName = "HEBEPHЫE";
			break;

		case 110:
			$surah = "النَّصر";
			if ($language == "id") $translatedSurahName = "Pertolongan";
			if ($language == "en") $translatedSurahName = "Help";
			if ($language == "ja") $translatedSurahName = "援助章〔アン・ナスル〕";
			if ($language == "fr") $translatedSurahName = "Le secours victorieux";
			if ($language == "de") $translatedSurahName = "Die Hilfe";
			if ($language == "it") $translatedSurahName = "L'Ausilio";
			if ($language == "ru") $translatedSurahName = "ПOMOЩЬ";
			break;

		case 111:
			$surah = "المَسَد";
			if ($language == "id") $translatedSurahName = "Gejolak Api";
			if ($language == "en") $translatedSurahName = "Palm Fiber";
			if ($language == "ja") $translatedSurahName = "棕櫚章〔アル・マサド〕";
			if ($language == "fr") $translatedSurahName = "La fibre";
			if ($language == "de") $translatedSurahName = "Der Palmfaserstrick";
			if ($language == "it") $translatedSurahName = "Le Fibre di Palma";
			if ($language == "ru") $translatedSurahName = "ПAЛЬMOBЫE BOЛOKHA";
			break;

		case 112:
			$surah = "الإخْلَاص";
			if ($language == "id") $translatedSurahName = "Ikhlas";
			if ($language == "en") $translatedSurahName = "Sincerity";
			if ($language == "ja") $translatedSurahName = "純正章〔アル・イフラース";
			if ($language == "fr") $translatedSurahName = "Le culte pur";
			if ($language == "de") $translatedSurahName = "Die Aufrichtigkeit";
			if ($language == "it") $translatedSurahName = "Il Puro Monoteismo";
			if ($language == "ru") $translatedSurahName = "OЧИЩEHИE (BEPЫ)";
			break;

		case 113:
			$surah = "الفَلَق";
			if ($language == "id") $translatedSurahName = "Waktu Subuh";
			if ($language == "en") $translatedSurahName = "Daybreak";
			if ($language == "ja") $translatedSurahName = "黎明章〔アル・ファラク〕";
			if ($language == "fr") $translatedSurahName = "Le point du jour";
			if ($language == "de") $translatedSurahName = "Das Frühlicht";
			if ($language == "it") $translatedSurahName = "L'Alba Nascente";
			if ($language == "ru") $translatedSurahName = "PACCBET";
			break;

		case 114:
			$surah = "النَّاس";
			if ($language == "id") $translatedSurahName = "Umat Manusia";
			if ($language == "en") $translatedSurahName = "Mankind";
			if ($language == "ja") $translatedSurahName = "人々章〔アン・ナース〕";
			if ($language == "fr") $translatedSurahName = "Les hommes";
			if ($language == "de") $translatedSurahName = "Die Menschheit";
			if ($language == "it") $translatedSurahName = "Gli Uomini";
			if ($language == "ru") $translatedSurahName = "ЛЮДИ";
			break;

		default:
			$surah = "unknown";
			if ($language == "id") $translatedSurahName = "xxx";
			if ($language == "en") $translatedSurahName = "xxx";
			if ($language == "ja") $translatedSurahName = "xxx";
			if ($language == "fr") $translatedSurahName = "xxx";
			if ($language == "de") $translatedSurahName = "xxx";
			if ($language == "it") $translatedSurahName = "xxx";
			if ($language == "ru") $translatedSurahName = "xxx";
			
	}
	if ($language == "xxx") return ($surah);
	else return ($surah . " (" . $translatedSurahName . ")");
}

function showSurahDir($x){
for ($i = 1; $i < 115; $i++)
	{
	echo "<div class='surahbutton'><a href='https://ciihuy.com/qurankarim/index.php?lang=" . $x . "&surah=" . $i . "'>";
	echo $i . " - " . surahName($i);
	echo "</div>";
	}
}

function showSurahDirOFFLINE($x){
	for ($i = 1; $i < 115; $i++){
		echo "<div class=\"surahbutton\" onclick=\"goToPage(" . $i . ")\">" .  surahName($i) . "</div>";
	}
}

?>