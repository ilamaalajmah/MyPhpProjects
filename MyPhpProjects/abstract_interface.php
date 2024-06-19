<?php
/*
What is the main difference between an abstract class and an interface in PHP? 
Provide an example of a scenario where you would prefer to use an abstract class over an interface.
____________________________________________________________________________________________________
* Key Differences:
1-Method Implementation:Abstract classes can contain both abstract and concrete methods, while interfaces can only declare method signatures without providing implementations.
2-Inheritance:Abstract classes support single inheritance, whereas interfaces support multiple inheritance.
3-Usage:Abstract classes are used when you want to share code among related classes, while interfaces are used to define a contract for unrelated classes.
4-Flexibility:Interfaces offer more flexibility by allowing classes to implement multiple interfaces, enabling greater adaptability in complex systems.

In summary, while abstract classes and interfaces share the common goal of defining contracts and promoting polymorphism, 
they differ in their approach to achieving this goal. Understanding their distinctions allows developers to make informed 
design decisions and leverage the appropriate tool for a given scenario in their OOP projects.


* Why we prefer to use an abstract class over an interface in scenarios where:
- Common Functionality: You want to define some common methods that subclasses should inherit and possibly override.
 Abstract classes can provide default implementations for methods,which can be useful when multiple subclasses are expected to share similar behavior.
*/
?>