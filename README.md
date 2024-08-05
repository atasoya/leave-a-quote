![Digital Ocean](https://img.shields.io/badge/Digital_Ocean-0080FF?style=for-the-badge&logo=DigitalOcean&logoColor=white)
![Postgre SQL](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white)
![Figma](https://img.shields.io/badge/figma-%23F24E1E.svg?style=for-the-badge&logo=figma&logoColor=white)
![Daist UI](https://img.shields.io/badge/daisyUI-1ad1a5?style=for-the-badge&logo=daisyui&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=FFD62E)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)

# Leave a Quote

[Leave a Quote](https://leaveaquote.atasoy.dev/) is a platform where users can share and discover inspiring quotes. Contribute your favorite quotes, explore a diverse collection from others, and find motivation in words from various authors and thinkers. Join our community and experience the power of words!


## How To Contribute
We welcome contributions to this project, especially in the form of improving user interface.

## Installation

1. **Clone the Repository**

   Open your terminal and clone the repository using the following command:

   ```bash
   git clone git@github.com:atasoya/leave-a-quote.git
   ```
2. **Navigate to Project Directory**
   ```bash
   cd leave-a-quote
   ```
3. **Install Dependencies**
   ```bash
   composer install
   ```
4. **Copy the Environment File**
   ```bash
   cp .env.example .env
   ```
   Here also create **ADMIN_PASSWORD**,
**ADMIN_USERNAME** and 
**TOKEN=secret** variables.
5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```
6. **Setup Database and Run Migrations**
    - Change database arguments in .env file and run:
   ```bash
   php artisan migrate
   ```
7. **Start Development Server**
   ```bash
   php artisan serve
   ```

## Preview

<video width="600" controls>
  <source src="public/video1.mov" type="video/mp4">
  Your browser does not support the video tag.
</video>
   

    