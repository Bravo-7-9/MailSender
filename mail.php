<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $message = $_POST["alert"];
  $message = wordwrap($message,70);
  mail("bravo-7-9@outlook.com","MCSCADA Alert", $message);
}
?>
</html>
