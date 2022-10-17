<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet 
  version="1.0"
  xmlns:sm="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
  xmlns:fo="http://www.w3.org/1999/XSL/Format"
  xmlns="http://www.w3.org/1999/xhtml">
 
  <xsl:output method="html" indent="yes" encoding="UTF-8"/>

  <xsl:template match="/">
<html>
<head>
<title>XML Sitemap</title>
<style type="text/css">
body {
	background-color: #DDD;
	font: normal 80%  "Trebuchet MS", "Helvetica", sans-serif;
	margin:0;
	text-align:center;
}
#cont{
	margin:auto;
	width:800px;
	text-align:left;
}
a:link {
	color: #0180AF;
	text-decoration: underline;
}
a:hover {
	color: #666;
}
h1 {
	background-color:#fff;
	padding:20px;
	color:#00AEEF;
	text-align:left;
	font-size:32px;
	margin:0px;
}
h3 {
	font-size:12px;
	background-color:#B8DCE9;
	margin:0px;
	padding:10px;
}
h3 a {
	float:right;
	font-weight:normal;
	display:block;
}
th {
	text-align:center;
	background-color:#00AEEF;
	color:#fff;
	padding:4px;
	font-weight:normal;
	font-size:12px;
}
td{
	font-size:12px;
	padding:2px;
	text-align:left;
}
tr {background: #fff}
tr:nth-child(odd) {background: #f0f0f0}

#footer {
	background-color:#B8DCE9;
	padding:10px;
}
</style>
</head>
<body><div id="cont">
<h1><xsl:if test="sm:urlset/sm:url/sm:mobile">Mobile </xsl:if>XML Sitemap<xsl:if test="sm:sitemapindex"> Index</xsl:if></h1>
<h3>
<a href="http://www.xml-sitemaps.com">www.xml-sitemaps.com</a>
<xsl:choose>
<xsl:when  test="sm:sitemapindex"> 
Total sitemap files listed in this index: <xsl:value-of select="count(sm:sitemapindex/sm:sitemap)"/>
</xsl:when>
<xsl:otherwise> 
Total URLs in this sitemap file: <xsl:value-of select="count(sm:urlset/sm:url)"/>
</xsl:otherwise>
</xsl:choose>
</h3>

<xsl:apply-templates />

<div id="footer">
Created with Standalone Sitemap Generator,
Copyright (c)2005-2010 <a href="http://www.xml-sitemaps.com/standalone-google-sitemap-generator.html">XML Sitemaps</a>
</div>
</div>

</body>
</html>
  </xsl:template>
 
 
  <xsl:template match="sm:sitemapindex">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<th></th>
<th>URL</th>
<th>Last Modified</th>
</tr>
<xsl:for-each select="sm:sitemap">
<tr> 
<xsl:variable name="loc"><xsl:value-of select="sm:loc"/></xsl:variable>
<xsl:variable name="pno"><xsl:value-of select="position()"/></xsl:variable>
<td><xsl:value-of select="$pno"/></td>
<td><a href="{$loc}"><xsl:value-of select="sm:loc"/></a></td>
<xsl:apply-templates/> 
</tr>
</xsl:for-each>
</table>
  </xsl:template>
 
  <xsl:template match="sm:urlset">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<th></th>
<th>URL</th>
<xsl:if test="sm:url/sm:lastmod"><th>Last Modified</th></xsl:if>
<xsl:if test="sm:url/sm:changefreq"><th>Change Frequency</th></xsl:if>
<xsl:if test="sm:url/sm:priority"><th>Priority</th></xsl:if>
</tr>
<xsl:for-each select="sm:url">
<tr> 
<xsl:variable name="loc"><xsl:value-of select="sm:loc"/></xsl:variable>
<xsl:variable name="pno"><xsl:value-of select="position()"/></xsl:variable>
<td><xsl:value-of select="$pno"/></td>
<td><a href="{$loc}"><xsl:value-of select="sm:loc"/></a></td>
<xsl:apply-templates/> 
</tr>
</xsl:for-each>
</table>
  </xsl:template>

<xsl:template match="sm:loc|image:image">
</xsl:template>

<xsl:template match="sm:lastmod|sm:changefreq|sm:priority">
<td>
	<xsl:apply-templates/>
</td>
</xsl:template>

</xsl:stylesheet>
