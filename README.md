
#composer学习

本项目用于学习composer


###composer和composer应用库关联代码
#### composer.json文件

token秘钥:ff2188fc4d676543d9a7e2d043dbf74c977c0c5e

```cmd

H:\Git\Github\demo>composer init


  Welcome to the Composer config generator



This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [zeng xiao qiang/demo]: 2479732733/demo
Description []: a composer test project
Author [, n to skip]: zengxiaoqiang <2479732733@qq.com?
Invalid author string.  Must be in the format: John Smith <john@example.com>
Author [, n to skip]: zengxiaoqiang <2479732733@qq.com>
Minimum Stability []: project
Invalid minimum stability "project". Must be empty or one of: stable, RC, beta, alpha, dev
Minimum Stability []: dev
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []: mit

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? NO

{
    "name": "2479732733/demo",
    "description": "a composer test project",
    "type": "project",
    "license": "mit",
    "authors": [
        {
            "name": "zengxiaoqiang",
            "email": "2479732733@qq.com"
        }
    ],
    "minimum-stability": "dev",
    "require": {}
}


Do you confirm generation [yes]? yes
Would you like the vendor directory added to your .gitignore [yes]? yes
```