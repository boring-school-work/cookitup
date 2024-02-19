# Designing The Database Schema

<!--toc:start-->

- [Designing The Database Schema](#designing-the-database-schema)
  - [Entities](#entities)
  - [Relationships](#relationships)
  <!--toc:end-->

## Entities

**User:** Represents a user of the platform.
**Attributes:** user ID, username, password, email, bio, profile picture, role
(creator, visitor, reviewer).

**Recipe:** Represents a recipe on the platform.
**Attributes:** recipe ID, title, description, ingredients, instructions,
cook time, cuisine, dietary restrictions, image.

**Ingredient:** Represents an ingredient used in a recipe.
**Attributes:** ingredient ID, name, quantity, unit

**Review:** Represents a review of a recipe by a user.
**Attributes:** review ID, user ID, recipe ID, rating, comment

**Category:** Represents a category for recipes (e.g., breakfast, main course, dessert).
**Attributes:** category ID, name

**Allergy:** Represents an allergy or dietary restriction.
**Attributes:** allergy ID, name

## Relationships

- A user can create many recipes.
- A recipe can have many ingredients.
- A user can write many reviews for different recipes.
- A recipe can have many reviews from different users.
- A recipe can belong to one category.
- A user can have many allergies or dietary restrictions.
- A recipe can consider many allergies or dietary restrictions.
