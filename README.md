Statamic Add-on - Global Variable Editor
========================

An add-on for the [Statamic CMS](http://statamic.com/) to give admins the ability to edit a theme's global variables.

Installation & Setup
------------

1. [Download](https://github.com/brettdewoody/statamic-global-variable-editor/archive/master.zip) and unzip the add-on.

2. Drag `_add-ons/globes` into your site's `_add-ons` folder.

3. Open `_config/settings.yaml` file and add `globes:true` to the `_admin_nav` setting. This will create a tab in the control panel to quickly edit your global variables.

4. Open `_themes/[theme-name]/theme.yaml` file and define the global variables you want to be editable.

 To make a variable editable, first create a first-level var of `global`, then nest your variables under the `global` var.

 For example, if you wanted to have an editable phone number global variable you would do this.

```
    global:
      - 
        name: phone
        display: Phone
        value: 555-555-5555
```

 If you wanted to add another global variable, say an email address, your `global` variable would look like so:

```
    global:
      - 
        name: phone
        display: Phone
        value: 555-555-5555
      - 
        name: email
        display: Email
        value: you@yourdomain.com
```

5. Display the global variables in your template using the `{{ globes }}` tag. In our example from before, if we wanted to display the phone number we would add `{{ globes name='phone' }}` to our templates or layouts.

Fieldtypes
-----

Global variables can use a limited set of the [built-in fieldtypes in Statamic](http://statamic.com/learn/documentation/fieldtypes). Define the fieldtype using the `type` parameter. If no `type` is set the global variable will default to a `text` type.  

```
    global:
      - 
        name: phone
        display: Phone
        type: redactor
        value: 555-555-5555
```

The allowed types are:

* `checkbox`
* `checkboxes`
* `date`
* `markitup`
* `radio`
* `redactor` - no file uploads however
* `select`
* `tags`
* `table`
* `text`
* `textarea`
* `time`
* `users`

Usage
-----

You'll have a new tab in your admin panel labeled `Constants`. Clicking the tab will display your editable global variables and give you the option to edit them.

To change a value, simply enter the updated value then click the Save & Publish button at the bottom.

Beer Me
-------

If you find the add-on useful and use it on projects consider buying me a beer. No pressure, but you'll make me happy and help keep Globes up-to-date.

<a href='https://pledgie.com/campaigns/26995'><img alt='Click here to lend your support to: Globes - Statamic Add-on and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/26995.png?skin_name=chrome' border='0' ></a>

Thanks, and I hope you enjoy Globes and it makes your life better. Much, much better.

Changelog
-------

**v2**

* Addition of fieldtypes

**v1**

* Initial Release
