# bulletinboard Laravel OJT Project

### DB
creating tables in database `php artisan migrate`

inserting data into tables `php artisan db:seed`


### Just run App
```
npm run dev
php artisan serve
```


### Error in Laravel/Excel Package

#### Laravel/Excel Package
Installation for Maatwebsite/Excel 
`composer require maatwebsite/excel`

#### Use this command Instead

```
composer require maatwebsite/excel --ignore-platform-reqs
                        or
composer require psr/simple-cache:^2.0 maatwebsite/excel
```

*The Maatwebsite\Excel\ExcelServiceProvider is auto-discovered and registered by default.*

##### If you want to register it yourself, add the ServiceProvider in config/app.php:
```
'providers' => [
    /*
     * Package Service Providers...
     */
    Maatwebsite\Excel\ExcelServiceProvider::class,
]
'aliases' => [
    ...
    'Excel' => Maatwebsite\Excel\Facades\Excel::class,
]
```

##### To publish the config, run the vendor publish command:
```
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config
```

