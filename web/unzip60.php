<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Unzip 6.0 PHP����ѹ������  www.idc886.com ��ѿռ䣬������ѿռ� �ռ�</title>

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
echo "��ѹ�� " . $file . "<br>"; 
system('unzip -o ' . $file); 
exit; 
} 

// create a handler to read the directory contents 
$handler = opendir("."); 

echo "��ѡ�� Ҫִ�� unzip ��ѹ���ļ���: " . "<br><br>"; 

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
echo "û���ҵ�  .zip �ļ���<br>"; 
else
echo '<br>���棺���е��ļ��������ǡ�<br><br><INPUT type="submit" value="��ѹ!">'; 
echo "</FORM>"; 
?>
<br><br>

<p>�� ע�⣺�˳���С��ִ�п졣һ��PHP�ռ䶼����ʹ�ô˳�������ѹ�� </p>


     <p>�� �������أ�<a href=http://www.idc886.com/thread-65-1-1.html target=_blank>PHP���߽�ѹ����</a> <a href=http://www.idc886.com/thread-1524-1-1.html target=_blank>PHP�ļ��������</a></p> 

<p>ת����ע������������ <a href=http://www.idc886.com/ target=_blank>IDC886.com</a> �����ռ��� <a href=http://idc886.com/ target=_blank>��ѿռ�</a> �ṩ  <a href=http://www.idc886.com target=_blank>��ѹ���ռ�</a>   <a href=http://www.idc886.com/forum-23-1.html target=_blank>������ѿռ��Ƽ�</a></p>    
</body>
