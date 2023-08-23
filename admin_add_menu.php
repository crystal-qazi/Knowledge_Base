<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
include 'config/connection.php'; ?>



             
              
                    



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">
        <div class="shortcode_title">
            <h4 id="horizontal-tab">Menu Setup<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="" href="#horizontal-tab" style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Main Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sub-Menu / Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Features / Subject</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-lg-3">
                

                <form action="#" method="post">
                    <?php if (!empty($message)) : ?>
                        <div class="message"><?php echo htmlspecialchars($message); ?></div>
                    <?php endif; ?>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Add Main Menu</label>
                    <input name="title" class="form-control form-control-sm" type="text" placeholder="Name Of Menu" aria-label=".form-control-sm example" value="<?php echo htmlspecialchars($title); ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe Menu"><?php echo htmlspecialchars($description); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            </div>

<?php
// Include the database connection configuration
include_once 'config/connection.php';

// Initialize variables
$title = '';
$description = '';
$message = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    // Perform insert query
    $sql = "INSERT INTO main_menu (title, description) VALUES ('$title', '$description')";

    if (mysqli_query($con, $sql)) {
        $message = "Record inserted successfully!";
    } else {
        $message = "ERROR: Could not execute $sql. " . mysqli_error($con);
    }
}

?>

<?php
// Include the database connection configuration
include_once 'config/connection.php';

// Fetch data from the main_menu table
$query = "SELECT * FROM main_menu";
$result = mysqli_query($con, $query);

// Initialize an array to store fetched data
$menuItems = [];

if ($result) {
    // Fetch each row and store in $menuItems array
    while ($row = mysqli_fetch_assoc($result)) {
        $menuItems[] = $row;
    }
} else {
    echo "ERROR: Could not execute $query. " . mysqli_error($con);
}

?>

<article class="shortcode_info">
        <div class="shortcode_title">
            <h1>Menus</h1>
            <p><span>Main Menu</span></p>
        </div>

        <div class="basic_table">
            <table class="table basic_table_info">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($menuItems as $menuItem) : ?>
            <tr>
                <td><?php echo htmlspecialchars($menuItem['id']); ?></td>
                <td><?php echo htmlspecialchars($menuItem['title']); ?></td>
                <td><?php echo htmlspecialchars($menuItem['description']); ?></td>
            </tr>
        <?php endforeach; ?>
               
                </tbody>
            </table>
        </div>
    </article>
        </div>
            
            
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col-lg-3">
                

            <form action="#" method="post">
                <?php if (!empty($message)) : ?>
                    <div class="message"><?php echo htmlspecialchars($message); ?></div>
                    <?php endif; ?>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Add Main Menu</label>
                    <input name="title" class="form-control form-control-sm" type="text" placeholder="Name Of Menu" aria-label=".form-control-sm example" value="<?php echo htmlspecialchars($title); ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe Menu"><?php echo htmlspecialchars($description); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>


                </div>

       


    
            
            <div class="tab-pane fade" id="profile-tab" role="profilepanel" aria-labelledby="profile-tab">
            <?php
                include 'config/connection.php';

                $sql = "SELECT * FROM project";
                $res = mysqli_query($con,$sql);
                $count = mysqli_num_rows($res);
                ?>
            <?php   
                if($count > 0){
                    while($row= mysqli_fetch_assoc($res)){
                        $id = $row['ID'];
                        $porject_name = $row['Project_name'];
                        ?>
                        <p class="nav-item">
                        <a href="<?php echo $porject_name?>.php" class="nav-link"><?php echo $porject_name ?> </a></p> 
                        <?php                                     
                    }
                }
                ?>
                Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
            </div>
        </div>
    </div>

</div>

                      

                    
          
               
                </div>
            </div>
        </section>
        <!--================End Topic Area =================-->

        <?php include('headerfootertemp/admin/admin_footer.php') ?>
