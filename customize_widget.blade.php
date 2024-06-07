<html>
<body>
<!-------card----------->
<form id="myform" action="{{env('APP_URL')}}/api/store_customization/{{$shop->our_passw_token}}" method="POST" onsubmit="submit_customization()">
@csrf
<div class="Polaris-ShadowBevel" style="--pc-shadow-bevel-z-index: 32; --pc-shadow-bevel-content-xs: &quot;&quot;; --pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100); --pc-shadow-bevel-border-radius-xs: var(--p-border-radius-300);position: absolute;top:4%;width: 34%;height: 90%;border: 1px solid lightslategray;border-radius: 19px;">
  	<div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg-surface);--pc-box-min-height:100%;--pc-box-overflow-x:clip;--pc-box-overflow-y:clip;--pc-box-padding-block-start-xs:var(--p-space-400);--pc-box-padding-block-end-xs:var(--p-space-400);--pc-box-padding-inline-start-xs:var(--p-space-400);--pc-box-padding-inline-end-xs:var(--p-space-400);">
<!-----------Alignment-------------->
		<div class="Polaris-Label">
			<label id=":Rq6:Label" style="font-size: 16px;font-weight:bold;position: absolute;width:91%;top: 4%;border-bottom:1px solid gainsboro;padding-left:16px;" for=":Rq6:" class="Polaris-Label__Text">Widget Position</label>
		</div>
<!-------------Radio button------------>
		<div class="Polaris-LegacyStack Polaris-LegacyStack--vertical">
  			<div class="Polaris-LegacyStack__Item">
    				<div style="position: absolute;top: 12%;left: 12%;">
      					<label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="disabled">
        					<span class="Polaris-Choice__Control">
	  						<span class="Polaris-RadioButton">
	    							<input id="disabled" name="align" type="radio" class="Polaris-RadioButton__Input" aria-describedby="disabledHelpText" value="" onclick="left_align()">
            							<span class="Polaris-RadioButton__Backdrop"></span>
          						</span>
        					</span>
        					<span class="Polaris-Choice__Label">
          						<span style="font-size:15px;">Left</span>
        					</span>
      					</label>
    				</div>
  			</div>
			<input type="hidden" id="hiddeninput" name="alignment" value="right">
  			<div class="Polaris-LegacyStack__Item">
    				<div style="position: absolute;top: 12%;left: 70%;">
      					<label class="Polaris-Choice Polaris-RadioButton__ChoiceLabel" for="optional">
        					<span class="Polaris-Choice__Control">
	  						<span class="Polaris-RadioButton">
	      							<input id="optional" name="align" type="radio" class="Polaris-RadioButton__Input" aria-describedby="optionalHelpText" value="" onclick="right_align()">
            							<span class="Polaris-RadioButton__Backdrop"></span>
          						</span>
        					</span>
        					<span class="Polaris-Choice__Label">
          						<span style="font-size:15px;">Right</span>
        					</span>
      					</label>
    				</div>
  			</div>
		</div>
<!--------------Background Color----------->
		<div class="Polaris-Label">
        		<label id=":Rq6:Label" style="font-size: 16px;font-weight:bold;position: absolute;width:91%;top:24%;border-bottom:1px solid gainsboro;padding-left:16px;" for=":Rq6:" class="Polaris-Label__Text">Theme Color</label>
		</div>
<!---------------color selector------------->
		<div class="" style="position: absolute;top:34%;left: 12%;">
  			<div class="Polaris-Labelled__LabelWrapper">
    				<div class="Polaris-Label">
      					<label style="font-size:15px;" id=":Rq6:Label" for=":Rq6:" class="Polaris-Label__Text">Color</label>
    				</div>
			</div>
		</div>
		<div style="position:absolute;left:70%;top:34%;">
  			<input type="color" id="themecolor" name="theme_color" oninput="change_background_color()" style="border:1px solid lightslategray;cursor:pointer;">
		</div>
<!-------------Text Color---------------->
		<div class="Polaris-Label">
        		<label id=":Rq6:Label" style="font-size: 16px;font-weight:bold;position: absolute;width:91%;top:45%;border-bottom:1px solid gainsboro;padding-left:16px;" for=":Rq6:" class="Polaris-Label__Text">Text Color</label>
		</div>
