{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='Putts' renderAs="line">
{section name="round" loop=$lastrounds} 
    <set 
     value='{$lastrounds[round].totalputts}' 
     toolText="{$lastrounds[round].totalputts} Putts"
    />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}
