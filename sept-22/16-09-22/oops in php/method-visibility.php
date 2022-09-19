<?php
class MyClass
{
    // Declare a public constructor
    public function __construct() {
        echo "This is a public Constructor.<br/>";
     }

    // Declare a public method
    public function MyPublic() { 
        echo "This is a public method.<br/>";
    }

    // Declare a protected method
    protected function MyProtected() {
        echo "This is a protected method.<br/>";
     }

    // Declare a private method
    private function MyPrivate() { 
        echo "This is a private method.<br/>";
    }

    // This is public
    function myFunctionWithAll()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;//works as constructor
$myclass->MyPublic(); // Works
// $myclass->MyProtected(); // Fatal Error
// $myclass->MyPrivate(); // Fatal Error
// $myclass->myFunctionWithAll(); // Public, Protected and Private work


//Redeclaring
class MyClass2 extends MyClass
{
    // This is public
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        // $this->MyPrivate(); // Fatal Error
    }
}

$myclass2 = new MyClass2;
// $myclass2->MyPublic(); // Works
// $myclass2->Foo2(); // Public and Protected work, not Private




?>