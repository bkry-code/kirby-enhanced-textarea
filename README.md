# Kirby Enhanced Textarea

![Preview](preview.png?raw=true)

## Installation

Simply put the "textarea" folder into your site/fields folder. The default textarea field will be overwritten and you don't need to edit your blueprints.

## Configuration

### Headlines

You can change the headline buttons to any headline from 1-6 in the `site/config.php`. The function, the shortcut (meta+1, meta+2, ...) as well as the icon number will adjust accordingly.

Example:
````
c::set('textarea.h1', 'h2');
c::set('textarea.h2', 'h3');
c::set('textarea.h3', 'h4');
````

### Buttons

You don't need all the buttons? No problem, just use `buttons:` 

````
test:
  type: textarea
    buttons:
     - h1
     - h2
     - bold
     - olist
     - link
````
