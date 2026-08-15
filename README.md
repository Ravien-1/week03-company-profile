# Mini Project 02: Company Profile Website

## Project Title

**Nexora Solutions – Company Profile Website**

A responsive multi-page company profile website developed using Laravel and the Model-View-Controller (MVC) architecture. The project demonstrates Laravel routing, controllers, Blade templates, reusable components, and responsive web design.

---

## Table of Contents

1. [Project Introduction](#project-introduction)
2. [Objectives](#objectives)
3. [Technologies Used](#technologies-used)
4. [MVC Architecture](#mvc-architecture)
5. [Laravel Routing](#laravel-routing)
6. [Controllers](#controllers)
7. [Blade Templating Engine](#blade-templating-engine)
8. [Website Pages](#website-pages)
9. [Reusable Components](#reusable-components)
10. [Folder Structure](#folder-structure)
11. [Architecture Diagram](#architecture-diagram)
12. [Screenshots](#screenshots)
13. [Problems Encountered](#problems-encountered)
14. [Solutions](#solutions)
15. [Git Version Control](#git-version-control)
16. [Reflection](#reflection)
17. [References](#references)

---

## Project Introduction

Nexora Solutions is a fictional technology company created for this Laravel laboratory activity. The company profile website presents the company, its services, background, and contact information through a clean and responsive web interface.

A Company Profile Website is a website that introduces a company to its customers and visitors. It normally contains information about the company, its services, values, contact details, and other important information.

Businesses need a company website because it gives them an online presence and allows customers to easily learn about their products or services. It can also help make a business look more professional and accessible.

The purpose of this project is to create a multi-page company profile website while applying Laravel's MVC architecture. The project focuses on routing, controllers, Blade templating, reusable layouts, components, and proper organization of the Laravel application.

---

## Objectives

The main objectives of this project are:

- Understand the basic MVC architecture used by Laravel.
- Create and manage multiple Laravel routes.
- Connect routes to a controller.
- Create a `CompanyController`.
- Build multiple pages using Blade templates.
- Create a reusable Blade layout.
- Create reusable navigation and footer components.
- Apply the `@extends`, `@section`, `@yield`, and `@include` Blade directives.
- Organize the project using Laravel's folder structure.
- Create a responsive and professional company profile website.
- Practice Git version control and meaningful commits.
- Document the development process using Markdown.

---

## Technologies Used

The project was developed using the following technologies:

- **Laravel**
- **PHP**
- **Blade Templating Engine**
- **HTML5**
- **CSS3**
- **Visual Studio Code**
- **Git**
- **GitHub**
- **XAMPP**

Custom CSS was used to style the website and create the responsive layout.

---

# MVC Architecture

## What is MVC?

MVC stands for **Model-View-Controller**. It is a software architecture pattern that separates an application into different parts based on their responsibilities.

### Model

The Model is responsible for handling application data and business-related operations. In this project, there is no database requirement, so the Model is not heavily used.

### View

The View is responsible for what the user sees in the browser. In this project, the Views are created using Laravel's Blade templating engine.

Examples include:

- `home.blade.php`
- `about.blade.php`
- `services.blade.php`
- `contact.blade.php`

### Controller

The Controller handles incoming requests and determines which View should be returned.

The main controller used in this project is:

`CompanyController.php`

---

## Why Laravel Uses MVC

Laravel uses MVC because it helps developers organize an application into separate responsibilities. Instead of putting routes, page design, and application logic in one place, each part has its own location.

This makes the project easier to understand, maintain, debug, and expand.

---

## Advantages of MVC

### Better Organization

Different parts of the application are separated into Models, Views, and Controllers.

### Easier Maintenance

A developer can modify one part of the application without unnecessarily changing other parts.

### Reusable Code

Blade layouts and components can be reused across multiple pages.

### Easier Debugging

When something goes wrong, it is easier to identify whether the problem is related to the route, controller, or view.

### Scalability

The same structure can be used when the application becomes larger and more complex.

---

# Laravel Request Flow

The basic request flow of this project is:

```text
Client / Browser
       │
       ▼
   Route (web.php)
       │
       ▼
 CompanyController
       │
       ▼
    Blade View
       │
       ▼
  HTML Response
       │
       ▼
      Browser