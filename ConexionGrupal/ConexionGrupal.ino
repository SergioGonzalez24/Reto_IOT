#include "wifiSetup.h"
#include "sensores.h"
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

//llenar con url de base de datos local

String url="http://monitoreo-ambiental.000webhostapp.com/enviodedatos.php";


String idUnidad="3";
int valorSensor=0;
int ledEstado=0;

WiFiClient wifiClient;
HTTPClient http;

void setup() {
ya 
  Serial.begin(115200);
  pinMode(LED_BUILTIN, OUTPUT);
  Serial.println("\n");
  Serial.println("\n");
  wifiSetup();
  
}

void loop() {

  http.begin(wifiClient,url);
  http.addHeader("Content-Type","application/x-www-form-urlencoded");
  
  int led = random(0,2);
  //valorSensor = random(0,60);
  digitalWrite(LED_BUILTIN, led);

  //Se invierten los valores para encender el led del NODE MCU ESP8266
  if(led==0) {
    ledEstado=1; 
  } else {
    ledEstado=0;
  }

//CODIGO SENSORES


/*¿Que sensor se desea usar?
*res = 1 --> para utilizar fotoresistencia
*res = 2 --> para utilizar el sensor de humedad
*/
int res=1;

if(res==1) {
  valorSensor=valFotores();
  Serial.println("\n");
  Serial.println("******************************");
  Serial.println("valor fotoresistencia:\t");
  Serial.println(valorSensor);
  Serial.println("******************************");
  Serial.println("\n");
}

else if(res==2) {
  valorSensor=valHumendad();
  Serial.println("\n");
  Serial.println("******************************");
  Serial.println("valor humedad:\t");
  Serial.println(valorSensor);
  Serial.println("******************************");
  Serial.println("\n");

}
 
  

  String postData = "unidad=" + idUnidad + &sensor=" + sensor + "&valor=" + String(valor);
  int httpCode=http.POST(postData);
  String respuesta=http.getString();

  http.end();
  delay(5000);  
 
  
}