<!--------------text color selector---------->
		<div class="" style="position: absolute;top:55%;left: 12%;">
  			<div class="Polaris-Labelled__LabelWrapper">
    				<div class="Polaris-Label">
      					<label style="font-size:15px;" id=":Rq6:Label" for=":Rq6:" class="Polaris-Label__Text">Text</label>
    				</div>
			</div>
		</div>
		<div style="position:absolute;top:55%;left:57%;">
  			<div class="Polaris-Select" style="height: 26px;width:112px;">
    				<select id="widgettext" name="widget_text" class="Polaris-Select__Input" style="cursor:pointer;" aria-invalid="false" onchange="change_text_color()">
      					<option value="white" selected="">White</option>
      					<option value="black">Black</option>
    				</select>
    				<div class="Polaris-Select__Content" style="top:-4px;font-size:15px;" aria-hidden="true">
      					<span class="Polaris-Select__SelectedOption" id="textValue"></span>
      					<span class="Polaris-Select__Icon">
        					<span class="Polaris-Icon">
          						<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
            							<path d="M10.884 4.323a1.25 1.25 0 0 0-1.768 0l-2.646 2.647a.75.75 0 0 0 1.06 1.06l2.47-2.47 2.47 2.47a.75.75 0 1 0 1.06-1.06l-2.646-2.647Z"></path>
            							<path d="m13.53 13.03-2.646 2.647a1.25 1.25 0 0 1-1.768 0l-2.646-2.647a.75.75 0 0 1 1.06-1.06l2.47 2.47 2.47-2.47a.75.75 0 0 1 1.06 1.06Z"></path>
          						</svg>
        					</span>
      					</span>
    				</div>
    				<div class="Polaris-Select__Backdrop">
    				</div>
  			</div>
		</div>
<!-------------Submit button------------->
		<button class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantPrimary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter" type="submit" style="position:absolute;top:72%;left:57%;background-color:black;">
  			<span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--medium">Save changes</span>
		</button>
	</div>
</div>
</form>
<!---------------separator------------------->
<div style="position:absolute;border-left:1px solid gainsboro;left:39%;height:95%;top:2%;">
</div>
<!-----------iframe---------------->
<div id="iframeid" class="Polaris-ShadowBevel" style="--pc-shadow-bevel-z-index: 32; --pc-shadow-bevel-content-xs: &quot;&quot;; --pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100); --pc-shadow-bevel-border-radius-xs: var(--p-border-radius-300);opacity:1;display:none;position:fixed;bottom:90px;right:24%;height:78%;z-index:2147483647;width:32%;border:none;border-radius:10px;background-color:#f6f6f7;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  	<div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg-surface);--pc-box-min-height:100%;--pc-box-overflow-x:clip;--pc-box-overflow-y:clip;--pc-box-padding-block-start-xs:var(--p-space-400);--pc-box-padding-block-end-xs:var(--p-space-400);--pc-box-padding-inline-start-xs:var(--p-space-400);--pc-box-padding-inline-end-xs:var(--p-space-400);padding:0px;width:100%;">
		<div class="h-24">
			<h5 class="text-xl font-bold cursor-default elements" style="background-color:slateblue;color:white;padding-top:13px;padding-left:20px;">Welcome,Alice</h5>
			<h6 class="text-lg font-bold cursor-default elements" style="background-color:slateblue;color:white;height:53%;padding-top:16px;padding-left:20px;">1000 points</h6>
        		<button type="button" onclick="close_iframe()" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 elements" data-dismiss-target="#toast-default" aria-label="Close" style="position:relative;top:-72%;left:87%;background-color:slateblue;color:white;">
                		<span class="sr-only">Close</span>
                		<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        		<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                		</svg>
        		</button>
		</div>
<!--------------------------Tabs on Top--------------------------->
		<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
    			<ul class="flex -mb-px">
        			<li class="me-2">
            				<div tabindex="0" id="tab1" role="link" aria-label="Example Link" class="cursor-default inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active" aria-current="page" style="display: inline-block; border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75, 85, 99); border: rgb(209, 213, 219); position: relative; height:100%; padding-top: 12px; padding-left: 14px; padding-right: 15px;">Earn Points</div>
        			</li>
        			<li class="me-2">
	    				<div tabindex="0" id="rewards_tab" role="link" aria-label="Example Link" class="cursor-default inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" style="display: inline-block; border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(37, 99, 235); position: relative; height:100%; padding-top: 12px; padding-left: 14px; padding-right: 15px; border-bottom: 2px solid blue;">Rewards</div>
				</li>
				<li class="me-2">
            				<div tabindex="0" id="tab3" role="link" aria-label="Example Link" class="cursor-default inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" style="display: inline-block; border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75, 85, 99); border: rgb(209, 213, 219); position: relative; height:100%; padding-top: 12px; padding-left: 14px; padding-right: 15px;">Your rewards</div>
        			</li>
    			</ul>
		</div>
<!--------------------------Rewards enabled by merchant------------------------>
		@foreach($rewards as $reward)
		<div class="p-6 bg-white border border-gray-200 rounded-lg shadow" style="position: relative; height: 19%; display: block;">
			<h6 class="mb-2 text-lg font-bold tracking-tight text-gray-900 cursor-default" style="position: relative;top: -20px;font-size:16px;">
			@if(ctype_digit($reward['name']))
                             	{{ str_replace("amount",$reward['name'],$shop->currency_format) }} off
                       	@else
                               	{{$reward['name']}}
                        @endif
			</h6>
    			<p class="mb-3 font-normal text-gray-700 cursor-default" style="position: relative;top: -29px;font-size: 14px;">Cost: {{$reward['cost']}}points</p>
    		 	<div tabindex="0" role="link" aria-label="Example Link" class="elements cursor-default inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg" style="position: relative;top: -75px;left: 79%;padding-top: 3px;padding-bottom: 3px;background-color: slateblue;">Claim</div>
		</div>
		@endforeach
	</div>
