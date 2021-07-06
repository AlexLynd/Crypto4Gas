#!/usr/bin/env python

from __future__ import print_function
import time
from struct import *
from RF24 import *
from RF24Network import *
import base64
import requests
import json

radio = RF24(25,8) # CE, CSN
network = RF24Network(radio)

millis = lambda: int(round(time.time() * 1000))
octlit = lambda n: int(n, 8)

# Address of our node in Octal format (01, 021, etc)
this_node = octlit("00")

# Address of the other node
other_node = octlit("01")

radio.begin()
time.sleep(0.1)
network.begin(90, this_node)  # channel 90
radio.setDataRate(RF24_2MBPS)
radio.printDetails()
packets_sent = 0
last_sent = 0

def decode_MAC(raw):
    return ':'.join( base64.b64decode(raw).hex().upper()[i:i+2] for i in range(0,12,2))


while 1:
    network.update()
    while network.available():
        header, payload = network.read(62)
        num_group = [int(base64.b64decode(payload[25:31].decode()+'==').hex()[i:i+2],16) for i in range(0,8,2)]
        packet = {"dev":decode_MAC(payload[0:8]),"src":decode_MAC(payload[8:16]),"dst":decode_MAC(payload[16:24]),"rss":-num_group[0],"ess":payload[31:].decode().strip("+"),"ch":num_group[1],"ft":num_group[2],"fst":num_group[3]} 
        print("node "+str(header.from_node)+": ")
        print(payload.decode()) # raw packet
        print(packet)
        print()
