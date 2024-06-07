<html>
<head>
<script defer src="https://cdn.tailwindcss.com/3.4.3"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
</head>
<style>
	body::-webkit-scrollbar 
	{
  		display: none;
	}
	body
	{
  		-ms-overflow-style: none; 
		scrollbar-width: none;
		overflow-x :hidden;  
	}
	.heading
	{
		padding-top:13px;
		padding-left:20px;
	}
	.customer-points
	{
		height:55px;
		padding-top:16px;
		padding-left:20px;
	}
	.cross-button
	{
		position:relative;
		top:-69px;
		left:300px;
	}
	.cards
	{
		position:relative;
		height:65px;
	}
	.card-heading
	{
		position:relative;
		top:-20px;
		font-size: 16px;
	}
	.card-points-or-cost
	{
		position: relative;
		top: -29px;
		font-size: 14px;
	}
	.claim-button
	{
		position: relative;
		top: -75px;
		left: 228px;
		padding-top: 3px;
		padding-bottom: 3px;
		width:60px;
		height:26px;
	}
	.spinner
	{
		position: relative;
            	left:250px;
		top:-96px; 
	}
	.warning-toast-outerdiv
	{
		display:none;
		height: 50px;
		position: fixed;
		top: 385px;
		width: 255px;
		padding-left: 39px;
		padding-top:16px;
		left: 44px;
	}
	.warning-toast-innerdiv
	{
		position: relative;
		left: -34px;
		top: -7px;
	}
	.warning-toast-heading
	{
		position: relative;
		bottom: 33px;
		font-weight: bolder;
	}
	.warning-toast-close-button
	{
		position: relative;
		left: 174px;
		bottom: 52px;
	}
	.arrow
	{
		position: relative;
		bottom: 60px;
		height: 16px;
		left: 282px;
	}
	.redeemed-badge
	{
		position: relative;
		bottom: 76px;
		left: 170px;
	}
	.redeem-success-toast
	{
		display:none;
		position: fixed;
		height: 67px;
		top: 368px;
		left:10px;
	}
	.redeem-success-heading
	{
		position: relative;
		bottom: 7px;
		font-size: 16px;
		font-weight: bold;
		color: green;
	}
	.redeem-success-code
	{
		position: relative;
		bottom: 1px;
		font-size: 16px;
		left: 41px;
		width: 155px;
	}
	.copy-button-outerdiv
	{
		position: relative;
		bottom: 31px;
		width: 229px;
		right: 42px;
	}
	.copy-button-innerdiv
	{
		bottom: -3px;
		position: relative;
		left: 180px;
		width:53px;
		top:7px;
		padding-left:6px;
	}
	.close-redeem-success-toast
	{
		position: relative;
		bottom: 40px;
		left: 245px;
	}
	.popup-in-customer-rewards
	{
		display:none;
		position: fixed;
		height: 80px;
		top: 356px;
		left:10px;
		z-index:1;
	}
	.popup-in-customer-rewards-heading
	{
		position: relative;
		bottom: 7px;
		font-size: 16px;
		font-weight: bold;
		color: green;
		text-align:center;
	}
	.popup-in-customer-rewards-text
	{
		position: relative;
		font-size: 16px;
		font-weight: bold;
		color: green;
		text-align:center;
	}
	.popup-in-customer-rewards-code
	{
		position: relative;
		bottom: 5px;
		font-size: 16px;
		left: 41px;
		width: 155px;
	}
	.popup-in-customer-rewards-outerdiv
	{
		position: relative;
		bottom: 31px;
		width: 229px;
		right: 42px;
	}
	.popup-in-customer-rewards-copy-button
	{
		bottom: 2px;
		position: relative;
		left: 190px;
	}
	.popup-in-customer-rewards-close-button
	{
		position: relative;
		bottom: 47px;
		left: 189px;
	}
</style>
<body>
<div class="h-24">
	  <h5 class="text-xl font-bold cursor-default h-8 heading elements">Welcome {{$customer->name}}</h5>
	  <h6 id="customer_points" class="text-lg font-bold cursor-default customer-points elements">{{$customer->points}} points</h6>
        <button type="button" id="cross" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 cross-button elements" data-dismiss-target="#toast-default" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
        </button>
