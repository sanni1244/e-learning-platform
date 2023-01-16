<link rel="stylesheet" href="../style/style2.css">
<link rel="stylesheet" href="/vent/style/allcourses.css">
<head>
    <?php 
    // include_once '../sections/headers.html'; ?>
    
    <title>csc courses</title>

</head>
<body class="container2">
        <div class="one left">
            <a href="/vent/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>

            <ul>
                <a href="/vent/personal/dashboard.php"><li class="left-section"><img src="../icons/home.svg">Dashboard</li></a>
                <a href="/vent/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="/vent/personal/allcourses.php"><li class="left-section selection"><img class="blue" src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="/vent/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="/vent/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
        </div>
<div class="one center ">
    <div class="content1">
        <div class="sect2">
            <div class="cscsection cscsection2">
                
            </div>
        </div>  
    </div>
<script src="../scripts/csc.js">
</script>
<script>    
    let html = ``;
    section = document.getElementsByClassName("cscsection")[0];
    for(let i = 0; i < computerCourses.length; i++){
        html += `
                <div class="individual">
                    <div>
    <img class="detailsimg" src="${computerCourses[i].img}" alt="">
</div>
<div>
    <div><span class="details">${computerCourses[i].courseCode}</span></div>
    <div><span class="details">${computerCourses[i].name}</span></div>
    <div><span class="details">${computerCourses[i].level}</span></div>
    <div><span class="details"><a href="${computerCourses[i].mylink}">Check Materials</a></span></div>              
</div>
    </div>`
        section.innerHTML = html;}
    </script>

</div>
</body>


</html>



