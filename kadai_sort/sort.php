<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php課題sort</title>
</head>
<body>
  
  <?php
  $nums = [15, 4, 18, 23, 10];
  
  function sort_2way ($array, $order) {
    if ($order === TRUE) {
      echo '昇順にソートします。' . '<br>';
      sort($array);
      foreach ($array as $key) {
        echo $key .'<br>';
      }
    } else {
      echo '降順にソートします。';
      rsort($array);
      foreach ($array as $key) {
        echo $key . '<br>';
      }
    }
  }
  sort_2way($nums, TRUE);
  sort_2way($nums, FALSE);
  
  

  ?>
  
</body>
</html>