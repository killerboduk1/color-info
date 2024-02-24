# Installation

- Clone the repository
- cd to the project directory 
- Copy the .env.example file to .env and fill in the necessary information
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=color
DB_USERNAME=username
DB_PASSWORD=password
```
- Run the following commands
```bash
composer install
php artisan migrate:fresh --seed
```
- Run the following command to start the server
```bash
php artisan serve
```
- Visit the following URL in your browser
```url
   INFO  Server running on [http://127.0.0.1:8000].  
```

# Usage
- Input the color name in the text field then click Get Info button or you can hit enter
- Every time you change the color name, the background color of the page will change to the color you entered.

### screenshot
![screenshot.png](screenshot.png)

# API version
- Visit the following URL in your browser. 
- note: replace blue with the color name you want to get information about.
```url
   http://127.0.0.1:8000/api/color/blue
```
- You should get a response similar to the following
```json
{
    "data": {
        "name": "blue",
        "hex_code": "#0000FF",
        "rgb_code": "rgb(0, 0, 255)"
    }
}
```
### screenshot
![screenshot2.png](screenshot2.png)
