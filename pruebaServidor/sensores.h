#include <DHT.h>
#include<DHT_U.h>


float valHumendad() {
  DHT dht (D3,DHT11);
  float valor=dht.readHumidity();
  return valor;
}

float valTemperatura() {
  DHT dht (D3,DHT11);
  float valor=dht.readTemperature();
  return valor;
}

int valCo2() {
  int sensorPin = A0; 
  int valor = analogRead(sensorPin);
  return valor;
}
