<?php

mysql_connect(DATABASE _HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD) or sysql_error();
mysql_select_db(DATABASE_DATABASE) or sysql_error();
mysql_query("SET_NAMES_'utf8'");
mysql_query("SET_CHARACTERS_'utf8'");