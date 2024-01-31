<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
    if (window.outerWidth < 375) {
      document.querySelector("meta[name='viewport']").setAttribute("content", 'width=375px');
    }
  </script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $TITLE; ?></title>
  <meta name="description" content="<?php echo $DESC; ?>">
  <link rel="shortcut icon" href="<?php echo $PATH; ?>assets/images/favicon.png">
  <meta name="format-detection" content="telephone=no">
  <script src="<?php echo $PATH; ?>assets/js/main.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $PATH; ?>assets/css/style.css">
</head>

<body>