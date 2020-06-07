echo '> Download WordPress: '
wget https://wordpress.org/latest.tar.gz

echo '> Extract WordPress files: '
tar -xf latest.tar.gz

echo '> Remove zip: '
rm latest.tar.gz

echo '> Run WordPress application:'
open 'http://localhost:1234'
php -S localhost:1234 -t ./wordpress
