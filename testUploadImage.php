<?php
	
	if(is_file("./aliyun-oss-php-sdk-master/autoload.php")){
		require_once __DIR__ . "/aliyun-oss-php-sdk-master/autoload.php";
	}

	use OSS\OssClient;

	// 阿里云主账号AccessKey拥有所有API的访问权限，风险很高。强烈建议您创建并使用RAM账号进行API访问或日常运维，请登录 https://ram.console.aliyun.com 创建RAM账号。
	$accessKeyId = "Your KeyId";
	$accessKeySecret = "Your KeySecret";
	// Endpoint以杭州为例，其它Region请按实际情况填写。
	$endpoint = "http://oss-cn-beijing.aliyuncs.com";
	// 存储空间名称
	$bucket= "vlson";
	// 文件名称
	$object = "vland/image/".md5(time()).".png";
	// <yourLocalFile>由本地文件路径加文件名包括后缀组成，例如/users/local/myfile.txt
	$filePath = "D:/test.jpg";

	try{
	    $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);

	    $ossClient->uploadFile($bucket, $object, $filePath);
	} catch(OssException $e) {
	    printf(__FUNCTION__ . ": FAILED\n");
	    printf($e->getMessage() . "\n");
	    return;
	}
	print(__FUNCTION__ . ": OK" . "\n");