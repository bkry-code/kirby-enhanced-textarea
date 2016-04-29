# Kirby Enhanced Textarea

![Preview](preview.png?raw=true)

...with the following additions:

## Pagelink button

##### Without selection: Inserts link and page name
![Pagelink button without selection](pagelink1.gif?raw=true)

##### With selection: Inserts link with selected text
![Pagelink button with selection](pagelink2.gif?raw=true)

## Visual popup toggle

![Visual popup toggle](popup.gif?raw=true)


## Optimized toolbar with smaller buttons and hover effects

![Optimized toolbar](style.gif?raw=true)

## Headline 1 button

![Headline 1 button](h1.gif?raw=true)

## Headline 2 button

![Headline 2 button](h2.gif?raw=true)

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
