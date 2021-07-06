// base receiver

#include <RF24Network.h>
#include <RF24.h>
#include <SPI.h>

RF24 radio(7,8);   
RF24Network network(radio);      
const uint16_t this_node = 00;   // base node address

void setup() {
  SPI.begin();
  radio.begin();
  Serial.begin(115200);
  network.begin(90, this_node);
  radio.setDataRate(RF24_2MBPS);
  Serial.println("Starting base node.  Waiting for packets...");
}
void loop() {
  network.update();
  while ( network.available() ) { // check for incoming data
    RF24NetworkHeader header;
    unsigned long incomingData;
    char packet[62];

    network.read(header, &packet, sizeof(packet)); 
    Serial.print("Packet from node ");
    Serial.print(header.from_node); Serial.print(": ");
    for(int x=0;x<sizeof(packet);x++) { Serial.print(packet[x]); }
    Serial.println();
    
  }
}
