<html >
<head>
<title>Connexion à  la base</title>
</head>
<body>
    
   <table border="1" >
    <h2>  Connexion à  la base </h2>
    <tr > 
       <td  width="130"><div align="left" >&nbsp;&nbsp;&nbsp;Code département</div></td>
       <td  width="270"><div align="center"  >&nbsp;&nbsp;&nbsp;Département</div></td>
       <td width="150"><div align="left" >&nbsp;Nom Responsable</div></td>
       <td width="200"><div align="left" >&nbsp;Contact</div></td>
	   <td width="200"><div align="left" >&nbsp;Nombre des étudiants</div></td>
    </tr>					
<?php
require ("cnx.php");
$table="tab_dept";
$sql = "SELECT * FROM $table " ;
$requete = odbc_do($cnx, $sql) ;  
    //affichage des données:
    while( $contenu = odbc_fetch_object( $requete ) )
    {
        echo'<tr>';
		echo( "<td width=60><div  align=\"left\">&nbsp;&nbsp;&nbsp;".$contenu->id_dept."</div></td>\n" );
		echo( "<td width=400><div align=\"left\">&nbsp;&nbsp;&nbsp;".$contenu->libelle."</div></td>\n" );
		echo( "<td width=150><div align=\"left\">".$contenu->responsable."</div></td>\n" );
		echo( "<td width=300><div align=\"left\">".$contenu->contact."</div></td>\n" );
		echo( "<td width=300><div align=\"left\">".$contenu->nombre."</div></td>\n" );		
		echo '</tr>'."\n";
		}
?>									  
</Table>
 </body>
</html>