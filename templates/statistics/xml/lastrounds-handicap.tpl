{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='Strokes' renderAs="bar" color="">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].totalscore|number_format}'{if !$lastrounds[round].trackhandicap} color="CCCCCC"{/if} link="JavaScript:chart('MSLine','/tracker/statistics/round-holes/{$lastrounds[round].roundid}/','trackingChartTwo',920,500);" />
{/section}
</dataset>
<dataset seriesName='Handicap' renderAs="line" parentYAxis="S" color="">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].handicapafter|number_format:1}' link="JavaScript:chart('MSLine','/tracker/statistics/round-holes/{$lastrounds[round].roundid}/','trackingChartTwo',920,500);" />
{/section}
</dataset>
<dataset seriesName='Handicap Change' renderAs="line" parentYAxis="S" color="">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].handicapchange|number_format:1}' link="JavaScript:chart('MSLine','/tracker/statistics/round-holes/{$lastrounds[round].roundid}/','trackingChartTwo',920,500);" />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}
