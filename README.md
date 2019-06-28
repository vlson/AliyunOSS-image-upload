# AliyunOSS-image-upload
AliyunOSS image upload Example

**$accessKeyId = "Your KeyId";//建议子账号KeyId**
**$accessKeySecret = "Your KeySecret";**
**$endpoint = "http://oss-cn-beijing.aliyuncs.com";// Endpoint以北京为例，其它Region请按实际情况填写。**
**$bucket= "vlson";// 存储空间名称**

**$object = "vland/image/".md5(time()).".png";// 文件名称，前面加上路径，会在bucket中创建对应文件夹**
