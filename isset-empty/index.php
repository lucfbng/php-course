<?php
// isset() = Est TRUE si la variable est déclarée et non NULL
// empty() = Est TRUE si la variable est pas déclarée, FALSE, NULL ou ""

// isset()
$username = "John"; // 1
$username = ""; // 1
$username = true; // 1
$username = false; // 1
$username = null; // 0

// empty()
$username = "John"; // 0
$username = true; // 0
$username = ""; // 1
$username = false; // 1
$username = null; // 1

if (isset($username)) { // remplacer par empty() pour tester
    echo "Username is set";
} else {
    echo "Username is not set";
}
