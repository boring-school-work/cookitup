drop database if exists Vault;
create database Vault;
use Vault;

--
-- Database: `Vault`
--

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE roles (
  role_id INT PRIMARY KEY AUTO_INCREMENT,
  name ENUM('creator', 'reviewer', 'both') NOT NULL
  
);

--
-- Table structure for table `Users`
--

CREATE TABLE users (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL UNIQUE,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  profile_picture VARCHAR(255),
  bio TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  role_id INT,
  FOREIGN KEY (role_id) REFERENCES roles(role_id)  
  
);

--
-- Table structure for table `Recipes`
--

CREATE TABLE recipes (
  recipe_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  instructions TEXT,
  cook_time INT,
  image_url VARCHAR(255),
  author_id INT NOT NULL,
  FOREIGN KEY (author_id) REFERENCES users(user_id)
  
);

--
-- Table structure for table `Ingredients`
--

CREATE TABLE ingredients (
  ingredient_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  quantity DECIMAL,
  unit ENUM('gram', 'kilogram', 'milliliter', 'liter', 'teaspoon', 'tablespoon', 'cup'),
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
