<?php
	/*
		Make sure to configure the sv_loadingurl in your server.cfg correctly before reporting an issue.
		An example sv_loadingurl is:
		sv_loadingurl "http://yoursite.com/index.php?steamid=%s&mapname=%m"

		In the browser DO NOT use ?steamid=%s&mapname=%m just simply type in the URL like this: http://yoursite.com/

		IF YOU ARE LOOKING FOR BOX SPECIFIC SETTINGS PLEASE LOOK IN THE " BOXES " DIRECTORY THEN THE ROW THE BOX IS AT. EDIT THE BOXES .PHP FILE.
	*/

	// GENERAL SETTINGS
	$default_steam64 = '76561197988497435'; // Default Steam64 ID if you're viewing in browser
	$default_map = 'rp_harbor'; // Default map if you're viewing in browser
	$SteamAPIKey = '93653CDE7ECA4133EFAF5B2122531F9D'; // SteamAPI key (http://steamcommunity.com/dev/apikey)

	$global_text_colour = '#FFF'; // Hex or colour name (Default: #FFF)
	$banner = 'img/banner.png'; // URL or directory link for a banner. Make sure they're not too big! It can be left blank (Default: img/banner.png)
	$banner_align = 'left'; // Banner alignment (left / center)

	$display_map_img = true; // (true / false)
	$gametracker_maps = false; // (true / false) - If this is enabled it iwll grab maps from gametracker.

	$enable_music = true; // Enable music? (Selects random .ogg soundfile from the music directory) (true / false) (Default: true)
	$music_volume = 0.5; // Music volume (Default: 0.5) Can be anywhere from 0.1 to 1

	// Alternatively, use youtube IDs for music instead of the music directory(Music has to be enabled for this to work):
	// A youtube ID is the string after v= in a youtube URL.
	// Youtube_names is the name of the track.
	$youtube_ids = array(
		'wdW9Qd5fbCc',
		'fpyfC9iEDTU',
		'ndR6hTZO47s',
		'XqgmayuleBs',
		'r7s0IE285jI',
		'aZbH_ZEe4x0',
		'9U8uA702xrE',
		'QslJYDX3o8s'
	);
	$youtube_names = array(
		'한동근 - 이 소설의 끝을 다시 써보려 해 ',
		'임창정 - 내가 저지른 사랑 ',
		'케이윌 K.Will – 녹는다 ',
		'케이윌(K.Will) & 매드 클라운(Mad Clown) - 그게 뭐라고 ',
		'X Song - 볼빨간 사춘기',
		'나만 안되는 연애 - 볼빨간 사춘기',
		'우주를 줄게 - 볼빨간 사춘기',
		'러시안 룰렛 - 레드벨벳'
	);


	// BACKGROUND SETTINGS
	$bg_color = '#004051'; // Background colour (Default: #004051)
	$bg_img = 'img/metro.png'; // URL or directory link for background image. It can be left blank (Default: img/metro.png)
	$map_bg = false; // display map images as the background image? (true / false)

	$enable_img_cycling = false; // Enable cycling through of background images located in the backgrounds folder(.JPG or .PNG) (Default: false)
	$img_cycling_timer = 2000; // Timer in miliseconds (Default: 2000)

	$enable_cycle_colours = false; // Enable cycling background colours? (true / false) If this isn't working please empty $bg_img (Default: false)
	$colours = array( // Background colours for the cycling backgrounds
		'#004051',
		'#005166',
		'#006d8a',
		'#148321',
		'#009a69',
		'#0023a7'
	);

	// GLOBAL BOX SETTINGS
	$one_colour = ''; // Set this if you want all the boxes to have ONE specific colour(A colour value, hex code or colour name)
	$one_gradient = array(
		'', // Left colour
		'' // Right colour
	);

	// PROGRESS BAR SETTINGS
	$progress_bg = '#eaeaea'; // The background colour of the progress bar
	$progress_inner = '#004051'; // The inner colour of the progress bar(When there is progress made)
	$show_gif_spinner = true; // Show the animated loading spinner (true / false) If false it shows a static spinner

?>
