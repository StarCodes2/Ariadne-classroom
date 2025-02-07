<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Class</title>
    <link rel = "stylesheet" type = "text/css" href = "css/createclass.css"/>
</head>
<body>
    <div class="container">
    <form id="createClassForm" action="" method="post">
    <h1>Create a class for your students</h1>
    <p id="detailsHeader">Enter the details about your class, courses and grades</p>
    
    <input type="text" name="enterClassName" placeholder="Enter your class name" required id="enterClassName"><br>
    <div class="coursegroup">
    <select name="subjects" class="subjects" required>
            <option value="">--Please choose an option--</option>
            <option value="Web Development">Web Development</option>
            <option value="Data Science">Data Science</option>
            <option value="AI">Artificial Intelligence</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Oracle DataBase">Oracle DataBase</option>
            <option value="Cisco Networking">Cisco Networking</option>
            <option value="RedHat Linux">RedHat Linux</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Microsoft">Microsoft System Administration</option>
          </select>
<br>  

<select name="age" class="age" required>
        <option value="">--Please choose your age range--</option>
        <option value="Web Development">7 - 15</option>
        <option value="Data Science">16 - 25</option>
        <option value="AI">26 - 35</option>
        <option value="Machine Learning">36 - 45</option>
        <option value="Oracle DataBase">45 above</option>
      </select>
<br> 
</div> 

<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>

 </form>
 </div>
</body>
<script type="text/javascript" src="js/test.js"></script>
</html>
