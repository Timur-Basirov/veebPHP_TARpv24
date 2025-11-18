<?php
echo "<h2>Git käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre> git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
    <pre>
        git config --global user.name "Timur Basirov"
        git config --global user.email "atimur.basirov@gmail.com"
        git config --global --list
    </pre>
</li>
<li>
    Ssh võti loomine
    <pre>
        ssh-keygen -o -t rsa -C "atimur.basirov@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    jälgimise lisamine ja commit'i tegemine
    <pre>
        git status
        git add .
        git commit -a -m "commiti tekst"
    </pre>
</li>
<?php
echo "<li>GITHUB projektiga sidumine";
