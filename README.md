# LaravelSystemInfo
显示服务器相关信息

网址：<a href="https://larashuo.com">larashuo.com</a>

## 显示截图

<img src="https://laravip.com/github/desktop.png">

## 安装
````
//Laravel 5.5 
composer require laramall/laravel-system-info

//Laravel5.1 ~ 5.4
需要在 config/app.php的 $providers数组中添加

LaraMall\Admin\Sysinfo\SysinfoServiceProvider::class,

$aliases数组中添加

'Sysinfo'=>LaraMall\Admin\Sysinfo\Facades\Sysinfo::class,

````

## 系统要求

````
Laravel >=5.1
````



## 使用

````
//获取服务器信息
Sysinfo::server();

//获取cpu信息
Sysinfo::cpu();

//获取总内存信息
Sysinfo::memory();

//获取laravel的版本信息
Sysinfo::laraver();

//获取时区信息
Sysinfo::timezone();

//是否为PHP安全模式
Sysinfo::safeMode();

//最大上传文件大小
Sysinfo::upload_max_filesize();

//获取mysql信息
Sysinfo::mysql();

//获取php版本信息
Sysinfo::php() ;

//获取服务器ip
Sysinfo::ip();

````
