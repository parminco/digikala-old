<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="imagge">
    <input type="submit" name="submit">
</form>

<?php
print_r($_POST['imagge']);
?>