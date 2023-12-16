# PHP OOP MVC       

## Table of Contents
1. [Introduction](#introduction)
2. [Advantages of OOP](#advantages-of-oop)
3. [Four Pillars of OOP](#four-pillars-of-oop)
   - [Inheritance](#inheritance)
   - [Polymorphism](#polymorphism)
   - [Encapsulation](#encapsulation)
   - [Abstraction](#abstraction)
4. [Magic Methods](#magic-methods)
5. [Design Pattern](#design-pattern)
   - [Singleton Pattern](#singleton-pattern)
   - [Factory Pattern](#factory-pattern)
   - [Adapter Pattern](#adapter-pattern)
   - [Dependency Injection](#dependency-injection)
6. [Architecture](#architecture)
   - [MVC](#mvc)
   - [MVP](#mvp)
   - [MVVM](#mvvm)
   - [Clean Architecture](#clean-architecture)
7. [Resources](#resources)

## Introduction

Object-Oriented Programming (OOP) is a programming paradigm that utilizes objects and classes. It aims to implement real-world entities like inheritance, hiding, and polymorphism in programming.

### Advantages of OOP

- Code maintenance
- Data reusability (inheritance)
- Security
- Easy troubleshooting (structured code)
- Reduce complexity (polymorphism)
- Flexibility (overriding methods) and design benefits

## Four Pillars of OOP

1. **Inheritance**
   - Mechanism in which one object acquires all properties and behaviors of its parent object.
   - Types: Single, Multilevel, Hybrid.

2. **Polymorphism**
   - Many forms of one thing.
   - One functionality can be implemented in many ways.
   - Used to perform a single action in different ways.

3. **Encapsulation**
   - Mechanism to wrap data and methods operating on that data into a single unit.
   - Used to hide data and methods from outside the class.

4. **Abstraction**
   - Representation of essential features without including background details.
   - Technique of creating a new data type suited for a specific application.

## Magic Methods

- `__construct()`: Constructor
- `__destruct()`: Destructor
- `__call()`: Method overloading
- `__callStatic()`: Static method overloading
- `__get()`: Getter method
- `__set()`: Setter method
- `__toString()`: String representation method

## Design Pattern

Design patterns are reusable solutions to common problems in software design. They represent best practices for solving specific issues in a way that is efficient and effective.

### Singleton Pattern

...

### Factory Pattern

...

### Adapter Pattern

...

### Dependency Injection

...

## Architecture

Software architecture refers to the overall structure and organization of a software system. Different architectural patterns provide guidelines for organizing components and modules to achieve maintainability and scalability.

### MVC

MVC is an architectural pattern that separates an application into three interconnected components:

- **Model:** Represents the application's data and business logic.
- **View:** Represents the user interface and displays data to the user.
- **Controller:** Acts as an intermediary between the Model and View.

MVC promotes the separation of concerns, making it easier to manage and maintain different aspects of the application.

### MVP

...

### MVVM

...

### Clean Architecture

...

## Resources

- [.htaccess Documentation](https://httpd.apache.org/docs/current/howto/htaccess.html)
- [SPL Autoload Library](https://www.php.net/manual/en/book.spl.php)
- [Design Patterns Catalog](https://refactoring.guru/design-patterns/catalog)
- [MVC Design Pattern](https://www.geeksforgeeks.org/mvc-design-pattern/)
