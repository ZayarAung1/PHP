<?php
if(isset($_COOKIE["favourite_color"])) {
    echo "Your Favorite color is " . $_COOKIE["favourite_color"];
} else {
    echo "No Favorite color set.";
}
?>