#include <DHT.h>
#include<DHT_U.h>

int valFotores() {
  int valor=analogRead(A0);
  return valor;
}

float valTemperatura() {
  DHT dht (D3,DHT11);
  float valor=dht.readHumidity();
  return valor;
}

float valHumendad() {
  
  DHT dht (D3,DHT11);
  float valor=dht.readHumidity();
  return valor;
  
}
