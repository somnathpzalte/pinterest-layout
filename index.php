<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
  <title>Pinterest | PHP</title>
  <meta name="Description" content="pinterest layout to display blog">
  <meta name="Keywords" content="blog,pinterest,layout">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
<div class="masonry-wrapper">
<div class="masonry">
<?php
    $articles = file_get_contents("https://cdn.pinkvilla.com/feed/fashion-section.json");
    $articles = array_reverse(json_decode($articles));

    usort($articles, function($a, $b) {
      return $a->viewCount <=> $b->viewCount;
    });
	  foreach($articles as $value):?>
  <div class="masonry-item">
    <a href="http://www.pinkvilla.com<?php echo $value->path;?>" target="_blank">
	<img src="<?php echo $value->imageUrl;?>" class="masonry-content" alt="<?php echo $value->title;?>" title="<?php echo $value->title;?>">
	</a>
  </div>
   <?php endforeach;?>
  
</div>

</div>
</body>
</html>