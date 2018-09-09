<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #6B8E23;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: #ff0000;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #69d55c;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #6B8E23;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>
<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
  <article>
	<form action="/action_page.php">
  ชื่อ:
  <input type="text" name="ชื่อ" value="Mickey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  นามสกุล:
  <input type="text" name="นามสกุล" value="Mouse">
  <br>
	เพศ:
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Age:
  <input type="number" name="age" value="age">
  <br>
   เบอร์โทรศัพท์  :
  <input type="tel" name="tel" value="xxxxxxxxxx"><br>
 E-mail: 
 <input type="mail" name="mail" value="xxxx@gmail.com"><br>
   ที่อยู่:
  <input type="text" name="ที่อยู่" value="ที่อยู่"><br>
  ไซส์ เสื้อ:
  <input type="radio" name="size" value="S" checked> S
  <input type="radio" name="size" value="M"> M
  <input type="radio" name="size" value="L" checked> L
  <input type="radio" name="size" value="XL"> XL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br><br>
  <input type="submit" value="Submit">
</form>
  </article>
</section>
</body>
</html>