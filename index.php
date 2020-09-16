<!DOCTYPE html>
<html lang = "ru">
<head>
  <meta charset="utf-8">
  <link rel = "stylesheet" href = "css/style.css">
  <title>PHP website...</title>
</head>

<body>
  <!--php  include '/header.html'; ?-->

  <div class = "header">
    <a class = "logo"></a>
    <a class = "settings"></a>
  </div>


  <div class = "outerWindow">
    <div class = "windowView">
      <div class = "msgbox"><?php include('data.txt'); ?></div>
    </div>
    <form method="post">
      <input type="text" name="textdata" class="msg">
      <input type="submit" name="submit" value=">" class="send">
      <input type="submit" name="clear" value="X" class="clear">
    </form>

  </div>



</body>
<script> </script>
<script>

</script>
</html>

<?php
if(isset($_POST['clear']))
{
  $fp = fopen("data.txt", "w");
  fclose($fp);
}
?>



<?php
if(isset($_REQUEST['submit']))
{
  $data = $_POST['textdata'];
  $fp = fopen('data.txt', 'a');
  fwrite($fp, $data);
  fclose($fp);
}
?>
