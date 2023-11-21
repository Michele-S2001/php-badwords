<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bad word</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <form class="form" action="text.php" method="POST">
    <label for="text">Inserisci un testo</label>
    <textarea name="text" cols="50" rows="10"></textarea>
    <label for="bad_word">Inserisci la parola del testo da censurare</label>
    <input name="bad_word" type="text" placeholder="Inserisci parola da censurare">
    <button type="submit">Invia</button>
  </form>
</body>
</html>