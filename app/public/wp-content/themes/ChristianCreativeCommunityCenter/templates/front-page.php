<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>4C Ministries</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Christian Creative Communication Center">
    <meta name="author" content="4C Ministries">    
    <link rel="shortcut icon" href="assets/images/homepage/50x50-logo.png"> 
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->

	<!-- Theme CSS -->
	<?php
		wp_head();
	?>
</head> 

<body>
	<select name = "languages" id = "languages">
		<option class = "language" value = "English">English</option>
		<option class = "language" value = "Chinese">Chinese</option>
		<option class = "language" value = "Traditional Chinese">繁体中文</option>
	</select>
	<div class = "topContainer">
		<img class = "logo" src = "assets/images/homepage/logo.png" alt = "logo">
		<!-- <img class = "donateButton" src = "assets/images/homepage/donate-button.png" alt = "donate"> -->
		
	</div>
	
	<div class = "navbar">
		<a class='logo-mobile' href="#home">
			<img class = "logo-home" src = "assets/images/homepage/logo-mobile.png">
		</a>
		<ul class = "hlinks">
			<li> <a class = "hlink" href = "#">四海之家</a></li>
			<li> <a class = "hlink" href = "bibleRC.html">四海读经会</a></li>
			<li> <a class = "hlink" href = "#">四海音乐学院</a></li>
			<li> <a class = "hlink" href = "#">四海圣经宣教学院</a></li>
			<li> <a class = "hlink" href = "#">出版刊物</a></li>
			<li> <a class = "hlink" href = "#">宣教事工</a></li>
			<li> <a class = "hlink" href = "#">支持我们</a></li>
		</ul>
		<a class='menu' href="#menu">
			<img class = "hamburger" src = "assets/images/homepage/hamburger.svg" onclick="toggleMenu()">
		</a>
		
	</div>
	<ul class = "hlinks-mobile">
		<li> <a class = "hlink-mobile" href = "#">四海之家</a></li>
		<li> <a class = "hlink-mobile" href = "#">四海读经会</a></li>
		<li> <a class = "hlink-mobile" href = "#">四海音乐学院</a></li>
		<li> <a class = "hlink-mobile" href = "#">四海圣经宣教学院</a></li>
		<li> <a class = "hlink-mobile" href = "#">出版刊物</a></li>
		<li> <a class = "hlink-mobile" href = "#">宣教事工</a></li>
		<li> <a class = "hlink-mobile" href = "#">支持我们</a></li>
	</ul>
	<div class = "horizontalScrollContainer">
		<div class = "splashImagesContainer">
			<img class = "splashImage" src = "assets/images/homepage/splash.jpg" alt = "Welcome">
			<img class = "splashImage " src = "assets/images/homepage/splash2.jpg" alt = "Welcome">
			<img class = "splashImage " src = "assets/images/homepage/splash.jpg" alt = "Welcome">
			<img class = "splashImage" src = "assets/images/homepage/splash2.jpg" alt = "Welcome">
			<img class = "splashImage " src = "assets/images/homepage/splash.jpg" alt = "Welcome">
			<img class = "splashImage " src = "assets/images/homepage/splash2.jpg" alt = "Welcome">
		</div>
	</div>
    
	<div class = "newsTitleContainer">
		<div class="titleSection">
			<div class="section__item section__item--start">
				<!-- Content -->
				<header class = "topTitle topTitleStyle1">NEWS</header>
			</div>
		  
			<div class="section__item section__item--end">
				<!-- Content -->
				<header class = "bottomTitle bottomTitleStyle1">最新新闻</header>
			</div>
		</div>
	</div>
	
	

	<div class = "news"> 
		<div class = "newsPanels">
				<!-- Insert panel 1 elements here -->
				<div class = panel>
					<img class = "panelImage" src = "assets/images/homepage/newsImage1.png" alt = "News Image 1">
					<header class = "panelSubtitle">尋-音樂會</header>
					<header class = "panelTitle">SEA TRANSPORTATION</header>
					<p class = "panelDescription">Description</p>
				</div>
				<!-- Insert panel 2 elements here -->
				<div class = panel>
					<img class = "panelImage" src = "assets/images/homepage/newsImage2.png" alt = "News Image 2">
					<header class = "panelSubtitle">第三十天：為穆斯林背景歸主者禱告</header>
					<header class = "panelTitle">AIR TRANSPORTATION</header>
					<p class = "panelDescription">利用国内各大航空公司(如:国航、东航、南航、海航、厦航 、四川航等)优势基础上成立的国内航空货运公司.</p>
				</div>
				<!-- Insert panel 3 elements here -->
				<div class = panel>
					<img class = "panelImage" src = "assets/images/homepage/newsImage3.png" alt = "News Image 3">
					<header class = "panelSubtitle">第二十九天：索馬里的拉漢溫族</header>
					<header class = "panelTitle">LAND TRANSPORT</header>
					<p class = "panelDescription">Description</p>
				</div>
			</div>

			<div class = "whitespace">
				<img id ="plus" src = "assets/images/homepage/+++.png" alt = "+++">
			</div>
	</div>
	
	
	<div class = "aboutUsContainer">
		<img class = "aboutUsImage" src = "assets/images/homepage/mid-section-image1.png" alt = "About Us Image">
		<div class = aboutUsTitleContainer>
			<section class="titleSection">
				<div class="section__item section__item--start">
					<!-- Content -->
					<header class = "topTitle topTitleStyle1">ABOUT US</header>
				</div>
				
				<div class="section__item section__item--end">
					<!-- Content -->
					<header class = "bottomTitle bottomTitleStyle1">關於我們</header>
				</div>
			</section>
		</div>
		
		<div class = aboutUsParagraph>
			<p>基督教創作傳播中心是一個順服耶穌基督主權，遵行父神旨意的非營利基督教機構。我們堅信下列基本真道︰</p>
			<p>1. 神是自有永有，創造天地萬物及人類的主宰。衪是聖父、聖子、聖靈三位一體的獨一真神。</p>
			<p>2. 耶穌基督是真神，也是真人，衪與聖父和聖靈同質、同權、同存、同榮。衪道成肉身，由聖靈感孕，從童貞女馬利亞而生。衪甘願為世人流血贖罪，被釘死在十字架上，第三日從死裡復活，向門徒顯現後升天，成為神與人之間唯一的中保。</p>
			<p>3. 聖靈是信徒的保惠師，與聖父、聖子同質、同權、同存、同榮。衪感動世人知罪、悔改與重生。聖靈永遠與信徒同在</p>
			<p>4. 新、舊約聖經共六十六卷，其原稿都是神所默示，是絕對無誤不變，為基督徒信仰及生活之最高權威與準則。</p>
			<p>5. 人是照著神衪自己的形像和樣式造的，但始祖犯罪，罪因此進入世界，世人從此陷入罪中，與神隔絕，無法自救。</p>
			<p>6. 救贖是出於神的恩典，只有藉著耶穌基督在十字架上的死和復活，才能使凡相信耶穌基督的人罪得赦免，因信被稱為義，藉聖靈重生，獲得永生。</p>
			<p>7. 耶穌基督必再來，建立永恆的國度。將來世人都必復活，在基督面前接受最後審判。信耶穌基督的人復活享永生，永遠與神同在；不信的人復活受永刑，永遠與神隔絕。</p>
		</div>


		<div class = "aboutUsSlideContainer mobile">
			<p class = "aboutUsSlide" id = "aboutUsSlideStart">基督教創作傳播中心是一個順服耶穌基督主權，遵行父神旨意的非營利基督教機構。我們堅信下列基本真道︰</p>
			<p class = "aboutUsSlide">1. 神是自有永有，創造天地萬物及人類的主宰。衪是聖父、聖子、聖靈三位一體的獨一真神。</p>
			<p class = "aboutUsSlide">2. 耶穌基督是真神，也是真人，衪與聖父和聖靈同質、同權、同存、同榮。衪道成肉身，由聖靈感孕，從童貞女馬利亞而生。衪甘願為世人流血贖罪，被釘死在十字架上，第三日從死裡復活，向門徒顯現後升天，成為神與人之間唯一的中保。</p>
			<p class = "aboutUsSlide">3. 聖靈是信徒的保惠師，與聖父、聖子同質、同權、同存、同榮。衪感動世人知罪、悔改與重生。聖靈永遠與信徒同在</p>
			<p class = "aboutUsSlide">4. 新、舊約聖經共六十六卷，其原稿都是神所默示，是絕對無誤不變，為基督徒信仰及生活之最高權威與準則。</p>
			<p class = "aboutUsSlide">5. 人是照著神衪自己的形像和樣式造的，但始祖犯罪，罪因此進入世界，世人從此陷入罪中，與神隔絕，無法自救。</p>
			<p class = "aboutUsSlide">6. 救贖是出於神的恩典，只有藉著耶穌基督在十字架上的死和復活，才能使凡相信耶穌基督的人罪得赦免，因信被稱為義，藉聖靈重生，獲得永生。</p>
			<p class = "aboutUsSlide">7. 耶穌基督必再來，建立永恆的國度。將來世人都必復活，在基督面前接受最後審判。信耶穌基督的人復活享永生，永遠與神同在；不信的人復活受永刑，永遠與神隔絕。</p>
		</div>
		
		<!-- Next/prev buttons -->
		<a class="prev mobile" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next mobile" onclick="plusSlides(1)">&#10095;</a>
		
	</div>
	<!-- Dots/bullets/indicators -->
	<div class="dot-container mobile">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
		<span class="dot" onclick="currentSlide(5)"></span>
		<span class="dot" onclick="currentSlide(6)"></span>
		<span class="dot" onclick="currentSlide(7)"></span>
		<span class="dot" onclick="currentSlide(8)"></span>
	</div>

	<div class = "ministriesTitleContainer">
		<div class="titleSection2">
			<div class="section__item section__item--start">
				<!-- Content -->
				<header class = "topTitle topTitleStyle2">MINISTRIES</header>
			</div>
		  
			<div class="section__item section__item--end">
				<!-- Content -->
				<header class = "bottomTitle bottomTitleStyle2">我们的事工</header>
			</div>
		</div>
	</div>


	<div class = "ministryGrid">
		<div class = "ministryGridItem purp">
			<header class = "ministryTitle">四海之家</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_bible_reading_logo_Purple.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>
		</div>
		<div class = "ministryGridItem pink">
			<header class = "ministryTitle">四海读经会</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_fellowship_logo.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>
		</div>
		<div class = "ministryGridItem purp">
			<header class = "ministryTitle">四海圣经宣教学院</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_music_logo.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>

		</div>
		<div class = "ministryGridItem pink">
			<header class = "ministryTitle">四海音乐学院</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_preach_logo_purple.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>

		</div>

		<div class = "ministryGridItem pink">
			<header class = ministryTitle>影音部</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_bible_reading_logo_Purple.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>

		</div>
		<div class = "ministryGridItem purp">
			<header class = ministryTitle>宣教事工</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_bible_reading_logo_Purple.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>

		</div>
		<div class = "ministryGridItem pink">
			<header class = ministryTitle>出版刊物</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_bible_reading_logo_Purple.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>

		</div>
		<div class = "ministryGridItem purp">
			<header class = ministryTitle>支持我们</header>
			<img class = "ministryImage" src = "assets/images/homepage/4C_bible_reading_logo_Purple.png" alt = "Ministry Image">
			<p class = "ministryDescription">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem vitae, labore explicabo accusamus laboriosam adipisci repellat at nemo
			</p>

		</div>
	</div>
	<!--
	<div class = "ministriesPanels">
		<div class = "ministryPanel">
			<img class = "ministryPanelImage ministryPanel--start" src = "assets/images/homepage/4C_bible_reading_logo_Purple.png" alt = "Ministry Image 1">
			<header class = "ministryPanelTitle">检查维护</header>
			<p class = "ministryPanelDescription ministryPanel--end">定期检查和课护应按部建机的要求对中压配电血进行定期检意</p>
		</div>
		<div class = "ministryPanel">
			<img class = "ministryPanelImage ministryPanel--start" src = "assets/images/homepage/4C_fellowship_logo.png" alt = "Ministry Image 1">
			<header class = "ministryPanelTitle">检查维护</header>
			<p class = "ministryPanelDescription ministryPanel--end">定期检查和课护应按部建机的要求对中压配电血进行定期检意</p>
		</div>
		<div class = "ministryPanel ">
			<img class = "ministryPanelImage ministryPanel--start" src = "assets/images/homepage/4C_music_logo.png" alt = "Ministry Image 1">
			<header class = "ministryPanelTitle">检查维护</header>
			<p class = "ministryPanelDescription ministryPanel--end">定期检查和课护应按部建机的要求对中压配电血进行定期检意</p>
		</div>
		<div class = "ministryPanel">
			<img class = "ministryPanelImage ministryPanel--start" src = "assets/images/homepage/4C_preach_logo_purple.png" alt = "Ministry Image 1">
			<header class = "ministryPanelTitle">检查维护</header>
			<p class = "ministryPanelDescription ministryPanel--end">定期检查和课护应按部建机的要求对中压配电血进行定期检意</p>
		</div>
	</div>
	-->

	<!-- <div class = "supportUs">
		<div class = "supportUsTitleContainer">
			<div class="titleSection2">
				<div class="section__item section__item--start">
					
					<header class = "topTitle topTitleStyle3">Support Us</header>
				</div>
			  
				<div class="section__item section__item--end">
					
					<header class = "bottomTitle bottomTitleStyle3">支持我們</header>
				</div>
			</div>
		</div>
		<div class = "supportUsInfoContainer">
			<img class = "donationImage" src = "assets/images/homepage/donationInfo.png" alt = "Donation Info">
		</div>
	</div> -->

	<div class = "contactUs">
		<div class = "contactUsTitleContainer">
			<div class="titleSection2">
				<div class="section__item section__item--start">
					<!-- Content -->
					<header class = "topTitle topTitleStyle3">Contact Us</header>
				</div>
			  
				<div class="section__item section__item--end">
					<!-- Content -->
					<header class = "bottomTitle bottomTitleStyle3">支持我們</header>
				</div>
			</div>
		</div>

		<div class = "contactInfo">
			<!-- Name, phone #, email -->
			<div class = "contactInfoContainer">
				<input type = "text" id = "name" class = "contactInfoButton" name = "name" maxlength = "50" size = "50" placeholder = "姓名：">
				<input type = "text" id = "phone" class = "contactInfoButton"  name = "phone" maxlength = "11" size = "50" placeholder = "电话：">
				<input type = "text" id = "email" class = "contactInfoButton"  name = "email" maxlength = "50" size = "50" placeholder = "邮箱：">
			</div>

			<!-- Message --> 
			<input type = "text" id = "message" name = "message" maxlength = "1000" size = "50" placeholder = "留言内容：">


			<!-- Submit, Reset -->
			<div class = "contactButtons">
				<button id = "submitButton" class = "contactButton">提交信息</button>
				<button id = "resetButton" class = "contactButton">重置信息</button>
			</div>
			
		</div>
	</div>

	<div id = "subscribe">
		<header class = "subscribeTitle">訂閱我們的最新消息</header>
		<div class = "subscribeWrapper">
			<input type = "text" id = "subscribeField" name = "subEmail" maxlength = "500" size = "100" placeholder = "Want to get our latest news?">
			<button id = "subscribeButton">Subscribe us!</button>
		</div>
	</div>

	<iframe class = "googleMapsWidget" width="1927" height="428" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1927&amp;height=428&amp;hl=en&amp;q=3115%20W.%20Parker%20Rd.,%20Suite%20250%20Plano+(4C%20Ministries)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

	<footer id = "homePageFooter">
		<!--
		<div id = "footerLinksContainer">
			<div class = "footerLinksSection">
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">關於我們</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">基要信仰 / Faith Statement</a>
					<a class = "footerLink" href = "#">使命與目標 / Our mission & goals</a>
					<a class = "footerLink" href = "#">組織架構 / Organization</a>
					<a class = "footerLink" href = "#">我們的同工 / Our Staff</a>
					<a class = "footerLink" href = "#">聯絡我們 / Contact US</a>
				</div>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">宣教部</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">海內外宣教 / Missions</a>
				</div>
			</div>
			<div class = "footerLinksSection">
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">最新消息</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">尋-音樂會</a>
					<a class = "footerLink" href = "#">第三十天：為穆斯林背景歸主者禱告</a>
					<a class = "footerLink" href = "#">第二十九天：索馬里的拉漢溫族</a>
					<a class = "footerLink" href = "#">第二十八天：蘇魯克人–蘇魯海上的穆斯林游民</a>
					<a class = "footerLink" href = "#">第二十七天：緬甸的潘泰人</a>
				</div>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">Follow Us</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">海內外宣教 / Missions</a>
				</div>
			</div>
			<div class = "footerLinksSection">
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">相關資訊<span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">支持我們 / Support us</a>
					<a class = "footerLink" href = "#">有用連結 / Useful LinksUseful Links</a>
				</div>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">關於我們</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "tel:972-398-1170">Tel. & Fax : (972) 398-1170</a>
					<a class = "footerLink" href = "mailto:4cinfo@gmail.com">Email: 4cinfo@gmail.com</a>
				</div>
			</div>
		</div>
		-->
		<div class = footerLinksGrid>
			<div class = flGridItem>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">關於我們</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">基要信仰 / Faith Statement</a>
					<a class = "footerLink" href = "#">使命與目標 / Our mission & goals</a>
					<a class = "footerLink" href = "#">組織架構 / Organization</a>
					<a class = "footerLink" href = "#">我們的同工 / Our Staff</a>
					<a class = "footerLink" href = "#">聯絡我們 / Contact US</a>
				</div>
			</div>
			<div class = flGridItem>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">最新消息</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">尋-音樂會</a>
					<a class = "footerLink" href = "#">第三十天：為穆斯林背景歸主者禱告</a>
					<a class = "footerLink" href = "#">第二十九天：索馬里的拉漢溫族</a>
					<a class = "footerLink" href = "#">第二十八天：蘇魯克人–蘇魯海上的穆斯林游民</a>
					<a class = "footerLink" href = "#">第二十七天：緬甸的潘泰人</a>
				</div>
			</div>
			<div class = flGridItem>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">相關資訊<span></header>
					<div class = "footerLinksList">
						<a class = "footerLink" href = "#">支持我們 / Support us</a>
						<a class = "footerLink" href = "#">有用連結 / Useful Links</a>
					</div>
			</div>
			<div class = flGridItem>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">宣教部</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">海內外宣教 / Missions</a>
				</div>
			</div>
			<div class = flGridItem>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">Follow Us</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "#">海內外宣教 / Missions</a>
				</div>
			</div>
			<div class = flGridItem>
				<header class = "footerLinksSectionHeader"><span class = "footerSectionHeaderSpan">關於我們</span></header>
				<div class = "footerLinksList">
					<a class = "footerLink" href = "tel:972-398-1170">Tel. & Fax : (972) 398-1170</a>
					<a class = "footerLink" href = "mailto:4cinfo@gmail.com">Email: 4cinfo@gmail.com</a>
				</div>
			</div>
		</div>

		<div id = copyrightSection>
			<header id = copyrightLabel>Copyright © 2022 基督教創作傳播中心.</header>
		</div>

	</footer>
	


    
<script src="./js/main.js"></script>
</body>
</html> 

