<!DOCTYPE html>
<html>
<head><h1>Select The Items You Want to Buy!</h1>></head>>
<body>

<form action="print_selected.php" method="get">
  <input type="checkbox" name="select_items[]" value="Shoe"> Shoe <br>
  <input type="checkbox" name="select_items[]" value="Jeans"> Jeans <br>
  <input type="checkbox" name="select_items[]" value="Shirt"> Shirt <br>
  <input type="checkbox" name="select_items[]" value="Watch"> Watch <br>
  <input type="checkbox" name="select_items[]" value="Sweater"> Sweater <br>
  <input type="submit"> 
</form>

<?php 
?>

</body>
</html>