# Responsive Browser Plugin for WordPress

This plugin allows you to embed a fully responsive browser component into your WordPress theme. It is designed specifically for KSchool and should be installed in a specific folder structure.

---

## Features
- Fully responsive design.
- Easy integration into WordPress themes.
- Seamless support for KSchool projects.

---

## Installation

To install and configure the plugin, follow these steps:

1. **Download the Plugin**
   - Clone or download the plugin repository from GitHub.

2. **Folder Structure**
   - Place the plugin folder into the following directory within your WordPress theme:
     ```
     wp-content/themes/your-theme/plugins/menu-kschool
     ```

3. **Activate the Plugin**
   - Go to the WordPress Admin Dashboard.
   - Navigate to `Appearance > Themes` and ensure your theme is active.
   - The plugin will automatically be loaded from the specified folder.

4. **Usage**
   - Use the following shortcode to embed the responsive browser:
     ```
     [menu_kschool]
     ```
   - For Gutenberg users, add a text block and insert the shortcode.
   - For the classic editor, paste the shortcode directly into the editor.
---

## Requirements

- WordPress 5.0 or higher.
- A custom WordPress theme with a `plugins/menu-kschool` directory.

---