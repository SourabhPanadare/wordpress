# WordPress Installation Steps:-

  Reference:- https://www.nginx.com/blog/installing-wordpress-with-nginx-unit/

  Download wordpress form url https://wordpress.org/download/

  Create a database for wordpress in mysql server.

  Open http://localhost:8090/wordpress-angular/wp-admin/setup-config.php?step=1 to set username and password for db.

  SiteTitle:- wordpress_angular
  Username:- SourabhPanadare
  Password:- sspp15889@wordpress

  Edit wp_config.php to change username and password for database

# Apache2 Server

  .htaccess file

  <IfModule mod_rewrite.c>
	RewriteEngine On
	RewriteBase /wordpress-angular/
	RewriteRule ^index\.php$ - [L]
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule . /wordpress-angular/index.php [L]
  </IfModule>

# Nginx Setup

  server {
      listen 8090 default_server;
      listen [::]:8090 default_server;

      root /home/shailesh/Sourabh/testserver;

      # Add index.php to the list if you are using PHP
      index index.php index.html index.htm index.nginx-debian.html;


      server_name ;

      location / {   
          try_files $uri $uri/ /index.php?$query_string;
      }

      location ~ \.php$ {
                try_files $uri /index.php =404;
                fastcgi_split_path_info ^(.+\.php)(/.+)$;
                fastcgi_pass unix:/var/run/php/php7.0-fpm.sock;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
      }

      location /wordpress-angular/ {
         try_files $uri $uri/ /wordpress-angular/index.php?q=$uri$args;
      }

  }


# Navigation

  /wp-admin/options-permalink.php

  Select Post Name Option.

  /wp-admin/your customize theme

  Menus:- Create New Menu:- Check the primary checkbox to make menu visible on dashboard.


# MDB Theme

  Reference:- https://mdbootstrap.com/integrating-wordpress-mdb/

  wp-content/themes:- Create mdbblog folder:- Paste the downloaded folder in it

  Refer Above Url and create following pages:-

  index.php, style.css, header.php, footer.php, functions.php, components/navbar.inc.php
