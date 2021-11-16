#include <ESP8266WiFi.h>

void wifiSetup() {
  // Sustituir con datos de red a conectar
  const char* ssid     = "";
  const char* password = "";
  byte cont = 0;
  byte max_intentos = 50;

  Serial.begin(115200);

  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED and cont < max_intentos)  {
    digitalWrite(LED_BUILTIN,0);
    delay(50);
    digitalWrite(LED_BUILTIN,1);
    delay(50);
}

}
