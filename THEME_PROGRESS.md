# Blue theme migration (primary #1367D7) - STATUS: essentially complete
DONE
- Views: all orange/black hex colors -> blue (dashboards, cards, emails).
- partials/theme.blade.php (global overrides) + partials/logo.blade.php (logo), used in admin/auth/frontend layouts.
- public/ (from assets.zip) recolored: admin_assets/css/{bundled.min,app,dianujStyles}.css, frontend_assets/css/bundled.min.css (purple/orange/red -> blue).
- Menu icons: *_hover.png -> white, companies_icon/mroute-icon/user-icon hue-shifted to blue.
- New logo images: color_header_logo.png, web_logo_light(.sm).png, favicon.png (admin+frontend), frontend logo.png/footer-logo.png.
REMAINING / OPTIONAL
- Frontend site content images (jpg banners) not recolored.
- admin_assets/libs plugin CSS (charts, datepicker etc.) may still use default colors.
- Ignore "- Copy" / old/ views.
