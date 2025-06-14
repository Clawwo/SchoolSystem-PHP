# School Management System - Native PHP

A simple **School Management System** built using **native PHP**, designed to manage data for **students**, **teachers**, **classrooms**, and **class**. The system includes **role-based authentication** for **Admin** and **User**, and supports full **CRUD operations**.

## Features

- **Authentication**
  - Login based on roles (`Admin` & `User`)
  - Session-based access control for secure login

- **Data Management (CRUD)**
  -  Student Data
  -  Teacher Data
  -  Class Data
  -  Classroom Data

- **User Roles and Interfaces**
  - **Admin Dashboard**
    - Full access to manage all school data
  - **User Dashboard**
    - Limited access to view specific data

## Built With

- PHP Native (without frameworks)
- MySQL (Database)
- HTML & CS
- JavaScript 
- Sessions & Role-based Access Control (RBAC)

## Getting Started
Follow the steps below to install, configure, and run the School Management System on your local machine.

- **Clone or Download the Project**

```bash
git clone https://github.com/your-username/school-system-php.git
cd school-system-php
```

- **Or Download ZIP**
  - Go to the github repository.
  - Click **"Code"** > **"Download ZIP"**.
  - Extract the ZIP into your local server directory (e.g., www for laragon dan htdocs if using XAMPP) 


- **Set Up the Database**
  - Open your browser and go to **http://localhost/phpmyadmin**
  - Click New, then create a databse named
  ```bash
    sekolah
  ```
  - Click the new database, then go to the **import** tab
  - Choose the SQL file: database/sekolah.SQL
  - Click **Go** to import the database


- **Configure the Database Connection**
  - Open the file:
  ```bash
  connection.php
  ```

  - Make sure the connection settings match your local environment:
  ```bash
  $host = 'localhost';
  $dbname = 'sekolah';
  $user = 'root';
  $pass = '';
  ```
  Adjust the $user and $pass if you're not using default XAMPP credentials.

- **Start your local server**
- Open **XAMPP** or **laragon**
- Start the services: **Apache** and **MySQL**

- Run the Application
- Open your browser
- Gor to:
```bash
http://localhost/sekolah/
```

## Screenshot
- **Login Page**
  ![Image](https://github.com/user-attachments/assets/a89aa350-77fd-4818-8872-1a29e7e46b0c)

- **Form Page**
  ![Image](https://github.com/user-attachments/assets/ba8ecd0c-bede-410e-9077-8c00ab6e990b)

- **Dashboard Admin**
  ![Image](https://github.com/user-attachments/assets/d7529f49-4e6d-4c55-81eb-46b139853954)

- **Dashboard User**
  ![Image](https://github.com/user-attachments/assets/0db375f0-6fcb-40f1-bbfd-3d96ad2903b6)


## Developer Identity
  -  **Name**: Farel Haryanto
  -  **Email**: farelharynto@gmail.com
  -  **Linkedin**: https://www.linkedin.com/in/farel-haryanto-790553343/
  -  **Created on**: 18-12-2024
