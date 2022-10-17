{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='FIR' renderAs="line" showValues="0">
{section name="round" loop=$lastrounds}
	{math assign="percent" equation="x / y * 100" x=$lastrounds[round].totalfir y=$lastrounds[round].possiblefir}
    <set value='{$lastrounds[round].totalfir}' toolText="FIR {$lastrounds[round].totalfir}/{$lastrounds[round].possiblefir} ({$percent|round:2}%)" />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}