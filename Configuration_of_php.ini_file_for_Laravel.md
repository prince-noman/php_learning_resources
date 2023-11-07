### Configuration of php.ini file for Laravel

#### Make sure you have the exact same settings in your php.ini file. If you find any semicolon(;), at the start of these settings, just remove the semicolon(;) and save the ini file. And restart the apache from XAMPP.

```
extension=zip
extension_dir="C:\xampp\php\ext"
extension=openssl
extension=php_openssl.dll
```

#### Run the below command from Desktop to skip "You are running Composer with SSL/TLS protection disabled." error:

```
composer config --global disable-tls false
```
