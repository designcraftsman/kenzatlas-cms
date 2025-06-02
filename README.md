# KenzAtlas CMS

KenzAtlas CMS is a content management system designed to manage the backend operations of the KenzAtlas platform. It provides tools for managing users, products, orders, articles, and messages, along with a dashboard for tracking key metrics.

## Features

### User Management
- **Add, Update, Delete Users**: Manage user accounts and permissions.
- **Authentication**: Secure login and logout functionality.

### Product Management
- **CRUD Operations**: Add, update, delete, and view products.
- **Category Management**: Organize products into categories.

### Order Management
- **Order Tracking**: View and manage customer orders.
- **Confirmation**: Confirm or reject orders.

### Article Management
- **Create Articles**: Add new articles for the blog.
- **Edit and Delete Articles**: Manage existing articles.

### Messaging System
- **Inbox**: View and respond to customer messages.
- **Notifications**: Manage system notifications.

### Dashboard
- **Metrics**: Track daily views, sales, comments, and earnings.
- **Recent Activity**: View recent user registrations and confirmed orders.

## Technologies Used

### Backend
- **PHP**: Core backend logic.
- **MySQL**: Database for storing user, product, and order data.

### Frontend
- **HTML5**: Structure and content.
- **CSS3/SCSS**: Styling with variables and modular design.
- **JavaScript**: Interactivity and dynamic behavior.
- **Bootstrap**: Responsive design framework.

### Tools
- **SASS**: CSS preprocessor for modular styling.
- **Font Awesome**: Icon library for UI elements.

## MVC Architecture

The project follows the Model-View-Controller (MVC) design pattern:

- **Model**: Handles the business logic and database interaction. For example, `productsController.php` manages product-related operations like fetching, adding, updating, and deleting products.
- **View**: Responsible for rendering the user interface. Views such as `dashboard.php` and `login.php` display data provided by the controllers.
- **Controller**: Acts as the intermediary between the Model and View. Controllers like `dashboard.php` and `userController.php` process user input, interact with the Model, and update the View.

This architecture ensures separation of concerns, making the application easier to maintain and scale.

## Project Structure

```
kenzatlas-cms/
├── index.php
├── package.json
├── assets/
│   └── img/
├── controllers/
│   ├── dashboard.php
│   ├── logout.php
│   ├── articles/
│   ├── components/
│   ├── messages/
│   ├── orders/
│   ├── products/
│   ├── user/
│   └── users/
├── css/
│   ├── style.css
│   ├── style.css.map
├── js/
│   ├── login.js
│   └── script.js
├── lib/
│   └── database.php
├── models/
│   ├── articlesController.php
│   ├── messagesController.php
│   ├── orderController.php
│   ├── productsController.php
│   ├── userController.php
│   └── usersController.php
├── sass/
│   ├── main.scss
│   ├── components/
│   ├── override/
│   └── pages/
├── views/
│   ├── dashboard.php
│   ├── layout.php
│   ├── login.php
│   ├── articles/
│   ├── messages/
│   ├── orders/
│   └── users/
```

## How to Run

1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```
2. Set up a MySQL database and import the schema.
3. Update database credentials in `lib/database.php`.
4. Compile SCSS to CSS using the script defined in `package.json`:
   ```bash
   npm run sass
   ```
5. Start a local server (e.g., XAMPP or WAMP) and place the project in the server's root directory.
6. Open `index.php` in your browser.
