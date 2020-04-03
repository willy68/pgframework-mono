# pgframework-mono
application skelton

# Memo des commandes pour utiliser les sous modules

## création des sous modules
git submodule add https://github.com/willy68/pgconsole.git package/pgconsole

git submodule add https://github.com/willy68/pgframework.git package/pgframework

git commit -am "Ajout des sous modules pgconsole et pgframework"


## Git clone pgframework-mono
git clone --recurse-submodules https://github.com/willy68/pgframework-mono.git
