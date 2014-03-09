<div id="sidebar-left">

<?php

/* USER-AGENTS
================================================== */
/*function check_user_agent ( $type = NULL ) {
        $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );
        if ( $type == 'bot' ) {
                // matches popular bots
                if ( preg_match ( "/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent ) ) {
                        return true;
                        // watchmouse|pingdom\.com are "uptime services"
                }
        } else if ( $type == 'browser' ) {
                // matches core browser types
                if ( preg_match ( "/mozilla\/|opera\//", $user_agent ) ) {
                        return true;
                }
        } else if ( $type == 'mobile' ) {
                // matches popular mobile devices that have small screens and/or touch inputs
                // mobile devices have regional trends; some of these will have varying popularity in Europe, Asia, and America
                // detailed demographics are unknown, and South America, the Pacific Islands, and Africa trends might not be represented, here
                if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
                        // these are the most common
                        return true;
                } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
                        // these are less common, and might not be worth checking
                        return true;
                }
        }
        return false;
}	*/

$ismobile = check_user_agent('mobile');
?>

    <a href="?page_id=2"; title="About Mary Dowey & this Website">
        <div id="authorImage"></div></a>

	
	<a href="?page_id=2"; title="About Mary Dowey & this Website"> <div class="aboutCaption"  >
		ABOUT <br/>MARY DOWEY <br/>FOOD & WINE <br/> WRITER IN <br/> PROVENCE </div>  </a>
		<!--<div style="position : absolute; top:40px; width: 100px;left:150px;">
	'I have a home in Provence & visit every single place that I review'</div>-->
	
    <br/><br/><br/><br/><br/><br/>

    <a href="mailto:marydowey@gmail.com" Send email to Mary Dowey; title="Contact">
         <div class="contact"> CONTACT </div></a>
	  <br/> <br/> <br/>
	  <?php
		if($ismobile) 
		{ ?>
			<div id="personalQuoteMobile">
		<?php
		} else {?>
		   <div id="personalQuote">
		<?php
		} ?>
	   'With a home in Provence, I visit every single place that I review.'</div>
	  	<br/>
	
<!--
email address as link
    <div style="position : absolute; top:105px; left:150px;color:#990099; ; font-weight:normal;  text-decoration:none;">
    CONTACT</div>
    <br/>

    <div style="font-size : 10pt; position: absolute; top:123px; left:150px;" >
    <a style="color:#000000"; href="mailto:mdowey@iol.ie"; title="Send email to Mary Dowey"> mdowey@iol.ie</a></div>
    <br/>    -->

	<!-- books on left sidebar
	<div class="searchCaption";>
	<a style="color : #990099; " href="?page_id=165" title="FAVOURITE BOOKS FROM MY FRENCH SHELF - ORDER NOW! ">
		FAVOURITE BOOKS ABOUT FRANCE</a></div> -->

  

    <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) {} ?>

    <div class="superSponsors">SUPER SPONSORS</div>
        
    <ul>
		<li><a href="http://www.provenceguide.co.uk/" title="A wealth of information for visitors to Provence's biggest region, the Vaucluse">
		<div id="vaucluseTourismLogo"></div> </a></li>
		<br/>
		<li><a href="http://www.rhone-wines-tourism.com/" title="An important site for wine visitors to the Rhone Valley - North and South">
		<div id="interRhoneLogo"></div> </a></li>
        <br/>
        <li><a href="http://www.chateauneuf.com/english/index.html" title="Find out all about the most famous wine region in the Southern Rhone ">
		<div id="chateauneufLogo"></div> </a></li>
        <br/>
        <li><a href="http://www.jnwine.com" title="Wine merchant with excellent selection - buy online for delivery UK or Ireland ">
		<div id="jnWineLogo"></div> </a></li>
		
		<li><a href="http://www.vins-luberon.fr/en/" title="Lively Luberon wines site with excellent tourist information">
		<div id="luberonLogo"></div> </a></li>
		
		<li><a href="http://www.ardeche-guide.com/ardeche-tourisme/en/1/home_page.html?utm_source=provencefoodandwine&utm_medium=banniere&utm_campaign=partenariatprovence" title="At Provence's back door, dramatic scenery and superb food products">
		<div id="ardecheLogo"></div> </a></li>
        
		
        <!--<li><a href="http://www.worldfirst.com/for-you/foreign-exchange/?ID=988" title="A leading currency brokerage that offers bank-beating exchange rates and service ">
		<div id="worldFirstLogo"></div> </a></li>-->
	</ul>
