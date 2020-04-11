<?php 
include("inc/data.php");
include("inc/functions.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($catalog[$id])) {
        $item = $catalog[$id];
    }
}

if (!isset($item)) {
    header("location:catalog.php");
    exit;
}

$pageTitle = $item["title"];
$section = null;

include("inc/header.php"); ?>

<div class="section page">

    <div class="wrapper">
        
        <div class="breadcrumbs">
            <a href="catalog.php">Full Catalog</a>
            &gt; <a href="catalog.php?cat=<?php echo strtolower($item["category"]); ?>">
            <?php echo $item["category"]; ?></a>
            &gt; <?php echo $item["title"]; ?>
        </div>
        
        <div class="media-picture">
    
        <span>
            <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>" />
        </span>
            
        </div>
        
        <div class="media-details">
            <h1><?= $item["title"] ?></h1>
            <table>
                <tr>
                    <th>Category</th>
                    <td><?= $item["category"] ?></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><?= $item["genre"] ?></td>
                </tr>
                <tr>
                    <th>Format</th>
                    <td><?= $item["format"] ?></td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td><?php $item["year"] ?></td>
                </tr>
                <?php if (strtolower($item["category"]) == "books") : ?>
                          <tr>
                            <th>Authors</th>
                            <td>
                              <?php foreach ($item['authors'] as $author) : ?>
                                  <?= $author . "<BR>" ?>
                              <?php endforeach; ?>
                            </td>
                          </tr>
                          <tr>
                            <th>Publisher</th>
                            <td><?= $item['publisher'] ?></td>
                          </tr>
                          <tr>
                            <th>ISBN</th>
                            <td><?= $item['isbn'] ?></td>
                          </tr>
                <?php elseif (strtolower($item["category"]) == "movies") : ?>
                          <tr>
                            <th>Director</th>
                            <td><?= $item['director'] ?></td>
                          </tr>
                          <tr>
                            <th>Writers</th>
                            <td><?= implode(", ", $item['writers']) ?></td>
                          </tr>
                          <tr>
                            <th>Stars</th>
                            <td><?= implode(", ", $item['stars']) ?></td>
                          </tr>
                <?php elseif (strtolower($item["category"]) == "movies") : ?>
                          <tr>
                            <th>Artist</th>
                            <td><?= $item['artist'] ?></td>
                          </tr>
                <?php endif; ?>    
            </table>
        </div>
    
    </div>

</div>