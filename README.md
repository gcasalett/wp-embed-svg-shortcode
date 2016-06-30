# wp-embed-svg-shortcode
A shortcode to embed SVG images into WordPress posts. I'm not a pro WP developer, so use at your own risk.

## Why do I need this?
In order to be able to manipulate SVGs using CSS and JS, they need to be embeded into your HTML. Your first option is to actually paste the SVG's code into your page, but that sucks. This is another option; use PHP to fetch the file for ya. 

### Usage
1. Insert the code somewhere in your functions.php code (you can omit the php tags)
2. Make sure your SVG is saved somewhere
2. In your post add the shorcode like so: [embed-svg url="path/to/your/file.svg"]

### FAQ
Q: Does this work on visual mode?
A: On my limited testing, it has