</div>
<!--------------------------Tabs on Top--------------------------->
<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
		<div tabindex="0" id = "earn_points_tab" role="link" aria-label="Example Link" aria-current="page" onclick = "earn_points_tab()" style = "position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;">Earn Points</div>
	</li>
        <li class="me-2">
            <div tabindex="0" id ="rewards_tab" role="link" aria-label="Example Link" onclick = "rewards_tab()" style = "position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;">Rewards</div>
        </li>
        <li class="me-2">
            <div tabindex="0" id ="your_rewards_tab" role="link" aria-label="Example Link" onclick = "customer_rewards_tab()" style = "position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;">Your rewards</div>
        </li>

    </ul>
</div>
<!-----------------------------Ways to earn points------------->
<div>
@foreach($activities as $activity)
@if($activity['state'] == 1)
	<div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow cards earn-points-tab">
		<h6 class="mb-2 font-bold tracking-tight text-gray-900 cursor-default card-heading">{{$activity['name']}}</h6>
		<p class="font-normal text-gray-700 cursor-default card-points-or-cost">{{$activity['points']}} points 
				@if($activity['name'] == 'Make a purchase')
					per order
				@endif
				@if($activity['name'] == 'Visit')
					per visit
				@endif
		</p>
	</div>
@endif
@endforeach
</div>
<!--------------------------Rewards enabled by merchant------------------------>
@foreach($rewards as $reward)
@if($reward['state'] == 1)
	<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow cards rewards-tab">
		<h6 class="mb-2 font-bold tracking-tight text-gray-900 cursor-default card-heading">
				@if(ctype_digit($reward['name']))
					{{ str_replace("amount","$amount_off_reward","$shop->currency_format") }} off</h6>
				@else
					{{$reward['name']}}</h6>
				@endif
    		<p class="mb-3 font-normal text-gray-700 cursor-default card-points-or-cost">Cost: {{$reward['cost']}} points</p>
		  <div tabindex="0" id="claim_{{$reward['name']}}" role="link" aria-label="Example Link" onclick = "claim_reward('{{$customer->customer_id}}','{{$reward['name']}}','claim_{{$reward['name']}}','spinner_{{$reward['name']}}')" class="cursor-pointer inline-flex items-center text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-neutral-200 px-3 claim-button elements">
        Claim
    		  </div>
<!-----------------Spinner-------------------->
		<div id="spinner_{{$reward['name']}}" class="spinner" role="status" style="display:none;">
    		<svg aria-hidden="true" class="inline w-4 h-4 text-gray-200 animate-spin fill-white-400" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        		<path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        		<path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    		</svg>
    		<span class="sr-only">Loading...</span>
		</div>
	</div>
@endif
@endforeach
<!-------------------Not enough points popup---------------->
<div id="toast-warning" class="items-center max-w-xs text-gray-500 bg-white rounded-lg shadow warning-toast-outerdiv" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg warning-toast-innerdiv">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
        </svg>
        <span class="sr-only">Warning icon</span>
    </div>
    <div class="ms-3 text-sm font-normal warning-toast-heading">Not enough points.</div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 warning-toast-close-button" onclick = "close_toast('toast-warning')" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
<!------------------Redeem code popup--------------->
<div id="toast-redeem" class="items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow redeem-success-toast" role="alert">
    <div class="redeem-success-heading" id = "text">
       Success! use this code at checkout.
    </div>

    <div id = "coupon-code" class="cursor-default redeem-success-code">
       
    </div>
    <div class="items-center ms-auto space-x-2 rtl:space-x-reverse copy-button-outerdiv">
	<div tabindex="0" role="link" onclick = "CopyToClipboard('coupon-code')" aria-label="Example Link" class="cursor-pointer text-sm font-medium text-blue-600 hover:bg-blue-100 rounded-lg copy-button-innerdiv copy">Copy</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 close-redeem-success-toast" onclick = "close_toast('toast-redeem')"  aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
    </div>
