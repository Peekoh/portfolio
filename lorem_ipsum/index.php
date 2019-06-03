<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lorem Ipsum</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
 <!--  <script src="main.js"></script> -->
</head>
<body>
  <div id="header">
  <h1>Fantasy Babble Lorem Ipsum</h1>
  <form method="GET" action="" name="create" id="form">
    <label># of Paragraphs:<input type="number" name="p-num" min="1" max="10"> </label>
    <input type="submit" name="submit" value="Submit" id="submit">
  </form>
</div>
  <div id="output">
    <?php 
      $words = array(
        'illusion', 'tome', 'tis', 'is', 'if', 'of', 'the', 'of the', 'tonight', 'next', 'shadow', 'magic', 'beast', 'wizard', 'witch', 'dragon',
        'brew', 'forest', 'enchanting', 'ghost', 'hills', 'moon', 'mystical', 'potion', 'kingdom', 'sage',
        'scroll', 'troll', 'talisman', 'valor', 'venom', 'mana', 'staff', 'wand', 'zounds','grimoire', 'accursed',
        'pyromancer',  'alchemy', 'amulet', 'arcane', 'cantrip', 'chimera', 'conjure', 'curse', 'divine',
        'fire', 'necromancer', 'rune', 'spell', 'void'
      );
  
    if ($_SERVER['REQUEST_METHOD'] === "GET"){
  
    $paragraph_num= $_GET['p-num'];
      
    //Paragraph length
    for ($i = 0; $i <  $paragraph_num; $i++){
      $paragraph_length = (mt_rand(2,7));
      $paragraph = "";
  
    //Sentence length
    for ($j=0; $j < $paragraph_length; $j++){
        $sentence_length = (mt_rand(12,23));
        shuffle($words);
  
    $sentence = "";
  
    for($k = 0; $k < $sentence_length; $k++){
        $sentence .= ($words[$k]). " ";
      }

    $sentence = rtrim($sentence, " "); //remove extra space
    $sentence .= "."; //add period
    $sentence = ucfirst($sentence); //cap first letter
    $paragraph .= " " . $sentence; //add space at begin of sentence

    }
    echo $paragraph;
    echo "<br><br>";
    }
    }
    ?>
  </div>
</body>
<script>
  //Hide output DIV before its populated
   (function() {
     output =  document.getElementById('output');
     txt = output.innerHTML;
   if(txt.trim() === "") {
    output.style.display="none";
   }
})();
  

</script>
</html>


