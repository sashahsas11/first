<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>

    <form  method="get">
      <input type="text" name="txt" value="">
      <input type="submit" name="" value="Enter">
    </form>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
     $get_res=$_GET["txt"];
    echo '<p>Original text->'.$get_res.'</p>';
    mb_regex_encoding('UTF-8');
    mb_internal_encoding("UTF-8");
    $charlist = preg_split('/(?<!^)(?!$)/u', $get_res);
    $kol_el=count($charlist)-1;
    $result='';
    for($i=$kol_el;$i>=0;$i--)
    {
      $result.=$charlist[$i];
    }
    echo 'Result->'.$result;
     ?>
  </body>
</html>