</div>
<!---------------------Rewards redeemed by customer---------------->
@if($decode_rewards != '[]')
  @foreach($decode_rewards as $claimed_reward)
		<div tabindex="0" role="link" aria-label="Example Link" onclick="popup_in_redeemed_rewards('{{$claimed_reward->discount_code}}')" class="cursor-default block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 your-rewards-tab cards">
			<h5 class="mb-2 font-bold tracking-tight text-gray-900 card-heading">
				@if(ctype_digit($claimed_reward->name))
					{{ str_replace("amount","$claimed_reward->name","$shop->currency_format") }} off</h5>
				@else
					{{$claimed_reward->name}}</h5>
				@endif
			<p class="font-normal text-gray-700 card-points-or-cost">Spent {{$claimed_reward->cost}} points</p>
			<svg class="text-gray-800 arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
    				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
			</svg>
			@if($claimed_reward->redeemed == "true")
				<span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full reward-used redeemed-badge">Redeemed</span>
			@endif
		</div>
  @endforeach
@endif
<!-------------------No data card--------------------------------->
<div id="no_data_card" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow cards" style="text-align:center;display:none;">
   	<h6 id="no_data_card_heading" class="mb-2 font-bold tracking-tight text-gray-900 cursor-default card-heading" style="top:-6px;"></h6>
</div>
<!---------------------Clone for customer reward card------------------->
<div id="customer_reward" tabindex="0" role="link" aria-label="Example Link" class="cursor-default block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 cards" style="display:none;">
                        <h5 id="customer_reward_name" class="mb-2 font-bold tracking-tight text-gray-900 card-heading"></h5>
                        <p id="customer_reward_cost" class="font-normal text-gray-700 card-points-or-cost"></p>
                        <svg class="text-gray-800 arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
</div>
<!-----------------------Popup in Your Rewards tab for discount code------------------->
<div id="discount-code" class="items-center w-full max-w-xs p-2 text-gray-500 bg-white rounded-lg shadow popup-in-customer-rewards" role="alert">
    <div class="cursor-default popup-in-customer-rewards-heading" id = "text">
       Use this discount code on your <div class="cursor-default popup-in-customer-rewards-text" id = "text">next order.</div>
    </div>
    <div id="code" class="cursor-default popup-in-customer-rewards-code">
    </div>
    <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse popup-in-customer-rewards-outerdiv">
        <div tabindex="0" role="link" onclick = "CopyToClipboard('code')" aria-label="Example Link" class="cursor-pointer text-sm font-medium text-blue-600 p-1.5 hover:bg-blue-100 rounded-lg popup-in-customer-rewards-copy-button copy">Copy</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 popup-in-customer-rewards-close-button" onclick = "close_toast('discount-code')"  aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
    </div>
