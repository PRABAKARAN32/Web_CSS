<?

class user {
    //For calling the static method we need not an object.
    //we use class_name::method_name();
    public static function name(){
        print("Hello PK");
    }
}

//there is no need of object to call the static method
user::name();
?>