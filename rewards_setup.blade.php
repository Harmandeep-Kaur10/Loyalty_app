<html>
<body>
<!-----------------no rewards enabled banner------------->
<div id="banner" style="display:none; margin-bottom: 15px;" class="Polaris-Banner Polaris-Banner--withinPage" tabindex="0" role="status" aria-live="polite">
  <div class="Polaris-Box" style="--pc-box-width:100%">
    <div class="Polaris-BlockStack" style="--pc-block-stack-align:space-between;--pc-block-stack-order:column">
      <div class="Polaris-Box" style="--pc-box-color: var(--p-color-text-info-on-bg-fill); --pc-box-background: var(--p-color-bg-fill-info); --pc-box-padding-block-start-xs: var(--p-space-300); --pc-box-padding-block-end-xs: var(--p-space-300); --pc-box-padding-inline-start-xs: var(--p-space-300); --pc-box-padding-inline-end-xs: var(--p-space-300); --pc-box-border-start-start-radius: var(--p-border-radius-300); --pc-box-border-start-end-radius: var(--p-border-radius-300);">
        <div class="Polaris-InlineStack" style="--pc-inline-stack-align:space-between;--pc-inline-stack-block-align:center;--pc-inline-stack-wrap:nowrap;--pc-inline-stack-gap-xs:var(--p-space-200);--pc-inline-stack-flex-direction-xs:row">
          <div class="Polaris-InlineStack" style="--pc-inline-stack-wrap:nowrap;--pc-inline-stack-gap-xs:var(--p-space-100);--pc-inline-stack-flex-direction-xs:row">
            <span class="Polaris-Banner--textInfoOnBgFill">
              <span class="Polaris-Icon">
                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                  <path d="M10 14a.75.75 0 0 1-.75-.75v-3.5a.75.75 0 0 1 1.5 0v3.5a.75.75 0 0 1-.75.75Z">
                  </path>
                  <path d="M9 7a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z">
                  </path>
                  <path fill-rule="evenodd" d="M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Zm-1.5 0a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0Z">
                  </path>
                </svg>
              </span>
            </span>
            <h2 class="Polaris-Text--root Polaris-Text--headingSm Polaris-Text--break">Alert</h2>
          </div>
          <button onclick="hide_banner()" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantTertiary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Dismiss notification" type="button">
            <span class="Polaris-Button__Icon">
              <span class="Polaris-Banner--textInfoOnBgFill">
                <span class="Polaris-Icon">
                  <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                    <path d="M12.72 13.78a.75.75 0 1 0 1.06-1.06l-2.72-2.72 2.72-2.72a.75.75 0 0 0-1.06-1.06l-2.72 2.72-2.72-2.72a.75.75 0 0 0-1.06 1.06l2.72 2.72-2.72 2.72a.75.75 0 1 0 1.06 1.06l2.72-2.72 2.72 2.72Z">
                    </path>
                  </svg>
                </span>
              </span>
            </span>
          </button>
        </div>
      </div>
      <div class="Polaris-Box" style="--pc-box-padding-block-start-xs:var(--p-space-300);--pc-box-padding-block-end-xs:var(--p-space-300);--pc-box-padding-block-end-md:var(--p-space-400);--pc-box-padding-inline-start-xs:var(--p-space-300);--pc-box-padding-inline-start-md:var(--p-space-400);--pc-box-padding-inline-end-xs:var(--p-space-300);--pc-box-padding-inline-end-md:var(--p-space-400)">
        <div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-200)">
          <div>
            <span class="Polaris-Text--root Polaris-Text--bodyMd">
              <p>Enable atleast one reward to make widget visible on your website. For any queries Contact Support.</p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------REWARDS CARDS------------>
