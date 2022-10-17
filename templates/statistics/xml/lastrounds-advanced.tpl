{include file="statistics/xml/include/chart-header.tpl"}
<categories>
{section name="round" loop=$lastrounds} 
    <category label='{$lastrounds[round].date|date_format:"%d/%m/%Y"}' />
{/section}
</categories>
<dataset seriesName='FIR' color="555DAD">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].totalfir}' />
{/section}
</dataset>
<dataset seriesName='GIR' color="5E9830">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].totalgir}' />
{/section}
</dataset>
<dataset seriesName='Sand Saves' color="9D801D">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].totalsandsavehit}' />
{/section}
</dataset>
<dataset seriesName='Up/Downs' color="AB2A2A">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].totalupdownhit}' />
{/section}
</dataset>
<dataset seriesName='Putts' color="379183">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].totalputts}' />
{/section}
</dataset>
<dataset seriesName='Penalties' color="673261">
{section name="round" loop=$lastrounds} 
    <set value='{$lastrounds[round].totalpenalties}' />
{/section}
</dataset>
{include file="statistics/xml/include/chart-footer.tpl"}
