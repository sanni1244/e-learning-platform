<?php
   session_start();
   // Page was not reloaded via a button press
   if (!isset($_POST['add'])) {
       $_SESSION['attnum'] = 1; // Reset counter
   }
?>

<form method='post'>
<input name='add' type="submit" value='+'>
<?php echo $_SESSION['attnum']++ ?>: 
</form>