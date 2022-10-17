{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='Sand Save' renderAs="line" showValues="0">
{section name="round" loop=$lastrounds}
	{math assign="percent" equation="x / y * 100" x=$lastrounds[round].totalsandsavehit y=$lastrounds[round].totalsandsave}
    <set value='{$percent|round:2}' toolText="Sand Save {$lastrounds[round].totalsandsavehit}/{$lastrounds[round].totalsandsave} ({$percent|round:2}%)" />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}