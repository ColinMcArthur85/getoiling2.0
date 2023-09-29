<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome To GetOiling 2.0</title>
      <!-- Custom CSS Files -->
      <!-- <link rel="stylesheet" href="./assets/css/branding.css">
         <link rel="stylesheet" href="./assets/css/main.css">
         <link rel="stylesheet" href="./assets/css/sidenav_style.css">
         <link rel="stylesheet" href="./assets/css/utility.css"> -->
      <link rel="stylesheet" href="./assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;700&display=swap" rel="stylesheet">
      <!-- FontAwesome Icons -->
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
   <body>
      <header>
         <?php include './pages/header.php'; ?>
      </header>
      <div class="container-fluid">
         <div class="row">
            <!-- Side navigation -->
            <?php include './pages/sidenav.php'; ?>
            <!-- Main content -->
            <div class="home-section">
               <!-- Cards -->
               <div class="card-grid">
                  <!-- What would you like to do today card -->
                  <div class="card card-large">
                     <!-- What would you like to do today Header -->
                     <div class="card-header">
                        <i class="fas fa-chevron-down"></i>
                        <h2>What would you like to do today?</h2>
                     </div>
                     <!-- What would you like to do today Body -->
                     <div class="card-content">
                        <!-- 3 columns structure -->
                        <div class="card-column actions-list-left flex-col-between">
                           <a class="mouseover-ltr flex-row-start" href="#" id="engage">
                              <i class="fas fa-handshake"></i>
                              <h3>Engage</h3>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="mouseover-ltr flex-row-start" href="#" id="create">
                              <i class="fas fa-pencil-alt"></i>
                              <h3>Create</h3>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="mouseover-ltr flex-row-start" href="#" id="automate">
                              <i class="fas fa-robot"></i>
                              <h3>Automate</h3>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="mouseover-ltr flex-row-start" href="#" id="design">
                              <i class="fas fa-palette"></i>
                              <h3>Design</h3>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="mouseover-ltr flex-row-start" href="#" id="learn">
                              <i class="fas fa-book"></i>
                              <h3>Learn</h3>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                        </div>
                        <div class="card-column actions-list-center">
                           <div class="content-engage">
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>SEND EMAIL, TEXT, OR APP NOTIFICATION</h3>
                                 </div>
                                 <p>Stay in touch with your contacts by sending or scheduling a message.</p>
                              </a>
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-comment-dots"></i>
                                    <h3>MY CONTACTS</h3>
                                 </div>
                                 <p>Track, organize, find, set to-dos, and communicate with contacts.</p>
                              </a>
                           </div>
                           <div class="content-create" style="display:none;">
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>CREATE CONTACT</h3>
                                 </div>
                                 <p>Add a contact to your contact manager.</p>
                              </a>
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>CREATE WEB PAGE</h3>
                                 </div>
                                 <p>Track, organize, find, set to-dos, and communicate with contacts.</p>
                              </a>
                           </div>
                           <div class="content-automate" style="display:none;">
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>CAMPAIGNS</h3>
                                 </div>
                                 <p>Set up emails & texts that send out over time to contacts.</p>
                              </a>
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>AUTOMATIONS</h3>
                                 </div>
                                 <p>Run tasks like tagging or adding to vaults when certain actions happen.</p>
                              </a>
                           </div>
                           <div class="content-design" style="display:none;">
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>MEMBER AREA</h3>
                                 </div>
                                 <p>Educate, take payments, and create a community on your site.</p>
                              </a>
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>SITE SETTINGS</h3>
                                 </div>
                                 <p>Select a landing page, a website sharing image, and other settings.</p>
                              </a>
                           </div>
                           <div class="content-learn" style="display:none;">
                              <a class="mouseover-ltr actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>SUCCESS ACADEMY</h3>
                                 </div>
                                 <p>Visit the GetOiling Success Academy to get set up and grow your business more quickly.</p>
                              </a>
                           </div>
                        </div>
                        <div class="card-column actions-list-right">
                           <div class="content-engage">
                              <a class="mouseover-ltr" href="#">
                                 <p>Start or Schedule a Zoom Video Call</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Manage Member Area</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Manage Vaults</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Invite Contacts to a Vault</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Create Contact</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Import Contacts</p>
                              </a>
                           </div>
                           <div class="content-create" style="display: none;">
                              <a class="mouseover-ltr" href="#">
                                 <p>Add Video</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Write Blog Post</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Create Event</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Create Landing Page</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Create Leg Builder Link</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Create Resource Bundle</p>
                              </a>
                           </div>
                           <div class="content-automate" style="display: none;">
                              <a class="mouseover-ltr" href="#">
                                 <p>Saved Replies</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Follow-Up Plans</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Email Signature & Default Campaign</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>View Bulk Messages</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>View Sent Message History</p>
                              </a>
                           
                           </div>
                           <div class="content-design" style="display: none;">
                              <a class="mouseover-ltr" href="#">
                                 <p>My Vaults</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Create Online Classes</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Built Custom Web Pages</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Edit Website Menu & Home Page</p>
                              </a>
                              <a class="mouseover-ltr" href="#">
                                 <p>Website Fonts & Color</p>
                              </a>
                           </div>
                           <div class="content-learn" style="display: none;">
                              
                           </div>
                           <div class="search-bar">
                              <i class="bx bx-search"></i>
                              <input type="text" placeholder="Search...">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <!-- System Activity Card -->
                     <h3>System Activity - 5 Days </h3>
                     <p>Details...</p>
                  </div>
                  <div class="card">
                     <!-- Top 20 Contacts Card -->
                     <h3>Top 20 Contacts - 3 Days </h3>
                     <p>Details...</p>
                  </div>
                  <div class="card">
                     <!-- Recently Active Card-->
                     <h3>Recently Active Contacts </h3>
                     <p>Details...</p>
                  </div>
                  <div class="card">
                     <!-- To Do Card -->
                     <h3>To Do For</h3>
                     <p>Details...</p>
                  </div>
                  <div class="card">
                     <!-- Contacts to reach out to card-->
                     <h3> Contacts You May Wish To Reach Out To </h3>
                     <p>Details...</p>
                  </div>
                  <div class="card">
                     <!-- Events with To Do Card -->
                     <h3>Events With To Dos For</h3>
                     <p>Details...</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FOOTER -->
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Bootstrap 3 JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
   <script src="./assets/js/main.js"></script>
</html>