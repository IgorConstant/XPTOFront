<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Lorem ipsum">
  <meta name="keywords" content="Lorem ipsum">
  <meta name="author" content="Igor Henrique Constant">

  <title>Concurso XPTO</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&family=Josefin+Sans:wght@100;700&display=swap" rel="stylesheet">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/7bc0885a91.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <?php include('pages/header.php') ?>
  </header>

  <main>
    <section id="introBlock">
      <?php include('pages/intro.php') ?>
    </section>
    <section id="about">
      <?php include('pages/about.php') ?>
    </section>
    <section id="imgBlock">
      <?php include('pages/imgBlock.php') ?>
    </section>
    <section id="cards">
      <?php include('pages/cards.php') ?>
    </section>
    <section id="tableBlock">
      <?php include('pages/tableBlock.php') ?>
    </section>
  </main>

  <footer>
    <?php include('pages/footer.php') ?>
  </footer>

  <!-- JS -->
  <script src="assets/js/main.js"></script>
</body>

</html>