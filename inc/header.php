<html>
<head>
	<title><?= $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./"></a></h1>

			<ul class="nav">
                <li class="<?= ( $section == 'books'   ? on : null   ) ?>"><a href="catalog.php?cat=books">Books</a></li>
                <li class="<?= ( $section == 'movies'  ? on : null  ) ?>"><a href="catalog.php?cat=movies">Movies</a></li>
                <li class="<?= ( $section == 'music'   ? on : null   ) ?>"><a href="catalog.php?cat=music">Music</a></li>
                <li class="<?= ( $section == 'suggest' ? on : null ) ?>"><a href="suggest.php">Suggest</a></li>
            </ul>

		</div>

	</div>

	<div id="content">