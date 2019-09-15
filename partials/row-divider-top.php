<?php 
//if( have_rows('content_rows') ):
	//while( have_rows('content_rows') ): the_row(); 
	
	$top_divider = get_sub_field('top_divider_type');
	$top_divider_color = get_sub_field('top_divider_color');
	$top_divider_height = get_sub_field('top_divider_height');
	$top_divider_position = get_sub_field('top_divider_position');
	$top_divider_bg_color = get_sub_field('top_divider_bg_color');
	
		if( $top_divider ) { ?>
			<div class="flex_content_row_divider_top style-<?php echo $top_divider; ?>" style="<?php if( $top_divider_position == 'on-top' ) { ?>z-index:99999;<?php } ?>"><!-- flex_content_row_divider -->
			<?php if ($top_divider == 'opacity-circle' ) { ?>
			<svg viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0v.48C18.62 9.38 297.81 140 639.5 140 993.24 140 1280 0 1280 0z" fill-opacity=".3"/><path d="M0 .6c14 8.28 176.54 99.8 555.45 119.14C952.41 140 1280 0 1280 0H0z" fill-opacity=".5"/><path d="M726.29 101.2C1126.36 79.92 1281 0 1281 0H1c.05 0 325.25 122.48 725.29 101.2z"/></svg>
			<?php } ?>			
			<?php if ($top_divider == 'mountains' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="divider-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path> <path class="divider-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path> <path class="divider-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path></svg>
			<?php } ?>
			<?php if ($top_divider == 'right-tilt' || $top_divider == 'left-tilt' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="divider-shape-fill" d="M0,6V0h1000v100L0,6z"></path> </svg>
			<?php } ?>
			<?php if ($top_divider == 'drops' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" height="100%" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice"><path class="divider-shape-fill" d="M0 0v1.4c.6.7 1.1 1.4 1.4 2 2 3.8 2.2 6.6 1.8 10.8-.3 3.3-2.4 9.4 0 12.3 1.7 2 3.7 1.4 4.6-.9 1.4-3.8-.7-8.2-.6-12 .1-3.7 3.2-5.5 6.9-4.9 4 .6 4.8 4 4.9 7.4.1 1.8-1.1 7 0 8.5.6.8 1.6 1.2 2.4.5 1.4-1.1.1-5.4.1-6.9.1-3.7.3-8.6 4.1-10.5 5-2.5 6.2 1.6 5.4 5.6-.4 1.7-1 9.2 2.9 6.3 1.5-1.1.7-3.5.5-4.9-.4-2.4-.4-4.3 1-6.5.9-1.4 2.4-3.1 4.2-3 2.4.1 2.7 2.2 4 3.7 1.5 1.8 1.8 2.2 3 .1 1.1-1.9 1.2-2.8 3.6-3.3 1.3-.3 4.8-1.4 5.9-.5 1.5 1.1.6 2.8.4 4.3-.2 1.1-.6 4 1.8 3.4 1.7-.4-.3-4.1.6-5.6 1.3-2.2 5.8-1.4 7 .5 1.3 2.1.5 5.8.1 8.1s-1.2 5-.6 7.4c1.3 5.1 4.4.9 4.3-2.4-.1-4.4-2-8.8-.5-13 .9-2.4 4.6-6.6 7.7-4.5 2.7 1.8.5 7.8.2 10.3-.2 1.7-.8 4.6.2 6.2.9 1.4 2 1.5 2.6-.3.5-1.5-.9-4.5-1-6.1-.2-1.7-.4-3.7.2-5.4 1.8-5.6 3.5 2.4 6.3.6 1.4-.9 4.3-9.4 6.1-3.1.6 2.2-1.3 7.8.7 8.9 4.2 2.3 1.5-7.1 2.2-8 3.1-4 4.7 3.8 6.1 4.1 3.1.7 2.8-7.9 8.1-4.5 1.7 1.1 2.9 3.3 3.2 5.2.4 2.2-1 4.5-.6 6.6 1 4.3 4.4 1.5 4.4-1.7 0-2.7-3-8.3 1.4-9.1 4.4-.9 7.3 3.5 7.8 6.9.3 2-1.5 10.9 1.3 11.3 4.1.6-3.2-15.7 4.8-15.8 4.7-.1 2.8 4.1 3.9 6.6 1 2.4 2.1 1 2.3-.8.3-1.9-.9-3.2 1.3-4.3 5.9-2.9 5.9 5.4 5.5 8.5-.3 2-1.7 8.4 2 8.1 6.9-.5-2.8-16.9 4.8-18.7 4.7-1.2 6.1 3.6 6.3 7.1.1 1.7-1.2 8.1.6 9.1 3.5 2 1.9-7 2-8.4.2-4 1.2-9.6 6.4-9.8 4.7-.2 3.2 4.6 2.7 7.5-.4 2.2 1.3 8.6 3.8 4.4 1.1-1.9-.3-4.1-.3-6 0-1.7.4-3.2 1.3-4.6 1-1.6 2.9-3.5 5.1-2.9 2.5.6 2.3 4.1 4.1 4.9 1.9.8 1.6-.9 2.3-2.1 1.2-2.1 2.1-2.1 4.4-2.4 1.4-.2 3.6-1.5 4.9-.5 2.3 1.7-.7 4.4.1 6.5.6 1.5 2.1 1.7 2.8.3.7-1.4-1.1-3.4-.3-4.8 1.4-2.5 6.2-1.2 7.2 1 2.3 4.8-3.3 12-.2 16.3 3 4.1 3.9-2.8 3.8-4.8-.4-4.3-2.1-8.9 0-13.1 1.3-2.5 5.9-5.7 7.9-2.4 2 3.2-1.3 9.8-.8 13.4.5 4.4 3.5 3.3 2.7-.8-.4-1.9-2.4-10 .6-11.1 3.7-1.4 2.8 7.2 6.5.4 2.2-4.1 4.9-3.1 5.2 1.2.1 1.5-.6 3.1-.4 4.6.2 1.9 1.8 3.7 3.3 1.3 1-1.6-2.6-10.4 2.9-7.3 2.6 1.5 1.6 6.5 4.8 2.7 1.3-1.5 1.7-3.6 4-3.7 2.2-.1 4 2.3 4.8 4.1 1.3 2.9-1.5 8.4.9 10.3 4.2 3.3 3-5.5 2.7-6.9-.6-3.9 1-7.2 5.5-5 4.1 2.1 4.3 7.7 4.1 11.6 0 .8-.6 9.5 2.5 5.2 1.2-1.7-.1-7.7.1-9.6.3-2.9 1.2-5.5 4.3-6.2 4.5-1 7.7 1.5 7.4 5.8-.2 3.5-1.8 7.7-.5 11.1 1 2.7 3.6 2.8 5 .2 1.6-3.1 0-8.3-.4-11.6-.4-4.2-.2-7 1.8-10.8 0 0-.1.1-.1.2-.2.4-.3.7-.4.8v.1c-.1.2-.1.2 0 0v-.1l.4-.8c0-.1.1-.1.1-.2.2-.4.5-.8.8-1.2V0H0zM282.7 3.4z"></path></svg>
			<?php } ?>
			
			<?php if ($top_divider == 'big-clouds' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice"><path class="divider-shape-fill" d="M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z"></path></svg>
			<?php } ?>

			<?php if ($top_divider == 'pyramids' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path class="divider-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path></svg>
			<?php } ?>

			<?php if ($top_divider == 'triangle' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path class="divider-shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path></svg>
			<?php } ?>

			<?php if ($top_divider == 'circle' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none" class="divider-shape-fill"><path d="M0 100 C40 0 60 0 100 100 Z"></path></svg>
			<?php } ?>

			<?php if ($top_divider == 'right-opacity-tilt' || $top_divider == 'left-opacity-tilt' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="divider-shape-fill"><path d="M1280 140V0H0l1280 140z" fill-opacity=".5"/><path d="M1280 98V0H0l1280 98z"/></svg>
			<?php } ?>

			<?php if ($top_divider == 'opacity-triangle' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1280 140" preserveAspectRatio="none" class="divider-shape-fill"><path d="M640 140L1280 0H0z" fill-opacity=".5"/><path d="M640 98l640-98H0z"/></path></svg>
			<?php } ?>

			<?php if ($top_divider == 'right-arc' || $top_divider == 'left-arc' ) { ?>
			<svg viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0s573.08 140 1280 140V0z"/></svg>
			<?php } ?>
			<?php if ($top_divider == 'right-opacity-arc' || $top_divider == 'left-opacity-arc' ) { ?>
			<svg viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0v60s573.09 80 1280 80V0z" fill-opacity=".3"/><path d="M0 0v30s573.09 110 1280 110V0z" fill-opacity=".5"/><path d="M0 0s573.09 140 1280 140V0z"/></svg>
			<?php } ?>
			<?php if ($top_divider == 'opacity-clouds' ) { ?>
			<svg viewBox="0 0 1280 86" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg"><path d="M833.9 27.5c-5.8 3.2-11 7.3-15.5 12.2-7.1-6.9-17.5-8.8-26.6-5-30.6-39.2-87.3-46.1-126.5-15.5-1.4 1.1-2.8 2.2-4.1 3.4C674.4 33.4 684 48 688.8 64.3c4.7.6 9.3 1.8 13.6 3.8 7.8-24.7 34.2-38.3 58.9-30.5 14.4 4.6 25.6 15.7 30.3 30 14.2 1.2 27.7 6.9 38.5 16.2C840.6 49.6 876 29.5 910.8 38c-20.4-20.3-51.8-24.6-76.9-10.5zM384 43.9c-9 5-16.7 11.9-22.7 20.3 15.4-7.8 33.3-8.7 49.4-2.6 3.7-10.1 9.9-19.1 18.1-26-15.4-2.3-31.2.6-44.8 8.3zm560.2 13.6c2 2.2 3.9 4.5 5.7 6.9 5.6-2.6 11.6-4 17.8-4.1-7.6-2.4-15.6-3.3-23.5-2.8zM178.7 7c29-4.2 57.3 10.8 70.3 37 8.9-8.3 20.7-12.8 32.9-12.5C256.4 1.8 214.7-8.1 178.7 7zm146.5 56.3c1.5 4.5 2.4 9.2 2.5 14 .4.2.8.4 1.2.7 3.3 1.9 6.3 4.2 8.9 6.9 5.8-8.7 13.7-15.7 22.9-20.5-11.1-5.2-23.9-5.6-35.5-1.1zM33.5 54.9c21.6-14.4 50.7-8.5 65 13 .1.2.2.3.3.5 7.3-1.2 14.8-.6 21.8 1.6.6-10.3 3.5-20.4 8.6-29.4.3-.6.7-1.2 1.1-1.8-32.1-17.2-71.9-10.6-96.8 16.1zm1228.9 2.7c2.3 2.9 4.4 5.9 6.2 9.1 3.8-.5 7.6-.8 11.4-.8V48.3c-6.4 1.8-12.4 5-17.6 9.3zM1127.3 11c1.9.9 3.7 1.8 5.6 2.8 14.2 7.9 25.8 19.7 33.5 34 13.9-11.4 31.7-16.9 49.6-15.3-20.5-27.7-57.8-36.8-88.7-21.5z" fill-opacity=".5"/><path d="M0 0v66c6.8 0 13.5.9 20.1 2.6 3.5-5.4 8.1-10.1 13.4-13.6 24.9-26.8 64.7-33.4 96.8-16 10.5-17.4 28.2-29.1 48.3-32 36.1-15.1 77.7-5.2 103.2 24.5 19.7.4 37.1 13.1 43.4 31.8 11.5-4.5 24.4-4.2 35.6 1.1l.4-.2c15.4-21.4 41.5-32.4 67.6-28.6 25-21 62.1-18.8 84.4 5.1 6.7-6.6 16.7-8.4 25.4-4.8 29.2-37.4 83.3-44.1 120.7-14.8l1.8 1.5c37.3-32.9 94.3-29.3 127.2 8 1.2 1.3 2.3 2.7 3.4 4.1 9.1-3.8 19.5-1.9 26.6 5 24.3-26 65-27.3 91-3.1.5.5 1 .9 1.5 1.4 12.8 3.1 24.4 9.9 33.4 19.5 7.9-.5 15.9.4 23.5 2.8 7-.1 13.9 1.5 20.1 4.7 3.9-11.6 15.5-18.9 27.7-17.5.2-.3.3-.6.5-.9 22.1-39.2 70.7-54.7 111.4-35.6 30.8-15.3 68.2-6.2 88.6 21.5 18.3 1.7 35 10.8 46.5 25.1 5.2-4.3 11.1-7.4 17.6-9.3V0H0z"/></svg>
			<?php } ?>
			<?php if ($top_divider == 'arrow' ) { ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="xMidYMid slice"><path class="elementor-shape-fill" d="M350,10L340,0h20L350,10z"></path></svg>
			<?php } ?>
			<?php if ($top_divider == 'waves' ) { ?>
			<svg viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M1280 3.4C1050.59 18 1019.4 84.89 734.42 84.89c-320 0-320-84.3-640-84.3C59.4.59 28.2 1.6 0 3.4V140h1280z" fill-opacity=".3"/><path d="M0 24.31c43.46-5.69 94.56-9.25 158.42-9.25 320 0 320 89.24 640 89.24 256.13 0 307.28-57.16 481.58-80V140H0z" fill-opacity=".5"/><path d="M1280 51.76c-201 12.49-242.43 53.4-513.58 53.4-320 0-320-57-640-57-48.85.01-90.21 1.35-126.42 3.6V140h1280z"/></svg>
			<?php } ?>
			<?php if ($top_divider == 'opacity-waves' ) { ?>
			<svg viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M853.893,86.998c-38.859,0-58.811-16.455-77.956-35.051c18.295-10.536,40.891-18.276,73.378-18.276 c38.685,0,64.132,12.564,85.489,28.347C916.192,72.012,900.8,86.998,853.893,86.998z M526.265,80.945 c-6.517-0.562-13.599-0.879-21.41-0.879c-70.799,0-91.337,27.229-134.433,35.662c14.901,3.72,32.118,6.07,52.898,6.07 C470.171,121.797,500.34,103.421,526.265,80.945z" fill-opacity=".3"/><path d="M663.458,109.671c-67.137,0-80.345-23.824-137.193-28.726C567.086,45.555,597.381,0,665.691,0 c61.857,0,85.369,27.782,110.246,51.947C736.888,74.434,717.459,109.671,663.458,109.671z M217.68,94.163 c55.971,0,62.526,24.026,126.337,24.026c9.858,0,18.508-0.916,26.404-2.461c-57.186-14.278-80.177-48.808-138.659-48.808 c-77.063,0-99.96,48.569-151.751,48.569c-40.006,0-60.008-12.206-80.011-29.506v16.806c20.003,10.891,40.005,21.782,80.011,21.782 C160.014,124.57,158.608,94.163,217.68,94.163z M1200.112,46.292c-57.493,0-56.935,46.595-115.015,46.595 c-53.612,0-59.755-39.618-115.602-39.618c-15.267,0-25.381,3.751-34.69,8.749c36.096,26.675,60.503,62.552,117.342,62.552 c69.249,0,75.951-43.559,147.964-43.559c39.804,0,59.986,10.943,79.888,21.777V85.982 C1260.097,68.771,1239.916,46.292,1200.112,46.292z" fill-opacity=".5"/><path d="M1052.147,124.57c-56.84,0-81.247-35.876-117.342-62.552c-18.613,9.994-34.005,24.98-80.912,24.98 c-38.859,0-58.811-16.455-77.956-35.051c-39.05,22.487-58.479,57.724-112.48,57.724c-67.137,0-80.345-23.824-137.193-28.726 c-25.925,22.475-56.093,40.852-102.946,40.852c-20.779,0-37.996-2.349-52.898-6.07c-7.895,1.545-16.546,2.461-26.404,2.461 c-63.811,0-70.366-24.026-126.337-24.026c-59.072,0-57.665,30.407-137.669,30.407c-40.006,0-60.008-10.891-80.011-21.782V140h1280 v-37.212c-19.903-10.835-40.084-21.777-79.888-21.777C1128.098,81.011,1121.397,124.57,1052.147,124.57z"/></svg>
			<?php } ?>
			<?php if ($top_divider == 'cross' ) { ?>
<svg viewBox="0 0 1280 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M1280 0L640 70 0 0v140l640-70 640 70V0z" fill-opacity=".5"/><path d="M1280 0H0l640 70 640-70z"/></svg>
			<?php } ?>

	<?php 
	//endwhile;
//endif; ?>	
	
			</div>
		<?php } ?>



