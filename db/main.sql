drop database if exists GRP13_2025;
create database GRP13_2025;
use GRP13_2025;

--
-- Database: `GRP13_2025`
--

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--
CREATE TABLE roles (
  role_id INT PRIMARY KEY AUTO_INCREMENT,
  name ENUM('creator', 'reviewer', 'both') NOT NULL
);

-- Insert into role table (Its values don't change)
INSERT INTO roles (name) VALUES
("creator"),
("reviewer"),
("both");

--
-- Table structure for table `Users`
--
CREATE TABLE users (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  fname VARCHAR(50) NOT NULL,
  lname VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  password CHAR(70) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  role_id INT DEFAULT 3,
  FOREIGN KEY (role_id) REFERENCES roles(role_id)
);

--
-- Table structure for table `Recipes`
--
CREATE TABLE recipes (
  recipe_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  description TEXT,
  instructions TEXT,
  cook_time INT,
  image_url VARBINARY(100),
  author_id INT NOT NULL,
  FOREIGN KEY (author_id) REFERENCES users(user_id)
);

--
-- Table structure for table `Ingredients`
--
CREATE TABLE ingredients (
  name VARCHAR(50) NOT NULL,
  recipe_id INT NOT NULL,
  FOREIGN KEY (recipe_id) REFERENCES recipes(recipe_id)
);

--
-- Table structure for table `Reviews`
--
CREATE TABLE reviews (
  review_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  recipe_id INT,
  rating INT,
  comment TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (recipe_id) REFERENCES recipes(recipe_id) 
);
