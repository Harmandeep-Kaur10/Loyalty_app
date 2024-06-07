<html>
<body>

<div style="">
  <div class="Polaris-ShadowBevel" style="--pc-shadow-bevel-z-index: 32; --pc-shadow-bevel-content-xs: &quot;&quot;; --pc-shadow-bevel-box-shadow-xs: var(--p-shadow-100); --pc-shadow-bevel-border-radius-xs: var(--p-border-radius-300);">
    <div class="Polaris-Box" style="--pc-box-background:var(--p-color-bg-surface);--pc-box-overflow-x:clip;--pc-box-overflow-y:clip;--pc-box-padding-block-start-xs:var(--p-space-400);--pc-box-padding-block-end-xs:var(--p-space-400);--pc-box-padding-inline-start-xs:var(--p-space-400);--pc-box-padding-inline-end-xs:var(--p-space-400);">

<div style="display: flex;     justify-content: space-between;">

<div style="display: flex;">
	<h2 class="Polaris-Text--root Polaris-Text--headingSm" style="font-size:20px; cursor:default; font-weight: 500;">
      @if($customer->name == " ")
		No Name</h2>
      @else
		{{$customer->name}}</h2>
		@endif
<div style="border-left: 2px solid lightgray; margin-left: 10px;">
			  <p class="Polaris-Text--root Polaris-Text--bodyMd" style="font-size:17px;  margin-left: 10px;cursor:default;">{{$customer->email}}</p>
</div>
</div>
		<p class="Polaris-Text--root Polaris-Text--bodyMd" style="font-size:16px;">Last Visit:{{date('d-m-Y',strtotime($latest_visit))}}</p>

	</div>

<div style="margin-top: 15px; border-top: 2px solid lightgray;">

<div style="display: flex; justify-content: space-between; margin-top: 10px;">
    <p style="font-size:18px;">Total Revenue: {{$amount}}</p>
    <p style="font-size:18px;">Current Points: {{$customer->points}}</p> 
</div>


<div style="display: flex; justify-content: space-between; margin-top: 10px;" > 
    <p style="font-size:18px;">Rewards Claimed: {{count(json_decode($customer->rewards))}}</p>
    <p style="font-size:18px;">Activities Completed: {{$customer->activities}}</p>
</div>

</div>


    </div>
  </div>
</div>

