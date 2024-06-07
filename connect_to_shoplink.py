import os
import requests as r
import json
import time

def is_running(cmd):
    tmp = os.popen("ps -Af").read()
    proccount = tmp.count(cmd)

    if proccount > 0:
        print(cmd + " already running...");
        return 'yes';

    print(cmd + " started ...");
    return 'no';


def ngrok_start_karo():

    #php artisan serve chlia phle
    cmd = "php artisan serve --port 8000 > /dev/null &";
    if is_running("php artisan serve") == "no":
        os.system(cmd);
        time.sleep(5);

    #ngrok start kia
    cmd = "ngrok http 8000 > /dev/null &";
    if is_running("ngrok http 8000") == "no":
        os.system(cmd);
        time.sleep(5);

    #ngrok kis domain par serve ho rha usko nikala and return kia
    resp = r.get("http://127.0.0.1:4040/api/tunnels");
    resp = json.loads(resp.text);
    return resp['tunnels'][0]['public_url'];


def domain_ko_laravel_par_save_karo(shopLink_url, passw, domain):
    url  = f"{shopLink_url}/api/update_applink_domain";
    data = {'domain': domain, 'passw':passw}
    resp = r.post(url, json = data);
    return json.loads(resp.text)["status"];


domain = ngrok_start_karo();
print(domain);

#shopLink_url = input("url btao https k sath -->")
#passw = input("connection password btao -->")

shopLink_url = "https://demo12.midwayapps.com"
passw = "aGFybWFu"

resp   = domain_ko_laravel_par_save_karo(shopLink_url, passw, domain);
print(resp)
