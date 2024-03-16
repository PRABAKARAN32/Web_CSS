<?
class car{
    /**Access Specifier
     * public 
     * private
     * producted
     */

     //car properties

     private $car_name;
     private $car_model;
     private $car_mileage;
     private $car_price;

     //car owner's property
     private $car_owner_name;
     private $car_owner_age;
     private $car_owner_city;
     private $car_owner_nationality;

     //constructor
     // "->" used as a "." notation like in java and python
     // when the class is called by any object the attributer that needed for constructor should be passed.
     public function __construct($car_name,$car_model,$car_mileage,$car_price)
     {
        $this->car_name = $car_name;
        $this->car_model = $car_model;
        $this->car_mileage = $car_mileage;
        $this->car_price = $car_price;
     }

    public function car_owner($car_owner_name,$car_owner_age,$car_owner_city,$car_owner_nationality){
        $this->car_owner_name = $car_owner_name;
        $this->car_owner_age = $car_owner_age;
        $this->car_owner_city = $car_owner_city;
        $this->car_owner_nationality = $car_owner_nationality;
    }

    public function my_details(){
        //print the details of car and it's owner
        echo "CarName: " . "$this->car_name\n" . "CarModel: " . "$this->car_model\n" . "CarMileage: " . "$this->car_mileage\n" . "CarPrice: " . "$this->car_price\n";
        echo "\n\n";
        echo "OwnerName: " . "$this->car_owner_name\n" . "Age: " . "$this->car_owner_age\n" . "City: " . "$this->car_owner_city\n" . "$this->car_owner_nationality\n\n";
    }

}


?>