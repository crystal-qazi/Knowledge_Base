<?php ini_set('display_errors', 0); ?>
<?php include('headerfootertemp/admin/admin_head.php') ?>
<?php
// Include the database configuration
include 'config/connection.php'; ?>

<?php
// Include the database configuration
include 'config/connection.php';?>

             
              
                    



<div class="col-lg-9 doc-middle-content">

    <div class="tab_shortcode">
        <div class="shortcode_title">
            <h4 id="horizontal-tab">Horizontal Tab<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="" href="#horizontal-tab" style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Conclusions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reporting</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                sss't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                Don't get shirty with me what a plonker on your bike mate bugger all mate chip shop bits and bobs smashing mush bugger cup of char, in my flat.
            </div>
        </div>
    </div>


    
    <div class="col-lg-3">
        <form>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Add Main Menu</label>
                <input class="form-control form-control-sm" type="text" placeholder="Name Of Menu" aria-label=".form-control-sm example">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Menu Status</label>
              <select class="form-control form-select form-select-sm" aria-label="Small select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <article class="shortcode_info">
        <div class="shortcode_title">
            <h1>Tables</h1>
            <p><span>Welcome to Docy !</span> Get familiar with the Docyproducts and explore
                their features:</p>
        </div>

        <h4 class="s_title load-order-2" id="data-table">Data Table<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="" href="#data-table" style="font: 1em / 1 anchorjs-icons; padding-left: 0.375em;"></a></h4>
        <div class="basic_table">
            <table class="table basic_table_info">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>

   
    </article>
</div>

                      

                    
          
               
                </div>
            </div>
        </section>
        <!--================End Topic Area =================-->

        <?php include('headerfootertemp/admin/admin_footer.php') ?>
