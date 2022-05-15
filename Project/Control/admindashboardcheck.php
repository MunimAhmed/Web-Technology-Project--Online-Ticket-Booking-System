<?php

include "../Model/model.php";

$admin_num=$bus_num=$air_num=$customer_num="";

$mydb= new DB();
$conobj=$mydb->opencon();
$adminresults=$mydb->resultsnum($conobj, 'admin');
$admin_num=$adminresults->num_rows;
$busresults=$mydb->resultsnum($conobj, 'bus_company');
$bus_num=$busresults->num_rows;
$airresults=$mydb->resultsnum($conobj, 'air_company');
$air_num=$airresults->num_rows;
$customerresults=$mydb->resultsnum($conobj, 'customer');
$customer_num=$customerresults->num_rows;


?>