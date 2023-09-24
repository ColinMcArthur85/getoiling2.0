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
                        <div class="card-column actions-list-left">
                           <ul>
                              <li>
                                 <a href="#" id="engage">
                                    <i class="fas fa-handshake"></i>
                                    <h3>Engage</h3>
                                    <i class="fas fa-chevron-right"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" id="create">
                                    <i class="fas fa-pencil-alt"></i>
                                    <h3>Create</h3>
                                    <i class="fas fa-chevron-right"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" id="automate">
                                    <i class="fas fa-robot"></i>
                                    <h3>Automate</h3>
                                    <i class="fas fa-chevron-right"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" id="design">
                                    <i class="fas fa-palette"></i>
                                    <h3>Design</h3>
                                    <i class="fas fa-chevron-right"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" id="learn">
                                    <i class="fas fa-book"></i>
                                    <h3>Learn</h3>
                                    <i class="fas fa-chevron-right"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="card-column actions-list-center">
                           <ul>
                              <li>
                                 <a href="#">
                                    <div class="actions-list-title">
                                 <i class="fas fa-envelope"></i>
                                 <h3>SEND EMAIL, TEXT, OR APP NOTIFICATION</h3>
                                    </div>
                                 <p>Stay in touch with your contacts by sending or scheduling a message.</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="actions-list-title">
                                 <i class="fas fa-comment-dots"></i>
                                 <h3>SEND EMAIL, TEXT, OR APP NOTIFICATION</h3>
                                    </div>
                                 <p>Stay in touch with your contacts by sending or scheduling a message.</p>
</a>
                              </li>
                           </ul>
                        </div>
                        <div class="card-column actions-list-right">
                           <ul>
                              <li>Start or Schedule a Zoom Video Call</li>
                              <li>Manage Member Area</li>
                              <li>Manage Vaults</li>
                              <li>Invite Contacts to a Vault</li>
                              <li>Create Contact</li>
                              <li>Create Contact</li>
                              <li>Import Contacts</
                                 <i class="bx bx-search"></i>
                                 <input type="text" placeholder="Search...">
                                 <span class="tooltip">Search</span>
                              </li>
                           </ul>
                           </ul>   
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