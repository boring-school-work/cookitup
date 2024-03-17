# Recipe Sharing Platform

This is mainly a group project for a web technologies course.

## Context

We are to create a website solution to serve the needs of a specific group of people.
We settled on creating a recipe sharing platform called **cookitup**.

## Description

The Recipe Sharing Platform is for cooking enthusiasts, food bloggers, and those
passionate about discovering new recipes. This virtual community allows users to
share, explore, and engage with diverse culinary creations. The platform aims to
enhance the cooking experience by fostering a collaborative environment where
users can showcase their favourite recipes and connect with others who share
their love for food.

## Running The Project

### Setup

#### Dependencies

- Nodejs (to run tailwind css).
- xampp (to run the php server & mysql server).

> See [Node.js Installation](https://nodejs.org/en/download/package-manager) to install nodejs.
> See [XAMPP Installation](https://www.apachefriends.org/index.html) to install xampp.

#### File Permissions

For file upload to work, you need to give the `assets/uploads` folder write permissions to php.

```console
chmod a+w assets/uploads
```

#### Starting XAMPP Server

- Start the apache and mysql servers in xampp.
- For windows and mac users, the xampp control panel is used to start the servers.
- For linux users, you can figure it out :). (Hint: Find detailed instructions here: [Setting up XAMPP as a service](https://gist.github.com/DaveSaah/161dd4c0662f07b7928436da302756d0).)

#### Load The Database

- Navigate to `http://localhost/phpmyadmin` in your browser.
- Upload `db/main.sql` to create the required database.

> If you have a different username or password for your mysql server, you will need to update them in the `settings/connection.php` file.

### Instructions For Development

1. Clone the repository into your `htdocs` folder.
2. Navigate to the project directory in your terminal.
3. Run `npm i` to install tailwind.
4. Start the tailwind development build by running `npm run dev` in the terminal.
5. Visit `http://localhost/cookitup` in your browser.
6. Make changes in your preferred text editor.

### Instructions For Production

1. Clone the repository into your `htdocs` folder.
2. Visit `http://localhost/cookitup` in your browser.
