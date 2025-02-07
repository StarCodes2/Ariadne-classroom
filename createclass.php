<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Class</title>
    <link rel = "stylesheet" type = "text/css" href = "css/createclass.css" />
</head>
<body>
    <div class="container">
    <form id="createClassForm" action="" method="post">
    <h1>Create a class for your students</h1>
    <h3 id="subheader">Enter the details about your class, courses and grades</h3>
    
    <div>
        <table class="formtable">
            <tr class="tablerows">
              <th>Class Name</th>
              <th>Course Title</th>
            </tr>

            <tr >
                <td><input type="text" placeholder="Enter Class Name" autocomplete="on" ></td>
                <td><input type="text" placeholder="Enter Class Title"  autocomplete="on"></td>
            </tr>

            <tr>
                <th class="headertwo">Select Class Category</th>
                <th class="headertwo">Select Course Level</th>
            </tr>

            <tr>
                <td>
                    <select name="subjects" class="subjects">
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
                </td>

                <td>
                        <select name="subjects" class="courselevel">
                                <option value="">--Please choose an option--</option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="expert">Expert</option>
                                </select> 
                </td>
            </tr>

            <tr>
                <th>Add an Exercise</th>
                <th>Add a Quiz</th>
                </tr>
            <tr>
                    <td>
                            <select name="subjects" class="exercise">
                                <option value="">--Select an Exercise--</option>
                                <option value="Web Development">Build a Calculator</option>
                                <option value="Data Science">Build a Facebook Login page</option>
                                <option value="AI">Build an estate management system</option>
                            </select>
                        </td>
                        <td>
                            <select name="subjects" class="quiz">
                                        <option value="">--Select a Quiz--</option>
                                        <option value="">What do you intend achieving after this course?</option>
                                        <option value="">What Career path do you desire?</option>
                            </select> 
                            </td>                 
            </tr>
</table>
<form action="" autocomplete="on" method="POST">
    <ul>
        <li><label for="fileupload" id="fileupload"> Upload a Course Video</label></li>
        <input id="file-upload" type="video"/>

        <li><input type="file" name="fileupload" value="fileupload" id="fileupload" accept="video/*"></li>

        <li><button value="uploadfile" id="uploadfile">UPLOAD</button></li>
        
        <button id="createbutton" type="submit">Create Classroom</button>

    </ul>
</form>
 </div>
</body>
<script type="text/javascript" src="js/test.js"></script>
</html>