@php($i = 1)
@foreach($rewards as $reward)
<div class="Polaris-ShadowBevel" style="margin-bottom: 10px; --pc-shadow-bevel-z-index: 32; --pc-shadow-bevel-content-xs: &quot;&quot;; --pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100); --pc-shadow-bevel-border-radius-xs: var(--p-border-radius-300);">
	<div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg-surface);--pc-box-min-height:15%;--pc-box-overflow-x:clip;--pc-box-overflow-y:clip;--pc-box-padding-block-start-xs:var(--p-space-400);--pc-box-padding-block-end-xs:var(--p-space-400);--pc-box-padding-inline-start-xs:var(--p-space-400);--pc-box-padding-inline-end-xs:var(--p-space-400)">
        	<div class="Polaris-BlockStack" style="--pc-block-stack-order:column;--pc-block-stack-gap-xs:var(--p-space-200)">
                	<div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:1fr auto">
				<h2 style="cursor:default;" class="Polaris-Text--root Polaris-Text--headingSm">
					@if(ctype_digit($reward['name']))
						{{ str_replace('amount',$reward['name'],$shop->currency_format) }} off
					@else
						{{$reward['name']}}
					@endif
				</h2>
				<button onclick='open_edit_popup("edit_popup","{{$reward['name']}}")' class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPlain Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" aria-label="Add variant" type="button">
                                	<span class="">Edit</span>
                               	</button>
                     	</div>
			<div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs:1fr auto">
				<p style="cursor:default;" class="Polaris-Text--root Polaris-Text--bodyMd">Cost: {{$reward['cost']}} points</p>
                                <div class="Polaris-ButtonGroup Polaris-ButtonGroup--variantSegmented" data-buttongroup-variant="segmented">
					<div class="Polaris-ButtonGroup__Item">
						<a href="{{env('APP_URL')}}/enable_or_disable_reward/{{$shop->our_passw_token}}?reward_name={{$reward['name']}}&button_type=enable">
                                                        <button id="reward{{$i}}_enable_button" onclick="select_btn(this.id)" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button"
							@if($reward['state'] == 1)
								 style="background-color:#D3D3D3">
							@endif
                                                                <span class="">Enable</span>
							</button>
						</a>
                                     	</div>
					<div class="Polaris-ButtonGroup__Item">
						<a href="{{env('APP_URL')}}/enable_or_disable_reward/{{$shop->our_passw_token}}?reward_name={{$reward['name']}}&button_type=disable">
							<button id="reward{{$i}}_disable_button" onclick="select_btn(this.id)" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="button"
							 @if($reward['state'] == 0)
								style="background-color:#D3D3D3">
							@endif
								<span class="">Disable</span>
							</button>
						</a>
                                       	</div>
                                </div>
                        </div>
                </div>
        </div>
</div>
@php($i++)
@endforeach
<!-------------------EDIT POPUP----------------------->
<div data-portal-id="modal-:R5eq6:" id="edit_popup" style="display:none;">
    	<div class="Polaris-Modal-Dialog__Container Polaris-Modal-Dialog--animateFadeUp Polaris-Modal-Dialog--entering Polaris-Modal-Dialog--entered" data-polaris-layer="true" data-polaris-overlay="true">
		<div id="popup_size" role="dialog" aria-modal="true" aria-label=":Req6:" aria-labelledby=":Req6:" tabindex="-1" class="Polaris-Modal-Dialog">
                    	<div class="Polaris-Modal-Dialog__Modal">
                              	<div class="Polaris-Box" style="--pc-box-background: var(--p-color-bg-surface-tertiary); --pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-end-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400);">
                                     	<div class="Polaris-InlineGrid" style="--pc-inline-grid-grid-template-columns-xs: 1fr auto; --pc-inline-grid-gap-xs: var(--p-space-400);">
                                             	<div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                                                    	<h2 id="heading" style="cursor:default;" class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--break" id=":Req6:"></h2>
                                              	</div>
                                               	<button onclick="close_edit_popup('edit_popup')" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantTertiary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Close" type="button" aria-pressed="false">
                                              		<span class="Polaris-Icon">
                                                         	<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    	<path d="M12.72 13.78a.75.75 0 1 0 1.06-1.06l-2.72-2.72 2.72-2.72a.75.75 0 0 0-1.06-1.06l-2.72 2.72-2.72-2.72a.75.75 0 0 0-1.06 1.06l2.72 2.72-2.72 2.72a.75.75 0 1 0 1.06 1.06l2.72-2.72 2.72 2.72Z">
                                                                     	</path>
                                                              	</svg>
                                                     	</span>
                                             	</button>
                                	</div>
                              	</div>
				<div class="" style="display:grid;grid-template-columns:auto auto">
					<div id="upper_label" class="Polaris-Labelled__LabelWrapper" style="display:none;padding-left:100px;padding-top:20px">
                                		<label id="label" for=":Rq6:" style="position:relative;left:15px;" class="Polaris-Label__Text"></label>
					</div>
                			<div class="Polaris-Labelled__LabelWrapper" style="padding-left:100px;padding-top:20px">
						<label id="cost_label" for=":Rq6:" style="position:relative;left:15px;" class="Polaris-Label__Text">Cost (in Points) :</label>
					</div>
					<form id="myform" name="update_cost" action="" method="POST" style="position:relative;right:40px;" onsubmit="submit_form()">  
					<div id="offInput" class="Polaris-Connected" style="display:none;padding-top:10px;width:300px;top:-41px;left:347px;">
                                		<div class="Polaris-TextField Polaris-TextField--hasValue" style="height:30px;padding-top:2px">
                                           		<input id="offValue" name="off_value" autocomplete="off" class="Polaris-TextField__Input" type="number" aria-labelledby=":Rq6:Label" aria-invalid="false" data-1p-ignore="true" data-lpignore="true" data-form-type="other" value="" min="1" style="width:300px">
                                        		<div class="Polaris-TextField__Backdrop">
                                        		</div>
                                		</div>
                			</div>
					<div id="cost_input_field" class="Polaris-Connected" style="padding-top:10px;width:300px;">
						<div class="Polaris-TextField Polaris-TextField--hasValue" style="height:30px;padding-top:2px">
                                        		<input id="input_field" name="reward_cost" autocomplete="off" class="Polaris-TextField__Input" type="number" aria-labelledby=":Rq6:Label" aria-invalid="false" data-1p-ignore="true" data-lpignore="true" data-form-type="other" value="" min="1" style="width:300px" required>
                                        		<div class="Polaris-TextField__Backdrop">
                                        		</div>
                                		</div>
					</div>
        			</div>
				<br>
          			<div class="Polaris-InlineStack" style="--pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
              				<div class="Polaris-Box" style="--pc-box-border-color: var(--p-color-border); --pc-box-border-style: solid; --pc-box-border-block-start-width: var(--p-border-width-025); --pc-box-padding-block-start-xs: var(--p-space-400); --pc-box-padding-block-end-xs: var(--p-space-400); --pc-box-padding-inline-start-xs: var(--p-space-400); --pc-box-padding-inline-end-xs: var(--p-space-400); --pc-box-width: 100%;">
                				<div class="Polaris-InlineStack" style="--pc-inline-stack-align: space-between; --pc-inline-stack-block-align: center; --pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-400); --pc-inline-stack-flex-direction-xs: row;">
                  					<div class="Polaris-Box">
                  					</div>
                  					<div class="Polaris-InlineStack" style="--pc-inline-stack-wrap: wrap; --pc-inline-stack-gap-xs: var(--p-space-200); --pc-inline-stack-flex-direction-xs: row;">
                    						<button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit">
                      							<span class="">Save Changes</span>
                    						</button>
                  					</div>
                				</div>
              				</div>
            			</div>
      			</div>
        	</div>
	</div>
	<div class="Polaris-Backdrop">
	</div>
