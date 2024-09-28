
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html>
        <?PHP include ('head.php'); ?>
        <?PHP include ('menue.php'); ?>
                <tr>
                        <td class="mainColumn"><div id="mainColumn">
                        <h1>Der Wärmepumpenrechner</h1>
                        <h2>Berechnung der Wärmepumpenleistung anhand des jährlichen Ölverbrauchs</h2>
                        <div style="float:right"><a href="http://network-it.ch"><img alt="Wärmepumpenrechner" border="0" src="pics/calculator.png"/></a></div>
                        <br />
                        Dieses Tool berechnet überschlagsmässig welche Leistung das neues Heizsystem
                        haben muss, um die alte Ölheizung zu ersetzen.<br />
                        Zum Beispiel eine Wärmepumpe die Energie aus der Luft oder aus dem Erdreich nutzt.<br />
                        Ausserdem bewertet es den Verbrauch der existierenden Heizung
                        <br />
                        <br>
                        <form action="calc1.php" method="POST"> 
                                Ölverbrauch <input type=text name=value1 size=5> Liter pro Jahr<br><br>  
                                <input type=checkbox name=hoch value="ja">über 800 meter ueber Meer <input type=checkbox name=ww value="ja">mit Warmwasseraufbereitung
                                <br><br>
                                EW Sperrdauer am Tag<input type=text name=ew size=2> Stunden<br><br>
                                Wohnfläche<input type=text name=wf size=4> m2<br><br>
                                <input type=submit value="berechnen"> 
                        </form>
        <?PHP include ('footer.php'); ?>
        </body>
</html>
