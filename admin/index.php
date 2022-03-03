<?php $page = "dashboard"; 

require '../includes/db_connection.php';

session_start();

if(isset($_SESSION['role']))
{
    if($_SESSION['role'] != 'admin')
    {
        header('location: ../admin/');
    }
}
else{
    header('location: ../');
} 


?>

<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Admin | Dashboard</title>
      <?php include '../includes/links.php'; ?>

      <link rel="stylesheet" href="../css/all-styles.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="../css/navbar.css" />

      <!-- Charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

      <script src="../tailwind/tailwind-cdn.js"></script>
   </head>
   <body class="bg-gray-100 h-full">
      <div class="sticky"> <?php include './components/navbar.php'; ?></div>
     
      <div class="container mx-auto mt-10">
         <div class="flex items-center">
            <div class="text-3xl text-gray-800 font-semibold">
               ADMIN DASHBOARD
            </div>

            <div class="ml-auto">
               <a href="./enrollment.php">
                  <button
                     class="bg-gray-800 px-5 py-2 text-lg text-white rounded hover:bg-sky-800"
                  >
                     View enrollees &nbsp;
                     <i class="fa fa-chevron-right"></i></button
               ></a>
            </div>
         </div>

         <div class="mt-8">
            <div class="uk-child-width-expand@l" uk-grid>
               <!-- One -->
               <div>
                  <div class="uk-card shadow-sm bg-white uk-card-body rounded">
                     <div class="text-lg float-left pb-0 mt-1">
                        Pending status
                        <div class="text-5xl font-medium text-black pt-2">
                           100
                        </div>
                     </div>

                     <div
                        class="float-right bg-pink-600 text-white p-6 rounded"
                     >
                        <i class="fa fa-clock-o text-5xl"></i>
                     </div>
                  </div>
               </div>
               <!-- Two -->
               <div>
                  <div class="uk-card shadow-sm bg-white uk-card-body rounded">
                     <div class="text-lg float-left pb-0 mt-1">
                        Total students
                        <div class="text-5xl font-medium text-black pt-2">
                           356
                        </div>
                     </div>

                     <div class="float-right bg-sky-500 text-white p-6 rounded">
                        <i class="fa fa-users text-5xl"></i>
                     </div>
                  </div>
               </div>
               <!-- Three -->
               <div>
                  <div class="uk-card shadow-sm bg-white uk-card-body rounded">
                     <div class="text-lg float-left pb-0 mt-1">
                        Active students
                        <div class="text-5xl font-medium text-black pt-2">
                           100
                        </div>
                     </div>

                     <div
                        class="float-right bg-orange-400 text-white p-6 rounded"
                     >
                        <i class="fa fa-clock-o text-5xl"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- GRAPHS -->
         <div class="mt-6 flex">
            <div class="uk-card rounded uk-card-default uk-width-1-2@m">
               <div class="uk-card-header">
                  <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-expand">
                        <p class="uk-card-title uk-margin-remove-bottom">
                           Enrollment Status
                        </p>
                     </div>
                  </div>
               </div>
               <div class="uk-card-body rounded">
                  <canvas id="barStudents" style="width: 100%"></canvas>
               </div>
               <div class="uk-card-footer">
                  <a href="#" class="uk-button uk-button-text"
                     >View enrollees ></a
                  >
               </div>
            </div>

            <!-- right -->
            <div class="uk-card rounded uk-card-default uk-width-1-2@m ml-10">
               <div class="uk-card-header">
                  <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-expand">
                        <p class="uk-card-title uk-margin-remove-bottom">
                           No. of Students / Program
                        </p>
                     </div>
                  </div>
               </div>
               <div class="uk-card-body rounded flex justify-center">
                  <canvas id="pieStatus" style="width: 100%"></canvas>
               </div>
               <div class="uk-card-footer">
                  <a href="#" class="uk-button uk-button-text"
                     >View enrollees ></a
                  >
               </div>
            </div>
         </div>
      </div>

      <!-- Chart -->
      <script src="../js/chart.js"></script>
   </body>
</html>
