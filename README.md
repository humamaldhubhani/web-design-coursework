<div align="center">

<img src="docs/logo.svg" alt="Web Design Coursework logo" width="130"/>

# Web Design Coursework

**From my first HTML page to a full PHP + MySQL freelance marketplace, built during the Web Design course.**

![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)
![Course](https://img.shields.io/badge/Web%20Design-Year%202-E94560)
![License](https://img.shields.io/badge/License-MIT-yellow.svg)

</div>

---

## Contents

| Folder | What it is |
|---|---|
| [`final-project-services-platform/`](final-project-services-platform) ⭐ | **Services**, a freelance marketplace (team final project) |
| [`lab-practice/`](lab-practice) | Sites built step by step in the lab, from lecture 4 to lecture 16 |
| [`assignments/`](assignments) | My graded practical assignments (chapters 3–5) |

---

## ⭐ Services: freelance marketplace

<img src="final-project-services-platform/img/logo/blacklogo.png" alt="Services logo" width="260"/>

> A platform where **freelancers** offer their services and **clients** find someone to get the job done. *(from the team's project brief)*

### Features

- **Landing page** with service categories and a **Popular Sellers** section loaded from the database.
- **Category pages**: Programming, Web Design, Graphics & Design, Writing & Translation.
- **Sign up / log in** with role-based redirect: clients go to the site, admins go to the dashboard.
- **Admin dashboard** (Bootstrap 5, Arabic RTL support):
  - **CRUD for users**: create, read, update and delete.
  - **CRUD for seller cards**, with image upload.
- Terms-of-service page and a "Join as a seller" flow.

### Tech

`PHP 8` · `MySQL / MariaDB` · `mysqli` · `HTML5` · `CSS3` · `Bootstrap 5` · `Font Awesome`

### Run it locally (XAMPP)

1. Copy `final-project-services-platform/` into `xampp/htdocs/`.
2. Start **Apache** and **MySQL**.
3. In phpMyAdmin, import [`database/schema.sql`](final-project-services-platform/database/schema.sql). It creates the `server` database with demo accounts.
4. Open `http://localhost/final-project-services-platform/`.

| Demo account | Email | Password |
|---|---|---|
| Admin | `admin@services.local` | `admin123` |
| Client | `client@services.local` | `client123` |

> The original database dump wasn't kept. `schema.sql` was reconstructed from the queries in the code.

### Security fixes (added later)

Looking back at this code as a security student, I found and fixed these bugs. Each one has its own commit:

| Bug | Impact | Fix |
|---|---|---|
| Login built SQL from raw input and compared with `LIKE` | `'%'` as the password logged into **any** account, and `' OR '1'='1` bypassed the check entirely | Prepared statement with `=` |
| Signup read `$_POST["Password"]` but the form sends `password` | Every new account was saved with an **empty password** | Read the correct field and use a prepared statement |

### Known issues (kept as built)

- Passwords are stored in plain text. Today I'd use `password_hash()` / `password_verify()`.
- Admin CRUD pages still build SQL with string concatenation.
- New sign-ups get `type = 2`, and the login sends every non-`1` type to `/Admin`.
- No CSRF tokens or session-based access control on admin pages.

### Team

Built by **Humam Al-Dhubhani**, Hashim Al-Kebsi, Eyad Aqlan, Mohanned Al-Absi, Yousef Al-Moghalis and Hashim Noman.

---

## Lab practice

These are the sites we built step by step in the lab. Each lecture extends the previous one:

| Lecture | Topic |
|---|---|
| 04 | HTML structure and first CSS layouts (3 examples) |
| 05 | SEO-friendly markup |
| 06 | Multi-page **product store**: home, products, product details, about, contact, login |
| 09 | CSS layout practice |
| 11 | The store moves to **PHP** |
| 13 | Sign-up / login pages and the first **MySQL** connection |
| 14 | **Sessions**: login, logout and protected pages |
| 16 | **Admin CRUD**: create, read, update and delete records |

## Assignments

| Chapter | Topic |
|---|---|
| 3 | Introduction to HTML: a structured page with its own stylesheet |
| 4 | Introduction to CSS: 3 practical questions (selectors, box model, layout) |
| 5 | HTML tables and forms |

## What I learned

- Semantic HTML, CSS layout and responsive design with Bootstrap.
- How a request travels: form → PHP → MySQL → redirect.
- CRUD, sessions and role-based navigation.
- **Never concatenate user input into SQL.** This project taught me that the hard way.

## Author

**Humam Al-Dhubhani**, Cyber Security, Ar-Rasheed University · [GitHub](https://github.com/humamaldhubhani)

<sub>Released under the [MIT License](LICENSE). Font Awesome and Bootstrap are included under their own licenses.</sub>
