####1.laravel 5.4新特性
- 可以使用markdown模板来生成邮件和通知
- 可以Dusk来直接操作浏览器，进而调试javascript
- 使用webpack来进行项目的前端管理
- Blade可以创建更小的组件，灵活使用
- 集合高阶消息传递，可以在集合上使用链式调用的方式调用更多方法
- 默认增加清除请求字符串的前后空格，并将空字符串转成null的中间件
- 原本只有内置服务才能使用门面，现在可以将任意的类实时转化为一个门面
- 数据关联查询添加了一些方法
- 优化了Redis
- 默认使用utf8mb4字符编码，支持表情排序

####2.更快速的创建laravel应用  
- 全局安装laravel安装器    
composer global require "laravel/installer"  
- 将laravel的安装命令添加到bash全局   
export PATH="~/.composer/vendor/bin:$PATH"   
source .bash_profile   
laravel -help  //测试是否安装成功  
laravel new blog  //使用new命令就可以立即在当前目录下创建laravel应用（首次安装需要下载，之后安装都直接读取缓存，具说比composer create-project要快）实测确实快很多，而且命令更短  

####3.直接使用php创建本地服务器
【临时最推荐】nohup php artisan serve &
【长期最推荐】screen

- 【推荐】在原来的窗口执行服务器运行，新建新窗口来执行其他命令
php artisan serve 就会直接创建localhost:8000服务器  
直接对应的就是当前项目的public入口  
因为服务器会一直运行，所以新建一个命令窗口就好

- 【推荐】使用screen  
screen -S NAME  
ctrl a d 返回原来窗口  
screen -r NAME 回到之前新建的窗口
ctrl shift d 关闭当前窗口

- 【不推荐，因为后台执行的】直接将服务器命令放到后台执行，在当前窗口执行其他命令
php artisan serve &
jobs -l
kill %jobs的序号 或者kill 进程的pid号  
fg %jobs的序号 从后台将命令调回来  
ctrl z 将当前命令暂停，并放到后台
bg %jobs的序号 让后台暂停的命令继续执行  
nohup php artisan serve & 让命令后台执行，会自动创建nohup.out，输出内容到该文件，也可以指定输出文件。

如果切换了窗口，找不到该jobs了，可以查找进程号，再杀掉pid号
sudo lsof -i :8000
sudo kill -9 你的pid号


####4.记得在.env.example中写好注释，以便在不同的地方能随时提醒你如何配置环境

####5.应用上线后，优化性能  
执行一次php artisan config:cache将配置缓存成文件

####6.应用上线后，如果需要进行维护
php artisan down 暂时关闭站点，并给出提示页面  
php artisan up 恢复站点，继续提供服务  
我的理解是：下线时对站点的所有访问路由将全部引导到提示页面，上线时恢复正常路由。提示页面模板为：
  resources/views/errors/503.blade.php  

####7.phpunit测试时可切换.env文件
  创建.env.testing,那么在执行phpunit测试时，.env.testing将会覆盖.env

####8.查看artisan可以自动创建的app下目录和文件
php artisan list make

####9.app目录下的子目录作用
默认子目录
- Console 自定义的artisan命令。php artisan make:command  
- Exceptions 异常处理，错误处理。  
- Http 控制器，中间件，表单处理 。 
- Providers 服务提供者，绑定容器，注册服务等。  

不存在，需要命令来创建的目录
- Events 事件目录。 event:generate 和 make:event 创建。
- jobs 任务队列。make:job 生成。
- Listeners 事件监听。event:generate 和 make:listener 创建。
- Mail 邮件处理。make:mail 创建。
- Notifications 发送消息提示。make:notification 创建。
- Policies 权限设置。make:policy 创建。 

