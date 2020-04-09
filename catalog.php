<?php 

	@include('inc/data.php');

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

<div class="section catalog page">
	<div class="wrapper">
		<h1><?= $pageTitle; ?></h1>
		<ul class="items">
			<?php
				foreach( $catalog as $item => $index ) {
					echo "<li>
									<a href='#'>
										<img src=' {$index['img']} ' alt=' {$index['title']} ' />
										<p>View Details</p>
									</a>
								</li>";
				}
				
			?>
		</ul>
	</div>
</div>

<?php @include("./inc/footer.php"); ?>