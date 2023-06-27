<?php
include('db.php');

// Check if 'recipes_id' parameter is present in the URL
if (isset($_GET['recipes_id'])) {
    $id = $_GET['recipes_id'];

    // Delete the recipe from the database
    $sql = "DELETE FROM recipes WHERE recipes_id='$id'";
    if (mysqli_query($con, $sql)) {
        echo "Recipe deleted successfully.";
    } else {
        echo "Error deleting recipe: " . mysqli_error($con);
    }
} else {
    echo "No recipe ID provided.";
}
?>
