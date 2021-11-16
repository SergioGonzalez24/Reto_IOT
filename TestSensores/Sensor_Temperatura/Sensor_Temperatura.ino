#include "wifiSetup.h"
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <DHT.h>
//llenar con url de base de datos local
String url="http://localhost/Actividad6/recibe.php?";

String id="tarjeta1";
DHT dht(D3, DHT11);
int ledEstado=0;

WiFiClient wifiClient;
HTTPClient http;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  pinMode(LED_BUILTIN, OUTPUT);
  Serial.println("\n");
  wifiSetup();
  
}

void loop() {
  // put your main code here, to run repeatedly:

  int valorSensor=dht.readTemperature();
  int led=random(0,2);
  digitalWrite(LED_BUILTIN, led);

  //Se invierten los valores para encender el led del NODE MCU ESP8266
  if(led==0) {
    ledEstado=1; 
  } else {
    ledEstado=0;
  }
  
  
  http.begin(wifiClient,url);
  http.addHeader("Content-Type","application/x-www-form-urlencoded");


  String postData="id="+id+"&valorSensor="+String(valorSensor)+"&ledEstado="+String(ledEstado);
  int httpCode=http.POST(postData);

  String respuesta=http.getString();

  //Serial.println(postData);
  Serial.println(httpCode);
  Serial.println(respuesta);
  http.end();
  delay(5000);  
 
  
}
