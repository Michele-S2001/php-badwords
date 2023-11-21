<?php 
#variabile contentente la parola da censurare 
$word = $_POST['bad_word'];

# variabile contentente il testo
$text = "Un bug, quindi, è definito come un errore nel codice sorgente di un programma che può provocare un malfunzionamento di un software o di una componente hardware. In alcuni casi ci troviamo davanti a errori impercettibili, cioè che non pregiudicano l'utilizzo del dispositivo, e di cui difficilmente ci si accorge. In alcuni casi ci troviamo davanti a errori impercettibili, cioè che non pregiudicano l'utilizzo del dispositivo, e di cui difficilmente ci si accorge";

#testo alterato
$censured_text = str_replace($word, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>text</title>
</head>
<body>
  <!-- stampo il testo -->
  <p><?php echo $text; ?></p>
  
  <!-- stampo la lunghezza originale del testo -->
  <p>La lunghezza originale del testo è <?php echo strlen($text); ?> caratteri</p>

  <!-- stampo di nuovo il testo con eventualmente la parola censurata -->
  <p><?php echo $censured_text ?></p>

  <!-- stampo la lunghezza del testo attuale -->
  <p>La lunghezza attuale del testo è <?php echo strlen($censured_text); ?> caratteri</p>
</body>
</html>