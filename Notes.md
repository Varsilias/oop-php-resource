# LEARNING OBJECT ORIENTED PHP

## WHY LEARN OOP PHP

- Easier to work in a team
- Fosters collaboration
- Enforces code reusability
- Enforces Don't-Repeat-Yourself (DRY)
- Companies want OOP not Procedural
- Better organised codes
- Easier for adding feature
  
## Task to do when writing PHP

1. Connect to the database
2. Handle data submitted by users
3. Show Database data to the user.

**NB:** In **Procedural PHP** we do all this in a single files.
With **OOP** php all this are separated into different components called **Class**. These Classes are codes that do specific things written in PHP and saved in separate files.

## DESIGN PATTERNS

### The MVC Programming architecture

The MVC short for Model-View-Controller is a Programming paradigm that separates all task needed to be done in a web application into three(3) main component namely;

1. The Model
2. The View
3. The Controller

**The Model** is responsible for everything database related like getting, inserting, updating and deleting data in database. It can also be responsible for making connections to the DB.

**The View** controls what the user sees and also show to the user where to input things.

**The Controller** has different role for different kind of people. To some it controls getting input to user and/or sanitizing user input and/or inserting into the DB.

## Creating Classes

Classes are usually separated into their specific files. It is usually a convention to save the file with the same name of the class to be created and with the first letter a capital letter.

### Example of a CLASS

A file saved as

```php
Person.php
```

with content

```php
<?php
class Person {
    public $first = 'Daniel';
    protected $last = 'Okoronkwo';
    private $age = 20;

    public function getAge(){
        return $this->age
    }

    private function getLast(){
        return $this->last
    }

    protected function getFirst(){
        return $this->first
    }
}
```

A class contains properties(Variables) and Methods(Functions) that can be used within such class.
To utilize a class or function within the specified class we user the **this** keyword to refer to the class where we are in at that moment.

### Inheritance and Visibility

**Private** is a PHP built-in keyword that is used to declare a property(variable) in a class. Any property declared with the private keyword is not accessible outside the class. i.e
Any other class created that extends to that class can not access the **Private** property

**Protected** is a PHP built-in keyword that is used to declare a property(variable) or Method(Functions)in a class as well. Any property declared with the **protected** keyword is only accessible inside the class and to any class that inherits it **i.e** **extends it**.

#### Code Example

```php
<?php

class Person {
    protected $first = 'Daniel';
    private $last = 'Okoronkwo';
    private $age = 20;

    
}

class Pet extends Person {

    public function owner(){
        $a = $this->first;
        return $a;
    }
}

 $pet1 = new Pet();
// $person = new Person();

echo $pet1->owner();
 /*
 displays Daniel to the screen because
 variable $first is declared as PROTECTED
 */
```

### Objects, Properties and Methods

Classes are created to have in order to make an object, it is also useful to categorize out project. For example everything related to a person you can put into a class called Person.

Classes are like blueprints or templates for creating objects with all its related properties and methods inside it. This means that we can create as many instance of a class using only one template or blueprint or class.

#### Consider this code

```php
    $name1 = 'Chibuike';
    $age1 = 25;

    $name2 = 'Olawale';
    $age2 = 21;

    $name3 = 'Hussaini';
    $age3 = 20;
```

If there are changes to be made we would need to make them individually and that would be tasking and time consuming.

#### How about This code

```php
<?php
// Blueprint or Template or Class Example
class Person {
    //Creating Properties or variables
    public $name;
    public $eyeColor;
    public $age;

    //Creating Methods or functions
    public function setName($name){
        $this->name = $name;
    }

    
}
// Instantiating a Class or creating an Object off the Person class
    $person1 = new Person();
    $person1->setName('Daniel');
    echo $person1->name //Displays Daniel to the screen

    $person2 = new Person();
    $person2->setName('Oyewumi');
    echo $person2->name // Displays Oyewumi to the screen

    
    $person3 = new Person();
    $person3->setName('Abdullahi');
    echo $person3->name // Displays Abdullahi to the screen
```

Same result different implementation right? Stress free right?

### Constructors and Destructors

Constructors are built-in method that helps to assign values to properties when we declare a new instance of the class. It is usually a convention in the OOP world to declare properties(variable) in a class without assigning a value to them at the point of declaration. This is in order to pass in values that would be dynamically assigned to the properties(variables) you initially declare.

#### How do we declare a constructor method

Inside a class just after declaring your variables, you write the following;

```php
    // Declaring a constructor
    public function __construct(){

    }
```

Inside the **__construct()** method we pass in parameter that will be assigned to the properties we initially created.
Like this:

```php
    // Declaring Properties
    public $name;
    public $age

    /*
    Declaring a constructor
    and assigning the parameter passed in to the initially declared properties(variables)
    */
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
```

#### Here is a full code example

```php

    class Person {
    // Creating Properties or variables
    public $name;
    public $eyeColor;
    public $age;

    /*
    Declaring a constructor
    and assigning the parameter passed in to the initially declared properties(variables)
    */
    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Creating Methods or functions
    public function setName($name){
        $this->name = $name;
    }

    
}
```

### Static Properties and Methods

Static properties and methods are properties and method declared inside a class template with a fixed value that can be accessed only within the class or outside the class without **instantiating** the class. Let me explain in simple terms.

