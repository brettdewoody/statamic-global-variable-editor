Statamic Add-on - Globes
========================

An add-on for the [Statamic CMS](http://statamic.com/) to give admins the ability to edit a theme's global variables.  

Installation & Setup
------------

1. Download and unzip statamic-globes.
2. Drag `_add-ons/globes` into your site's `_add-ons` folder.
3. Open your `_config/settings.yaml` file and add `globes:true` to the `_admin_nav` setting.
4. Open your `_themes/[theme-name]/theme.yaml` file define the global variables you want to be editable. 

 ...To make a variable editable prefex the variable with `global_`.

 ...For example, if you wanted to have an editable phone number global variable, create a variable named `global_phone`.

 ...Display the global variables in your template using the `{{ global_NAME }} tag. In our example from before, if we wanted to display the phone number we would add {{ global_phone }} to our templates or layouts.
5. Bask in the glory of having installed the add-on.

Usage
-----

You'll have a new tab in your admin panel labeled `Constants`. Clicking the tab will display your editable global variables and give you the option to edit them. 

To change a value, simply enter the updated value, then click the Save & Publish button at the bottom. 