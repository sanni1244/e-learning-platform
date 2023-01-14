let gnsCourse = [
    {
        img: "/vent/material/gns101/gns101.jpg",
        courseCode: "GNS 101",
        name: "USE OF LIBRARY",
        level: "100 Level",
        material_no: "1",
        location: "/vent/material/gns101/1.pdf",
                mylink: "/vent/personal/link.php?aq=gns101"

    },
    {
        img: "/vent/material/gns201/gns201.jpg",
        courseCode: "GNS 201",
        name: "LAGOS AND IT'S ENVIRONMENTS",
        level: "200 Level",
        material_no: "1",
        location: "/vent/material/gns201/1.ppt",
        mylink: "/vent/personal/link.php?aq=gns201"

    },
    {
        img: "/vent/material/ent202/ent202.png",
        courseCode: "ENT 202",
        name: "BASIC PRINCIPLES OF ENTREPRENEURSHIP",
        level: "200 Level",
        material_no: "1",
        location: "/vent/material/ent202/1.pdf",
        mylink: "/vent/personal/link.php?aq=ent202"

    },
    {
        img: "/vent/material/gns301/gns301.jpg",
        courseCode: "GNS 301",
        name: "LOGIC AND PHYLOSOPHY",
        level: "300 Level",
        material_no: "1",
        location: "/vent/material/Phy101/1.pdf",
        mylink: "/vent/personal/link.php?aq=gns301"

    },
    {
        img: "/vent/material/ent302/ent302.png",
        courseCode: "ENT 302 (WATER TREATMENT)",
        name: "ENTREPRENEURSHIP II",
        level: "300 Level",
        material_no: "1",
        location: "/vent/material/ent302/1.pdf",
        mylink: "/vent/personal/link.php?aq=ent302"

    }
]
function gns(){
    var bar1 = ``;
    var sdds = document.getElementsByClassName("allcourse")[0]
    bar1 += `
    <a class="availableButton" href="/vent/courses/gns.php"><button>View Courses</button></a>
    `
    sdds.innerHTML = bar1;
    let html = ``;
    var section = document.getElementsByClassName("sect")[0];

    for(let i = 0; i < 6; i++){
        html += `
        <div class="sect">
        <div class="section">
                <img class="row" src="${gnsCourse[i].img}" alt="">
                    <div><span class="row">${gnsCourse[i].courseCode}</span></div>
                <div><span class="row">${gnsCourse[i].name.charAt(0).toUpperCase() + gnsCourse[i].name.substring(1, 500).toLowerCase()}</span></div>

                    <div><span class="row">${gnsCourse[i].level}</span></div>
                    <div><span class="row"><a href="${gnsCourse[i].mylink}">Check Materials</a></span></div>
            </div>
        </div>`
        section.innerHTML = html
    }
}



