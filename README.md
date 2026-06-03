# 🌐 Polyglot Microservices & Patterns Ecosystem

Welcome to my software engineering portfolio. This repository is structured as a **Monorepo** containing multiple isolated applications and microservices. The goal of this project is to demonstrate high-quality code, architectural design patterns, and seamless integration between different technologies.

## 🏗️ System Architecture Overview
The ecosystem simulates a modern distributed system where each service has a dedicated responsibility:

- **`apps/php-clean-domain`**: Core business logic written in pure PHP 8.4. Demonstrates Domain-Driven Design (DDD), strategic patterns, and 100% Unit Testing coverage without framework dependencies.
- **`apps/symfony-app`** *(Planned)*: Enterprise Backend API serving as the orchestration layer, utilizing Symfony Messenger for async queuing.
- **`apps/laravel-app`** *(Planned)*: Event consumer and background job worker handling asynchronous tasks.
- **`apps/frontend-react`** *(Planned)*: Modern user interface communicating via WebSockets and REST APIs.

## 🛠️ Global Tech Stack & Infrastructure
- **Languages:** PHP 8.4+, JavaScript/TypeScript (Node.js)
- **Frameworks:** Symfony 7.x, Laravel 11.x, React
- **Infrastructure:** Docker, RabbitMQ, Redis, PostgreSQL, Elasticsearch
- **Quality Assurance:** PHPUnit, PHPStan (Level 8), PHP-CS-Fixer

## 🚀 Global Getting Started

Every service in this repository is fully containerized. You do not need PHP or Node.js installed on your local machine—only **Docker**.

### Installation
1. **Clone the repository:**
   ```bash
   git clone git@github-nowe:andrzej-szelka-dev/portfolio.git
   cd portfolio
   ```

2. **Spin up the ecosystem (Coming Soon):**
   ```bash
   docker-compose up -d
   ```

---
*Maintained with 💻 by [Andrzej Szelka](https://github.com/andrzej-szelka-dev/portfolio).*
