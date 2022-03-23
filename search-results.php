<!--Grace Zang 20065628 -->
<?php 
include_once "inc/functions.php"; 
include_once "inc/search.php"; 
$searchWord = get_string_form_data("Search", $_REQUEST);
$searchResult = search_for_term($searchWord);
?>

<!DOCTYPE html>
<html lang="en">

    <?php print_head('Department of Agriculture | Search',False); ?>

    <body>

    <?php include_once('inc/header.php') ?>
    
    <main>
    
    <h1>Search Results:</h1>

    <?php if (count($searchResult) == 0){ ?>
        <p>Sorry, but there were no matches for "<?php echo $searchWord; ?>".</p>
    <?php }else{ ?>
        <p>Your search for "<?php echo $searchWord; ?>" produced <?php echo count($searchResult); ?> result(s).</p>
        <ul>
        <?php foreach ($searchResult as $search){ ?>
            <li>
            <a href=<?php echo $search["link"]?>><?php echo $search["type"] ?></a>
            </li>
<?php      } ?>
        </ul>
<?php    }  ?>
        </main>

<?php include_once('inc/footer.php') ?>
	
    </body>
    </html>

