<link rel="stylesheet" href="/vent/style/style.css">
<?php 
if(isset($_POST["facrrr"]) && $_POST["facrrr"] != null){
if(!isset($sssrrt)){
    $sssrrt = $_POST["facrrr"];
    }}
    else{
        $sssrrt = 18;}
        ?>            
<div class="signup-section">

    <div class="cntn1">
            <label for="">Faculty</label>
			<select name="facrrr" onchange="facchange2()" id="fac" class="lbl1" required="">
                <option <?php if($sssrrt == "01"){?> selected <?php } ?> selected value="01">FACULTY OF EDUCATION</option>
                <option <?php if($sssrrt == "02"){?> selected <?php } ?>  value="02">FACULTY OF ENGINEERING</option>
                <option <?php if($sssrrt == "03"){?> selected <?php } ?>  value="03">FACULTY OF ARTS</option>
                <option <?php if($sssrrt == "04"){?> selected <?php } ?>  value="04">FACULTY OF LAW</option>
                <option <?php if($sssrrt == "05"){?> selected <?php } ?>  value="05">FACULTY OF SCIENCE</option>
                <option <?php if($sssrrt == "06"){?> selected <?php } ?>  value="06">FACULTY OF SOCIAL SCIENCE</option>
                <option <?php if($sssrrt == "07"){?> selected <?php } ?>  value="07">FACULTY OF CLINICAL SCIENCES</option>
                <option <?php if($sssrrt == "08"){?> selected <?php } ?>  value="08">FACULTY OF MANAGEMENT SCIENCE</option>
                <option <?php if($sssrrt == "09"){?> selected <?php } ?>  value="09">SCHOOL OF COMMUNICATION</option>
                <option <?php if($sssrrt == "10"){?> selected <?php } ?>  value="10">SCHOOL OF TRANSPORT AND LOGISTICS</option>
                <option <?php if($sssrrt == "11"){?> selected <?php } ?>  value="11">FACULTY OF BASIC MEDICAL SCIENCES</option>
                <option <?php if($sssrrt == "12"){?> selected <?php } ?>  value="12">FACULTY OF DENTISTRY</option>
                <option <?php if($sssrrt == "13"){?> selected <?php } ?>  value="13">SCHOOL OF AGRICULTURE</option>
                <option <?php if($sssrrt == "14"){?> selected <?php } ?>  value="14">FACULTY OF BASIC CLINICAL SCIENCES</option>
                <option <?php if($sssrrt == "15"){?> selected <?php } ?>  value="15">SCHOOL OF LIBRARY, ARCHIVAL AND INFORMATION SCIENCE</option>
                <option <?php if($sssrrt == "16"){?> selected <?php } ?>  value="16">FACULTY OF PHARMACY</option>
                <option <?php if($sssrrt == "17"){?> selected <?php } ?>  value="17">FACULTY OF ALLIED HEALTH SCIENCES</option>
                <option <?php if($sssrrt == "18"){?> selected <?php } ?>  value="" hidden>CHOOSE YOUR FACULTY</option>

            </select>
        </div>
    <div class="cntn1">

        <label for="">Department</label>
            <select class="lbl1" name="dtment" id="deptt">
                <option class="dwwdllll" name="thesame" value="001"></option>
                <option class="dwwdllll" name="thesame" value="002"></option>
                <option class="dwwdllll" name="thesame" value="003"></option>
                <option class="dwwdllll" name="thesame" value="004"></option>
                <option class="dwwdllll" name="thesame" value="005"></option>
                <option class="dwwdllll" name="thesame" value="006"></option>
                <option class="dwwdllll" name="thesame" value="007"></option>
                <option class="dwwdllll" name="thesame" value="008"></option>
                <option class="dwwdllll" name="thesame" value="009"></option>
                <option class="dwwdllll" name="thesame" value="010"></option>
                <option class="dwwdllll" name="thesame" value="011"></option>
                <option class="dwwdllll" name="thesame" value="012"></option>
                <option class="dwwdllll" name="thesame" value="013"></option>
                <option class="dwwdllll" name="thesame" value="014"></option>
                <option class="dwwdllll" name="thesame" value="015"></option>
                <option class="dwwdllll" name="thesame" value="016"></option>
                <option class="dwwdllll" name="thesame" value="017"></option>
                <option class="dwwdllll" name="thesame" value="018"></option>
                <option class="dwwdllll" name="thesame" value="019"></option>
                <option class="dwwdllll" name="thesame" value="020"></option>
                <option class="dwwdllll" name="thesame" value="021"></option>
                <option class="dwwdllll" name="thesame" value="022"></option>
                <option class="dwwdllll" name="thesame" value="023"></option>
                <option class="dwwdllll" name="thesame" value="024"></option>
                <option class="dwwdllll" name="thesame" value="025"></option>
                <option class="dwwdllll" name="thesame" value="026"></option>
            </select>
    </div>
