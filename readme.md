#laravel + react

后端laravel采用dingo做接口开发
前端使用react调用

react 源码可见
[react](https://github.com/mocept/teto.js)

# 相关数据

## 测试账号：
account: admin@ndtest
password: 123456

## 数据库
可直接使用database/init.sql
或是factory生成其他随机数据

```
$ php artisan tinker
>>> namespace App;
=> null
>>> factory(Lesson::class, 60)->create();
```
