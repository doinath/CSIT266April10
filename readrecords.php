
<?php
    include 'connect.php';
 
    if (!$connection) {
        die('Could not connect: ' . mysqli_connect_error());
    }
 
    // SQL query to get users with user type and their respective data from student, staff, or faculty tables, sorted by userID
    $query = 'SELECT tblusers.firstName, tblusers.lastName, tblusers.userID, 
              tblstudent.studentID, tblstudent.program, 
              tblstaff.staffID, tblstaff.office, 
              tblfaculty.facultyID, tblfaculty.department 
              FROM tblusers
              LEFT JOIN tblstudent ON tblusers.userID = tblstudent.userID
              LEFT JOIN tblstaff ON tblusers.userID = tblstaff.userID
              LEFT JOIN tblfaculty ON tblusers.userID = tblfaculty.userID
              ORDER BY tblusers.userID ASC';  // Sorting by userID in ascending order
 
    $resultset = mysqli_query($connection, $query);
    ?>