<!-------------------------History Table--------------------->
<div class="" style=" margin-top: 15px;">
  <div class="Polaris-Page" style="padding-left: 0px;padding-right:0px;">
    <div class="">
      <div class="Polaris-LegacyCard">
        <div class="">
          <div class="Polaris-DataTable Polaris-DataTable__ShowTotals Polaris-DataTable__ShowTotalsInFooter">
            <div class="Polaris-DataTable__ScrollContainer">
              <table class="Polaris-DataTable__Table">
                <thead>
		  <tr>
		   <th style="text-align:center;font-weight:bold;background-color:gainsboro;cursor:default;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Date</th>
                    <th style="text-align:center;font-weight:bold;background-color:gainsboro;cursor:default;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align:center">Current Points</th>
                    <th style="text-align:center;font-weight:bold;background-color:gainsboro;cursor:default;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align:center">Activity</th>
                    <th style="text-align:center;font-weight:bold;background-color:gainsboro;cursor:default;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align:center">Points</th>
                    <th style="text-align:center;font-weight:bold;background-color:gainsboro;cursor:default;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align:center">Order Id</th>
                    <th style="text-align:center;font-weight:bold;background-color:gainsboro;cursor:default;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align:center">Total Paid</th>
                    <th style="text-align:center;font-weight:bold;background-color:gainsboro;cursor:default;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align:center">Reward Code</th>
                  </tr>
	        </thead>
		  @foreach($activity_logs as $activity)
		    @php($order_details = $activity->activity_data)
		    @php($arr = json_decode($order_details,true))
			@if($activity->activity_type == 'account created' && $activity->points_changed > 0 || $activity->activity_type == 'visit' || $activity->activity_type == 'purchase' && $arr['purchase_activity_state'] == "1" || str_contains($activity->activity_type, 'claimed') || str_contains($activity->activity_type, 'used'))
	      		<tbody>
			  <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
			    <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                        @if($activity->activity_type == "purchase" || str_contains($activity->activity_type, 'used'))
                                                {{date('d-m-Y',strtotime($arr['order_date']))}}</td>
                                        @else
                                                {{date('d-m-Y',strtotime($activity->created_at))}}</td>
                                        @endif
			    <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{$activity->current_points}}</td>
			    <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{$activity->activity_type}}</td>
			    <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{$activity->points_changed}}</td>
			    <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                @if(array_key_exists('purchase_activity_state',$arr))
				<a href="https://admin.shopify.com/store/{{$shop->name}}/orders/{{$arr['order_id']}}" target="_blank">
                                        {{$arr['order_no']}}</td>
				</a>
                                @else
                                        -</td>
				@endif
			    <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                @if($activity->activity_type == "purchase")
                                        {{ str_replace("amount",$arr['revenue'],$shop->currency_format) }}</td>
                                @elseif(str_contains($activity->activity_type, 'used') && array_key_exists('revenue',$arr))
                                        {{ str_replace("amount",$arr['revenue'],$shop->currency_format) }}</td>
                                @else
                                        -</td>
                                @endif
			    <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                @if(str_contains($activity->activity_type, 'claimed') || str_contains($activity->activity_type, 'used'))
                                        {{$arr['code']}}</td>
                                @else
                                        -</td>
                                @endif
                	  </tr>
			</tbody>
			@endif
	            @endforeach
	      @if($customer->activities == 0)
	      <tbody>
               <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                 <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"></td>
                 <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"></td>
		 <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"></td>
		<td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">No History Available</td>
                 <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"></td>
                 <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"></td>
		 <td style="text-align:center;border-bottom: 1px solid gainsboro;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"></td>
               </tr>
             </tbody>
	     @endif
	   </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!---------------pagination-------------------->
<nav aria-label="Pagination" class="Polaris-Pagination" style="display:flex; justify-content:center;position:absolute;left:40%;bottom:2%;">
  <div class="Polaris-ButtonGroup Polaris-ButtonGroup--variantSegmented" data-buttongroup-variant="segmented">
    <div class="Polaris-ButtonGroup__Item">
     <a href="{{ str_replace(env('APP_URL'), '/open_page', $activity_logs->previousPageUrl()) }}&customer_id={{$customer->customer_id}}"><button id="previousURL" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Previous" type="button">
        <span class="Polaris-Button__Icon">
          <span class="Polaris-Icon">
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
              <path fill-rule="evenodd" d="M11.764 5.204a.75.75 0 0 1 .032 1.06l-3.516 3.736 3.516 3.736a.75.75 0 1 1-1.092 1.028l-4-4.25a.75.75 0 0 1 0-1.028l4-4.25a.75.75 0 0 1 1.06-.032Z">
              </path>
            </svg>
          </span>
        </span>

      </button></a>
    </div>
<div style="padding-right: 15px; padding-left: 15px;"><span> {{$activity_logs->currentPage()}}</span> out of <span>{{$activity_logs->lastPage()}} </span></div>

    <div class="Polaris-ButtonGroup__Item">
     <a href="{{ str_replace(env('APP_URL'), '/open_page', $activity_logs->nextPageUrl()) }}&customer_id={{$customer->customer_id}}"><button id="nextURL" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Next" type="button">
        <span class="Polaris-Button__Icon">
          <span class="Polaris-Icon">
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.72 14.53a.75.75 0 0 1 0-1.06l3.47-3.47-3.47-3.47a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0Z">
              </path>
            </svg>
          </span>
        </span>
      </button></a>
    </div>
  </div>
</nav>

</body>
<script>
	function loading()
	{
		startLoading();
	}
	function handleTitleBarButtonClick()
	{
		location.replace("{{env('SHOPLINK_URL')}}/open_page/customers/{{$shop->our_passw_token}}");
	}
	stopLoading();
	setTitleBarWithButton("Customer History","Go Back");
</script>
</html>

