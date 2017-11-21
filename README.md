1. Initial Commit: I installed Wordpress 4.9
2. httpd-vhosts.conf

<VirtualHost *:80>
    ServerAdmin kadirarli@gmail.com
    DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/giteSoftWP/"
    ServerName gitesoftWP.dev
    ServerAlias www.gitesoftWP.dev
    ErrorLog "logs/gitesoftWP.dev-error_log"
    CustomLog "logs/gitesoftWP.dev-access_log" common
</VirtualHost>

3. sudo nano /etc/hosts

127.0.0.1       giteSoftWP.dev

4. I set up WP (giteSoftWPDB is created)

DB Name: giteSoftWPDB
Username: root
Password: ''
Database Host: localhost
Table Prefix: gswp_

Site Name: giteSoftWP.dev
Username: kadirarli
Password: %XdM4VItez56cKn9
Email: kadirarli@gmail.com

5. "Unite (v2.0.2) Wordpress Theme" is downloaded, uploaded and the necessary plugin (CPT Bootstrap Carousel) were installed.

6. Child Theme is created for Unite WP Theme and activated.

7. Type of post named "Films" is added.

8. Genre, Country, Year and Actors taxonomies are added to film.

9. Custom text fields "Ticket Price" and "Release Date" are added by using "Advanced Custom Fields" Plugin.

10. 3 films are added for testing. 

11. To display film post type, WP Permalink is changed and .htaccess is created. URL: http://gitesoftwp.dev/film/

12. "Country", "Genre", "Ticket Price", "Release Date" values are added below description text.

13. "Country", "Genre", "Ticket Price", "Release Date" values are added at list of films by using hook. (__after_film_list_content)

14. Widget named "Last 5 Films" is added below search box. Shortcode "Last5AddedFilms" is created for this action. For testing, 3 films are created.

15. SQL dump file is exported from mysql.

16. SUMMARY

Hello,

About Last Update:

I've added a new module to the admin panel to load movies. While adding new movies, you can choose the movie's genres, actors, year and country. In addition, you will be able to write the movie's release date and ticket price. You can see the site on the design you want when you publish the movie.

Best Regards.

17. Timer is stopped.
