#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

void solicitud(String d_id, String s_id, String s_nombre, int s_valor, String url) {

  WiFiClient wifiClient;
  HTTPClient http;
  
  http.begin(wifiClient,url);
  http.addHeader("Content-Type","application/x-www-form-urlencoded");
  
  if ( isnan(s_valor) ){
    Serial.println("Error leyendo el sensor.");
    delay(1000);
    return;
  }
  
  String postData = "d_id="+d_id+"&s_id="+s_id+"&s_nombre="+s_nombre+"&s_valor="+String(s_valor);
  int httpCode=http.POST(postData);

  String respuesta=http.getString();
  Serial.println("\n");
  Serial.println("\n");
  Serial.println("******************************");
  Serial.println("url:\t");
  Serial.println(url);
  Serial.println("******************************");
  Serial.println("data:\t");
  Serial.println(postData);
  Serial.println("******************************");
  Serial.println("Info:\t");
  Serial.println(httpCode);
  Serial.println(respuesta);
  Serial.println("******************************");
  http.end();


}