####10.laravel响应访问的生命周期  
- 由apache或nginx发送请求到public/index.php  
- index.php载入composer的自动加载功能
- 自动加载从bootstrap/app.php 脚本获取 Laravel 应用实例
- 创建服务容器实例  
- 内核启动 app/Http/Kernel.php，被发送到http或console  
- 发送到http
- http中间处理（http会话的读写，应用是否是维护状态，验证csrf令牌，你自定义的中间件等）http很简单，获取一个Request，返回一个Response。
- 在内核启动的过程中，应用载入服务提供者，所有的服务提供者都在config/app.php的providers 数组中，服务提供者的register被调用，boot方法被调用。服务提供者功能：数据库、队列、验证器，以及路由组件等

####11.对homestead的理解
homestead就是一台搭建在vmware的ubuntu服务器，并且配置好了所有开发中需要用到的软件如php mysql nginx redis memcache等。
通过vagrant可以轻松的创建homestead或删除homestead，如何创建或者删除文件夹一样轻松。因为我们可以完全不用在本地安装php,mysql等等软件。
- 下载安装vmware或virtual box
- 下载安装vagrant
- 执行vagrant命令，添加laravel的homestead服务器  
vagrant box add laravel/homestead
(下载太慢的话可以用迅雷)
https://vagrantcloud.com/laravel/homestead/version/8/provider/virtualbox.box
vagrant box add laravel/homestead 你刚刚下载的路径/virtualbox.box
- 最关键的一步
cd ~/.vagrant.d/boxes/laravel的box/2.0.0/virtualbox/
vi box.ovf
在<Adapter .. >标签内，添加cable="true"属性  
- 克隆homestead配置文件，可以放到全局，也可以放到当前项目下,可以放任何地方
cd ~  
git clone https://github.com/laravel/homestead.git Homestead  
- 同步本地和homestead的项目文件夹，这样我们就可以在本地phpstorm写代码，同步到homestead  
修改Homestead.yaml文件中的,map是本地的Code，指向服务器的/home/vagrant/Code
folders:  
    map: ~/Code  
    to: /home/vagrant/Code    
- 配置服务器的nginx
如何你已经启动了vagrant，则要vagrant reload --provision注销重启一下才生效
sites:
    map: homestead.app
    to: /home/vagrant/Code/Laravel/public
- 配置一下本地hosts  
192.168.10.10 homestead.app  
- 启动vagrant  
在homestead目录下执行命令vagrant up  
- 销毁homestead服务器  
vagrant destroy –force  
- homestead全局安装后，所有的项目都将在该盒子中运行，也可以为指定项目单独创建homestead，这样就会在指定项目下生成homestead文件夹，该文件夹就是服务器整个系统  
composer require laravel/homestead --dev  
使用 make 命令生成 Vagrantfile 和 Homestead.yaml 文件，make 命令将会自动配置 Homestead.yaml 中的 sites 和 folders 属性。  
Mac/Linux：  
php vendor/bin/homestead make  
Windows:  
vendor\bin\homestead make  

####12.路由正则约束
- 针对指定路由的正则约束
Route::get('user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');
- 全局路由参数的正则约束
RouteServiceProvider 类的 boot方法中定义约束模式  
public function boot()
{
    Route::pattern('id', '[0-9]+');
    parent::boot();
}

####13.单动作控制器
如果一个控制器只有一个动作，比如根据用户的id返回用户的个人信息界面
则可以在在ShowProfile下定义__invoke($id)方法，并在该方法内写处理逻辑
Route::get('user/{id}', 'ShowProfile');

####14.资源控制器
假如我们是围绕着某一个资源进行增删改查等操作，可能要在路由和控制器中注册多个方法。以下是简化操作
- 生成书籍的控制器，并自动创建index,create,show,update,store,edit等方法
php artisan make:controller BooksController --resource  
- 注册上面控制器里的所有路由，自动分配访问方式get,post,put,delete,patch等
Route::resource('books', 'BooksController')
- 若想直接再创建对应的资源模型model
php artisan make:controller BookController --resource --model=Books
(注意model文件直接在app目录下生成，所以我建议还是手动生成model比较好，可以整理到我们指定的model目录下)

      


