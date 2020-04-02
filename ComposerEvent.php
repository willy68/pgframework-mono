<?php
/**
    "rm -rf package/pgconsole",
    "rm -rf package/pgframework",
    "git clone https://github.com/willy68/pgconsole.git package/pgconsole",
    "git clone https://github.com/willy68/pgframework.git package/pgframework"
 */


if (!is_dir('package/pgconsole')) {
    system("git clone https://github.com/willy68/pgconsole.git package/pgconsole", $retval);
}
if (!is_dir('package/pgframework')) {
    system("git clone https://github.com/willy68/pgframework.git package/pgframework", $retval);
}
return 0;
