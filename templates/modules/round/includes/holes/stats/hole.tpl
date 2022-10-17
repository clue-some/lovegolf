							
									  <tr class="scDetails">

										<td>
											<p>
												<input id="{$holefir}" onchange="{literal}if ($('{/literal}#{$holefir}{literal}:checked').val() == 1) { $('#{/literal}{$holefirposition}{literal}center').removeAttr('disabled'); } else { $('#{/literal}{$holefirposition}{literal}center').attr('disabled', 'disabled'); $('#{/literal}{$holefirposition}{literal}').val('0'); }{/literal}" name="{$holefir}"{if $tee.$holepar <= 3} disabled="disabled"{/if} value="1" type="checkbox"{if $post.$holefir == "1"} checked="checked"{/if} />
												{if $tee.$holepar <= 3}
												<select id="{$holefirposition}" name="{$holefirposition}" disabled="disabled">
													<option value="">--</option>
												</select>
												{else}
												<select id="{$holefirposition}" name="{$holefirposition}">
													<option value="0">- Choose -</option>
													<option{if $post.$holefirposition == "centre"} selected="selected"{/if} id="{$holefirposition}center" value="centre"{if !$post.$holefir} disabled="disabled"{/if}>Centre</option>
													<option{if $post.$holefirposition == "left"} selected="selected"{/if} value="left">Left</option>
													<option{if $post.$holefirposition == "right"} selected="selected"{/if} value="right">Right</option>
													<option{if $post.$holefirposition == "short"} selected="selected"{/if} value="short">Short</option>
												</select>
												{/if}
											</p>
										</td>
										
										<td>
											<p>
												<input id="{$holegir}" onchange="{literal}if ($('{/literal}#{$holegir}{literal}:checked').val() == 1) { $('#{/literal}{$holegirposition}{literal}pin').removeAttr('disabled'); } else { $('#{/literal}{$holegirposition}{literal}pin').attr('disabled', 'disabled'); $('#{/literal}{$holegirposition}{literal}').val('0'); }{/literal}" name="{$holegir}" value="1" type="checkbox"{if $post.$holegir == "1"} checked="checked"{/if} />
												<select id="{$holegirposition}" name="{$holegirposition}">
													<option value="0">- Choose -</option>
													<option{if $post.$holegirposition == "pin"} selected="selected"{/if} id="{$holegirposition}pin" value="pin"{if !$post.$holegir} disabled="disabled"{/if}>Pin</option>
													<option{if $post.$holegirposition == "left"} selected="selected"{/if} value="left">Left</option>
													<option{if $post.$holegirposition == "right"} selected="selected"{/if} value="right">Right</option>
													<option{if $post.$holegirposition == "long"} selected="selected"{/if} value="long">Long</option>
													<option{if $post.$holegirposition == "short"} selected="selected"{/if} value="short">Short</option>
												</select>												
											</p>
										</td>

										<td>
											<p>
												<input id="{$holeupdown}"onchange="{literal}if ($('{/literal}#{$holeupdown}{literal}:checked').val() == 1) { $('{/literal}#{$holeupdownhit}{literal}').removeAttr('disabled'); } else { $('{/literal}#{$holeupdownhit}{literal}').attr('disabled', 'disabled'); }{/literal}" name="{$holeupdown}" value="1" type="checkbox"{if $post.$holeupdown == "1"} checked="checked"{/if} />
												<select id="{$holeupdownhit}" name="{$holeupdownhit}"{if !$post.$holeupdown} disabled="disabled"{/if}>
													<option value="">- Choose -</option>
													<option{if $post.$holeupdownhit == "1"} selected="selected"{/if} value="1">Hit</option>
													<option{if $post.$holeupdownhit == "0"} selected="selected"{/if} value="0">Miss</option>
												</select>
											</p>
										</td>
										
										<td>
											<p>
												<input id="{$holesandsave}"onchange="{literal}if ($('{/literal}#{$holesandsave}{literal}:checked').val() == 1) { $('{/literal}#{$holesandsavehit}{literal}').removeAttr('disabled'); } else { $('{/literal}#{$holesandsavehit}{literal}').attr('disabled', 'disabled'); }{/literal}" name="{$holesandsave}" value="1" type="checkbox"{if $post.$holesandsave == "1"} checked="checked"{/if} />
												<select id="{$holesandsavehit}" name="{$holesandsavehit}"{if !$post.$holesandsave} disabled="disabled"{/if}>
													<option value="">- Choose -</option>
													<option{if $post.$holesandsavehit == "1"} selected="selected"{/if} value="1">Hit</option>
													<option{if $post.$holesandsavehit == "0"} selected="selected"{/if} value="0">Miss</option>
												</select>
											</p>
										</td>
										
										<td><p><input id="{$holeputts}" name="{$holeputts}" type="text" class="scEntryForm" value="{$post.$holeputts}" /></p></td>

										<td><p><input id="{$holepenalties}" name="{$holepenalties}" type="text" class="scEntryForm" value="{$post.$holepenalties}" /></p></td>

									  </tr>
									  