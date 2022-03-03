<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./css/login.css" />

      <link rel="stylesheet" href="./css/all-styles.css" />
      <link rel="stylesheet" href="./includes/links.php" />

      <script src="./tailwind/tailwind-cdn.js"></script>

      <title>WMSU Distance Learning</title>
   </head>
   <body>
      <section>
         <!-- left box code start -->

         <div class="imgbx">
            <img src="images/lbg1.jpg" />
         </div>

         <!-- left box code end -->

         <!-- right box code start -->
         <div class="contentbox">
            <div class="form">
               <img src="./images/logo.png" alt="" />
               <p
                  class="text-xl text-center mb-10 uppercase text-gray-600 font-semibold"
               >
                  Distance Learning Login
               </p>
               <form action="./server/login.php" method="post" name="login">
                  <div class="inputbox">
                     <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        required
                     />
                  </div>

                  <div class="inputbox mb-0">
                     <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                     />
                  </div>

                  <div class="inputbox">
                     <input
                        type="submit"
                        class="bg-sky-200 p-4 login-btn mt-5 w-100 rounded-full"
                        value="Sign in"
                     />
                  </div>
               </form>

               <div class="text-center mt-10">
                  <div class="inputbox">
                     <p>
                        Forgot Password?
                        <a href="recover.html" class="color">Click Here</a>
                     </p>
                  </div>
                  <div class="inputbox">
                     <p>
                        Don't have an account?
                        <a href="./signup.html" class="color">Sign up here</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- right box code end -->
      </section>

      <script src="./js/signup.js"></script>
   </body>
</html>
