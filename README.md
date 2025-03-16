# Dockerized CRUD App

This project is a **Dockerized CRUD Application** using **PHP, MySQL, Apache, and phpMyAdmin**. The application is containerized and can be deployed easily using **Docker Compose**. Additionally, the application can be pushed to **AWS Elastic Container Registry (ECR)** for cloud deployment.

## 🚀 Prerequisites

Before you start, ensure you have the following installed:

1. **Docker & Docker Compose**
   - [Download Docker](https://www.docker.com/get-started)
   - Verify installation:
     ```sh
     docker --version
     docker-compose --version
     ```

2. **AWS Account & AWS CLI**
   - Sign up for an AWS account: [AWS Console](https://aws.amazon.com/)
   - Install AWS CLI: [AWS CLI Installation](https://aws.amazon.com/cli/)
   - Configure AWS CLI:
     ```sh
     aws configure
     ```
     You'll need to enter your AWS **Access Key, Secret Key, Region, and Output format**.

3. **AWS Elastic Container Registry (ECR)**
   - Create an ECR repository in **AWS Console**.
   - Get the repository URL for pushing Docker images.

## 🛠 Setup & Installation

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/HarriiM04/Dockerized-CRUD-App.git
cd Dockerized-CRUD-App
```

### 2️⃣ Build & Run Locally (Using Docker Compose)
```sh
docker-compose up -d --build
```
The application will be available at:
- **PHP Application:** `http://localhost:8080`
- **phpMyAdmin:** `http://localhost:8081`

### 3️⃣ Deploy to AWS ECR

#### **1. Authenticate Docker with AWS ECR**
```sh
aws ecr get-login-password --region <your-region> | docker login --username AWS --password-stdin <your-aws-account-id>.dkr.ecr.<your-region>.amazonaws.com
```

#### **2. Build & Tag Docker Image**
```sh
docker build -t crudapp:1.0 .
docker tag crudapp:1.0 <your-aws-account-id>.dkr.ecr.<your-region>.amazonaws.com/crudapp:1.0
```

#### **3. Push Image to AWS ECR**
```sh
docker push <your-aws-account-id>.dkr.ecr.<your-region>.amazonaws.com/crudapp:1.0
```

Once pushed, you can deploy the container from **AWS ECS** or any other AWS service that supports ECR.

## 🛑 Stopping the Application
To stop the running containers, use:
```sh
docker-compose down
```

## 📜 License
This project is open-source and available under the [MIT License](LICENSE).


