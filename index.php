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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
               <div class="greeting">
                  <h2>Hello [userName], Welcome to GetOiling</h2>
               </div>
               <!-- Cards -->
               <div class="card-grid">
                  <!-- What would you like to do today card -->
                  <div class="card card-large">
                     <!-- What would you like to do today Header -->
                     <div class="card-header flex-row-start">
                        <a href="#" id="toggle-chevron">
                        <i class="fas fa-chevron-down chevron-icon"></i>
                        </a>
                        <h2>What would you like to do today?</h2>
                     </div>
                     <!-- What would you like to do today Body -->
                     <div class="card-content">
                        <!-- 3 columns structure -->
                        <div class="card-column actions-list-left flex-col-between">
                           <a class="flex-row-between" href="#" id="engage">
                              <div class="flex-row-start">
                                 <i class="fas fa-handshake"></i>
                                 <h3>Engage</h3>
                              </div>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="flex-row-between" href="#" id="create">
                              <div class="flex-row-start">
                                 <i class="fas fa-pencil-alt"></i>
                                 <h3>Create</h3>
                              </div>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="flex-row-between" href="#" id="automate">
                              <div class="flex-row-start">
                                 <i class="fas fa-robot"></i>
                                 <h3>Automate</h3>
                              </div>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="flex-row-between" href="#" id="design">
                              <div class="flex-row-start">
                                 <i class="fas fa-palette"></i>
                                 <h3>Design</h3>
                              </div>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                           <a class="flex-row-between" href="#" id="learn">
                              <div class="flex-row-start">
                                 <i class="fas fa-book"></i>
                                 <h3>Learn</h3>
                              </div>
                              <i class="fas fa-chevron-right"></i>
                           </a>
                        </div>
                        <div class="card-column actions-list-center">
                           <div class="content-engage">
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>SEND EMAIL, TEXT, OR APP NOTIFICATION</h3>
                                 </div>
                                 <p>Stay in touch with your contacts by sending or scheduling a message.</p>
                              </a>
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-comment-dots"></i>
                                    <h3>MY CONTACTS</h3>
                                 </div>
                                 <p>Track, organize, find, set to-dos, and communicate with contacts.</p>
                              </a>
                           </div>
                           <div class="content-create" style="display:none;">
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>CREATE CONTACT</h3>
                                 </div>
                                 <p>Add a contact to your contact manager.</p>
                              </a>
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>CREATE WEB PAGE</h3>
                                 </div>
                                 <p>Track, organize, find, set to-dos, and communicate with contacts.</p>
                              </a>
                           </div>
                           <div class="content-automate" style="display:none;">
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>CAMPAIGNS</h3>
                                 </div>
                                 <p>Set up emails & texts that send out over time to contacts.</p>
                              </a>
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>AUTOMATIONS</h3>
                                 </div>
                                 <p>Run tasks like tagging or adding to vaults when certain actions happen.</p>
                              </a>
                           </div>
                           <div class="content-design" style="display:none;">
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>MEMBER AREA</h3>
                                 </div>
                                 <p>Educate, take payments, and create a community on your site.</p>
                              </a>
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>SITE SETTINGS</h3>
                                 </div>
                                 <p>Select a landing page, a website sharing image, and other settings.</p>
                              </a>
                           </div>
                           <div class="content-learn" style="display:none;">
                              <a class=" actions-list-item" href="#">
                                 <div class="actions-list-item-title">
                                    <i class="fas fa-envelope"></i>
                                    <h3>SUCCESS ACADEMY</h3>
                                 </div>
                                 <p>Visit the GetOiling Success Academy to get set up and grow your business more quickly.</p>
                              </a>
                           </div>
                        </div>
                        <div class="card-column actions-list-right">
                           <div class="content-engage flex-col-start">
                              <a class="" href="#">
                                 <p>Start or Schedule a Zoom Video Call</p>
                              </a>
                              <a class="" href="#">
                                 <p>Manage Member Area</p>
                              </a>
                              <a class="" href="#">
                                 <p>Manage Vaults</p>
                              </a>
                              <a class="" href="#">
                                 <p>Invite Contacts to a Vault</p>
                              </a>
                              <a class="" href="#">
                                 <p>Create Contact</p>
                              </a>
                              <a class="" href="#">
                                 <p>Import Contacts</p>
                              </a>
                           </div>
                           <div class="content-create" style="display: none;">
                              <a class="" href="#">
                                 <p>Add Video</p>
                              </a>
                              <a class="" href="#">
                                 <p>Write Blog Post</p>
                              </a>
                              <a class="" href="#">
                                 <p>Create Event</p>
                              </a>
                              <a class="" href="#">
                                 <p>Create Landing Page</p>
                              </a>
                              <a class="" href="#">
                                 <p>Create Leg Builder Link</p>
                              </a>
                              <a class="" href="#">
                                 <p>Create Resource Bundle</p>
                              </a>
                           </div>
                           <div class="content-automate" style="display: none;">
                              <a class="" href="#">
                                 <p>Saved Replies</p>
                              </a>
                              <a class="" href="#">
                                 <p>Follow-Up Plans</p>
                              </a>
                              <a class="" href="#">
                                 <p>Email Signature & Default Campaign</p>
                              </a>
                              <a class="" href="#">
                                 <p>View Bulk Messages</p>
                              </a>
                              <a class="" href="#">
                                 <p>View Sent Message History</p>
                              </a>
                           </div>
                           <div class="content-design" style="display: none;">
                              <a class="" href="#">
                                 <p>My Vaults</p>
                              </a>
                              <a class="" href="#">
                                 <p>Create Online Classes</p>
                              </a>
                              <a class="" href="#">
                                 <p>Built Custom Web Pages</p>
                              </a>
                              <a class="" href="#">
                                 <p>Edit Website Menu & Home Page</p>
                              </a>
                              <a class="" href="#">
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
                     <div class="card-header flex-row-between">
                        <h2>System Activity - 5 Days </h2>
                        <div>
                           <a href="">
                           <i class="fas fa-tachometer-alt"></i>
                           </a>
                           <a href="#">
                           <i class="fas fa-file-alt"></i>
                           </a>
                        </div>
                     </div>
                     <div class="flex-row-around">
                        <div class="chart-wrapper">
                           <canvas id="systemActivityChart" style="width:100%;"></canvas>
                        </div>
                        <!-- <div class="piechart"></div>
                           <div class="piechart-items">
                              <p class="with-circle-light">Elena Martinez</p>
                              <p class="with-circle-complementary">Liam Donovan</p>
                              <p class="with-circle-dark-accent">Aria Patel</p>
                           </div> -->
                     </div>
                  </div>
                  <div class="card">
                     <!-- Top 20 Contacts Card -->
                     <div class="card-header flex-row-between">
                        <h2>Top 20 Contacts - 3 Days </h2>
                        <div>
                           <a href="#">
                           <i class="fas fa-chart-pie"></i>
                           </a>
                           <a href="#">
                           <i class="fas fa-list"></i>
                           </a>
                        </div>
                     </div>
                     <div class="card-20-contacts flex-row-around">
                        <div class="chart-wrapper">
                           <canvas id="top20Chart" style="width:100%;"></canvas>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <!-- Recently Active Card-->
                     <div class="card-header flex-row-between">
                        <h2>Recently Active Contacts </h2>
                        <button>View All</button>
                     </div>
                     <div class="card-recent-content">
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                        <div class="card-recent-contact">
                           <i class="fa fa-address-book" aria-hidden="true"></i>
                           <div class="flex-col-start">
                              <a href="#">
                                 <h4>Name of contact</h4>
                              </a>
                              <p>Last action as of X days ago</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <!-- To Do Card -->
                     <?php include './pages/todo.php'; ?>
                  </div>
   
               
               <div class="card">
                  <!-- Contacts to reach out to card-->
                  <div class="card-header">
                     <h2> Contacts You May Wish To Reach Out To </h2>
                  </div>
                  <p>None. Give your contacts a rating of 1-5 to get them to show here.</p>
               </div>
               <div class="card">
                  <!-- Events with To Do Card -->
                  <div class="card-header flex-row-between">
                     <h2>Events With To Dos For</h2>
                     <input type="date" name="" id="" value="2023-10-03">
                  </div>
                  <p>Nothing. What are you going to do with your life?</p>
               </div>
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