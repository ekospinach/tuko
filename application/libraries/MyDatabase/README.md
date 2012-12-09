# Type Data Pada MySQL

## Numeric

|TYPE DATA  |LENGTH  |MAXIMAL VALUE |
|-----------|--------|------------- |
|TINYINT    | 4      | 255          | 
|SMALLINT   | 6      | 65.535       | 
|MEDIUMINT  | 9      | 16.777.215   | 
|INT        | 11     | 4.294.967.295| 
|BIGINT     | 20     | 18.446.744.073.709.551.615 |

### Contoh untuk membuat migrasi

```php
// TINYINT INCREMENT
Schema::create('users', function($table)
{
    $table->increments('id', 'tinyint');
    $table->int('votes');
});

// SMALLINT INCREMENT
Schema::create('users', function($table)
{
    $table->increments('id', 'smallint');
    $table->mediumint('votes');
});
```


## STRING

### Char dan Varchar

1. Tipe data Varchar adalah tipe data karakter yang panjangnya tidak tetap (variable-length)
2. Tipe data Char adalah tipe data karakter yang panjangnya tetap (fixed-length).

Jika panjang karakter fixed sebaiknya menggunakan char, sedankan klo tidak tetap menggunakan varchar