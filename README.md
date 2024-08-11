# BloodBankManagement
# CRUD Application

This is a simple CRUD (Create, Read, Update, Delete) application that demonstrates basic PHP and MySQL operations. The application allows users to log in, sign up, and manage data through a web interface.

## Prerequisites

Before you begin, make sure you have the following installed on your local machine:

- **XAMPP:** A web server solution that includes Apache, MySQL, and PHP.
- **Web Browser:** Any modern web browser like Chrome, Firefox, etc.

## Setup Instructions

Follow these steps to set up the project locally on your machine.

### 1. Import the Database

1. Open **XAMPP** and start the **Apache** and **MySQL** services.
2. Open your web browser and go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
3. In phpMyAdmin, create a new database named `bloodbank`.
4. Click on the `Import` tab.
5. Click `Choose File` and select the `bloodbank.sql` file from the `database` folder in this project.
6. Click `Go` to import the database schema and data.

### 2. Run the Application

1. Place the project folder (`CRUD`) in the `htdocs` directory of your XAMPP installation (typically located at `C:\xampp\htdocs`).
2. Open your web browser and navigate to [http://localhost/CRUD/login.php](http://localhost/CRUD/login.php).
3. You should see the login page. You can either log in with existing credentials or sign up to create a new account.
4. After logging in or signing up, you will be directed to the main website.

## Usage

- **Login:** Access your account using your credentials.
- **Sign Up:** Create a new account if you don’t have one.
- **Manage Data:** Perform CRUD operations on the data through the web interface.

## Troubleshooting

- **Database Connection Errors:** Ensure that MySQL is running and that the database name in your `config.php` file matches the one you created in phpMyAdmin.
- **File Not Found Errors:** Verify that the project folder is correctly placed in the `htdocs` directory and that the server is running.

## License

This project is open-source and available under the skniyaznoor.(LICENSE).
