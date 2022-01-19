<div align="center">
  <h1>Very simple Blog with api</h1>
  <p>A simple blog with a control panel only to upload categories and blogs only</p>
</div>



<br>

## Installation


```bash
$ git clone https://github.com/AbadiHAK/Blog-api.git
$ cd Blog-api
$ composer install
$ cp .env.example .env
```

## Edit .env file

<p>Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
</p>

```python
#Change this data according to the name of your databases 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_api
DB_USERNAME=root
DB_PASSWORD=
)
```


## Run this commands
```bash
$ php artisan key:generate
$ php artisan migrate
$ php artisan serve
```






## Usage

**Paths**

| PATH                  | 
|-----------------------|:-----------------------:|
| /dashboard            | Dashboard               |
| /api/get-all-category |  get all catgeory (JSON)|
| /get-all-blogs        |  get all blogs (JSON)   |    

| PATH | #1 | #2 |
| :---: | :---: | :---: |
| /dashboard | 301 | 283 |
  



<br>










## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