</div>
</form>
<!-------------------JAVASCRIPT------------------->
<script>
	function open_edit_popup(id, reward_name)
        {
		document.getElementById(id).style.display="block";
		@foreach($rewards as $reward)
                	if(reward_name == "{{$reward['name']}}")
                	{
				if(reward_name.match(/^[0-9]+$/) != null)
				{
					document.getElementById('heading').innerHTML = "{{$shop->currency_format}}".replace('amount','{{$amount_off_reward}}')+" off";
					document.getElementById('label').innerHTML = "Amount :";
					document.getElementById('offValue').value = "{{$amount_off_reward}}";
				}
				else
				{
					document.getElementById('heading').innerHTML = "{{$reward['name']}}";
				}
				if(reward_name.match(/^[0-9]+$/) != null || reward_name.includes('%'))
				{
					document.getElementById('upper_label').style.display = "block";
					document.getElementById('offInput').style.display = "block";
					document.getElementById('popup_size').style.cssText = "position: absolute;top: 99px;left: 200px;height: 63px;width: 616px;";
					document.getElementById('cost_label').style.cssText = "position:relative;left:-345px;top:63px;";
					document.getElementById('cost_input_field').style.cssText = "padding-top:10px;width:300px;left:347px;top:-15px;";
					document.getElementById('offValue').required = "true";
				}
				if(reward_name.includes('%'))
				{
					document.getElementById('label').innerHTML = "Percentage :";
					document.getElementById('offValue').value = "{{explode('%',$percent_off_reward)[0]}}";
					document.getElementById('offValue').max = "100";
				}
				if(reward_name =='Free Shipping')
				{
					document.getElementById('upper_label').style.display = "none";
					document.getElementById('offInput').style.display = "none";
					document.getElementById('popup_size').style.cssText = "";
                                        document.getElementById('cost_label').style.cssText = "position:relative;left:15px;";
					document.getElementById('cost_input_field').style.cssText = "padding-top:10px;width:300px;";
				}
                        	document.getElementById('myform').action = "{{env('APP_URL')}}/api/save_updated_costs/{{$shop->our_passw_token}}?reward_name={{$reward['name']}}";
				document.getElementById('input_field').value = "{{$reward['cost']}}";
			}
		@endforeach
        }

	function close_edit_popup(id)
	{
		document.getElementById(id).style.display="none";
	}

	function submit_form()
	{
                startLoading();
	}

	function select_btn(btn_id)
	{
        	document.getElementById(btn_id).style.backgroundColor = "#D3D3D3";

        	if(btn_id.includes("enable"))
        	{
                	document.getElementById(btn_id.replace('enable','disable')).style.backgroundColor = "white";
        	}

        	else
        	{
                	document.getElementById(btn_id.replace('disable','enable')).style.backgroundColor = "white";
		}
		popupToast("updated");
	}

	function hide_banner()
	{
		document.getElementById("banner").style.display = "none";
	}

	window.onload = function()
	{
		if({{$enabled_rewards}} == 0)
		{
			document.getElementById("banner").style.display = "block";
		}
	}

	stopLoading();
	setTitleBar('Rewards Setup');
</script>
</html>
