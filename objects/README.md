### One class to rule them All 😎
- Pull the changes to the quiz1 solutions(if you haven't 😉)
```
$git pull origin develop
```
- Switch to the develop branch
```
$git checkout develop
```
- Create a new branch (feature-objects) from develop
```
$ git checkout -b feature-objects develop
```
#### Why OOP?
-Simplifies problem solving
-Modularity a.k.a divide & conquer
![Modularity](http://206.189.30.173/modularity.png)
-Speeds up development(Updates & teams)

#### How?
- Classes and Objects
  - Single responsibility

#### A Soft Introduction
  - Simple class that returns your browser details (TellMe.php)
    - Creating classes and objects,constructors & using classes

```
<?php
  /**
   * A simple PHP Class that returns your browser details
   */
  class TellMe{
    //class properties

    //class behaviors

      //constructor

      //method that returns browser details
  }
?>
```
##### Basic OOP concepts
- An **abstraction** denotes the essential characteristics of an object that distinguish it from
all other kinds of objects and thus provide crisply defined conceptual boundaries relative
to the perspective of the viewer.
Abstraction provides you a generalized view of your classes or object by providing relevant information.
**Abstraction** is the process of hiding the working style of an object, and showing the information of an object in understandable manner.
- **Encapsulation**; means hiding the internal details of an object, i.e. how an object does something.
- **Inheritance**; is the process of object re-usability.
- **Interfaces** resemble abstract classes in that they include abstract methods that the programmer must define in the classes that inherit from the interface.
- **Polymorphism**;one name many forms.The real value of polymorphism is that objects
with the same interface can be called to do different things.

#### Encouragement
> In learning OOP and design patterns for PHP, you need to remember a couple of points,
which were first made by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlis‐
sides in Design Patterns: Elements of Reusable Object-Oriented Software: _1). Designing object-oriented software is hard. 2). Designing reusable object-oriented software is even harder._. & **_The more difficult the knowledge is to obtain, the more it is valued._** 🏋🏋🏋🏋

#### References
1. Chapter 1 & 2 - Learning PHP Design Patterns by William Sanders
2. Chapter 6 - Programming PHP. Kevin Tatroe, Peter MacIntyre and Rasmus Lerdorf
3. [PHP OOP Basics][6a61e70e]
4. [No Time For OOP or Design Patterns?][c5975f08] ✳️✳️✳️✳️✳️
5. [General Polymorphism with PHP examples][8d213112]
6. [DRY Principle][368579b0]
7. [Understanding Object-Oriented Programming][f1dbcfd9]

  [c5975f08]: http://www.php5dp.com/no-time-for-oop-or-design-patterns/ "No Time For OOP or Design Patterns"
  [6a61e70e]: http://www.saviost.net/object-oriented-programming-oop-encapsulation-inheritance-polymorphism-abstraction/ "PHP OOP Basics"
  [8d213112]: https://stackoverflow.com/questions/8542661/general-polymorphism-with-php-examples "General Polymorphism with PHP examples"
  [368579b0]: https://en.wikipedia.org/wiki/Don't_repeat_yourself "DRY"
  [f1dbcfd9]: https://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762 "Understanding Object-Oriented Programming"
>_"Do not pray for tasks equal to your powers. Pray for powers equal to your tasks."_ Phillips Brooks ✍✍
