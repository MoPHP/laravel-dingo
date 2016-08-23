#laravel + react

- 后端laravel采用dingo做接口开发, 允许跨域
- 前端使用react调用

react 源码可见
[react](https://github.com/mocept/teto.js)

# 开始
- key
终端使用如下命令：
```
php artisan key:generate
```
将生成的key复制到config/app.php替换APP_KEY键值

# 相关数据

## 测试账号：
- account: admin@ndtest
- password: 123456
- postman中对应密码：80fba977d063a6f7262a8a9c95f61140
postman中对应密码：80fba977d063a6f7262a8a9c95f61140

## 数据库
可直接使用database/init.sql
或是factory生成其他随机数据

```
$ php artisan tinker
>>> namespace App;
=> null
>>> factory(Lesson::class, 60)->create();
```

## 头部token格式修改
\vendor\tymon\jwt-auth\src\JWTAuth.php 修改了该文件下获取header中的token信息 ，可以自定义修改这里，前端按照约定规范来即可, 具体格式见前端header
```PHP
    protected function parseAuthHeader($header = 'authorization', $method = 'bearer')
    {
        $header = $this->request->headers->get($header);

/*        if (! starts_with(strtolower($header), $method)) {
            return false;
        }

        return trim(str_ireplace($method, '', $header));*/
        $mode = '/(?P<key>\w+)\="(?P<val>[^"]+)"/ui';
        $status = preg_match_all($mode, $header, $match);
        $param = array_combine($match['key'], $match['val']);

        return isset($param['id']) ? $param['id'] : '';
    }
```

## 路由
```
php artisan route:list
```