
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
                        <p>
                        Der Ersatz einer alten Ölheizung durch eine Wärmepumpe ist eine sinnvolle Entscheidung für mehr Nachhaltigkeit und Effizienz. Wärmepumpen nutzen erneuerbare Energiequellen wie die Luft oder das Erdreich und sind damit nicht nur umweltfreundlicher, sondern langfristig auch kosteneffizienter. Sie reduzieren den CO₂-Ausstoss erheblich, tragen zum Klimaschutz bei und verringern die Abhängigkeit von fossilen Brennstoffen. Zudem profitiert man von stabileren Energiekosten, da die Preise für fossile Brennstoffe stark schwanken.
                        </p>
                        <p>
                        Dieses Tool berechnet überschlagsmässig die benötigte Leistung der neuen Wärmepumpe, um die alte Ölheizung zu ersetzen. Dabei ermittelt es auch die erforderliche Erdsondenlänge und analysiert den Energieverbrauch des bestehenden Heizsystems.                        <br />
                        </p>
                        <form action="calc1.php" method="POST"> 
                                Ölverbrauch <input type=text name=value1 size=5> Liter pro Jahr<br><br>  
                                <input type=checkbox name=hoch value="ja">über 800 meter über Meer <input type=checkbox name=ww value="ja">mit Warmwasseraufbereitung
                                <br><br>
                                EW Sperrdauer am Tag<input type=text name=ew size=2> Stunden<br><br>
                                Wohnfläche<input type=text name=wf size=4> m2<br><br>
                                <input type=submit value="berechnen"> 
                        </form>
        <?PHP include ('footer.php'); ?>
        </body>
</html>
