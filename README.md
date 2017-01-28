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
