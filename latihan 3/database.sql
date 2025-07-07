CREATE DATABASE IF NOT EXISTS form_db;
USE form_db;

CREATE TABLE IF NOT EXISTS makanan (
    kodeproduk INT AUTO_INCREMENT PRIMARY KEY,
    namamakanan VARCHAR(100) NOT NULL,
    hargajual(100) NOT NULL,
    beratisi DEC(15) NOT NULL,
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO makanan (kodeproduk, namamakanan, beratisi, hargajual) VALUES
('9992120', 'OREO', 500gr, 9300);
