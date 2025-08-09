# Apex Facade WordPress Site

This directory contains a lightweight custom WordPress theme and demo SQL for a multi‑page corporate website.

## Installation
1. Install WordPress on your hosting environment.
2. Copy the `apex-facade-theme` folder into `wp-content/themes/`.
3. Activate the theme in the WordPress admin panel.
4. Install the [Polylang](https://wordpress.org/plugins/polylang/) plugin for multilingual support (RU/TR/EN).
5. Import `sql/demo.sql` into your WordPress database to get sample content (optional).
6. Create pages: Home, About, Services, Projects, Certificates, Contacts.
7. Assign the **Home** page as the front page under **Settings → Reading**.
8. Create a menu under **Appearance → Menus** and assign it to the `Primary Menu` location.

## Adding Projects
Projects are registered as a custom post type. Navigate to **Projects → Add New** in the admin panel, set a featured image and assign a "Project Type" taxonomy term. The archive page and the front page use AJAX to filter projects by type.

## Contact Form
Install the [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) plugin and create a contact form. Place the generated shortcode on the Contacts page.

## WhatsApp Button
The theme displays a fixed WhatsApp button at the bottom-right corner. Replace the phone number in `footer.php` with the company number.

## Translation
Translation template is located at `apex-facade-theme/languages/apexfacade.pot`. Create `.po`/`.mo` files for each language and place them in the same directory.
