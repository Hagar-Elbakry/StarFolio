# StarFolio

StarFolio is a Laravel-based web application for managing and showcasing movies. It includes user authentication, movie management and a responsive UI built with Tailwind CSS.


## Features

- User authentication (register, login, logout)
- Movie management (create, edit, delete, view)
- Profile management
- Pagination for movie listings
- Blade components are used to create reusable UI elements, such as buttons, forms, and layouts, ensuring consistency and reducing code duplication.
- Simplified database interaction with Elquent for creating, reading, updating and deleting records.
- Secured routes using middleware like `auth ` for authenticated users and `guest` for public access.
- Server-side validation for form submissions to ensure data integrity and prevent invalid inputs.
- All forms include a CSRF token automatically to ensure secure data submission.
- Laravel policies are used to manage user permissions and restrict access to specific actions.

---

## Folder Structure

- **app/**: Contains the core application logic (models, controllers, etc).
- **resources/**: Contains views, Tailwind CSS, and JavaScript files.
- **routes/**: Contains route definitions for the application.
- **database/**: Contains migrations, seeders, and factories.
- **public**/: Contains publicly accessible files like images, CSS, and JavaScript.

---

## Technologies Used

- **Laravel**: Backend framework for building the application.
- **Tailwind CSS**: Utility-first CSS framework for styling.
- **MySQL**:  Database for storing application data.
- **Composer**: Dependency manager for PHP.
