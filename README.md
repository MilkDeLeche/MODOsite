# MODO Portfolio Website

This is the portfolio website for MODO - Graphic designer & web developer.

## GitHub Pages Setup

This site is configured to work with GitHub Pages. The main website files are located in the `HTML/` folder.

### To enable GitHub Pages:

1. Go to your repository settings on GitHub
2. Navigate to "Pages" in the left sidebar
3. Under "Source", select "Deploy from a branch"
4. Choose "master" (or "main") branch
5. Select `/HTML` as the folder
6. Click "Save"

Your site will be available at: `https://MilkDeLeche.github.io/MODOsite/`

## Local Development

To view the site locally:

1. Navigate to the `HTML` folder
2. Open `index.html` in a web browser
3. Or use a local server (recommended):
   ```bash
   cd HTML
   python -m http.server 8000
   ```
   Then visit `http://localhost:8000`

## Netlify Setup

This site is configured for Netlify deployment with Netlify Forms.

### Contact Form Setup:

1. Go to your Netlify dashboard: https://app.netlify.com
2. Select your site
3. Go to **Forms** in the left sidebar
4. You'll see form submissions appear here automatically
5. To receive email notifications:
   - Go to **Site settings** → **Forms** → **Form notifications**
   - Click **Add notification**
   - Choose **Email notifications**
   - Enter your email: `mangel3457@gmail.com`
   - Set the subject: "New Contact Form Submission from MODO"
   - Click **Save**

The contact form will now work without PHP and submissions will be stored in Netlify.

## File Structure

- `HTML/index.html` - Main website file
- `HTML/css/` - Stylesheets
- `HTML/js/` - JavaScript files
- `HTML/img/` - Images and assets
- `HTML/fonts/` - Font files
- `HTML/thank-you.html` - Thank you page after form submission
- `assets/` - Large design files (excluded from Git)
- `netlify.toml` - Netlify configuration

