<?php 
$blogs = array (
  array("Why mistakes in life are important?","https://www.startsfromhere.com/life/why-mistakes-in-life-are-important","https://www.startsfromhere.com/assets/startsfromhere/images/contents/life/why-mistakes-in-life-are-important.jpg"),
  array("8 ways to become unstoppable warrior in life","https://www.startsfromhere.com/life/ways-to-become-unstoppable-warrior-in-life","https://www.startsfromhere.com/assets/startsfromhere/images/contents/life/ways-to-become-unstoppable-warrior-in-life.jpg"),
  array("Signs you are doing well and good in life","https://www.startsfromhere.com/life/signs-you-are-doing-well-and-good-in-life","https://www.startsfromhere.com/assets/startsfromhere/images/contents/life/signs-you-are-doing-well-and-good-in-life.jpg"),
  array("Life: Build your own professional network","https://www.startsfromhere.com/life/build-your-own-professional-network-in-life","https://www.startsfromhere.com/assets/startsfromhere/images/contents/life/build-your-own-professional-network-in-life.jpg")
);

$i = 0;
foreach($blogs as $blog){
	$blogs_data[$i] = new stdClass();
	$blogs_data[$i]->title = $blog[0];
	$blogs_data[$i]->url = $blog[1];
	$blogs_data[$i]->image = $blog[2];
	$i++;
}
//echo'<pre>';print_r($data['blogs_data']);exit;
?>
<!DOCTYPE html>
<html>
<head>
<title>Life Blogs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Life</b> Blogs</a>
    <div class="w3-right w3-hide-small">
      <a href="#topics" class="w3-bar-item w3-button">Topics</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
    </div>
  </div>
</div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/w3images/architect.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Life</b></span> <span class="w3-hide-small w3-text-light-grey">Blogs</span></h1>
  </div>
</header>

<div class="w3-content w3-padding" style="max-width:1564px">
  <div class="w3-container w3-padding-32" id="topics">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Topics</h3>
  </div>
  <div class="w3-row-padding">
	<?php foreach($blogs_data as $blog_data){ ?>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="<?php echo $blog_data->image; ?>" alt="<?php echo $blog_data->title; ?>" style="width:100%">
		<center><a href="<?php echo $blog_data->url; ?>"><?php echo $blog_data->title; ?></a></center>
      </div>
    </div>
	<?php } ?>
  </div>
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Life blogs is a website where someone regularly records their thoughts or experiences or talks about aspects of their daily lives.</p>
  </div>
</div>

<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">lifeblogs.com</a></p>
</footer>

</body>
</html>
