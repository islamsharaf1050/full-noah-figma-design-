# Noah WordPress Theme

This repository includes the Figma reference screenshots for the Noah luxury jewelry storefront and a starter WordPress theme designed to mimic that aesthetic while staying compatible with WordPress 7+ and Elementor Pro.

## Included design references

The project includes the following design assets in the repository root:

- `About page.png`
- `home page.png`
- `contact page design.png`
- `footer design.png`
- `buy cart page design.png`
- `order confirmation.png`
- `product detail` mockups and multiple shopping flow screens
- `login.jpg`, `signup.jpg`, and `forget password.jpg`

## Theme included

The theme is located at:

- `noah-theme/`

Files include:

- `style.css`
- `functions.php`
- `header.php`
- `footer.php`
- `front-page.php`
- `page.php`
- `single.php`
- `index.php`
- `assets/css/theme.css`
- `assets/js/theme.js`

## How to use it

1. Copy the `noah-theme` folder into your WordPress installation under `wp-content/themes/`.
2. In WordPress Admin, go to Appearance > Themes and activate `Noah Theme`.
3. Install and activate Elementor Pro.
4. Create pages and use Elementor to edit sections, navigation, header, and footer through the Theme Builder.
5. Set a static homepage under Settings > Reading to the page you want to use.

## Notes

- This is a strong starting point for the exact Noah storefront matching the provided Figma references.
- Because the repository currently contains design mockups but no source Figma file or coded design tokens, the theme is built as a premium luxury jewellery storefront that reflects the same look and feel rather than a literal pixel-perfect one-to-one clone.
- For a true near-pixel-perfect match, the final Figma frames should be exported to a design system spec or a full image-to-code pass should be performed.

## Recommended next step

Use Elementor Pro's Theme Builder to replace the static hero and other blocks with exact page sections from the images, then keep the theme CSS as the global design system for typography, spacing, and colors.
