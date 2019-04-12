#!/data/data/com.termux

clear
sleep 1
figlet -f big "ZL1Z3R" | lolcat
apt update && apt upgrade -y
apt install php
sleep 1
clear
php card.php
