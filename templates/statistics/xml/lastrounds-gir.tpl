{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='GIR' renderAs="line" showValues="0">
{section name="round" loop=$lastrounds}
	{math assign="percent" equation="x / y * 100" x=$lastrounds[round].totalgir y=18}
    <set value='{$lastrounds[round].totalgir}' toolText="GIR {$lastrounds[round].totalgir}/18 ({$percent|round:2}%)" />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}