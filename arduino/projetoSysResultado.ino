
int ledPin = 8; //Pino ligado ao rele
int buttonPin = 2; // número do pino pushbutton

// set variables
String sinais;
int contador = 0; //variável para total de cliques
int estado = 0; // variável para leitura do pushbutton
int guarda_estado = LOW; // variável para armazenar valores do pushbutton
 
void setup()
{
  pinMode(ledPin, OUTPUT);
  pinMode(buttonPin, INPUT);
  Serial.begin(9600);
}
 
void loop()
{
  estado = digitalRead(buttonPin);
  
  if (estado == HIGH) {
    digitalWrite(ledPin, HIGH);
    contador++;
    while(digitalRead(buttonPin)){}
    sinais = String(contador);
    Serial.println(sinais);
  }
  else {
    digitalWrite(ledPin, LOW);
  }
}
