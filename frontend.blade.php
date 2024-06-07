console.log("js loaded");

function getKeyFromLocal(key) {
	var item = JSON.parse(localStorage.getItem('bossLyTy'));
	if ( item ){
		if(item[key] !== undefined && item[key] !== null ) {
			return item[key];
		}
	}
	return false;
}

function setKeysToLocal(key, value)
{
    var result = JSON.parse(localStorage.getItem('bossLyTy'));

    if (! result ) {
	var result = {};
    }

    result[key] = value;
    var serializedItem = JSON.stringify(result);
    localStorage.setItem('bossLyTy', serializedItem);
}

async function save_visit_points()
{
	var last_visit = getKeyFromLocal(__st.cid);
	var today = new Date().toISOString().slice(0, 10);
	if(__st.cid != "undefined" && {{$visit_activity_state}} == 1)
	{
		if(!last_visit)
		{
			setKeysToLocal(__st.cid, today);
		}
		else
		{
			if(today > last_visit)
			{
				await fetch("{{env('APP_URL')}}/api/save_visit_entry/{{$shop->our_passw_token}}/"+__st.cid,{method: "GET",headers:new Headers({"ngrok-skip-browser-warning": "69420",      }),});
                        	setKeysToLocal(__st.cid, today);
			}
		}
	}
}

function prepareFrame() 
{
	let ifrm = document.createElement("iframe");
	ifrm.id = "iframeid";
	ifrm.style.cssText = 'background:url("{{env('APP_URL')}}/loading.png") center center no-repeat;opacity:1;display:none;position:fixed;bottom:90px;z-index:2147483647;width:346px;height:440px;border:none;border-radius:10px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);';

	iframe_styling_from_db(ifrm);

	document.body.appendChild(ifrm);

	load_html_of_iframe(ifrm);	
}

function iframe_styling_from_db(ifrm)
{
	let json_data = '{{$shop->customization}}';
	json_data = json_data.replace(/&quot;/g,'"');
	let data = JSON.parse(json_data);

	if(json_data != '[]')
	{
		if(data.align == "right")
		{
			ifrm.style.right = "30px";
		}
		if(data.align == "left")
		{
			ifrm.style.left = "30px";
		}
	}

	if(json_data == '[]')
	{
		ifrm.style.left = '30px';
	}
}

function load_html_of_iframe(ifrm)
{
	if( __st.cid )
	{
		ifrm.setAttribute('loading', 'lazy');
		ifrm.onload = function()
		{
			ifrm.style.background = "#f6f6f7";
		}
		ifrm.setAttribute("src", "{{env('APP_URL')}}/points_popup/{{$shop->our_passw_token}}/"+__st.cid)
		save_visit_points();
	}
	else
	{
		ifrm.onload = function()
		{
			ifrm.style.background = "#f6f6f7";
		}

		ifrm.setAttribute("src", "{{env('APP_URL')}}/signup_popup/{{$shop->our_passw_token}}");
	}
}

function widget_styling_from_db(widget)
{
	let json_data = '{{$shop->customization}}';
	if(json_data != '[]')
	{
		json_data = json_data.replace(/&quot;/g,'"');
		let data = JSON.parse(json_data);

		if(data.align == "right")
		{
			widget.style.cssText = "position:fixed;bottom:20px;right:30px;width:115px;height:50px;border-radius:13px;z-index:9;font-size:15px;cursor:pointer;border:none;";
			widget.style.backgroundColor = data.theme_color;
			widget.style.color = data.widget_text;
		}

		if(data.align == "left")
		{
			widget.style.cssText = "position:fixed;bottom:20px;left:30px;width:115px;height:50px;border-radius:13px;z-index:9;font-size:15px;cursor:pointer;border:none;";
			widget.style.backgroundColor = data.theme_color;
			widget.style.color = data.widget_text;
		}
	}
	if(json_data == '[]')
	{
		widget.style.cssText = "position:fixed;bottom:20px;left:30px;width:115px;height:50px;border-radius:13px;z-index:9;font-size:15px;cursor:pointer;border:none;";
		widget.style.backgroundColor = 'slateblue';
		widget.style.color = 'white';
	}
}

window.onload = async function()
{
	prepareFrame();
	let widget = document.createElement("button");

	widget_styling_from_db(widget);

	widget.innerText = "Loyalty Points";
	document.body.appendChild(widget);
	widget.onclick = function()
	{
		document.getElementById("iframeid").style.display = "flex";
	}
}

window.addEventListener("message", function(event)
{
	if (event.data === "closeIframe")
	{
		document.getElementById("iframeid").style.display = "none";
	}
});
