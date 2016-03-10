// SGWEB - sgweb.ino
// This file processes the string written on the serial by python script

void setup() {
  Serial.begin(115200);
  delay(100);
  //Serial.println("Serial Ready.");
}

void loop() {
  if (Serial.available() > 0){
    String input;
    int in;
    input=String(Serial.readString());
    int commaIndex = input.indexOf(':');
    int secondCommaIndex = input.indexOf(':', commaIndex+1);
    String function = input.substring(0, commaIndex);
    String pin_ = input.substring(commaIndex+1, secondCommaIndex);
    int pin = pin_.toInt();
    String param = input.substring(secondCommaIndex+1);
    if (function == "o"){
      if(param=="o") {
        //set pin as out
        pinMode(pin, OUTPUT);
        //Serial.println("Pin set as output.");
      }
      if(param=="0") {
        //write 0
        digitalWrite(pin,0);
        //Serial.println("LOW written on pin.");
      }
      if(param=="1") {
        //write 1
        digitalWrite(pin,1);
        //Serial.println("HIGH written on pin.");
      }
    }
    if (function == "i"){
      if(param=="i") {
        //set pin as in
        pinMode(pin, INPUT);
        //Serial.println("Pin set as input.");
      }
      if(param=="a") {
        //read analog
        in=analogRead(pin);
        Serial.println(in);
      }
      if(param=="d") {
        //read digital
        in=digitalRead(pin);
        Serial.println(in);
      }
    }
    if (function == "p"){
    //set pwm on pin (analog write)
    int param_=param.toInt();
    analogWrite(pin,param_);
    }
  }
}
