# land-normal

地产管理系统前端样式

使用php是为了把各个部分拆分开来复用

使用注意事项:

1:根目录有 Gruntfile.js

​	使用grunt all 可以打包静态资源

​	从 resources\v1.0\src 打包到 resources\v1.0\dist

2: 根目录 pageUpdate.py

​	使用python 3 版本

​	将页面生成为静态html文件,保存在根目录html文件夹中

​	使用前需配置 "BASEURL" 

​		如访问http://127.0.0.1/index.php 则配置http://127.0.0.1/

​		如访问http://127.0.0.1/test/index.php 则配置http://127.0.0.1/test/

3: 使用PHP访问页面,地址可以带上参数

​	参数 d=1 :表示页面使用 dist 里打包好的资源

​	参数 h=1 :表示访问页面不显示顶部"展示导航"



用到的组件有: jquery,bootstra,webuploader,dialog