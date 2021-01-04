# cabinet-midical-web-application-php
A medical practice is a place where a liberal profession related to health care is exercised (examples: specialist doctor, dental surgeon, pulmonologist, radiologist, etc.) This doctor will offer in his premises consultations related to his specialty.
this project is a web application that can add clients and delete them 
you can accesse as secretary or a doctor 

1. first you must create a data base : 

--1--

1. CREATE DATABASE gestion_cabinet;

--2--

1. CREATE TABLE doctor 
(
- id INT(5) PRIMARYKEY NOT NULL AUTO_INCREMENT   ,
- name VARCHAR2(255) ,
- email VARCHAR2(255),
- password VARCHAR2(255)
)

--3--
CREATE TABLE PATIENT
(
id INT(5) PRIMARYKEY NOT NULL AUTO_INCREMENT   ,
first_name VARCHAR2(255) ,
last_name VARCHAR2(255) ,
age VARCHAR2(255) ,
phone VARCHAR2(255) ,
email VARCHAR2(255),
gender VARCHAR2(255) ,
maladie VARCHAR2(255) ,
doctor VARCHAR2(255)
)

--4--
CREATE TABLE doctor 
(
id INT(5) PRIMARYKEY NOT NULL AUTO_INCREMENT   ,
name VARCHAR2(255) ,
email VARCHAR2(255),
password VARCHAR2(255)
)
