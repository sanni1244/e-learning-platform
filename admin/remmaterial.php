<link rel="stylesheet" href="/vent/style/leftnav.css">
<link rel="stylesheet" href="/vent/admin/admin.css">
<?php include_once("../personal/userdata.php"); ?>
<title>Admin user view</title>
<div class="container1">

    <div class="one left">
                <a href="/vent/index.html"><div class="brand"><h4 class="h4">YEET KNOWLEDGE</h4></div></a>
                <ul>
                    <a href="/vent/personal/dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                    <a href="/vent/personal/mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                    <a href="/vent/personal/allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                    <a href="/vent/personal/search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                    <a href="/vent/personal/editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                    <a href="/vent/admin/admin.php"><li class="left-section Settings selection"><img  class="blue"  src="../icons/logout.svg">Admin User</li></a>
                    <a href="/vent/personal/logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
                </ul>
            </div>

<div class="one center">
<a class="goback" href="../admin/admin.php"><img src="../icons/back.svg" alt=""></a>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $class = $_POST['class'];
  $name = $_POST['name'];
  $json = file_get_contents('../personal/elist.json');
  $data = json_decode($json, true);

  if (isset($data[$class])) {
    $objects = $data[$class];
    foreach ($objects as $key => $object) {
      if ($object['materialname'] === $name) {
        unset($objects[$key]);
      }
    }
    $data[$class] = array_values($objects);
    file_put_contents('../personal/elist.json', json_encode($data));
  }
}

$json = file_get_contents('../personal/elist.json');
$data = json_decode($json, true);
?>

  <h1>Remove Material from a course</h1>
  <form method="GET">
    <label for="class">Enter the course</label>
    <select name="class" id="class" class="someclass">
      <?php foreach ($data as $class => $objects): ?>
        <option class="someclass someclass1" value="<?php 
          $class1 = $class[0] . $class[1] . $class[2] . " " . $class[3] . $class[4] . $class[5];
          echo $class ?>"><?php echo $class1; ?></option>
      <?php endforeach; ?>
    </select>
    <button class="thebttn" type="submit">View Materials</button>
  </form>
  
  <?php if (isset($_GET['class'])): ?>
    <h2 class="header2">Materials in <?php 
          $class2 = $_GET['class'][0] . $_GET['class'][1] . $_GET['class'][2] . " " . $_GET['class'][3] . $_GET['class'][4] . $_GET['class'][5];
      echo strtoupper($class2); ?></h2>
    <ul>
      <?php foreach ($data[$_GET['class']] as $object): ?>
        <li class="theunorder">
          <p class="ancor"><a href="<?php echo $object['link'] ?>"><?php echo $object['materialname'] ?></a></p>
          <form method="POST" >
            <input type="hidden" name="class" value="<?php echo $_GET['class'] ?>">
            <input type="hidden" name="name" value="<?php echo $object['materialname'] ?>">
            <button class="thebttn1" type="submit">Delete</button>
          </form>
          <?php echo "<h2 class='absolute'>". strtoupper($class2) . "</h2>"; ?>

        </li>
      <?php endforeach; ?>
      
    </ul>
  <?php endif; ?>
</body>
</html>
