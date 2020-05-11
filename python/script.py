#!/usr/bin/python
# -*- coding: iso-8859-1 -*-
import serial
comport = serial.Serial('COM6', 9600) 
print ('Serial Iniciada...\n')

import mysql.connector
cnx = mysql.connector.connect(user='root', password='', host='127.0.0.1', database='db_sysresultado')
cursor = cnx.cursor()
add_sinais = ("INSERT INTO leitura (valor) VALUES ('%s')")

while (True):
  serialValue = comport.readline()
  print (serialValue)
  cursor.execute(add_sinais, serialValue)
  cnx.commit()

cursor.close()
cnx.close()
comport.close()

