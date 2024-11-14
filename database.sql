CREATE DATABASE smartbike;
USE smartbike;

CREATE TABLE bikes (
  bike_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  type VARCHAR(255) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  description TEXT
);

CREATE TABLE photos (
  photo_id INT PRIMARY KEY AUTO_INCREMENT,
  bike_id INT NOT NULL,
  url VARCHAR(255) NOT NULL,
  FOREIGN KEY (bike_id) REFERENCES bikes(bike_id)
);

CREATE TABLE orders (
  order_id INT PRIMARY KEY AUTO_INCREMENT,
  bike_id INT NOT NULL,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  message VARCHAR(255) NOT NULL,
  FOREIGN KEY (bike_id) REFERENCES bikes(bike_id)
);

CREATE TABLE contact (
  contact_id INT PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  message VARCHAR(255) NOT NULL
);

INSERT INTO bikes (name, type, price, description) VALUES
  ('Bike5', 'Electrique', 1000.00, 'Avec le Bike5, découvrez la ville autrement.'),
  ('BikeOne', 'Road', 1500.00, 'Avec le BikeOne, redécouvrez le plaisir de la route.'),
  ('Bike22', 'Mountain', 1200.00, 'Avec le Bike22, allez plus loin, plus vite.'),
  ('BikeFirst', 'Hybrid', 1200.00, 'Avec le BikeFirt, découvrez de nouvelles sensations.');

INSERT INTO photos (bike_id, url) VALUES
  (1, 'bike5_1.jpg'),
  (1, 'bike5_2.jpg'),
  (1, 'bike5_3.jpg'),
  (2, 'bikeone_1.jpg'),
  (2, 'bikeone_2.jpg'),
  (3, 'bike22_1.jpg'),
  (3, 'bike22_2.jpg'),
  (3, 'bike22_3.jpg'),
  (4, 'bikefirst_1.jpg'),
  (4, 'bikefirst_2.jpg'),