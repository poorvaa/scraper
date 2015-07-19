<?php
	require "core.php";
	
	//take the url from user for which data set has to be created
	$url="http://www.jabong.com/home-living/?q=home%20%26%20furniture&qc=home%20%26%20furniture&r=1";
	
	
	// to get html code of the url
	$html=getHTMLCode($url);
	
	$regex='/<img src="(?P<img>[^"]*)" width="176" height="255" alt="" title="" class="itm-img" \/>/';
	preg_match_all($regex,$html,$image);
	
	/* $regex='/class="offer-in txt-up clr-fff fs11">(?P<oldOrNew>[^<]*)<\/small>/';
	preg_match_all($regex,$html,$new); */
	
	 $regex='/<span class="qa-brandName title mt30 c999 prod-ellipsis">(?P<GG>[^<]*)<\/span>/';
	preg_match_all($regex,$html,$g);  
	
	$regex='/<span class="qa-brandTitle fs11 c999 prod-ellipsis">(?P<TITLE>[^<]*)<\/span>/';
	preg_match_all($regex,$html,$title);
	
	$regex='/<strong class="fs16 qa-price">(?P<markedPrice>[^<]*)<\/strong>/';
	preg_match_all($regex,$html,$m_price);
	$i=0;
	echo "<ol>";
	 foreach(@$image[img] as $a)
	 {
		echo "<li><img src = '$a'>";	
		echo @$new[oldOrNew][$i];
		echo @$g[GG][$i];
		echo @$title[TITLE][$i];
		echo @$m_price[markedPrice][$i];
		echo "</li><br>";
		$i++;
	 }
	 echo "</ol>";
	/* $x = "hi"; 
	echo '$x'; print $x
	echo "$x";  print value of $x*/
	
	


?>