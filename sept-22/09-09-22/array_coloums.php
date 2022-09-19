<?php
// Array representing a possible record set returned from a database
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);
echo "<br/>";
$id=array_column($records,'id');
print_r($id);


class class1{
    public $username;

    public function __construct($username){
        echo $this->username=$username;
    }
}

$obj=[new class1('user1'),new class1('user2'), new class1('user3')];

print_r($obj);
echo "<br/>";
$username1=array_column($obj,'username');
print_r($username1);
?>