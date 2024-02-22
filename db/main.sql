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
  username VARCHAR(50) NOT NULL UNIQUE,
  email VARCHAR(50) NOT NULL UNIQUE,
  password CHAR(70) NOT NULL, #if using PASSWORD_DEFAULT hashing methos
  profile_picture VARBINARY(100),  #Storing this directly here is not ideal
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
  ingredient_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
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

#Insert into role table (Its values don't change)
INSERT INTO roles (name) VALUES
("creator"),
("reviewer"),
("both");




/*
#Testing
#Insert User
INSERT INTO users (username, email, password, role_id) 
VALUES ("johndoe", "johndoe@example.com", "hashed_password", 1); -- Replace with actual hashed password

SELECT * FROM users;

#New Recipe
INSERT INTO recipes (title, description, cook_time, author_id) 
VALUES ("My Grandma's Cookies", "Delicious and easy cookies", 30, 1);

SELECT * FROM recipes;

#Adding ingredients to recipe
INSERT INTO ingredients (name, quantity, unit, recipe_id) VALUES ("Flour", 2, "cup", 1);
INSERT INTO ingredients (name, quantity, unit, recipe_id) VALUES ("Sugar", 1, "cup", 1);
INSERT INTO ingredients (name, quantity, recipe_id) VALUES ("Eggs", 2, 1);

#Review for the recipe
INSERT INTO reviews (user_id, recipe_id, rating, comment) VALUES (1, 1, 5, "Absolutely delicious!");

#Selections
SELECT users.*, roles.name AS role_name
FROM users
LEFT JOIN roles ON users.role_id = roles.role_id;

SELECT * FROM recipes WHERE author_id = 1;
SELECT * FROM ingredients WHERE recipe_id = 1;
SELECT * FROM reviews WHERE recipe_id = 1;

#Updating
UPDATE users SET profile_picture = "new_image.jpg" WHERE user_id = 1;
UPDATE recipes SET cook_time = 45 WHERE recipe_id = 1;
UPDATE ingredients SET quantity = 3 WHERE ingredient_id = 1;

#Deletion
DELETE FROM reviews WHERE recipe_id = 1;
DELETE FROM ingredients WHERE recipe_id = 1; 
DELETE FROM recipes WHERE recipe_id = 1; 
DELETE FROM users WHERE user_id = 1; 
*/




