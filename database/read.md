1. 数据库规范
   1》要求在异地部署可以直接复原一套可执行的数据库
   2》分清是dev还是prod
   3》配置数据
2. make:migration Artisan 命令 来生成数据库迁移
   php artisan make:migration create_flights_table

3.

php artisan schema:dump

# 转储当前数据库架构并删除所有现有迁移...

php artisan schema:dump --prune