</div>
</body>
<script>
           function facchange2(){
            var rrr = document.forms["thediv"];
        rrr.submit();}
        <?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "01"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'EDUCATIONAL MANAGEMENT (ACCOUNTING EDUCATION)';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'ARABIC EDUCATION';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'SCIENCE AND TECHNOLOGY EDUCATION (BIOLOGY)';
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'EDUCATIONAL MANAGEMENT (BUSINESS EDUCATION)';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'SCIENCE AND TECHNOLOGY EDUCATION (CHEMISTRY)';
            document.getElementsByClassName("dwwdllll")[5].innerHTML = 'CHRISTIAN RELIGIOUS STUDIES EDUCATION';
            document.getElementsByClassName("dwwdllll")[6].innerHTML = 'SCIENCE AND TECHNOLOGY EDUCATION (COMPUTER SCIENCE)';
            document.getElementsByClassName("dwwdllll")[7].innerHTML = 'ECONOMICS EDUCATION';
            document.getElementsByClassName("dwwdllll")[8].innerHTML = 'ENGLISH EDUCATION';
            document.getElementsByClassName("dwwdllll")[9].innerHTML = 'PHYSICAL & HEALTH EDUCATION';
            document.getElementsByClassName("dwwdllll")[10].innerHTML = 'ISLAMIC RELIGIOUS STUDIES EDUCATION';
            document.getElementsByClassName("dwwdllll")[11].innerHTML = 'EDUCATIONAL FOUNDATION';
            document.getElementsByClassName("dwwdllll")[12].innerHTML = 'EDUCATIONAL MANAGEMENT';
            document.getElementsByClassName("dwwdllll")[13].innerHTML = 'SCIENCE AND TECHNOLOGY EDUCATION (EDUCATIONAL TECHNOLOGY)';
            document.getElementsByClassName("dwwdllll")[14].innerHTML = 'FRENCH EDUCATION';
            document.getElementsByClassName("dwwdllll")[15].innerHTML = 'GEOGRAPHY EDUCATION';
            document.getElementsByClassName("dwwdllll")[16].innerHTML = 'HEALTH EDUCATION';
            document.getElementsByClassName("dwwdllll")[17].innerHTML = 'HISTORY EDUCATION';
            document.getElementsByClassName("dwwdllll")[18].innerHTML = 'SCIENCE AND TECHNOLOGY EDUCATION (MATHEMATICS)';
            document.getElementsByClassName("dwwdllll")[19].innerHTML = 'POLITICAL SCIENCE EDUCATION';
            document.getElementsByClassName("dwwdllll")[20].innerHTML = 'SCIENCE AND TECHNOLOGY EDUCATION (PHYSICS)';
            document.getElementsByClassName("dwwdllll")[21].innerHTML = 'YORUBA EDUCATION';
            document.getElementsByClassName("dwwdllll")[22].innerHTML = 'EARLY CHILDHOOD AND PRIMARY EDUCATION';
            document.getElementsByClassName("dwwdllll")[23].innerHTML = 'CURRUCULUM STUDIES';
            document.getElementsByClassName("dwwdllll")[24].innerHTML = 'GUIDANCE AND COUNSELING EDUCATION';
            document.getElementsByClassName("dwwdllll")[25].innerHTML = 'SPECIAL EDUCATION';





<?php $sssrrt = $_POST["facrrr"];} ?>        
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "02"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'CHEMICAL ENGINEERING';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'ELECTRONICS AND COMPUTER ENGINEERING';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'MECHANICAL ENGINEERING';
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'CIVIL ENGINEERING';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'AERONAUTICS AND ASTRONAUTICS ENGINEERING';

