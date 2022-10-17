{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='Penalties' renderAs="line">
{section name="round" loop=$lastrounds} 
    <set 
     value='{$lastrounds[round].totalpenalties}' 
     toolText="{$lastrounds[round].totalpenalties} Penalties"
    />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}
