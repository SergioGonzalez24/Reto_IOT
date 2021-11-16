#include <DHT.h>

int valFotores() {
  int valor=analogRead(A0);
  return valor;
}

float valHumendad() {
  
  DHT dht (D3,DHT11);
  float valor=dht.readTemperature();
  return valor;
  
}
