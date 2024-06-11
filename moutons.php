<?php 
$moutons = [['Danny', 75], ['Richard',60]];
array_push($moutons, ['Gérard',120]);
function calcul($moutons){
  $i = 0;
  $sumValMoutons=0;
  foreach ($moutons as $mouton) {
    $sumValMoutons = $sumValMoutons + $mouton[1];
    $i++;
  }
  return $sumValMoutons / $i;
}
function addMoutons($moutons, $nb){
  for($j=0; $j < $nb; $j++){
	$randNameMouton = "";
	$nbCharsNameMouton=rand(3,15);
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
    $nbChars = strlen($chaine);
	$randValMoutons = rand(10,200);
	for($k=0; $k<$nbCharsNameMouton; $k++)
    {
        $randNameMouton .= $chaine[rand(0, ($nbChars-1))];
    }
	array_push($moutons, [$randNameMouton, $randValMoutons]);
  }
  return $moutons;
}
$moutons = addMoutons($moutons, 100);
echo "Moyenne de la valeur de mes ".count($moutons)."moutons :".calcul($moutons);
?>
