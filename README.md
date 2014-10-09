Statamic Add-on - Globes
========================

An add-on for the [Statamic CMS](http://statamic.com/) to give admins the ability to edit a theme's global variables.  

Installation & Setup
------------

1. Download and unzip statamic-globes.

2. Drag `_add-ons/globes` into your site's `_add-ons` folder.

3. Open your `_config/settings.yaml` file and add `globes:true` to the `_admin_nav` setting.

4. Open your `_themes/[theme-name]/theme.yaml` file define the global variables you want to be editable. 

 To make a variable editable, first create a first-level var of `global`, then nest your variables under the `global` var.

 For example, if you wanted to have an editable phone number global variable you would do this.
  
    global:  
    &nbsp;&nbsp;phone: 555-555-5555  
      
 If you wanted to add another global variable, say an email address, your `global` variable would look like so:
 
    global:  
    &nbsp;&nbsp;phone: 555-555-5555  
    &nbsp;&nbsp;email: you@yourdomain.com  

 Display the global variables in your template using the `{{ global:NAME }}` tag. In our example from before, if we wanted to display the phone number we would add `{{ global:phone }}` to our templates or layouts.

Usage
-----

You'll have a new tab in your admin panel labeled `Constants`. Clicking the tab will display your editable global variables and give you the option to edit them. 

To change a value, simply enter the updated value, then click the Save & Publish button at the bottom. 