<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajafunktsioonid</title>
</head>

<?php
echo "<h2>Ajafunktsioonid</h2>";
//timezone, juhul kui timezone ei ole määratud, siis php näitab localhost'i aeg
date_default_timezone_set('Europe/Tallinn');
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list</a>";
echo "<br>";
echo "time() - aeg sekundides - ".time();
echo "<br>";
echo "date()-". date("d.m.Y G:i:s", time());
echo "<br>";
echo "date('d.m.Y G:i:s', time());";
echo "<br>";
echo "<pre> 
d- päev 01...31
m - kuu 01...12
y - aasta - nelja kohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
";
echo "</pre>";
echo "<br>";
echo "<strong>Tehted kuupäevaga</strong>";
echo "<br>";
echo "+1 min=" . date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1 tund=". date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 päev". date("d.m.Y G:i:s", time()+60*60*24);

echo "<br><br>";
echo "<strong>Kuupäeva genireerimine</strong>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
$synd=mktime(6,31,01,01,10,2005);
echo "<br>Minu sünnipäev:".date("d.m.Y G:i:s", $synd);
echo "<br><br>";
echo "<strong>Massivi abil näidata kuu nimega</strong>";
echo "<br>";
$kuud=array(1=>'jaanuar','veebruar','märts','aprill','mai','juuni','juuli','august','september','oktober','november','december');
$aasta=date("Y");
$paev=date("d");
$kuu=$kuud[date("m")];
echo "Täna on :".$paev.".".$kuu." ".$aasta ."a";
echo "<br>";
echo "<br>";
echo "div, h3, css, flex:row";