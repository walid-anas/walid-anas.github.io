<?php

// paramètres de la base 
$bd="c:\TP_base\base.mdb";
$DSNLess="DRIVER={Driver do Microsoft Access (*.mdb)}; DBQ=$bd";
// Connexion au DSN nouvellement créé
$cnx=@odbc_connect($DSNLess,'','');
if(!$cnx)
{
//Si erreur de connexion
echo "Impossible de se connecter";
}
?>