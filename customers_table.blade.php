<html>
<style>
	.customerName
	{
		text-decoration:none;
	}
	.customerName:hover
	{
		text-decoration:underline;
	}
</style>
<body>
<!------------------------table----------------------->
@if(count($customers) > 0)
<div class="Polaris-Page" style="position:absolute;top:25px;width:1040px;padding-left:0px;padding-right:0px;">
    	<div class="Polaris-LegacyCard">
          	<div class="Polaris-DataTable__ScrollContainer">
            		<table class="Polaris-DataTable__Table">
              			<thead>
                			<tr>
                  				<th style="cursor:default;background-color:gainsboro;font-weight:bold;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">Name</th>
                  				<th style="text-align:center;cursor:default;background-color:gainsboro;font-weight:bold;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col" style="text-align:left">Email</th>
						<th style="text-align:center;cursor:default;background-color:gainsboro;font-weight:bold;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Activities</th>
                  				<th style="text-align:center;cursor:default;background-color:gainsboro;font-weight:bold;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Points</th>
			  			<th style="text-align:center;cursor:default;background-color:gainsboro;font-weight:bold;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Rewards</th>
		   				<th style="text-align:center;cursor:default;background-color:gainsboro;font-weight:bold;" data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Revenue</th>
                			</tr>
				</thead>
				<tbody id="myTable">
	      			@foreach($customers as $customer_model)
					<tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
		  				<td style="text-align:left;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
	 						<a class="customerName" href="{{env('SHOPLINK_URL')}}/open_page/customer_history/{{$shop->our_passw_token}}?customer_id={{$customer_model->customer_id}}">
							@if($customer_model->name == " ")
								No Name
		    					@else
			  					{{ $customer_model->name }}
							@endif
							</a>
		  				</td>
		  				<td style="text-align:center;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{ $customer_model->email }}</td>
		  				<td style="text-align:center;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{ $customer_model->activities }}</td>
                  				<td style="text-align:center;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{ $customer_model->points }}</td>
		  				<td style="text-align:center;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{ count(json_decode($customer_model->rewards)) }}</td>
	          				<td style="text-align:center;cursor:default;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{{ str_replace("amount", number_format( $customer_model->revenue, 2),"$shop->currency_format") }}</td>
					</tr>
	     			@endforeach
             			</tbody>
            		</table>
          	</div>
    	</div>
</div>
<!---------------pagination-------------------->
<nav aria-label="Pagination" class="Polaris-Pagination" style="display:flex; justify-content:center;position:absolute;left:40%;bottom:2%;">
  <div class="Polaris-ButtonGroup Polaris-ButtonGroup--variantSegmented" data-buttongroup-variant="segmented">
    <div class="Polaris-ButtonGroup__Item">
     <a href="{{ str_replace(env('APP_URL'), '/open_page', $customers->previousPageUrl()) }}"><button id="previousURL" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Previous" type="button">
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

<div style="padding-right: 15px; padding-left: 15px;"><span> {{$customers->currentPage()}}</span> out of <span>{{$customers->lastPage()}} </span></div>

    <div class="Polaris-ButtonGroup__Item">
     <a href="{{ str_replace(env('APP_URL'), '/open_page', $customers->nextPageUrl()) }}"><button id="nextURL" class="Polaris-Button Polaris-Button--pressable Polaris-Button--variantSecondary Polaris-Button--sizeMedium Polaris-Button--textAlignCenter Polaris-Button--iconOnly" aria-label="Next" type="button">
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
@endif
<!--------------No customers card------------->
@if(count($customers) == 0)
<div class="Polaris-LegacyCard">
  	<div class="Polaris-LegacyCard__Section Polaris-LegacyCard__FirstSectionPadding Polaris-LegacyCard__LastSectionPadding">
    		<div class="Polaris-Box" style="--pc-box-padding-block-start-xs:var(--p-space-500);--pc-box-padding-block-end-xs:var(--p-space-1600);--pc-box-padding-inline-start-xs:var(--p-space-0);--pc-box-padding-inline-end-xs:var(--p-space-0)">
      			<div class="Polaris-BlockStack" style="--pc-block-stack-inline-align:center;--pc-block-stack-order:column">
        			<div class="Polaris-EmptyState__ImageContainer Polaris-EmptyState__SkeletonImageContainer">
          				<img alt="" src="https://cdn.shopify.com/s/files/1/0262/4071/2726/files/emptystate-files.png" class="Polaris-EmptyState__Image" role="presentation">
            				<div class="Polaris-EmptyState__SkeletonImage"></div>
          			</div>
          			<div class="Polaris-Box" style="--pc-box-max-width:400px">
            				<div class="Polaris-BlockStack" style="--pc-block-stack-inline-align:center;--pc-block-stack-order:column">
              					<div class="Polaris-Box" style="--pc-box-padding-block-end-xs:var(--p-space-400)">
                					<div class="Polaris-Box" style="--pc-box-padding-block-end-xs:var(--p-space-150)">
                  						<p class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--block Polaris-Text--center">No Customers Enrolled</p>
							</div>
 							<span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--block Polaris-Text--center">
                  						<p>Nothing to display</p>
                					</span>
              					</div>
            				</div>
          			</div>
        		</div>
      		</div>
    	</div>
</div>
@endif


</body>
<script>
	setTitleBar('Customers');
</script>
</html>