<br/> 
	<div class="superSponsors"> BEST OF THE BEST</div> <br/> 
	<div class="somePersonalFavourites">SOME PERSONAL FAVOURITES</div>
	    
    <ul>	
	        <li><a href="http://www.provencefoodandwine.com/2010/11/25/castelas/" title="CASTELAS">
				<div id="best8Castelas"></div> </a> <div style="position:relative;padding-top:3px">CASTELAS</div> <br/> </li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2010/11/25/castelas/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.castelas.com" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		</div>
	
	        <li><a href="http://www.provencefoodandwine.com/2013/05/20/hostellerie-berard/" title="HOSTELLERIE B&Eacute;RARD">
				<div id="best9HostellerieBerard"></div> </a> <div style="position:relative;padding-top:3px">HOSTELLERIE B&Eacute;RARD</div> <br/> </li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2013/05/20/hostellerie-berard/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.hotel-berard.com" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		</div>
		
		<li><a href="http://www.provencefoodandwine.com/2010/06/04/clos-des-papes/" title="CLOS DES PAPES">
				<div id="best8ClosdesPapes"></div> </a> <div style="position:relative;padding-top:3px">CLOS DES PAPES</div> <br/> </li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2010/06/04/clos-des-papes/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.clos-des-papes.fr" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		</div>
		
		<li><a href="http://www.provencefoodandwine.com/2010/05/19/auberge-du-vin/" title="AUBERGE DU VIN">
		<div id="best2AubergeDuVin"></div> </a> <div style="position:relative;padding-top:3px"; >AUBERGE DU VIN</div> <br/></li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2010/05/19/auberge-du-vin/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.aubergeduvin.com" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		
		</div>
		
		<li><a href="http://www.provencefoodandwine.com/2011/08/10/bastide-du-claux/" title="BASTIDE DU CLAUX">
		<div id="best3BastideDuClaux"></div> </a> <div style="position:relative;padding-top:3px"; >BASTIDE DU CLAUX</div> <br/></li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2011/08/10/bastide-du-claux/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.bastideduclaux.fr" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		
		</div>
		
		<li><a href="http://www.provencefoodandwine.com/2010/06/21/chateau-pesquie/" title="CH&Acirc;TEAU PESQUI&Eacute;">
		<div id="best4ChateauPesquie"></div> </a> <div style="position:relative;padding-top:3px"; >CH&Acirc;TEAU PESQUI&Eacute;</div> <br/></li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2010/06/21/chateau-pesquie/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.chateaupesquie.com" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		
		</div>
		
		<li><a href="http://www.provencefoodandwine.com/2012/08/23/kelly-mcauliffe-wine-tours/" title="KELLY McAULIFFE WINE TOURS">
		<div id="best5KellyMcAuliffeWineTours"></div> </a> <div style="position:relative;width:180px; padding-top:3px;" >KELLY McAULIFFE WINE TOURS</div> <br/></li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2012/08/23/kelly-mcauliffe-wine-tours/" title="Read the Post"> Post</a> </li>
			</ul>
		
		</div>
		
		<li><a href="http://www.provencefoodandwine.com/2012/01/13/chateau-la-coste/" title="CH&Acirc;TEAU LA COSTE">
		<div id="best6ChateauLaCoste"></div> </a> <div style="position:relative;padding-top:3px;class="recentPosts">CH&Acirc;TEAU LA COSTE</div> <br/></li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2012/01/13/chateau-la-coste/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.chateau-la-coste.com" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		
		</div>
		
		<li><a href="http://www.provencefoodandwine.com/2010/06/25/domaine-du-grapillon-dor/" title="DOMAINE DU GRAPILLON D’OR">
				<div id="best7DomaineDuGrap"></div> </a> <div style="position:relative;padding-top:3px">DOMAINE DU GRAPILLON D'OR</div> <br/> </li>
		<div id="postOrWebsite">
			<ul>
				<li>Go To ->  <a href="http://www.provencefoodandwine.com/2010/06/25/domaine-du-grapillon-dor/" title="Read the Post"> Post</a> </li>
				<li><a href="http://www.domainedugrapillondor.com" title="Visit the website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website</a></li>
			</ul>
		</div>		
		
	</ul>
	
	<br/> 
	
	<div class="otherSitesAndBooks">
		<a class="otherSitesAndBooks" href ="http://www.provencefoodandwine.com/testimonials" 
			title="WHAT READERS SAY ABOUT provencefoodandwine.com "> WHAT READERS SAY ABOUT provencefoodandwine.com </a>
	</div>

	<br/> 


    <div class="otherSitesAndBooks">OTHER SITES WORTH FOLLOWING</div>
	<ul>
		<li><a href="http://www.theprovencepost.com" ><!--title="Intriguing news and views from food and travel writer Julie Mautner"> -->
		The Provence Post</a></li>
		<li><a href="http://www.decanter.com/" ><!--title="Heaps of information from the world's best wine magazine">-->
		Decanter</a></li>
		<li><a href="http://french-word-a-day.typepad.com/" ><!--title="A painless and intriguing way to polish up your French">-->
		French Word-A-Day </a></li>
		<li><a href="http://jancisrobinson.com/" ><!--title="Breadth and depth from one of Britain's most articulate wine writers">-->
		JancisRobinson.com </a></li>
        <li><a href="http://provence.angloinfo.com" ><!--title="An extensive practical directory relating to life in Provence">-->
		AngloINFO Provence </a></li>
		<li><a href="http://drinkrhone.com" ><!--title="Authoritative wine lore from seasoned Rhone specialist John Livingstone-Learmonth">-->
		drinkrhone.com </a></li>
        <li><a href="http://www.go-provence.com" ><!--title="News from the Cote d'Azur hinterland">-->
		Provence from Fayence </a></li>
		<li><a href="http://www.chateauneuf.dk/en/front.htm" ><!--title="Excellent Rhone resource from a Danish writer steeped in the region">-->
		chateauneuf.dk </a></li>
		<li><a href="http://www.wine-pages.com" ><!--title="UK wine writer Tom Cannavan's widely followed site also covers beer and whisky">-->
		wine-pages.com </a></li>
		<li><a href="http://www.myfrenchlife.org" ><!--title="Fascinating online magazine for French people and francophiles">-->
		My French Life </a></li>
		<li><a href="http://www.signal-blog.co.uk" ><!--title="News from a publisher with a strong line-up of books about Provence ">-->
		Signal Books blog  </a></li>
		<li><a href="http://Marseille-provence.info" >
		Marseille-provence.info  </a></li>
		<li><a href="http://www.provenceguru.com" >
		Provence Guru </a></li>
                <li><a href="http://www.slowlanetravel.com" >
		slowlanetravel.com </a></li>
		
	</ul>

<br/>        <br/>
    <!-- <a href="?page_id=428 " title="Find out what foods are in season">        </a>     -->
    <div class="recentPosts"; style="color:green">FOODS TO ENJOY IN SEASON</div> <br/>

<span style="color: #3366ff;">WINTER</span>   <br/>
truffles      <br/>
chestnuts      <br/>
game           <br/>
freshly picked olives     <br/>
new season's olive oil    <br/>          <br/>
<span style="color: #00ff00;">SPRING</span>  <br/>
asparagus         <br/>
strawberries     <br/>
cherries        <br/>
fresh goat's cheeses      <br/>
lamb          <br/>                     <br/>
<span style="color: #ff6600;">SUMMER</span><br/>
apricots              <br/>
peaches               <br/>
nectarines            <br/>
melons                <br/>
tomatoes              <br/>
fresh herbs            <br/>
figs                 <br/>
lavender honey          <br/>        <br/>
<span style="color: #993300;">AUTUMN</span><br/>
apples              <br/>
pears          <br/>
grapes            <br/>
quinces            <br/>
garlic               <br/>
pumpkins             <br/>
mushrooms            <br/>
walnuts              <br/>
almonds              <br/>


<br/>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar-left") ) :  endif; ?>

</div>

