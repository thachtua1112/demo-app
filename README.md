# **Setup environment on local**

**Clone source trên git**

```JS
Run: git clone git@gitlab.com:saltovn/gs-management.git
```

**Setup local server:**

```JS
Run: cd demo-app
Run: cp .env.example .env
Run: docker-compose build
Run: docker-compose up -d

```
**Migrate database:**
```JS

Run: composer install
Run: php artisan migrate:fresh --seed

```
**Database information:**
```PHP
DB_HOST=localhost
DB_PORT=44336
DB_DATABASE=laravel
DB_USERNAME=admin
DB_PASSWORD=abc123
```

**Run Application:**
- php artisan serve