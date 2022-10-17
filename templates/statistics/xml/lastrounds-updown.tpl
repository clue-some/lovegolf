{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='Up & Down' renderAs="line" showValues="0">
{section name="round" loop=$lastrounds}
	{math assign="percent" equation="x / y * 100" x=$lastrounds[round].totalupdownhit y=$lastrounds[round].totalupdown}
    <set value='{$percent|round:2}' toolText="Up & Down {$lastrounds[round].totalupdownhit}/{$lastrounds[round].totalupdown} ({$percent|round:2}%)" />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}