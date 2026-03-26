## Simple Bare-minimum Laravel + Vue + Inertia App

This is a fresh Laravel project with Vue, Inertia wired-up and ready to use. it's as minimal as it can get, I didn't even delete the original welcome.blade.php view lol.
You're welcome.


```bash 
git clone https://github.com/MajdMallouk/LaraVue-kit.git MnM && cd majd.me && composer install && npm install && cp .env.example .env && php artisan key:generate && php artisan migrate && php artisan db:seed && npm run build && composer run dev
```

This command will:

1. Clone the specific version of the repository.
2. Change into the project directory.
3. Install PHP dependencies using Composer.
4. Install Node.js dependencies.
5. Copy the example environment file.
6. Generate the application key.
7. Run database migrations.
8. (Optionally) seed the database.
9. Build frontend assets.
10. Serve the application.
