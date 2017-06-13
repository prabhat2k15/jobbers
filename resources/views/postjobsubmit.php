<?php 
include('config.php');


$title=$_REQUEST['title'];
$designation=$_REQUEST['designation'];
$category=$_REQUEST['category'];
$subcategory=$_REQUEST['subcategory'];
$type=$_REQUEST['jobtype'];
$salary=$_REQUEST['salary'];
$skills=$_REQUEST['skills'];
$description=$_REQUEST['description'];
$company=$_REQUEST['company'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$pin=$_REQUEST['pin'];
$district=$_REQUEST['district'];
$country=$_REQUEST['country'];
$person=$_REQUEST['person'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];

echo $title."<br>";
echo $designation."<br>";
echo $category."<br>";
echo $subcategory."<br>";
echo $type."<br>";
echo $salary."<br>";
echo $skills."<br>";
echo $description."<br>";
echo $company."<br>";
echo $address."<br>";
echo $city."<br>";
echo $pin."<br>";
echo $district."<br>";
echo $country."<br>";
echo $person."<br>";
echo $email."<br>";
echo $mobile."<br>";


$q="insert into jobs(jobid,title,designation,category,subcategory,type,description,salary,company,address,city,pin,country,skills,person,email,mobile,date,time) values('101','$title','$designation','$category','$subcategory','$type','$description','$salary','$company','$address','$city','$pin','$country','$skills','$person','$email','$mobile',now(),now()); ";
if(mysqli_query($con,$q) or die(mysqli_error($con)))
{
    echo "submitted successfully";
}
mysqli_close($con);
