<?php
   class MyClass1 { 
      public $obj1prop;   
   }
   class MyClass2 {
      public $obj2prop;
   }
   $obj1 = new MyClass1();
   $obj1->obj1prop = 1;
   $obj2 = new MyClass2();
   $obj2->obj2prop = 2;


   $serializedObj1 = serialize($obj1);
   $serializedObj2 = serialize($obj2);
//    echo $serializedObj1;
//    echo $serializedObj1->obj1prop;    


   // default behaviour that accepts all classes
   // second argument can be ommited.
   $data = unserialize($serializedObj1 , ["allowed_classes" => true]);


   $data2 = unserialize($serializedObj2 , ["allowed_classes" => ["MyClass1", "MyClass2"]]);


  print($data->obj1prop);//1
  print("<br/>");
  print($data2->obj2prop);//2


  class class1{
    public $var1;
  }

  class class2{
    public $var2;
  }

  $obj3= new class1();
  $obj3 -> var1=3;

  $obj4 = new class2();
  $obj4 -> var2=6;

  $serializedObj3= serialize($obj3);
  $serializedObj4= serialize($obj4);

  $data3= unserialize($serializedObj3, ['allowed-classes'=> true]);
  $data4 = unserialize($serializedObj4, ['allowed_classes' => ['class1','class2']]);

  echo $data3->var1;

  echo $data4-> var2;//6
?>
