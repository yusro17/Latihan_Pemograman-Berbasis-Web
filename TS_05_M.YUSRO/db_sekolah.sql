CREATE DATABASE IF NOT EXISTS form_db;
USE form_db sekolah;

CREATE TABLE IF NOT EXISTS kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    pesan TEXT NOT NULL,
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO kontak (nama, email, tanggal_lahir, pesan) VALUES
('jojo', 'jojo@example.com', '2000-02-02', 'Halo, nama saya jojeng.');
