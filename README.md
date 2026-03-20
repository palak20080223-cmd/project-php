# 🌐 Simple 3-Page PHP Website

This is a beginner-friendly **3-page website built using PHP**. It includes basic functionality for user interaction such as login and registration, along with a homepage.

---

## 📌 Features

* 🏠 Homepage
* 🔐 Login Page with PHP form handling
* 📝 Registration Page with PHP form handling
* 🗄️ Basic server-side scripting using PHP
* 📱 Simple and clean interface

---

## 🛠️ Technologies Used

* PHP
* HTML5
* CSS3 (optional)
* MySQL (optional, if database is added)

---

## 📁 Project Structure

```bash
/project-folder
│── index.php        # Homepage
│── login.php        # Login page
│── register.php     # Registration page
│── config.php       # Database configuration (optional)
│── style.css        # Custom styling (optional)
│── /assets          # Images or other assets (optional)
```

---

## 📄 Pages Overview

### 🏠 Homepage (`index.php`)

* Welcome message
* Navigation links to Login and Registration pages

### 🔐 Login Page (`login.php`)

* Form with email/username and password
* PHP code to handle form submission
* Basic validation

### 📝 Registration Page (`register.php`)

* Form to collect user details
* PHP code to process registration
* Option to store data in database

---

## ▶️ How to Run

### 🧰 Requirements

* PHP installed (XAMPP / WAMP / MAMP recommended)
* Web browser

### ⚙️ Steps

1. Download or clone the repository:

   ```bash
   git clone https://github.com/palak/project-php.git
   ```

2. Move the project folder to your server directory:

   * For XAMPP: `htdocs/`
   * For WAMP: `www/`

3. Start Apache server

4. Open your browser and go to:

   ```
   http://localhost/project-folder/
   ```

---

## 🗄️ Database Setup (Optional)

If your project includes database functionality:

1. Start MySQL server
2. Create a database (e.g., `user_auth`)
3. Import SQL file (if provided)
4. Update database credentials in `config.php`

---

## 📌 Future Enhancements

* Add password hashing for security
* Implement session-based authentication
* Add form validation and error handling
* Improve UI using Bootstrap
* Connect fully with MySQL database

---

## 🔐 Security Note

This is a basic project for learning purposes. For production use:

* Use password hashing (`password_hash()`)
* Validate and sanitize user inputs
* Use prepared statements to prevent SQL injection

---

## 🤝 Contributing

Contributions are welcome!
Feel free to fork this repository and submit a pull request.

---

## 📄 License

This project is open-source and available under the MIT License.

---

## 👨‍💻 Author

Palak

---
