<div id="top"></div>




<!-- PROJECT SHIELDS -->


[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">


  <h3 align="center">Laravel Search API With Vue in the front end</h3>

  <p align="center">
    Ajax call in the Vue for the front end
    <br />
    <a href="https://github.com/sewasew2127/Larvel-SearchAPI-with-vue-frontend"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/sewasew2127/my-portfolio">View My Portfolio</a>
       
   
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project



This project has 2 parts.
1. Backend - Laravel Search API
2. Frontend - Vue with Ajax.
### API 

CSV data is provided (can be found in https://github.com/sewasew2127/Larvel-SearchAPI-with-vue-frontend/database/data/" ,using the the csv data a database table is created and populated. Laravel migration and seeders are provided in the project.
The API is created using Laravel that allows the data to be searched. 
The API do search on: 
    • Name:  match on partial names
    • Bedrooms: Exact match
    • Bathrooms: Exact match 
    • Storeys: Exact match 
    • Garages: Exact match 
    • Price: Range (between $X and $Y) 
 
All search parameters are optional, 
 
The API should return JSON, with pure numeric data (not HTML content). 

Use the `BLANK_README.md` to get started.

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

The project is built with the following:-

* [Laravel](https://laravel.com) - Laravel 9 (current stable version)
* [Vue.js](https://vuejs.org/)
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these steps.

### Prerequisites

* npm - to install npm (if not having it yet) use the following command on the terminal
  ```sh
  npm install -g
  ```
 **

### Installation

_Below is an example of how you can instruct your audience on installing and setting up your app. This template doesn't rely on any external dependencies or services._

1. Clone the repo
   ```sh
   git clone https://github.com/sewasew2127/Larvel-SearchAPI-with-vue-frontend".git
   ```
2. Use vue for the laravel ui (after cd to the local repo)
	 ```sh
   php artisan ui vue
   ```
	
3. Install NPM packages and run dev 
   ```sh
   npm install && npm run dev
   ```
4. serve laravel
   ```sh
    php artisan serve
   ```

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- API test -->
## API Test
The API is built with laravel 9 and to test it (after serving it)
open up postman chrome extension and use the get method . here is an example.

[![APi Screen Shot][api-screenshot]](#)

<!-- USAGE EXAMPLES -->
## Usage

After serving, open up your preferred browser and use the link that is provided by the php artisan serve command (or simplay ctrl + click on the link form the terminal)
Once the project is opened in the browser use a variety of keywords to search for your preferred house.
this is one example screen shot
[![Product Name Screen Shot][product-screenshot]](#)


<p align="right">(<a href="#top">back to top</a>)</p>





<p align="right">(<a href="#top">back to top</a>)</p>




<!-- CONTACT -->
## Contact

Sewasew Hailu - [@email] - sewasew.hailu@gmail.com

Project Link: [https://github.com/seasew2127/repo_name](https://github.com/sewasew2127/repo_name)

<p align="right">(<a href="#top">back to top</a>)</p>





<p align="right">(<a href="#top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->






[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: img/s-s-1.png
[api-screenshot]: img/s-s-2.png
