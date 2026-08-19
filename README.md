# Company Internship Portal

## BCA-VB Internal Assessment Project

**Developed by:** Shivang Balune

This project is a simple **Company Internship Portal** developed using PHP and MySQL.

The portal allows companies to register, log in, and manage their internship opportunities.

---

## Features

* Company Registration
* Company Login
* Add Internship
* View Internships
* Modify Internship
* Delete Internship
* Form Validation
* MySQL Database
* Basic CSS Design

---

## Technologies Used

* PHP
* MySQL
* HTML
* CSS
* XAMPP

---

## Project Structure

```text
internship-portal/
│
├── index.php
├── register.php
├── login.php
├── logout.php
├── dashboard.php
├── add_internship.php
├── view_internships.php
├── edit_internship.php
├── delete_internship.php
├── db.php
├── style.css
├── database.sql
└── README.md
```

---

## Project Files

| File | Description |
| ----------------------- | ----------------------------- |
| `index.php` | Home page |
| `register.php` | Company registration |
| `login.php` | Company login |
| `logout.php` | Company logout |
| `dashboard.php` | Company dashboard |
| `add_internship.php` | Add a new internship |
| `view_internships.php` | View internship opportunities |
| `edit_internship.php` | Modify internship details |
| `delete_internship.php` | Delete an internship |
| `db.php` | Database connection |
| `style.css` | Basic website design |
| `database.sql` | Database and table structure |
| `README.md` | Project documentation |

---

## How to Run

### Step 1: Install XAMPP

Download and install XAMPP on your computer.

### Step 2: Start XAMPP

Open the XAMPP Control Panel and start:

* Apache
* MySQL

### Step 3: Copy the Project

Copy the `internship-portal` folder into:

```text
C:\xampp\htdocs\
```

The final location should be:

```text
C:\xampp\htdocs\internship-portal
```

### Step 4: Create the Database

Open phpMyAdmin in your browser:

```text
http://localhost/phpmyadmin/
```

Import the `database.sql` file.

The database will be created with the name:

```text
internship_portal
```

### Step 5: Run the Project

Open your browser and enter:

```text
http://localhost/internship-portal/
```

---

## Database

### Database Name

```text
internship_portal
```

### Tables

The project uses two main tables:

```text
companies
internships
```

The `companies` table stores company registration and login information.

The `internships` table stores internship opportunities created by companies.

---

## Working Flow

The working flow of the Company Internship Portal is simple.

### 1. Home Page

The user opens:

```text
index.php
```

The home page provides options for:

* Company Registration
* Company Login

### 2. Company Registration

The company selects **Company Registration**.

The company enters:

* Company Name
* Email
* Password
* Confirm Password

After successful registration, the company can go to the Login page.

### 3. Company Login

The company enters:

* Email
* Password

After successful login, the company is taken to the Dashboard.

### 4. Dashboard

The Dashboard provides options to:

* Add Internship
* View Internships
* Logout

### 5. Add Internship

The company enters:

* Internship Title
* Location
* Duration
* Stipend
* Last Date to Apply

After submitting the form, the internship is added successfully.

### 6. View Internships

The company can open **View Internships** to see its internship opportunities.

Each internship has options to:

* Edit
* Delete

### 7. Edit Internship

The company can select **Edit** and modify the internship details.

### 8. Delete Internship

The company can select **Delete** to remove an internship.

### 9. Logout

The company can select **Logout** to end the current session.

---

## Simple Project Flow

```text
index.php
↓
Company Registration
↓
Company Login
↓
Dashboard
↓
Add Internship
↓
View Internships
↓
Edit / Delete Internship
↓
Logout
```

---

## Main PHP Concepts Used

This project demonstrates the following PHP programming concepts:

* HTML Forms
* PHP Form Handling
* `$_POST`
* `$_GET`
* PHP Sessions
* `include`
* MySQL Connection
* `INSERT`
* `SELECT`
* `UPDATE`
* `DELETE`
* Form Validation

---

## What Each Main File Does

### `index.php`

Displays the home page and provides links for company registration and login.

### `register.php`

Allows a company to create an account by entering its company name, email, and password.

### `login.php`

Checks the company email and password and starts a PHP session after successful login.

### `dashboard.php`

Displays the company dashboard and provides links to manage internships.

### `add_internship.php`

Provides a form for adding a new internship opportunity.

### `view_internships.php`

Displays the internship opportunities created by the logged-in company.

### `edit_internship.php`

Allows the company to modify existing internship information.

### `delete_internship.php`

Allows the company to delete an internship opportunity.

### `logout.php`

Ends the current company session and returns the user to the Login page.

### `db.php`

Connects the PHP project to the MySQL database.

### `style.css`

Provides basic styling and design for the website.

### `database.sql`

Contains the SQL commands used to create the database and tables.

---

## Purpose

This project is developed for the **PHP Programming Internal Assessment of BCA-VB**.

The main purpose of the project is to demonstrate basic PHP programming concepts, form handling, database connectivity, CRUD operations, sessions, and basic web design.

---

## Author

**Shivang Balune**

BCA-VB

PHP Programming Internal Assessment Project
