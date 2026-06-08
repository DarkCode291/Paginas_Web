CREATE DATABASE IF NOT EXISTS xinyang_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE xinyang_db;

DROP TABLE IF EXISTS contact_messages;
DROP TABLE IF EXISTS reservations;
DROP TABLE IF EXISTS menu_items;

CREATE TABLE menu_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  description TEXT NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  category VARCHAR(80) NOT NULL,
  image VARCHAR(255) NOT NULL,
  active TINYINT(1) DEFAULT 1,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE reservations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  phone VARCHAR(50) NOT NULL,
  email VARCHAR(150) NOT NULL,
  people INT NOT NULL,
  reservation_date DATE NOT NULL,
  reservation_time TIME NOT NULL,
  message TEXT NULL,
  status ENUM('pendiente','confirmada','cancelada') DEFAULT 'pendiente',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contact_messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(150) NOT NULL,
  subject VARCHAR(180) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO menu_items (name, description, price, category, image) VALUES
('Arroz chino tradicional - Personal', 'Arroz chino con vegetales, carnes y el sabor clásico de la casa.', 15000, 'Arroz chino tradicional', 'assets/img/xinyang/xinyang-5.png'),
('Arroz chino tradicional - Mediano', 'Porción mediana ideal para compartir.', 30000, 'Arroz chino tradicional', 'assets/img/xinyang/xinyang-5.png'),
('Arroz chino tradicional - Grande', 'Porción grande para familia o grupo.', 50000, 'Arroz chino tradicional', 'assets/img/xinyang/xinyang-5.png'),
('Arroz chino con camarón - Personal', 'Arroz chino con camarones y mezcla de vegetales.', 20000, 'Arroz chino con camarón', 'assets/img/xinyang/xinyang-6.png'),
('Arroz chino con camarón - Mediano', 'Porción mediana con camarón.', 40000, 'Arroz chino con camarón', 'assets/img/xinyang/xinyang-6.png'),
('Arroz chino con camarón - Grande', 'Porción grande con camarón.', 70000, 'Arroz chino con camarón', 'assets/img/xinyang/xinyang-6.png'),
('Arroz Valenciana', 'Especialidad de arroz estilo valenciana con acompañamientos.', 15000, 'Especialidades', 'assets/img/xinyang/xinyang-7.png'),
('Chow Mein', 'Pasta salteada estilo oriental con vegetales y proteínas.', 30000, 'Especialidades', 'assets/img/xinyang/xinyang-10.png'),
('Espaguetti chino', 'Espaguetti preparado al estilo chino de la casa.', 30000, 'Especialidades', 'assets/img/xinyang/xinyang-11.png'),
('Chop Suey', 'Vegetales salteados al estilo oriental con salsa especial.', 15000, 'Especialidades', 'assets/img/xinyang/xinyang-12.png'),
('Lumpia', 'Rollitos crocantes tradicionales, ideales como entrada.', 5000, 'Entradas y adicionales', 'assets/img/xinyang/xinyang-13.png'),
('Limonada', 'Bebida refrescante para acompañar los platos.', 7000, 'Bebidas', 'assets/img/xinyang/xinyang-14.png'),
('Granizado', 'Granizado en diferentes sabores.', 6000, 'Bebidas', 'assets/img/xinyang/xinyang-14.png');
