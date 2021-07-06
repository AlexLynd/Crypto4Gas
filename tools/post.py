dev = ["CC:50:E3:55:68:15", "CC:50:E3:55:69:69", "CC:50:E3:55:00:00"]
src = ["45:59:63:93:8F:4E","46:C1:7F:24:BA:F2","65:17:1F:20:C4:61","D8:F0:C1:F1:BC:0E","36:6F:A9:81:AB:46","B3:C1:46:D6:DD:89","88:2D:5C:1F:F1:47"]
dst = ["6A:A1:72:F6:68:6C","8A:10:33:A4:64:83","2A:6F:85:AD:33:44","0A:8F:EF:36:C8:CC","FF:FF:FF:FF:FF:FF","FC:C1:42:4A:82:CB","EE:E1:16:D6:6C:7A","24:19:5D:7F:0D:91"]
ess = ["TC8715D45", "Pebbles-2G", "MySpectrumWiFiFE-2G", "MySpectrumWiFi8E-2G", "Toilet Cam",""]

import requests, random, json, time

url = 'http://localhost/stream.php'
myobj = {'somekey': 'somevalue'}


while True:
	
	c4g_data = {"dev":dev[random.randrange(len(dev))],"src":src[random.randrange(len(src))],"dst":dst[random.randrange(len(dst))],"rss":random.randrange(-90,-70),"ess":ess[random.randrange(len(ess))],"ch":random.randrange(1,11),"ft":random.randrange(0,3),"fst":8,"seq":random.randrange(10000)}
	
	print(c4g_data)
	time.sleep(.5)
	x = requests.post(url, json = c4g_data)
	print(x.text)
#print the response text (the content of the requested file):