When we declare a **static** property or method in a class and we decide to use that class in another file, we can only assess the value of such class or property without instantiating the class in that new file we intend to use this class.

Another way to assess this static property or method is inside a method that has been declared within the same class where the static property or method has been declared.

**Let us see how to declare static properties and method, and also how to access the with and outside the class or file.**

```php
    class Person {
        // Declaring static properties using the STATIC keyword
        private static $name = 'Daniel';
        protected static $age = 20;

        // Declaring static method using the STATIC keyword
        public static function getName(){
            return self::$name;
        }
    }
```

**Notes About Static Properties and Methods:**

- **Static** properties and method are declared just like regular properties and method with the addidtion of **static keyword**.
  
- Just like regular properties and methods, static properties and method can be named or called anything.

- To access a **static** property we use the **SELF** keyword followed by two colon, then the property name

- **Static** properties and method cannot be assessed by instantiating a class first.

- It is usually a convention to store values that are not likely to change as **static** variables.

#### Loading Classes Automatically

After classes have been created usually in a separate file, in order to use these classes we have to include them in the files where we would need them.

The first thing that usually come to mind would be using the PHP built-in keywords for including files in other files. But, what happens when we have a lot of classes and other files to include, writing includes everywhere would be a hectic thing to do, we have to look for a more efficient way load classes and files faster.

One way to do this is to use the PHP built-in method called **spl_autoload_register()**. This method takes in a function that checks when a class have been declared and in a file and **automatically** loads it. This phenomenom is called **autoloading**.

We are going to write a function to check when a class have been declared, it will then go ahead and autoload it.

```php
    spl_autoload_register('autoloader');

    function autoloader($className){
        $path = 'classes/';
        $extension = '.class.php';
        $fullpath = $path.$className.$extension;

        if (!file_exists($fullpath)) {
            return false;
        }
        include_once $fullpath;
}
```

The code above checks if a file with an extension ```.class.php``` and comes from a directory called ```classes`` exists, if it does, with the help of **spl_autoload_register()** it will automatically include the file in the file where the script above was **included**.

To make it convenient to **autoload** classes you should store the script above in a folder called vendor(or any name you would like to call it) and in a file called **autoload.php**.

To register classes automatically in another PHP file say **index.php** all you have to do to use all the classes in a folder called **classes** is to just include the file **autoload.php** into the ```index.php```

#### Example

```php
    require 'vendor/autoload.php';
```

#### Type Declaration or Type Hinting

Just like you know PHP is a loosely-typed language and as such unlike strictly-typed languages like C#, Java, Golang etc. There are no ways to easily point the exact data-type we need either as variables or parameter inside a function.

Recent update to the PHP language has seen the introduction of **Type Declaration**.

Type declaration or hinting is a way of delaring before hand the exact type of data-type you will like to accept. If the exact data-type needed is not passed it will throw an error. This phenomenom is especially useful when building Enterprise level application.

Using **Type Declaration** does not come by default in PHP. In other to use **Type Declaration** you will need to enable or declare strict-mode like this:

```php
    declare(strict_types = 1); 
```

**NB:**
  
- ```declare()``` is a built-in PHP function for declaring things.

- when ```strict_types``` can have only two values **0** and **1**. When it is set to **0**, Type Declaration would not be checked and this means that ```strict_types``` is off. This is the default behaviour of PHP when Types are not declared.

- When it is set to **1**, Type Declaration would be checked and this means that ```strict_types``` is on. Every type violation will generate an error

### Example of Type Declaration

Consider this code

```php
    class Calculator {
        public $operator;
        public $num1;
        public $num2;

        public function __construct(string $operator,int $num1,int $num2)
        {
            $this->operator = $operator;
            $this->num1 = $num1;
            $this->num2 = $num2;   
        }
    }
```

The ```string``` and ```int``` placed before the parameter ```$operator```, ```$num1```, ```$num2``` are use to specify that whatever that will be passed into the ```__construct()``` method as arguments would be a STRING and INTEGERs respectively.

### Interfaces

**interfaces** allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

Interfaces are defined in the same way as a class, but with the **interface** keyword replacing the class keyword and without any of the methods having their contents defined.

All methods declared in an interface must be public; this is the nature of an interface.

Consider an instance where we have 3 payment channel class, **PayPal**, **Visa** **Cash** that have the same **payNow()** method. We do not know when and how the user is going to choose when making payments.

We could create a **PaymentInterface** that check all the 3 payment channel classes to ensure they all have a **payNow()** method. 

we would not have to worry about the algorith implementation of the **payNow()** method since they would all initiate payment using their different implementation as directed by the developer.

If we then want to initiate payment in a different file maybe a controller that handles payment purchases we just inject the **PaymentInterface** as a dependency into any method that handles payment.

To implement an interface, the implements operator is used. 

All methods in the interface must be implemented within a class; failure to do so will result in a fatal error.

Classes may implement more than one interface if desired by separating each interface with a comma.

Study this code

```php

    interface PaymentInterface {

        public function payNow();
    }
    // Interfaces
    class Paypal implements PaymentInterface {
        public function payNow() {}
    }

    class Visa implements PaymentInterface {
        public function payNow() {}
    }

    class Cash implements PaymentInterface {
        public function payNow() {}
    }

    class BuyProduct {
        public function pay(PaymentInterface $paymentType)
    {
        $paymentType->payNow();
    }
}

    $paymentType = new Paypal();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);

```