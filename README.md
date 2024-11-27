<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🍽️ Meals-On-Wheels

Meals-On-Wheels is a web application built using the **Laravel Framework**. This platform enables seamless food delivery services, offering various user roles, real-time order management, and secure payment processing. Designed to empower communities, it provides a streamlined experience for all stakeholders.

---

## 🎯 Goals

The **Meals-On-Wheels** system is designed to:
- Improve the efficiency of meal ordering and delivery for needy individuals.
- Ensure that food service providers adhere to safety and quality standards.
- Enable users to have a better, more personalized experience with meal choice flexibility.
- Provide a streamlined method for managing both members and food service partners.

---

## 📋 Roles & Features

- **User Roles**:  
  - **Member**: Regular users who place orders.  
  - **Caregiver**: Assists in managing orders for members.  
  - **Partner**: Collaborates to provide services or meals.  
  - **Rider**: Delivers meals to users.  
  - **Donor/Supporter**: Contributes donations to support the platform.  
  - **Admin**: Manages all aspects of the application.  
  - **Volunteer**: Assists in community services via the platform.

- **Features**: 
  - **User Authentication**: Registration, login, and secure password management.
  - **Order Management**: Create, update, and track orders in real-time.
  - **Payment Integration**: PayPal gateway for secure transactions.
  - **Admin Panel**: Efficiently manage meals, orders, and user roles.
  - **Responsive Design**: Optimized for both desktop and mobile experiences.
  - **Multi-language Support**: Localization-ready for diverse audiences.

---

## 🛠️ Technologies Used
- **Framework**: Laravel 10
- **Programming Language**: PHP 8.1
- **Database**: MySQL, PHPMyAdmin
- **Frontend**: Blade Templates, HTML, CSS, JavaScript
- **Version Control**: Git and GitHub
- **Payment Gateway**: PayPal
- **Additional Tools**: Composer, Artisan CLI, NPM/Vite

---

## 🚀 Installation Guide
1. Clone the repository:
   ```bash
   git clone https://github.com/RudranshPanchal/Meals-On-Wheels.git
   cd Meals-On-Wheels
   
2. Install dependencies:

    ```bash
    composer install
    npm install && npm run dev
    
3. Set up the environment:

    .env.example to .env:
   **Update the .env file with your database, mail, and PayPal API configurations.**

    ```bash
    cp .env.example .env

   
5. Generate application key:

    ```bash
    php artisan key:generate
    Run database migrations:
    
6. Run database migrations:
    ```bash   
    php artisan migrate
    
7. Start the development server:

    ```bash
    php artisan serve
    
8. Open the application in your browser:

    ```arduino
    http://localhost:8000

---
    
## 📂 Project Structure
- Routes: Defined in the routes/ directory.
- Controllers: Located in app/Http/Controllers/.
- Views: Blade templates are in resources/views/.
- Assets: CSS and JS files are in public/ and resources/.**


---

# 📸 Screenshots

**Home**

![image](https://github.com/user-attachments/assets/3090735f-d9f3-4b0a-b449-53bcaf85e9a0)


**About Us**

![image](https://github.com/user-attachments/assets/0ccac4c2-3137-492c-8e57-17d343fc3b35)

 
**Contact Us**

![image](https://github.com/user-attachments/assets/f4e41b02-4d30-4306-aaf8-c014787dda3c)


**Register**

![image](https://github.com/user-attachments/assets/9e13f3fd-a321-46a4-9d9c-0790c8194811)


**Login** 

![image](https://github.com/user-attachments/assets/d84ddf10-962a-47e0-a352-06fe228fb6e5)


**Partner Dashboard**

![image](https://github.com/user-attachments/assets/48cb8610-953b-4bcf-8de7-271153912f45)


**Partner Create Menu**

![image](https://github.com/user-attachments/assets/a526ed27-5577-4031-8170-c9031548ce34)


## 🧑 For Members  

**Member Dashboard**

![image](https://github.com/user-attachments/assets/11df64d9-4522-45e9-a536-907845acfbcf)


**Meal Details**  

![image](https://github.com/user-attachments/assets/1ae08bbb-47fa-4b15-aca4-a3cb251ce6a3)


**Place order**  

![image](https://github.com/user-attachments/assets/6bc83a23-988a-41cd-bbeb-0648c4118814)


**Order Place successful** 

![image](https://github.com/user-attachments/assets/d1d27c93-9608-48e4-93d1-84524311ddc4)


## 🧔 For Volunteers  


**Volunteer Dashboard**

![image](https://github.com/user-attachments/assets/211f0619-67da-43f1-bd3a-f036db55a0d2)


**Volunteer Track Order**  

![image](https://github.com/user-attachments/assets/3a4e5ff6-7291-4146-97a2-31c0b7e17611)


**Donor Payment Box**

![image](https://github.com/user-attachments/assets/8620ea15-1170-4aa5-8db1-b64ea802933f)

 

**Payment Gateway**

 ![image](https://github.com/user-attachments/assets/3aaa83ee-ad90-4462-93c5-e3d62b37bc47)




---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
