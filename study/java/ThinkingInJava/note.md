#### 包管理（库单元、命名空间）
全部用小写字母，顶级域名作为一级目录，域名作为二级目录  
使用域名作为包名，主要是因为域名在全球范围内都是唯一的  
当然你也可以使用自己的名字什么的作为命名  
~~~
package com.yurencloud 
~~~
- 命名冲突  
避免和他人的类，方法同名冲突
- 打包目录  
当把所有class打包到一个文件时（失去系统目录结构），java解释器仍然能够根据包名字来实现区分