# Yocs
Web Script URL Shortener Without Database MYSQL

## Configuration
First you have to change the config file, you can find it in <a href="https://github.com/neoxr/Yocs/blob/master/vendor/helper/config.php">here</a>.

```
// put your web address
define ('url', 'http://localhost', true);

// data as data.json (change this it's very important dude)
define ('db', 'data', true);

// setup as setup.json
define ('setup', 'setup', true);
```

## Setup
Next change the <a href="https://github.com/neoxr/Yocs/blob/master/vendor/database/setup.json">setup.json</a> file.

```
{
	"name" : "Yocs URL Shortener",
	"desc" : "Cut your long URL in here!",
	"keyword" : "url shortener, url cutter, bit.ly, goo.gl, s.id",
	"ogimg" : "/vendor/static/images/logo.jpg"
}
```

## API
I've created a file for API with the GET method.

```
https://site.com/api.php?url={long_url}
```

and result look like this

```
{
	"error" : false,
	"url" : "https://site.com/3sEjs"
}
```
## Statistic
Add parameter /s for view visitor stat count.

```
http://site.com/WieUo/s
```

## Demo

Here : <a href="http://crop.us.to">http://crop.us.to</a>

