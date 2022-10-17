{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='Strokes' renderAs="line">
{section name="round" loop=$lastrounds} 
    <set 
     value='{$lastrounds[round].totalscore}' 
     link="JavaScript:chart('MSLine','/tracker/statistics/round-holes/{$lastrounds[round].roundid}/','trackingChartTwo',920,400);chart('Pie3D', '/tracker/statistics/round-frequency/{$lastrounds[round].roundid}/', 'trackingChartFour', 450, 240);" 
     toolText="Click to view details"
    />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}
