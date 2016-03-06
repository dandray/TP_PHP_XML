<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html"/>

<xsl:template match="/">
<html>
   <head>
     <title>Base de données produits</title>
     <style type="text/css">
	   th {background-color:silver;}
	   td {border-style:solid; border-width:1px;}
     </style>
   </head>
   <body>

<h1>Base de données produits</h1>
<table border="1">
<tr><th>Nom</th><th>Numero</th><th>Societe</th><th>Lieu</th><th>FF</th><th>Euros</th></tr>
<xsl:for-each select="produits/postes" >
<xsl:sort select="nom"
lang="language-code"
order="ascending"/>
<tr>
<td><xsl:value-of select="nom"/></td>
<td><xsl:value-of select="numero"/></td>
<xsl:for-each select="fabricant">
<td><xsl:value-of select="societe"/></td>
<td><xsl:value-of select="lieu"/></td>
</xsl:for-each>
<xsl:for-each select="prix">
<td><xsl:value-of select="."/></td>
</xsl:for-each>
</tr>
</xsl:for-each>
</table>

</body>
    </html>
    
</xsl:template>
</xsl:stylesheet>
