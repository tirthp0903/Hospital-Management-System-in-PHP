# 🏥 Hospital Management System

## 📌 About the Project

The **Hospital Management System** is a web-based application developed using **PHP, MySQL, HTML, and Bootstrap 5**. It helps administrators manage hospital operations such as patient records, doctor details, appointments, and billing.

The system provides a simple and user-friendly interface for managing daily hospital activities efficiently.

## 🚀 Features

* **Admin Login & Logout** – Admin authentication and logout functionality.
* **Patient Management** – Add, view, search, edit, update, and manage patient records.
* **Doctor Management** – Add, view, search, edit, and update doctor details, including specialization, mobile number, and consultation fees.
* **Appointment Management** – Schedule, view, edit, update, and delete patient appointments.
* **Billing Management** – Manage patient bills, consultation fees, medicine charges, total amounts, payment status, and bill dates.
* **Search Functionality** – Search and manage patient, doctor, and billing records.
* **Responsive Design** – User-friendly interface built with Bootstrap 5.

## 🛠️ Technologies Used

* **Frontend:** HTML, Bootstrap 5
* **Backend:** PHP
* **Database:** MySQL
* **Development Environment:** XAMPP
* **Code Editor:** Visual Studio Code

## 📂 Project Modules

1. Admin Login
2. Admin Dashboard
3. Patient Management
4. Doctor Management
5. Appointment Management
6. Billing Management
7. Search and Record Management
8. Logout

## 💻 Installation & Setup

Follow these steps to run the project on your local machine.

### 1. Install XAMPP

Download and install [XAMPP](https://www.apachefriends.org/).

### 2. Clone the Repository

```bash
git clone https://github.com/your-username/Hospital_ms.git
```

### 3. Move the Project

Copy the project folder into the XAMPP `htdocs` directory.

```text
C:\xampp\htdocs\Hospital_ms
```

### 4. Start XAMPP

Open the XAMPP Control Panel and start:

* Apache
* MySQL

### 5. Create the Database

1. Open http://localhost/phpmyadmin.
2. Create a database named `hospital_db`.
3. Create the following five tables with the specified columns.

## 🗄️ Database Structure

### 1. Admin Table

**Table Name:** `admin`

| Column Name | Data Type    |
| ----------- | ------------ |
| username    | VARCHAR(50)  |
| password    | VARCHAR(255) |

**Required Record:** Insert only one record into the `admin` table for admin login.

### 2. Patients Table

**Table Name:** `patients`

| Column Name | Data Type                         |
| ----------- | --------------------------------- |
| patient_id  | INT (Primary Key, AUTO_INCREMENT) |
| p_name      | VARCHAR(100)                      |
| p_age       | INT                               |
| gender      | VARCHAR(10)                       |
| mobile      | VARCHAR(15)                       |

### 3. Doctors Table

**Table Name:** `doctors`

| Column Name    | Data Type                         |
| -------------- | --------------------------------- |
| doctor_id      | INT (Primary Key, AUTO_INCREMENT) |
| d_name         | VARCHAR(100)                      |
| specialization | VARCHAR(100)                      |
| mobile         | VARCHAR(15)                       |
| fees           | DECIMAL(10,2)                     |

### 4. Appointments Table

**Table Name:** `appointments`

| Column Name      | Data Type                         |
| ---------------- | --------------------------------- |
| appointment_id   | INT (Primary Key, AUTO_INCREMENT) |
| patient_id       | INT                               |
| doctor_id        | INT                               |
| appointment_date | DATE                              |

### 5. Billing Table

**Table Name:** `billing`

| Column Name      | Data Type                         |
| ---------------- | --------------------------------- |
| bill_id          | INT (Primary Key, AUTO_INCREMENT) |
| patient_id       | INT                               |
| consultation_fee | DECIMAL(10,2)                     |
| medicine_charge  | DECIMAL(10,2)                     |
| total_amount     | DECIMAL(10,2)                     |
| payment_status   | VARCHAR(20)                       |
| bill_date        | DATE                              |

### 📋 Database Requirements

* Create the database named `hospital_db`.
* Create all five tables with the specified columns.
* Set the appropriate primary keys and auto-increment fields.
* Insert only **one record** into the `admin` table for login.
* Patient, doctor, appointment, and billing records can be added through the application.

## 🔌 Database Connection

Open the `db_hospital.php` file and check the database connection settings.

```php
$this->conn = new mysqli(
    "localhost",
    "root",
    "",
    "hospital_db"
);
```

Update the credentials if your local MySQL configuration is different.

## ▶️ Run the Project

After completing the database setup:

1. Start Apache and MySQL in XAMPP.
2. Make sure the project folder is inside `htdocs`.
3. Open your browser.
4. Visit the following URL:

```text
http://localhost/Hospital_ms/loginadmin.php
```

5. Log in using the admin credentials inserted into the `admin` table.

## 📸 Screenshots

Screenshots of the application can be added here to showcase:

* Admin Login
* Admin Dashboard
* Patient Management
* Doctor Management
* Appointment Management
* Billing Management

## 🎯 Project Objective

The main objective of this project is to develop a simple and efficient hospital management application that reduces manual record-keeping and makes it easier to manage patient information, doctors, appointments, and billing.

## 👨‍💻 Author

**Tirth Patel**

BSc Information Technology

## 📄 License

This project was developed for educational purposes.
