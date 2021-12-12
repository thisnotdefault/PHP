<?php

const SERVER = 'localhost';
const LOGIN = "root";
const PASS = "test!";
const DB = "gallery";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка подключения к базе данных.");
