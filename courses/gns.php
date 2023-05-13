<link rel="stylesheet" href="../style/style2.css">
<link rel="stylesheet" href="/elearning/style/leftnav.css">
<link rel="stylesheet" href="../style/individual.css">
<head>
    <?php 
    // include_once '../sections/headers.html'; ?>
    
    <title>csc courses</title>

</head>
<body class="container2">
        <div class="one left">
            <a href="/elearning/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>

            <ul>
                <a href="/elearning/personal/dashboard.php"><li class="left-section"><img src="../icons/home.svg">Dashboard</li></a>
                <a href="/elearning/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="/elearning/personal/allcourses.php"><li class="left-section selection"><img class="blue" src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/elearning/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/elearning/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <?php include_once('../personal/userdata.php');
                if($array1['admin'] == "1"){
                  echo '<a href="/elearning/admin/admin.php"><li class="left-section Settings"><img src="../icons/logout.svg">Admin User</li></a>
                '; }?>  
                <a href="/elearning/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
        </div>
<div class="one center ">
    <div class="content1">
        <div class="sect2">
            <div class="cscsection2">
                
            </div>
        </div>  
    </div>
<script src="../scripts/gns.js">
</script>
<script>    
    let html = ``;
    section = document.getElementsByClassName("cscsection2")[0];
    for(let i = 0; i < gnsCourse.length; i++){
        html += `
                <div class="individual">
                    <div>
    <img class="detailsimg" src="${gnsCourse[i].img}" alt="">
</div>
<div>
    <div><span class="details">${gnsCourse[i].courseCode}</span></div>
    <div><span class="details">${gnsCourse[i].name}</span></div>
    <div><span class="details">${gnsCourse[i].level}</span></div>
    <div><span class="details"><a href="${gnsCourse[i].mylink}">Check Materials</a></span></div>              
</div>
    </div>`
        section.innerHTML = html;}
    </script>

</div>
</body>


</html>



