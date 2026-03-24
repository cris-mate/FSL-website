CREATE DATABASE pcto_db; 
USE pcto_db; 

CREATE TABLE stage ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    azienda VARCHAR(100) NOT NULL, 
    ruolo VARCHAR(100) NOT NULL, 
    data_inizio DATE, 
    data_fine DATE, 
    descrizione TEXT 
);
