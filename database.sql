CREATE DATABASE IF NOT EXISTS logo_desing
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE logo_desing;

CREATE TABLE IF NOT EXISTS layanan (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nama_layanan VARCHAR(150) NOT NULL,
  deskripsi TEXT NOT NULL,
  gambar VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO layanan (nama_layanan, deskripsi, gambar)
SELECT
  'Desain Logo',
  'Kami membuat desain logo yang menarik, mudah dikenali, dan sesuai dengan identitas bisnis atau kebutuhan Anda.',
  'img/logo.jpg'
WHERE NOT EXISTS (
  SELECT 1 FROM layanan WHERE nama_layanan = 'Desain Logo'
);