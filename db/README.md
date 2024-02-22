# Designing The Database Schema

<!--toc:start-->

- [Designing The Database Schema](#designing-the-database-schema)
  - [Entities](#entities)
  - [Relationships](#relationships)
  <!--toc:end-->

## Entities

**Users:** Represents a user of the platform. \
**Attributes:** user ID, username, password, email, profile picture, bio,
role ID, created_at.

**Roles:** Represents the role of a user. (creator, reviewer, or both). \
**Attributes:** role ID, name.

**Recipes:** Represents a recipe on the platform. \
**Attributes:** recipe ID, title, description, instructions, cook time, image, author ID.

**Ingredients:** Represent the ingredients used in a recipe. \
**Attributes:** recipe ID, name, quantity, unit.

**Reviews:** Represents a review of a recipe by a user. \
**Attributes:** review ID, user ID, recipe ID, rating, comment, created_at.

## Relationships

- A user can create many recipes.
- A user can have one or more roles.
- A recipe can have many ingredients.
- A user can write many reviews for different recipes.
- A recipe can have many reviews from different users.
