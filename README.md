# Home First: Digital Healthcare Transformation

A modern, accessible, and secure digital platform for **Home First**, a UK-based health and wellbeing company. This project replaces manual spreadsheets with a Laravel-based system designed for elderly patients, healthcare staff, and management.

---

## 📖 Case Study Background
Home First provides nursing and physiotherapy services directly in patients' homes. As the company expands from 7 to over 25 staff members, this platform addresses:
* **Accessibility:** High-contrast, large-typography UI for elderly service users.
* **Security:** Secure patient data management replacing insecure emails/spreadsheets.
* **Sustainability:** AI-driven scheduling to reduce the company's carbon footprint.
* **Efficiency:** Centralised portals for staff scheduling and office management.

---

## 🛠️ Tech Stack
* **Framework:** [Laravel](https://laravel.com)
* **Database:** MySQL
* **Local Server:** [XAMPP](https://apachefriends.org)
* **Design:** Figma
* **Frontend:** Blade, CSS3, JavaScript

---

## 🚀 Installation Guide (Local Simulation via XAMPP)

Follow these steps to set up the environment locally:

### 1. Project Setup
Place the project folder in your `xampp/htdocs` directory:
```bash
cd xampp/htdocs
git clone https://github.com
cd home-first
```

### 2. Dependency Management
Install the necessary PHP dependencies via Composer:
```bash
composer install
```
```bash
npm install
```

### 3. Environment Configuration
Create your environment file and generate the application key:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Configuration
1. Open **XAMPP Control Panel** and start **Apache** and **MySQL**.
2. Visit `http://localhost/phpmyadmin/` and create a database named `home_first_db`.
3. Update your `.env` file with your local credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=home_first_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

### 5. Run Migrations
Push the database schema to your local MySQL server:
```bash
php artisan migrate
```

### 6. Launch Application
```bash
php artisan serve
```
The site will be available at: `http://127.0.0.1:8000`

---

## 📄 License
This project is part of a Digital Transformation Case Study for University and serves no other purpose. 
