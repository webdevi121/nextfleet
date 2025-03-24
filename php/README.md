# Fleet Management Services Development

## Requirements:

- PHP (for running the server)
- Yarn (for managing dependencies)
- Sass (for compiling SCSS)

## Installation

1. **Install dependencies**:
   First, make sure you have Yarn installed. If not, you can install it [here](https://yarnpkg.com/getting-started/install).

   After installing Yarn, run this command to install the required dependencies:

   ```bash
   yarn install
   ```

Development Usage
You can view your site locally by visiting the following URLs in your browser:

localhost:8000/index.php

localhost:8000/about-us.php

Export Process
When you run the yarn start command, your PHP files will be automatically processed and exported as HTML files in the root directory. The exported HTML files will include all components, scripts, styles, and dynamic content from the PHP files.

For example, the following files will be created:

index.html

about-us.html

These .html files will be available for deployment or viewing directly in the browser.

Notes
The Sass compiler will automatically recompile the scss/custom.scss file to the css/style.css file whenever changes are made.

Any updates to your PHP files will be processed and exported to HTML when the server is running, making it easy to keep your site updated in real-time.
