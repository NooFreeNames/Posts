<?php
const DSN = 'mysql:host=localhost;port=3307;dbname=posts_db';
const USERNAME = 'root';
const PASSWORD = '';

$conn = new PDO(DSN, USERNAME, PASSWORD);
