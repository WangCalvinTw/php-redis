#PHP connect redis

## 安裝phpredis (需sudo)
`sudo pecl install redis`

## 至php.ini 新增
`extension=redis.so`

:::warning

* 如果出現
```Warning: mkdir(): File exists in System.php on line 294
PHP Warning:  mkdir(): File exists in /usr/local/Cellar/php/8.2.10/share/php/pear/System.php on line 294

Warning: mkdir(): File exists in /usr/local/Cellar/php/8.2.10/share/php/pear/System.php on line 294
ERROR: failed to mkdir /usr/local/Cellar/php/8.2.10/pecl/20220829
```
錯誤訊息 , 是代表沒有那個目錄 , 需要自己建立那個路徑 , 建立後在安裝一次  
ex：
    `mkdir /usr/local/Cellar/php/8.2.10/pecl/`
    

:::