</div>
<!-------------widget-------------------->
<button id="loyaltywidget" class="elements" onclick="open_iframe()" style="position:fixed;bottom:20px;color:white;width:11%;height:11%;border-radius:13px;z-index:9;font-size:15px;cursor:pointer;border:none;">Loyalty Points</button>
</body>
<script src="https://cdn.tailwindcss.com/3.4.3"></script>
<script>
	function open_iframe()
        {
                 document.getElementById("iframeid").style.display = "flex";
        }

	function close_iframe()
	{
       		document.getElementById("iframeid").style.display = "none";
        }

	function submit_customization()
	{
		startLoading();
	}

	function right_align()
	{
		document.getElementById("loyaltywidget").style.right = "3%";
		document.getElementById("iframeid").style.right = "3%";
		document.getElementById("hiddeninput").value = "right";
	}

	function left_align()
	{
		document.getElementById("loyaltywidget").style.right = "45%";
		document.getElementById("iframeid").style.right = "24%";
		document.getElementById("hiddeninput").value = "left";
	}

	function change_background_color()
	{
		let color = document.getElementById("themecolor").value;

        	document.getElementById("rewards_tab").style.color = color;
		document.getElementById("rewards_tab").style.borderBottom = "2px solid "+color;
		let elements = document.getElementsByClassName("elements");
                for (let i = 0; i < elements.length; i++)
                {
                        elements[i].style.backgroundColor = color;
                }
	}

	function change_text_color()
	{
        	let selectBox = document.getElementById("widgettext");
        	let selectedValue = selectBox.options[selectBox.selectedIndex].innerHTML;
		document.getElementById("textValue").innerHTML = selectedValue;
		if(selectedValue == "White")
		{
			let elements = document.getElementsByClassName("elements");
                	for (let i = 0; i < elements.length; i++)
                	{
                        	elements[i].style.color = "white";
                	}
		}
		if(selectedValue == "Black")
		{
			let elements = document.getElementsByClassName("elements");
                	for (let i = 0; i < elements.length; i++)
                	{
                        	elements[i].style.color = "black";
                	}
		}
	}

	window.onload = function()
	{
		document.getElementById("iframeid").style.display = "flex";
		let json_data = '{{$shop->customization}}';
		if(json_data == '[]')
                {
                        document.getElementById("themecolor").value = '#6a5acd';
                        document.getElementById("widgettext").value = 'white';
                        document.getElementById("textValue").innerHTML = 'White';
                        document.getElementById("loyaltywidget").style.cssText = "position:fixed;bottom:20px;color:white;width:11%;height:11%;border-radius:13px;z-index:9;font-size:15px;cursor:pointer;border:none;background-color:slateblue;right:45%;";
                        document.forms["myform"]["disabled"].checked=true;
                        document.getElementById("textValue").innerHTML = 'White';
                }

		if(json_data != '[]')
		{
        		json_data = json_data.replace(/&quot;/g,'"');
			let data = JSON.parse(json_data);
		
			document.getElementById("themecolor").value = data.theme_color;
			let elements = document.getElementsByClassName("elements");
                	for (let i = 0; i < elements.length; i++)
                	{
                        	elements[i].style.backgroundColor = data.theme_color;
                	}
                	document.getElementById("rewards_tab").style.color = data.theme_color;
                	document.getElementById("rewards_tab").style.borderBottom = "2px solid "+data.theme_color;

			if(data.align == "right")
			{
				document.forms["myform"]["optional"].checked=true;
		        	document.getElementById("loyaltywidget").style.right ="3%";
				document.getElementById("iframeid").style.right = "3%";
				document.getElementById("hiddeninput").value = "right";
			}
			if(data.align == "left")
			{
				document.forms["myform"]["disabled"].checked=true;
				document.getElementById("loyaltywidget").style.right ="45%";
				document.getElementById("iframeid").style.right = "24%";
				document.getElementById("hiddeninput").value = "left";
			}	
			if(data.widget_text == "black")
			{
				document.getElementById("textValue").innerHTML = 'Black';
				document.getElementById("widgettext").value = 'black';
				let elements = document.getElementsByClassName("elements");
                		for (let i = 0; i < elements.length; i++)
                		{
                        		elements[i].style.color = "black";
                		}
			}
			if(data.widget_text == "white")
                	{
				document.getElementById("textValue").innerHTML = 'White';
				document.getElementById("widgettext").value = 'white';
				let elements = document.getElementsByClassName("elements");
                		for (let i = 0; i < elements.length; i++)
                		{
                        		elements[i].style.color = "white";
                		}
			}
		}
	}
	stopLoading();
	setTitleBar('Customize widget');
</script>
</html>
