#include "wifiSetup.h"
#include "sensores.h"
#include "Solicitudes.h"


//llenar con url de base de datos local
String ip="192.168.3.42";
String url="http://"+ip+"/pruebaReto/recibe.php";


String id="3";
int valorSensor=0;
String SensorId="";
String SensorNombre="";


void setup() {

  Serial.begin(115200);
  pinMode(LED_BUILTIN, OUTPUT);
  Serial.println("\n");
  Serial.println("\n");
  wifiSetup();
  
}

void loop() {

//CODIGO SENSORES


//SENSOR CO2

SensorId="123";
SensorNombre="CO2";

valorSensor=valCo2();
solicitud(id,SensorId,SensorNombre,valorSensor,url);


//SENSOR HUMEDAD

SensorId="456";
SensorNombre="HUMEDAD";

valorSensor=valHumendad();
solicitud(id,SensorId,SensorNombre,valorSensor,url);

//Sensor Temperatura

SensorId="456";
SensorNombre="TEMPERATURA";

valorSensor=valTemperatura();
solicitud(id,SensorId,SensorNombre,valorSensor,url);

delay(5000);  
 
  
}
