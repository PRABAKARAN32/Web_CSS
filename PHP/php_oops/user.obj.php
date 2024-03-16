<?

include 'car.class.php';

$user1 = new car("Lambogini","Urus S","14 mpg in the city and 19 mpg on the highway","5.00cr");
$user2 = new car("Lambogini","Revuelto","9 mpg city and 16 mpg highway.","9.00 cr");

$user1->car_owner("Pravin",20,"Edapadi","Indian");
$user2->car_owner("Prabakaran",20,"Dharamapuri","Indian");

$user1->my_details();

$user2->my_details();

?>