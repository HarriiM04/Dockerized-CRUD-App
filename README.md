# Dockerized CRUD App

This project is a simple **PHP CRUD application** with **MySQL**, **Apache**, and **phpMyAdmin**, all containerized using **Docker**.

## 🚀 Features
- PHP 8.2 with Apache
- MySQL 8.0 database
- phpMyAdmin for easy database management
- Docker Compose for container orchestration

## 📂 Project Structure
```
.
├── src/                # PHP application source code
├── Dockerfile          # Defines PHP & Apache setup
├── docker-compose.yml  # Manages services (PHP, MySQL, phpMyAdmin)
├── .gitignore          # Files to ignore in Git
└── README.md           # Project documentation
```

## 🛠️ Setup & Installation

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/<your-username>/Dockerized-CRUD-App.git
cd Dockerized-CRUD-App
```

### 2️⃣ Start the Containers
```sh
docker-compose up -d --build
```

### 3️⃣ Access the Application
- Open your browser and visit **`http://localhost:8080`** (PHP App)
- Access phpMyAdmin at **`http://localhost:8081`** (Username: `root`, Password: `root`)

### 4️⃣ Stop the Containers
```sh
docker-compose down
```

## 🏗️ Docker Services
- `php-apache` (Runs PHP & Apache)
- `db` (MySQL Database)
- `phpmyadmin` (Database GUI Management)

## 📝 Environment Variables (docker-compose.yml)
```yaml
environment:
  MYSQL_ROOT_PASSWORD: root
  MYSQL_DATABASE: mydb
  MYSQL_USER: user
  MYSQL_PASSWORD: password
```

## 🔄 Build & Push to AWS ECR
```sh
docker build -t crudapp:1.0 .
docker tag crudapp:1.0 <AWS_ECR_REPO_URL>/crudapp:1.0
docker push <AWS_ECR_REPO_URL>/crudapp:1.0
```



