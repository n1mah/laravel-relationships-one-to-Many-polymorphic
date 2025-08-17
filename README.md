<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo">
  </a>
</p>

# Laravel One-to-Many Polymorphic Relations
```( Laravel 12 )```
>A robust Laravel 12 project demonstrating a clean implementation of **one-to-Many polymorphic relationships** with comprehensive features including image upload, validation rules, and service layers.



---
## Overview

This Laravel 12 project implements a **one-to-many** polymorphic relationship where:

- Both User and Company models can have multiple BankAccount records.
- The relationship is handled using a single table for bank_accounts.
- Uses Eloquent's morphTo and morphMany methods.
- Provides simple route examples for creating and retrieving related bank accounts.

---

## Features

- **One-to-Many Polymorphic Relationship** between bank accounts and different models.
- Single bank_accounts table stores all accounts regardless of owner type.
- Clean and reusable relationship definitions.
- Example routes for creating and fetching bank accounts for both User and Company.
- Easy to extend for additional models (e.g., Branch, Vendor).

---
## Installation

```bash

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve
```

---

## Usage

- Visit http://localhost:8000 after running the server.
  
*User*

- GET /user/create → Create a sample user.


- GET /user/{user}/bank-account → Create a new bank account for a user.


- GET /user/{user}/bank-account/get → Retrieve all bank accounts for a user.

*Company*

- GET /company/create → Create a sample company.


- GET /company/{company}/bank-account → Create a new bank account for a company.


- GET /company/{company}/bank-account/get → Retrieve all bank accounts for a company.


---


## Project Structure

````

app/
├── Models/
│   ├── BankAccount.php      # Morphable model
│   ├── User.php             # Has many bank accounts (polymorphic)
│   └── Company.php          # Has many bank accounts (polymorphic)
database/
├── migrations/
│   ├── create_users_table.php
│   ├── create_companies_table.php
│   └── create_bank_accounts_table.php
routes/
└── web.php 

````
---

## Requirements

- PHP >= 8.3
- Laravel 12.x
- Composer
- Database (MySQL or others supported by Laravel)

---

## License
>This project is open-source and free to use.

---

>>>>>Writing...
## License
>This project is open-source and free to use.

---
## Connect with Me

You can find more of my work or get in touch through the links below:

🔗 GitHub: [`https://github.com/n1mah`](https://github.com/n1mah)

🌐 Portfolio: [`88nima.com`](https://88nima.com/)

---
 
