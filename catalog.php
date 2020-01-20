<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Katalogu i plote";
$section = null;

if (isset($_GET["cat"])) {
    if ($_GET["cat"] == "libra") {
        $pageTitle = "Libra";
        $section = "libra";
    } else if ($_GET["cat"] == "filma") {
        $pageTitle = "Filma";
        $section = "filma";
    } else if ($_GET["cat"] == "muzike") {
        $pageTitle = "Muzike";
        $section = "muzike";
    }
}

include("inc/header.php"); ?>

<div class="section catalog page">

    <div class="wrapper">

        <h1><?php
        if ($section != null) {
            echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
        }
        echo $pageTitle; ?></h1>

        <ul class="items">
            <?php
            $categories = array_category($catalog,$section);
            foreach ($categories as $id) {
                echo get_item_html($id,$catalog[$id]);
            }
            ?>
        </ul>

    </div>
</div>

<?php include("inc/footer.php"); ?>
