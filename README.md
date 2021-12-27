<span><img src="https://verkio.de/stilrool/assets/img/logo.svg" width="80" /></span>
# Challenge Verkio

## Usage
* Clone the repo via `git clone {REPOSITORY_URL}`
* Create database and its migrations via `php artians migrate`
* Seed the tables via `php artisan db:seed --class UserSeeder` to create default users
* Login with the following credentials:

**Username:** `admin@email.com` & **Password:** `password`

## Checks

- [X] از فریمورک الراول استفاده شود.
- [X] هیچکدام از فیلدهای ایمیل و نام و نام خانوادگی نمی تواند تکراری باشند.
- [X] کاربران امکان ورود به پنل مدیریت را ندارند.
- [X] وقتی یک کاربر برنده قرعه کشی می شود, در قرعه کشی های بعدی امکان برنده شدن ندارد.
