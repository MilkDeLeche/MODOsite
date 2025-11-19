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

## File Structure

- `HTML/index.html` - Main website file
- `HTML/css/` - Stylesheets
- `HTML/js/` - JavaScript files
- `HTML/img/` - Images and assets
- `HTML/fonts/` - Font files
- `assets/` - Large design files (excluded from Git)

