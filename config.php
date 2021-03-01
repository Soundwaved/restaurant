<?php
//On demarre les sessions
session_start();

//On se connecte a la base de donnee
mysql_connect('localhost', 'root', '');
mysql_select_db('inscription');

