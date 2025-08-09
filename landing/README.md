# Apex Facade Landing Page

This folder contains a lightweight single‑page landing site built with HTML, CSS, JavaScript and PHP.

## Features
- Responsive layout using Bootstrap 5.
- Swiper slider for projects.
- AOS scroll animations.
- Simple PHP mailer (`php/sendmail.php`).
- English, Russian and Turkish translations via JS.
- Fixed WhatsApp contact button.

## Usage
1. Upload the `landing` directory to your web host.
2. Edit `php/sendmail.php` and change \$to to the email address that should receive form submissions.
3. Place your logo in `images/logo.png` and replace project images in `images/`.
4. The site is static; no database is required.

To test PHP locally you can run:

```
php -S localhost:8000
```

Then open [http://localhost:8000/index.html](http://localhost:8000/index.html) in your browser.
