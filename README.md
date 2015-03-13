
#bower-pyrocms module
=====================================
Use bower assets in your pyrocms theme 

Usage:
-----------
```php
{{ theme:js file="bower::library/library.js" }}
{{ theme:css file="bower::library/library.css" }}
```

Install:
--------
1. Copy the modules/files folder to the shared addon modules path (/addons/shared_addons/modules).
2. Go to Control Panel / Add-ons / Modules and install the "bower" module 
3. Put the bower.json file to your theme directory and run bower commands (in theme directory). 

Note: The default bower folder is theme_root/bower_components. If you set different path in your bower config (ex.: vendor) please go to Control Panel / Settings / Bower tab and set the same path name there.



License: 
---------
MIT
Copyright: Peter Varga http://www.vargapeter.com