<?php $sssrrt = $_POST["facrrr"];} ?>       
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "03"){?>
            document.getElementsByClassName("dwwdllll")[0].append(innerHTML = 'ARABIC');
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'CHRISTIAN RELIGIOUS STUDIES';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'ENGLISH LANGUAGE';
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'ENGLISH LITERATURE';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'FRENCH';
            document.getElementsByClassName("dwwdllll")[5].innerHTML = 'HISTORY AND INTERNATIONAL STUDIES';
            document.getElementsByClassName("dwwdllll")[6].innerHTML = 'ISLAMIC RELIGIOUS STUDIES';
            document.getElementsByClassName("dwwdllll")[7].innerHTML = 'MUSIC';
            document.getElementsByClassName("dwwdllll")[8].innerHTML = 'PHILOSOPHY';
            document.getElementsByClassName("dwwdllll")[9].innerHTML = 'PORTUGUESE / ENGLISH';
            document.getElementsByClassName("dwwdllll")[10].innerHTML = 'THEATRE ART';
            document.getElementsByClassName("dwwdllll")[11].innerHTML = 'LINGUISTICS';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "04"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'ISLAMIC AND COMMON LAW';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'LAW';


<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "05"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'BIOCHEMISTRY';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'BOTANY';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'CHEMISTRY';
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'COMPUTER SCIENCE';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'FISHERIES AND AQUATIC BIOLOGY';
            document.getElementsByClassName("dwwdllll")[5].innerHTML = 'MATHEMATICS';
            document.getElementsByClassName("dwwdllll")[6].innerHTML = 'MICROBIOLOGY';
            document.getElementsByClassName("dwwdllll")[7].innerHTML = 'ZOOLOGY';
            document.getElementsByClassName("dwwdllll")[8].innerHTML = 'SCIENCE LABORATORY TECHNOLOGY';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "06"){?>
            document.getElementsByClassName("dwwdllll")[0].append(innerHTML = 'ECONOMICS');
            document.getElementsByClassName("dwwdllll")[1].append(innerHTML = 'GEOGRAPHY AND PLANNING');
            document.getElementsByClassName("dwwdllll")[2].append(innerHTML = 'POLITICAL SCIENCE');
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'PSYCHOLOGY';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'SOCIOLOGY';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "07"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'MEDICINE AND SURGERY';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'NURSING';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "08"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'ACCOUNTING';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'BANKING AND FINANCE';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'BUSINESS ADMINISTRATION';
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'INDUSTRIAL RELATIONS & HUMAN RESOURCES MANAGEMENT';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'INSURANCE';
            document.getElementsByClassName("dwwdllll")[5].innerHTML = 'MANAGEMENT TECHNOLOGY';
            document.getElementsByClassName("dwwdllll")[6].innerHTML = 'MARKETING';
            document.getElementsByClassName("dwwdllll")[7].innerHTML = 'PUBLIC ADMINISTRATION';
            document.getElementsByClassName("dwwdllll")[8].innerHTML = 'LOCAL GOVERNMENT DEVELOPMENT AND ADMINISTRATION';
            document.getElementsByClassName("dwwdllll")[9].innerHTML = 'TAXATION STUDIES';
<?php $sssrrt = $_POST["facrrr"];} ?>       
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "09"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'BOOK PUBLISHING';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'CINEMATOGRAPHY';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'COMMUNICATION TECHNOLOGY';
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'HUMAN COMMUNICATION';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'JOURNALISM';
            document.getElementsByClassName("dwwdllll")[5].innerHTML = 'MASS COMMUNICATION';
            document.getElementsByClassName("dwwdllll")[6].innerHTML = 'PHOTOJOUNALISM';
            document.getElementsByClassName("dwwdllll")[7].innerHTML = 'PUBLIC RELATIONS AND ADVERTISING';
            document.getElementsByClassName("dwwdllll")[8].innerHTML = 'RADIO AND TELEVISION BROADCAST';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "10"){?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'TRANSPORT MANAGEMENT AND OPERATIONS';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php 
            if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "11"){
                ?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'PHYSIOLOGY';

<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php 
            if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "12"){
                ?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'DENTISTRY';

<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php 
            if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "13"){
                ?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'AGRICULTURE';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'AGRICULTURAL ECONOMICS AND FARM MANAGEMENT';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'AGRICULTURAL EXTENTION AND RURAL MANAGEMENT';
            document.getElementsByClassName("dwwdllll")[3].innerHTML = 'ANIMAL SCIENCE';
            document.getElementsByClassName("dwwdllll")[4].innerHTML = 'CROP PRODUCTION';

<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php 
            if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "14"){
                ?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'PHARMACOLOGY';

<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php 
            if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "15"){
                ?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'LIBRARY AND INFORMATION SCIENCE';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php 
            if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "16"){
                ?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'PHARMACY';
<?php $sssrrt = $_POST["facrrr"];} ?>  
<?php 
            if(isset($_POST["facrrr"]) && $_POST["facrrr"] == "17"){
                ?>
            document.getElementsByClassName("dwwdllll")[0].innerHTML = 'PHYSIOTERAPHY';
            document.getElementsByClassName("dwwdllll")[1].innerHTML = 'RADIOGRAPHY';
            document.getElementsByClassName("dwwdllll")[2].innerHTML = 'MEDICAL LABORATORY SCIENCE';
<?php $sssrrt = $_POST["facrrr"];} 

?>  


</script>
</html>