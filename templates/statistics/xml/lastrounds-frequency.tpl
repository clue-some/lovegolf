{include file="statistics/xml/include/chart-header.tpl"}
{section name="count" loop=$strokes}
{if $strokes[count].strokes}
<set label='{$strokes[count].strokes} Strokes' value='{$strokes[count].frequency}' displayValue='{$strokes[count].frequency} x {$strokes[count].strokes} Strokes' />
{/if}
{/section}
{include file="statistics/xml/include/chart-footer.tpl"}