<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Unzip 6.0 PHP在线压缩程序  www.idc886.com 免费空间，国外免费空间 收集</title>

<body>

<?php 
// The unzip script 
// Created by Alex at http://www.learncpp.com 
// 
// This script lists all of the .zip files in a directory 
// and allows you to select one to unzip.  Unlike CPanel's file 
// manager, it _will_ overwrite existing files. 
// 
// To use this script, FTP or paste this script into a file in the directory 
// with the .zip you want to unzip.  Then point your web browser at this 
// script and choose which file to unzip. 

// See if there's a file parameter in the URL string 
$file = $_GET['file']; 

if (isset($file)) 
{ 
echo "解压中 " . $file . "<br>"; 
system('unzip -o ' . $file); 
exit; 
} 

// create a handler to read the directory contents 
$handler = opendir("."); 

echo "请选择 要执行 unzip 解压的文件包: " . "<br><br>"; 

// A blank action field posts the form to itself 
echo '<FORM action="" method="get">'; 

$found = FALSE; // Used to see if there were any valid files 

// keep going until all files in directory have been read 
while ($file = readdir($handler)) 
{ 
if (preg_match ("/.zip$/i", $file)) 
{ 
echo '<input type="radio" name="file" value=' . $file . '> ' . $file . '<br>'; 
$found = true; 
} 
} 

closedir($handler); 
if ($found == FALSE) 
echo "没有找到  .zip 文件包<br>"; 
else
echo '<br>警告：现有的文件将被覆盖。<br><br><INPUT type="submit" value="解压!">'; 
echo "</FORM>"; 
?>
<br><br>

<p>★ 注意：此程序小，执行快。一般PHP空间都可以使用此程序来解压。 </p>


     <p>★ 程序下载：<a href=http://www.idc886.com/thread-65-1-1.html target=_blank>PHP在线解压程序</a> <a href=http://www.idc886.com/thread-1524-1-1.html target=_blank>PHP文件管理程序</a></p> 

<p>转载请注明：本程序由 <a href=http://www.idc886.com/ target=_blank>IDC886.com</a> 整理收集！ <a href=http://idc886.com/ target=_blank>免费空间</a> 提供  <a href=http://www.idc886.com target=_blank>免费国外空间</a>   <a href=http://www.idc886.com/forum-23-1.html target=_blank>国外免费空间推荐</a></p>    
</body>
