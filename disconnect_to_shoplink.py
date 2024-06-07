print('Run the above commands -->');
print("sudo kill $(sudo lsof -t -i:8000)");
print('sudo kill -9 "$(pgrep ngrok)"');
