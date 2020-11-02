<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>連想配列を使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>連想配列を使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php 
		$product = [ "name" => "スマートフォン", "price" => 35000, "description" => "最新機種です" ];
		
		foreach ($product as $key => $value) {
			echo $key. ":". $value. "<br>";
		}
		?>
	</div>
</body>
</html>
