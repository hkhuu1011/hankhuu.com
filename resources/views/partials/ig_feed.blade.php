<section class="instagram hover-underline">
	<div class="block">
		<div class="container">
			<div class="section-title sliding-u-l-r">Instagram Feed</div>
		</div>
		<div class="section-underline"></div>
		<div class="container">
			<div class="content">
				<?php
					// Supply a user id and an access token
					$userid = "30758156";
					$accessToken = "30758156.70679d8.954c4b9f252d4deb877bbb76621026a2";

					// Gets our data
					function fetchData($url){
					     $ch = curl_init();
					     curl_setopt($ch, CURLOPT_URL, $url);
					     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
					     $result = curl_exec($ch);
					     curl_close($ch);
					     return $result;
					}

					// Pulls and parses data.
					$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}&count=5");
					$result = json_decode($result);
				?>

				<?php foreach ($result->data as $post): ?>
					<!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
					<a class="group" rel="group1" href="<?= $post->images->standard_resolution->url ?>"><img class="ig-img" src="<?= $post->images->thumbnail->url ?>"></a>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>