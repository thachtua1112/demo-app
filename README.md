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

**Route API:**
```JS
- Login: POST http://127.0.0.1:8000/api/login
    Header: {Accept: application/json}
    Body: {
        "email": laravel fake,
        "password" "11111111"
    }

- Logout: POST http://127.0.0.1:8000/api/logout
    Header: {Accept: application/json}
    Authorization: Bearer Token
```