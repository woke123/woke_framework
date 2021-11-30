自己写着玩的一个php框架，极简的实现了基本框架功能。

#路由规则
http://host/controller/method?params=

#console
php artisan class method date=2021

#获取参数
input('get.');
input('post.');

#获取配置
config('app.');

#数据库操作
db('user')->get(['columns','columns1'],['id' => 1]);
App\Model\User::get(['columns','columns1'],['id' => 1]);

#nginx 入口文件    nginx 解析到这里
web/index.php
