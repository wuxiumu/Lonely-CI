#  认证 Authentication

### 介绍 Introduction

CodeIgniter包含构建用户身份验证系统所需的所有工具。不幸的是，它缺乏易于实现，维护和扩展的集成接口或库。

Luthier CI使用受Symfony启发的身份验证模型解决了这个问题，该模型寻求尽可能多的灵活性，以便开发人员可以快速开始工作，而无需重新发明轮子。

### 激活 Activation

作为可选模块，必须首先激活Luthier CI认证功能。为此，请转到该 `application/config/hooks.php` 文件并替换它：


```php
<?php
# application/config/hooks.php

defined('BASEPATH') OR exit('No direct script access allowed');

// (...)

$hook = Luthier\Hook::getHooks();
```

附：

```php
<?php
# application/config/hooks.php

defined('BASEPATH') OR exit('No direct script access allowed');

// (...)

$hook = Luthier\Hook::getHooks(
    [
        'modules' => ['auth']
    ]
);
```

### 验证工具可用  Authentication tools available

Luthier CI的身份验证有两种：**SimpleAuth** 和 **Luthier CI Authentication Framework**.

#### SimpleAuth: 最快最有趣的方式  ( the fastest and funniest way )

如果您需要的是预先配置，可自定义且易于使用的身份验证系统，SimpleAuth非常适合您。它专为最常见的身份验证设计：通过表单和数据库进行传统登录。

它的一些功能：

* 登录屏幕和用户注册
* 注册时验证电子邮件
* 重设密码
* 用户角色
* “提醒我”基于cookie的功能（可选）
* 访问控制列表（ACL）（可选）
* 它适用于所有CodeIgniter数据库驱动程序
* 在登录期间防止暴力攻击（可选）
* 路线的自动定义（使用方法Route::auth()）
* 多个模板可供选择，翻译成多种语言

#### Luthier CI Authentication Framework: 适用于高级用户 （ for advanced users ）

**Luthier CI Authentication Framework** 是一组抽象地定义用户认证处理的类和接口。有了它，您可以执行以下任务：

* 负载  **User Providers**
* 用户名和密码登录
* 使用用户名强制登录（绕过）
* 验证身份验证状态
* 验证用户角色
* 通过访问控制列表（ACL）验证用户权限
* 管理与用户身份验证相关的会话变量
* 基于驱动程序的身份验

请注意，库是身份验证的基础，但它的实现取决于您！