# open iptables port
iptables -I INPUT -p tcp --dport 50000:50002 -j ACCEPT
logger -t "[IPTABLES]" "Ftp port has been opened"

# 119drive
mkdir /media/RudolfLee/119Drive
mount --bind /media/RudolfLee/aria/downloads/ /media/RudolfLee/119Drive/
logger -t "[119DRIVE]" "Harddrive has been mounted"
