<h1>Home page</h1>
<?php
	while($news = $list_news->fetch_assoc()) {
		$news_id = $news['id'];
		echo $news['id'].' ---- '.$news['name'];
		echo "<a href='index.php?news_id=$news_id'> Detail</a>";
		echo "<br>";
	}
?>