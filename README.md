
# Smart Tracking And Follow Up System For Kids

Navigating today's educational landscape can pose challenges for students managing health issues. Finding optimal ways to safeguard their well-being is a common struggle among parents and school personnel, often resulting in a tumultuous school experience. Our solution offers a comprehensive system uniting parents, students, and school staff in a single platform. To realize this vision, we've merged smartwatch technology with a mobile application. This integration empowers smartwatches to swiftly dispatch alerts to both parents and the school, ensuring prompt action during critical situations.


## Table of Contents
* Installation
* Usage
* Features
* Technologies Used
## Installation

Install Smart Tracking And Follow Up System For Kids

1- clone this repo
```bash
git clone https://github.com/RizkUssef/Graduation-Project.git
```
2- cd into it
```bash
cd Graduation-Project
```

3- run composer install
```bash
composer install
```
    
## Usage

1- create new database

2- import the `final_project.sql` file from the `Project Database` folder into your newly created database.

3- setup the .env file `Rename the .env.example file to .env and input your configuration settings within it.`

4- Run php artisan key:generate
```bash
php artisan key:generate
```
5- run the project
```bash
php artisan serv
```
6- run storage:link
```bash
php artisan storage:link
```
7- You can obtain the API links from the `api.php` file.

8- to access the dashboard use this link "http://127.0.0.1:8000/login"
Note: credentials to access admin panel (email: `Rizk@admin.com`, password: `123456`)
after you login as admin, you can access the admin page from "http://127.0.0.1:8000/showallfather"




## Features

#### Parent Interface :

- Provide real-time updates on their child's vital markers, study records, and health records.
- Monitor the Psychological health of their child.
- Customize essential features to ensure their child's well-being.
- Enable direct communication with social workers, saving time and effort.
- Select the variety and amount of food accessible at the school for your child.

#### School Staff Interface :

- Provide real-time updates on their students' vital markers, study records, and health records.
- Create organized data files and streamline management processes.
- Streamline and optimize all school operations, reducing both time and effort required.
- Facilitate the creation of comprehensive study and health reports for students.
- Facilitate faster communication with parents.
- Simplify the search for specific student data.
## Technologies Used

**Front-End :** Flutter, Dart, HTML, Css, Scss, JavaScript

**Back-End :** PHP, MySQL, Laravel

**Hardware :** samsung galaxy watch 4

## License

[MIT](https://choosealicense.com/licenses/mit/)

