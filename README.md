# WordPress custom theme
## designed for a technical company website

## 0.0.0 Planning a prototype
* The website will include a *Home* page, pages for *Products*, *Projects* and *Services*, an *About* page and a *Contact* page, as well as additional pages that will be built on the templates made for the basic pages.
* There will be a custom page design for the *Home* page, a plugin will be used for the *Contact* page and page-templates will be created for the rest of the pages.   

## 0.0.1 Set up the theme
* Add the required files *style.css* and *index.php*.
* Fill *style.css* in with the initial comments section.
* Create a basic *index.php* which echoes a main title with *get_the_title()* and contains the WordPress loop which calls *the_post()* and *the_content()*.

## 0.0.2 Header, Footer, Custom Front Page files
* Create the *header.php* and *footer.php* files and use the *wp_head()* and *wp_footer()* action hooks respectively.
* Create the *front-page.php* file wherein the custom page design for the *Home* page will be implemented later on.
* Use the *get_header()* and *get_footer()* functions in *front-page.php*.

## 0.0.3 *functions.php* & *wp_enqueue_scripts*
* Create the *functions.php* file.
* In order to be able to access scripts and styles, the action hook *wp_enqueue_scripts* is added with *add_action* in *functions.php*. It is calling the function *techco_enqueue*.
* Create the folders *includes/front/* and the file *includes/front/enqueue.php*, where the function *techco_enqueue* will be defined.
* Include *enqueue.php* in *functions.php*. Use *get_template_directory* to get the correct path.

## 0.0.4 Register and enqueue styles and scripts
* Create an *assets* folder which may contain html templates, styles, scripts etc, such as *techco.css*, *smoothscroll.js*, an images folder etc.
* In *techco_enqueue* register the used styles with *wp_register_style*.
* Make the styles loadable by enqueueing them with *wp_enqueue_style*.
* Declare the spot for the styles to be enqueued by using the *wp_head()* function inside *header.php*.
* Call the *wp_footer()* in *footer.php* to declare the spot for the scripts to be enqueued.
* By default, WordPress bundles [many popular scripts](https://developer.wordpress.org/reference/functions/wp_register_script/#core-registered-scripts) commonly used by web developers besides the scripts used by core itself. These should not be re-registered and can be directly enqueued with the handle provided by WordPress.
* In *techco_enqueue* register the not bundled and the custom scripts with *wp_register_script*. The fifth parameter is set to true so that the scripts are loaded in the footer area, in the end of the html code.
* In *techco_enqueue* use *wp_enqueue_script* to enqueue bundled scripts, such as jQuery with the handle *jquery*.
* Enqueue the rest of the registered scripts with their assigned handles.

## 0.0.5 Add menu support and display menus
* Add the function *add_theme_support()* with the *'menus'* parameter in *functions.php*.
* In the *includes* folder create the file *setup.php*. Create the *techco_setup_theme* function wherein the primary navigation menu will be registered with *register_nav_menu*, with the *primary* location and the description *Primary Header Navigation*. The double underscore function is used for translating purposes in the text domain of the theme.
* Include *setup.php* in *functions.php*.
* In *functions.php* add an action that calls the hook *after_setup_theme* which calls the function *techco_setup_theme*.
* In *header.php* add a bootstrap navigation menu code snippet. Then use *wp_nav_menu* in order to present a header menu in the theme. Configure the parameter array depending on the html code used. For use with bootstrap, the *container* is set to false and *menu_class* is set to the relevant classes, for instance *nav* and *navbar-nav*.
* The menu can be displayed in the website after it is added and configured via the Dashboard.

## 0.0.6 Add *widgets_init* and format a sidebar
* In *functions.php* add the *widgets_init* hook calling the *techco_widgets* function.
* In the *includes/front* folder create the file *widgets.php* and define the *techco_widgets* function.
* Include *widgets.php* in *functions.php*.
* In *techco_widgets* call *register_sidebar*.  
* Create the *sidebar.php* file, check with *is_active_sidebar()* and call *dynamic_sidebar()*.
* Call the *get_sidebar()* function in the html portion where we want it displayed. Do this in *front-page.php* for now, pick later the appropriate page templates where the sidebar presence is wanted.
* In *register_sidebar()* set the *before_widget* key's value to include placeholders such as *%1$s* and *%2$s* so that other widgets might add own classes there. Format the rest of the keys' values with opening and closing tags relative to the html content.
* In the *Dashboard-Appearance* the widgets tab is shown. If available WordPress widgets are added to the new sidebar, it will appear in the relevant pages.
