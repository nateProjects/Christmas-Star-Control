# Presuming you are the Pi user & have cloned this repo / change accordingly if not

# Install the Programmable Christmas Star Code

git clone https://github.com/modmypi/Programmable-Christmas-Star /home/pi/Programmable-Christmas-Star

# Install the Apache web server

sudo apt update

sudo apt install apache2 -y

sudo apt install php libapache2-mod-php -y

# Backup the old default index.html file

sudo mv /var/www/html/index.html /var/www/html/index.html.old

# Copy the web interface - presumes is in the current directory

sudo cp index.php /var/www/html/

# Give the web user permissions to run scripts

sudo nano /etc/sudoers

sudo echo "www-data ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers

# could do - %www-data ALL=(root:root) NOPASSWD: /home/pi/Programmable-Christmas-Star/all_on.py etc.

# Start the web server

sudo service apache2 restart

# Then go to the web page on your local network - http://raspberrypi.local/index.php - or whatever it is

# Optional - Have the Pi start with a particular Star pattern -

sudo sh -c 'echo "@reboot /usr/bin/python3 /home/pi/Programmable-Christmas-Star/random_leds.py" >> /var/spool/cron/crontabs/pi'
