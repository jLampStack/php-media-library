<?php 
$pageTitle = "Full Catalog";

if(isset($_GET["cat"])) {
	if($_GET["cat"] == "books") {
		$pageTitle = "Books";
		$section = "books";
	} else if($_GET["cat"] == "movies") {
		$pageTitle = "Movies";
		$section = "movies";
	} else if($_GET["cat"] == "music") {
		$pageTitle = "Music";
		$section = "music";
	} else {
		$pageTitle = "Full Catalog";
	}
} 

@include("./inc/header.php"); 
?>

<div class="section page">
	<h1><?= $pageTitle; ?></h1>
</div>

<?php @include("./inc/footer.php"); ?>