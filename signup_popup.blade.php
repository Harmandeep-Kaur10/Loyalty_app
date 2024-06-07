<html>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<style>
	.heading
	{	
		height:60px;
		padding-top:16px;
		padding-left:20px;
	}
	.cross
	{
		position:relative;
		top:-41px;
		left:296px;
	}
	.signup
	{
		position: relative;
		left: 127px;
		top: 40px;
		text-decoration:none;
		height: 30px;
	}
	.login
	{
		position:relative;
		left:135px;
		top:81px;
		text-decoration:none;
		height: 30px;
	}
</style>
<body>
<div>
	<h5 class="text-xl font-bold heading elements">Introducing Loyalty Points</h5>
	<button type="button" id="cross" class="ms-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 p-1.5 inline-flex ring-white items-center justify-center h-8 w-8 cross elements" data-dismiss-target="#toast-default" aria-label="Close">
        	<span class="sr-only">Close</span>
        	<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            		<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        	</svg>
	</button>
</div>
<div>
	<div style="text-align:center;position:relative;top:27px;padding-left:10px;padding-right:10px;">
		<p style="display:inline;">Sign up to <p style = "font-weight:bold;display:inline;">{{$shop->name}}'s</p> store to start earning rewards</p>
	</div>
	<a href = "https://{{$shop->msd}}/account/register" target = "_top">
		<button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 me-2 mb-2 signup elements">Sign Up</button>
	</a>
</div>
<div>
	<p style="text-align:center;position:relative;top:70px;">Already have an account?</p> 
	<a href = "https://{{$shop->msd}}/account/login" target = "_top">
		 <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 me-2 mb-2 login elements">LogIn</button>

	</a>
</div>
</body>

<script src="https://cdn.tailwindcss.com/3.4.3"></script>
<script>
	document.getElementById("cross").addEventListener("click", function()
	{
		window.parent.postMessage("closeIframe", "*");
	});

	window.onload = function()
	{
		let json_data = '{{$shop->customization}}';
                json_data = json_data.replace(/&quot;/g,'"');
                let data = JSON.parse(json_data);
                if(json_data != '[]')
		{
		 	let elements = document.getElementsByClassName('elements');
			for(let i=0; i<elements.length; i++)
			{
				elements[i].style.color = data.widget_text;
				elements[i].style.backgroundColor = data.theme_color;
			}
		}

		if(json_data == '[]')
		{
			let elements = document.getElementsByClassName('elements');
                        for(let i=0; i<elements.length; i++)
                        {
                                elements[i].style.color = "white";
                                elements[i].style.backgroundColor = "slateblue";
                        }
		}
	}
</script>
</html>