</div>
</body>
<!--------------------JAVASCRIPT------------------->
<script>
       document.getElementById("cross").addEventListener("click", function()
        {
                window.parent.postMessage("closeIframe", "*");
        });

       function CopyToClipboard(containerid) 
       {
	       if (document.selection) 
	       {
    			let range = document.body.createTextRange();
    			range.moveToElementText(document.getElementById(containerid));
    			range.select().createTextRange();
			document.execCommand("copy");
  		} 
	       else if (window.getSelection) 
	       {
    			let range = document.createRange();
			range.selectNode(document.getElementById(containerid));
			window.getSelection().removeAllRanges();
    			window.getSelection().addRange(range);
			document.execCommand("copy");
	       }
	       let copy_button = document.getElementsByClassName("copy");
	       for(let i=0; i<copy_button.length; i++)
            	{
                     	copy_button[i].innerHTML = "Copied";
              	}
	       setTimeout(function() {    
		       	for(let i=0; i<copy_button.length; i++)
                	{
                        	copy_button[i].innerHTML = "Copy";
                	}
                }, 2000);
	}

       async function claim_reward(customer_id,reward_name,claim_button,spinner)
       {
                document.getElementById(spinner).style.display = "block";
		document.getElementById(claim_button).innerHTML = "";
                url  = "{{env('APP_URL')}}/api/compare_points_with_reward_cost/{{$shop->msd}}/"+customer_id+"?reward_name="+reward_name;
                await fetch(url,  {
                method: "get",
                headers: new Headers({
                "ngrok-skip-browser-warning": "69420",
                }),
                }).then(r => r.json()).then(data => {
                if(data['res'] == 0)
                                {
					document.getElementById("toast-warning").style.display = "block";
                                        document.getElementById(spinner).style.cssText = "display:none;"
                                        document.getElementById(claim_button).innerHTML = "Claim";
                                }
                if(data['res'] == 1)
                                {
                                        store_claimed_reward_in_db(customer_id,reward_name,spinner,claim_button);
                                }

                });
        }

       async function store_claimed_reward_in_db(customer_id,reward_name,spinner,claim_button)
        {
                url  = "{{env('APP_URL')}}/api/save_claimed_reward/{{$shop->msd}}/"+customer_id+"?reward="+reward_name;
                await fetch(url, {
                method: "post",
                headers: new Headers({
                "ngrok-skip-browser-warning": "69420",
                }),
                }).then(r => r.json()).then(data => {
                if(data['discount_code'])
		{
                        document.getElementById("coupon-code").innerHTML = data['discount_code'];
			document.getElementById("toast-redeem").style.display = "block";
			document.getElementById(spinner).style.cssText = "display:none;"
			document.getElementById(claim_button).innerHTML = "Claim";

			update_customer_points(data);	

			show_claimed_reward_under_your_rewards_tab(data, reward_name);
                }
                });
        }

      	function update_customer_points(data)
	{
		document.getElementById("customer_points").innerHTML = data['customer_points']+" points";
	}

        let i = 0;
	function show_claimed_reward_under_your_rewards_tab(data, reward_name)
	{
		let customer_reward_card = document.getElementById("customer_reward");
               	let clone_for_card = customer_reward_card.cloneNode(true);
             	let id_for_clone_card = "customer_new_reward" + ++i;
             	clone_for_card.id = id_for_clone_card;
              	customer_reward_card.parentNode.appendChild(clone_for_card);
             	document.getElementById(id_for_clone_card).setAttribute("onClick", `popup_in_redeemed_rewards('${data['discount_code']}')`);
            	document.getElementById(id_for_clone_card).classList.add("your-rewards-tab");
            	let child_nodes = clone_for_card.childNodes;
           	let first_child_node_id = "reward_name" + ++i;
          	child_nodes[1].id = first_child_node_id;
             	let third_child_node_id = "reward_cost" + i;
            	child_nodes[3].id = third_child_node_id;
             	if(reward_name.match(/^[0-9]+$/) != null)
           	{
                 	document.getElementById(first_child_node_id).innerHTML = "{{$shop->currency_format}}".replace('amount',reward_name)+" off";
           	}
        	else
            	{
                 	document.getElementById(first_child_node_id).innerHTML = reward_name;
          	}
		document.getElementById(third_child_node_id).innerHTML = "Spent "+data['reward_cost']+" points";
	}

        function close_toast(toast_id)
	{
		document.getElementById(toast_id).style.display = "none";
	}

	function earn_points_tab()
	{
		let earn_points_tab_elements = document.getElementsByClassName("earn-points-tab");
                for(let i=0; i<earn_points_tab_elements.length; i++)
                {
                        earn_points_tab_elements[i].style.display = "block";
                }
		
		let rewards_tab_elements = document.getElementsByClassName("rewards-tab");
		for(let i=0; i<rewards_tab_elements.length; i++)
		{
			rewards_tab_elements[i].style.display = "none";
		}
		
		let your_rewards_tab_elements = document.getElementsByClassName("your-rewards-tab");
		for(let i = 0; i < your_rewards_tab_elements.length; i++) 
		{
    			your_rewards_tab_elements[i].style.display = "none";
		}

		document.getElementById("toast-redeem").style.display = "none";

		document.getElementById("discount-code").style.display = "none";

		document.getElementById("toast-warning").style.display = "none";

		document.getElementById("no_data_card").style.display = "none";

		if({{$enabled_activities}} == 0)
		{
			document.getElementById("no_data_card").style.display = "block";

			document.getElementById("no_data_card_heading").innerHTML = "Currently no way to earn points";
		}

		let json_data = '{{$shop->customization}}';
                json_data = json_data.replace(/&quot;/g,'"');
                let data = JSON.parse(json_data);
		let color = data.theme_color;

		document.getElementById("earn_points_tab").style.cssText = "cursor:default;display:inline-block;  border-bottom-width: 2px;border-top-left-radius: 0.5rem;border-top-right-radius: 0.5rem;position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";

		if(json_data != '[]')
		{
			document.getElementById("earn_points_tab").style.color = data.theme_color;
                	document.getElementById("earn_points_tab").style.borderBottom = "2px solid "+color;
		}

		if(json_data == '[]')
		{
			document.getElementById("earn_points_tab").style.color = "blue";
                        document.getElementById("earn_points_tab").style.borderBottom = "2px solid blue";
		}

		document.getElementById("rewards_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";
		document.getElementById("your_rewards_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";

	}

	function rewards_tab()
	{	
		let rewards_tab_elements = document.getElementsByClassName("rewards-tab");
		for(let i=0; i<rewards_tab_elements.length; i++)
		{
			rewards_tab_elements[i].style.display = "block";
		}
		
		let earn_points_tab_elements = document.getElementsByClassName("earn-points-tab");
		for(let i=0; i<earn_points_tab_elements.length; i++)
		{
			earn_points_tab_elements[i].style.display = "none";
		}
		
		let your_rewards_tab_elements = document.getElementsByClassName("your-rewards-tab");
		for(let j = 0; j < your_rewards_tab_elements.length; j++) 
		{
    			your_rewards_tab_elements[j].style.display = "none";
		}

		document.getElementById("no_data_card").style.display = "none";
		document.getElementById("discount-code").style.display = "none";

		if({{$enabled_rewards}} == 0)
                {
                        document.getElementById("no_data_card").style.display = "block";

                        document.getElementById("no_data_card_heading").innerHTML = "Currently no rewards available to claim";
                }

		let json_data = '{{$shop->customization}}';
                json_data = json_data.replace(/&quot;/g,'"');
                let data = JSON.parse(json_data);
		let color = data.theme_color;

		document.getElementById("rewards_tab").style.cssText = "cursor:default;display:inline-block;	border-bottom-width: 2px;border-top-left-radius: 0.5rem;border-top-right-radius: 0.5rem;position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";

		if(json_data != '[]')
		{
			document.getElementById("rewards_tab").style.color = color;
                	document.getElementById("rewards_tab").style.borderBottom = "2px solid "+color;
		}

		if(json_data == '[]')
		{
			document.getElementById("rewards_tab").style.color = "blue";
                        document.getElementById("rewards_tab").style.borderBottom = "2px solid blue";
		}

		document.getElementById("earn_points_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";
		document.getElementById("your_rewards_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";
	}
	
	function customer_rewards_tab()
	{
		let your_rewards_tab_elements = document.getElementsByClassName("your-rewards-tab");
		for(let k = 0; k < your_rewards_tab_elements.length; k++) 
		{
			your_rewards_tab_elements[k].style.display = "block";
		}

		let rewards_tab_elements = document.getElementsByClassName("rewards-tab");
                for(let i=0; i<rewards_tab_elements.length; i++)
                {
                        rewards_tab_elements[i].style.display = "none";
                }
		
		let earn_points_tab_elements = document.getElementsByClassName("earn-points-tab");
                for(let i=0; i<earn_points_tab_elements.length; i++)
                {
                        earn_points_tab_elements[i].style.display = "none";
		}

		document.getElementById("no_data_card").style.display = "none";

		if({{count($decode_rewards)}} == 0 && !document.getElementById("customer_new_reward1"))	
		{
			document.getElementById("no_data_card").style.display = "block";
			document.getElementById("no_data_card_heading").innerHTML = "No claimed rewards";
		}

		document.getElementById("toast-redeem").style.display = "none";

		document.getElementById("discount-code").style.display = "none";

		document.getElementById("toast-warning").style.display = "none";

		let json_data = '{{$shop->customization}}';
                json_data = json_data.replace(/&quot;/g,'"');
                let data = JSON.parse(json_data);

		document.getElementById("your_rewards_tab").style.cssText = "cursor:default;display:inline-block;  border-bottom-width: 2px;border-top-left-radius: 0.5rem;border-top-right-radius: 0.5rem;position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";
		
		if(json_data != '[]')
		{
			document.getElementById("your_rewards_tab").style.color = data.theme_color;
                	document.getElementById("your_rewards_tab").style.borderBottom = "2px solid "+data.theme_color;
		}

		if(json_data == '[]')
		{
			document.getElementById("your_rewards_tab").style.color = "blue";
                        document.getElementById("your_rewards_tab").style.borderBottom = "2px solid blue";
		}

		document.getElementById("earn_points_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";
                document.getElementById("rewards_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";

	}

	function popup_in_redeemed_rewards(coupon_code)
	{
		document.getElementById("code").innerHTML = coupon_code;
		document.getElementById("discount-code").style.display = "block";
	}

	window.onload = function()
	{
		let rewards_tab_elements = document.getElementsByClassName("rewards-tab");
		for(let i=0; i<rewards_tab_elements.length; i++)
		{
			rewards_tab_elements[i].style.display = "none";
		}
			
		let your_rewards_tab_elements = document.getElementsByClassName("your-rewards-tab");
                for(let h = 0; h < your_rewards_tab_elements.length; h++)
                {
                       	your_rewards_tab_elements[h].style.display = "none";
		}

		let json_data = '{{$shop->customization}}';
                json_data = json_data.replace(/&quot;/g,'"');
                let data = JSON.parse(json_data);
                let color = data.theme_color;
			
                document.getElementById("earn_points_tab").style.cssText = "cursor:default;display:inline-block;  border-bottom-width: 2px;border-top-left-radius: 0.5rem;border-top-right-radius: 0.5rem;position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";
		if(json_data != '[]')
		{
			document.getElementById("earn_points_tab").style.color = data.theme_color;
                        document.getElementById("earn_points_tab").style.borderBottom = "2px solid "+color;
		}

		if(json_data == '[]')
		{
			document.getElementById("earn_points_tab").style.color = "blue";
                        document.getElementById("earn_points_tab").style.borderBottom = "2px solid blue";
		}

		document.getElementById("rewards_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";
		document.getElementById("your_rewards_tab").style.cssText = "cursor:default;display:inline-block; border-bottom-width: 2px; border:transparent;border-top-left-radius: 0.5rem; border-top-right-radius: 0.5rem; color: rgb(75 85 99);border:rgb(209 213 219);position:relative;height:45px;padding-top:12px;padding-left:14px;padding-right:15px;";

		if({{$enabled_activities}} == 0)
                {
                        document.getElementById("no_data_card").style.display = "block";

                        document.getElementById("no_data_card_heading").innerHTML = "Currently no way to earn points";
                }
	}

	function customization()
	{
		  let json_data = '{{$shop->customization}}';
	          json_data = json_data.replace(/&quot;/g,'"');
       		  let data = JSON.parse(json_data);
		  if(json_data != '[]')
		  {
			let element = document.getElementsByClassName("elements");
			for (let i = 0; i < element.length; i++)
			{
				element[i].style.backgroundColor = data.theme_color;
				element[i].style.color = data.widget_text;
			}
		  }
		  if(json_data == '[]')
		  {
			let element = document.getElementsByClassName("elements");
			for (let i = 0; i < element.length; i++)
			{
				element[i].style.backgroundColor = "slateblue";
				element[i].style.color = "white";
			}
	 	  }
	}
	customization();
</script>
</html>
