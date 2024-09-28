
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html>
          <?PHP include ('head.php'); ?>
          <?PHP include ('menue.php'); ?>
          <tr>
               <td class="mainColumn">
                    <div id="mainColumn">
                    <h1>Der Wärmepumpenrechner</h1>
                    <h2>Auswertung</h2>
                    <div style="float:right"><a href="http://network-it.ch"><img alt="Wärmepumpenrechner" border="0" src="pics/calculator.png"/></a></div>
                         <?php 

                         $number1 = $_POST['value1']; 
                         $ww = $_POST['ww']; 
                         $hoch = $_POST['hoch']; 
                         $ew = $_POST['ew'];
                         $wf = $_POST['wf'];
                              if(!$number1){ 
                                   echo("Bitte Verbrauch eingeben"); 
                              } 

                              if(!preg_match("[0-9]", $number1)){ 
                                   echo("Bitte nur Nummern eingeben"); 
                              } 

                         if($ww == "ja" and $hoch == "ja"){
                              $result =sprintf("%01.1f",$number1 / 330); 
                              echo("für $number1 l Öl mit Warmwasseraufbereitung ist die benötigte Heizleistung bei über 800m $result kW<br><br>");
                              } 

                              elseif($hoch == "ja"){ 
                                   $result =sprintf("%01.1f",$number1 / 295); 
                                   echo("für $number1 l Öl ist die benötigte Heizleistung bei über 800m $result kw<br><br>");   
                              }
                         
                              elseif($ww == "ja"){ 
                                   $result =sprintf("%01.1f",$number1 / 300); 
                                   echo("für $number1 l Öl mit Warmwasseraufbereitung ist die benötigte Heizleistung $result kw<br><br>"); 
                              }
                         
                              else {  
                                   $result =sprintf("%01.1f",$number1 / 265); 
                                   echo("für $number1 l Öl ist die benötigte Heizleistung $result kW<br><br>");
                              }

                         $wpl =sprintf("%01.1f", $result / (24 - $ew) * 24);
                         $wpd =sprintf("%01.1f", 24 - $ew);
                         echo("Bei einer Laufdauer von $wpd Stunden am Tag, muss die Wärmepumpe eine Wäremleistung von<b> $wpl </b>kW haben.");

                         $wpe =sprintf("%01.1f", $wpl / 4);
                         $wpea =sprintf("%01.1f", $wpe * 1800);
                         echo("Dafür braucht sie ca. $wpe kW elektrische Leistung.<br><br> Das sind im Jahr ca.<b> $wpea </b>kWh Strom.<br><br>");

                         $sl =sprintf("%01.0f", $wpl * 1000 / 50);
                         echo("Eine Erdsonde sollte mindestens<b> $sl m </b>tief sein.<br><br>");

                              if(!preg_match('/^\d+$/', $wf)){ 
                                   echo("Wenn Sie möchten können sie <a href=index.php>zurück</a> und die Wohnfläche eingeben"); 
                              }

                              else {
                                   $qm =sprintf("%01.0f", $result * 1000 / $wf);
                              
                                   echo("Das Gebäude verbraucht <b>$qm Watt pro Quadratmeter</b><br>");

                                   if($qm > 60){
                                   echo("<img src=pics/caution.jpg> Sie verbrauchen sehr viel Energie für die Heizung, eine Sanierung der Gebäudehülle wird sicher den Komfort erhöhen und grosse Kosteneinspahrungen bringen.");
                                             } 

                                        elseif(qm >= 31){ 
                                        echo("<img src=pics/caution.jpg> Ihr Energieverbrauch ist im Mittelfeld, wenn Sie teure Energie wie Öl oder Strom verbrauchen, könnte sich eine Sanierung an der Gebäudehülle lohnen. Sie können aber bereits jetzt auf ein alternatives Heizssystem umsteigen.");   
                                             } 
                                   else {   
                                        echo("<img src=pics/leaf.jpg> Gratulation! Ihr Haus verbraucht sehr wenig Energie, dies entspricht einem Minergie Haus, ideal um auf eine Wärmepumpe oder Solarenergie umzusteigen.");
                                        }
                                   }
                         ?>
                         <br><br>
                         weitere Informationen beim Fachplaner Ihrer Wahl, checken Sie die Anzeigen hier:

                         <?PHP include ('footer.php'); ?>
     </body>
</html>
