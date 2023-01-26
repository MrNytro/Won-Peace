<!DOCTYPE html>
<html lang="en">

    <div class="bg-contain" style="background-image: url(./images/heather-ford-Ug7kk0kThLk-unsplash.jpg)">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
  <title>Document</title>
</head>
<div class="bg-gradient-to-b from-indigo-300">

<header class="text-gray-900 body-font">

    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
       <!--                                            ---      -->
        <span class="ml-3 text-3xl">Won Peace</span>
      </a>

        <nav class="md:ml-auto flex flex-wrap items-right text-base justify-center">
          <button class="inline-flex items-right bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"> <li class="scroll-to-section"><a href="#contact"> Contact us </a></li></button>
        </nav>
        
      
    
      <form action="home.php" method="post">
        <button type="submit" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"> Home
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </button>
    </form>
    </div>

</header>
</div>

<body class="p-1">
      <section class="text-grey-900 body-font text-2xl">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-6xl mb-4 font-medium text-grey-900">Your Diet Plan is ready!
              <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed"> We've compiled your personal data and created a custom diet plan made
              specificlly for your body's needs! </p>

            <div class="flex justify-center">

            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="./images/katie-smith-uQs1802D0CQ-unsplash.jpg">
          </div>
        </div>
      </section>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="./images/shreyak-singh-gFB1IPmH6RE-unsplash.jpg">
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <h1 class="text-neutral-50 text-2xl title-font font-medium mb-3 ">Breakfast</h1>
            <div class="overflow-y-auto bg-blue-200 p-3 w-fit h-96 text-justify">
              <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <?php
                    // Connect to the database
                    $conn = mysqli_connect("localhost", "root", "", "wptemp1");

                    // Check for connection error
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT Food_Name, Servings, Calorie_per_100g
                      FROM Food
                      WHERE Times = 'B' AND Calorie_ID = (SELECT Calorie_ID FROM Customer WHERE Cust_ID = 1) 
                      AND Allergy_ID NOT IN (SELECT Allergy_ID FROM customer_allergy WHERE Cust_ID = 1)
                      AND (CASE 
                      WHEN (SELECT v_nv FROM Customer WHERE Cust_ID = 1) = 1 THEN v_nv != 2
                      ELSE 1=1
                      END)";

                    $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

                    echo "<table class='border-collapse border-2 border-gray-500'>";
                    echo "<tr class='border-2 border-gray-500'><td class='p-2 border-2 border-gray-500'>Food Name</td><td class='p-2 border-2 border-gray-500'>Servings</td><td class='p-2 border-2 border-gray-500'>Calorie per 100g</td></tr>\n";

                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr class='border-2 border-gray-500'><td class='p-2 border-2 border-gray-500'>{$row['Food_Name']}</td><td class='p-2 border-2 border-gray-500'>{$row['Servings']}</td><td class='p-2 border-2 border-gray-500'>{$row['Calorie_per_100g']}</td></tr>\n";
                    }
                    echo "</table>";

                    // Close the connection
                    mysqli_close($conn);
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <form method="post" action="http://localhost/WP-NOLOG/About%20Page/register%20page/dashboard/downloadb.php">
            <button class="bg-white-300 hover:bg-blue-200 text-emerald-900 font-bold py-2 px-6 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
              </svg>
            <span>Download</span>
            </button>
          </form>


        </div>
      </section>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="./images/sumeet-b-e2b0-q7gjgg-unsplash.jpg">
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <h1 class="text-gray-900 text-lg title-font font-medium mb-3 ">Lunch</h1>
            <div class="overflow-y-auto bg-blue-200 p-3 w-fit h-96 text-justify">
              <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <?php
                    // Connect to the database
                    $conn = mysqli_connect("localhost", "root", "", "wptemp1");

                    // Check for connection error
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT Food_Name, Servings, Calorie_per_100g
                    FROM Food
                    WHERE Times = 'L' AND RR_Count = (SELECT RR_Count FROM Customer WHERE Cust_ID = 1) 
                    AND Calorie_ID = (SELECT Calorie_ID FROM Customer WHERE Cust_ID = 1) 
                    AND Allergy_ID NOT IN (SELECT Allergy_ID FROM Customer_Allergy WHERE Cust_ID = 1)
                    AND (CASE 
                        WHEN (SELECT v_nv FROM Customer WHERE Cust_ID = 1) = 1 THEN v_nv != 2
                        ELSE 1=1
                    END)";
                    $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
                    echo "<table class='border-collapse border-2 border-gray-500'>";
                    echo "<tr class='border-2 border-gray-500'><td class='p-2 border-2 border-gray-500'>Food Name</td><td class='p-2 border-2 border-gray-500'>Servings</td><td class='p-2 border-2 border-gray-500'>Calorie per 100g</td></tr>\n";

                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr class='border-2 border-gray-500'><td class='p-2 border-2 border-gray-500'>{$row['Food_Name']}</td><td class='p-2 border-2 border-gray-500'>{$row['Servings']}</td><td class='p-2 border-2 border-gray-500'>{$row['Calorie_per_100g']}</td></tr>\n";
                    }
                    echo "</table>";

                    // Close the connection
                    mysqli_close($conn);
                    ?>
                </div>
              </div>
            </div>
          </div>
          <form method="post" action="http://localhost/WP-NOLOG/About%20Page/register%20page/dashboard/downloadl.php">
            <button class="bg-white-300 hover:bg-blue-200 text-emerald-900 font-bold py-2 px-6 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
              </svg>
            <span>Download</span>
            </button>
          </form>

        </div>

      </section>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full"
              src="./images/umesh-soni-g1qlhFbWPKg-unsplash.jpg">
          </div>
          <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <h1 class="text-gray-900 text-lg title-font font-medium mb-3 ">Dinner</h1>
            <div class="overflow-y-auto bg-blue-200 p-3 w-fit h-96 text-justify">
              <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                  <p class="leading-relaxed text-base">
                    <?php
                    // Connect to the database
                    $conn = mysqli_connect("localhost", "root", "", "wptemp1");

                    // Check for connection error
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT Food_Name, Servings, Calorie_per_100g
                    FROM Food
                    WHERE Times = 'D' AND Calorie_ID = (SELECT Calorie_ID FROM Customer WHERE Cust_ID = 1) 
                    AND Allergy_ID NOT IN (SELECT Allergy_ID FROM customer_allergy WHERE Cust_ID = 1)
                    AND (CASE 
                    WHEN (SELECT v_nv FROM Customer WHERE Cust_ID = 1) = 1 THEN v_nv != 2
                    ELSE 1=1
                    END)";

                    $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

                    echo "<table class='border-collapse border-2 border-gray-500'>";
                    echo "<tr class='border-2 border-gray-500'><td class='p-2 border-2 border-gray-500'>Food Name</td><td class='p-2 border-2 border-gray-500'>Servings</td><td class='p-2 border-2 border-gray-500'>Calorie per 100g</td></tr>\n";

                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr class='border-2 border-gray-500'><td class='p-2 border-2 border-gray-500'>{$row['Food_Name']}</td><td class='p-2 border-2 border-gray-500'>{$row['Servings']}</td><td class='p-2 border-2 border-gray-500'>{$row['Calorie_per_100g']}</td></tr>\n";
                    }
                    echo "</table>";

                    // Close the connection
                    mysqli_close($conn);
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <form method="post" action="http://localhost/WP-NOLOG/About%20Page/register%20page/dashboard/downloadd.php">
            <button class="bg-white-300 hover:bg-blue-200 text-emerald-900 font-bold py-2 px-6 rounded inline-flex items-center">
              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
              </svg>
            <span>Download</span>
            </button>
          </form>

      </section>
      <div class="bg-gradient-to-b from-indigo-300">
      
      <div class="border-t-4 border-indigo-300">
      <div class="flex items-stretch justify-center">
        <div id="contact">
          <section class="text-gray-900 body-font">
            <div class="container px-1 py-5 mx-8">
              <div class="flex flex-col text-center w-full mb-20">
                <h1 class=" text-4xl font-medium title-font text-gray-900">Contact Us</h1>
              </div>
            </div>
              <div class="container px-5 py-24 mx-auto flex flex-nowrap">
              <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/2 md:w-full">
                  <div class="flex border-4 rounded-lg border-gray-900 border-opacity-50 p-6 flex-shrink-0 flex">
                    <div class="w-16 h-16 mr-8 mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0 ">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </div>
                    <div class="flex-none w-96 h-24">
                      <h2 class="text-gray-900 text-3xl title-font font-medium mb-3">Shashank Devshetty</h2>
                      <p class="leading-relaxed text-base font-semibold">Co-founder and Developer of Won Peace</p>
                      <p class="leading-relaxed text-base font-semibold">at 
                        <a href= "mailto:shashankd_is20.rvitm@rvei.edu.in" >shashankd_is20.rvitm@rvei.edu.in</a></p>
                      <a class="mt-3 text-indigo-500 inline-flex items-center">
                      
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/2 md:w-full">
                  <div class="flex border-4 rounded-lg border-gray-900 border-opacity-50 p-8 sm:flex-row flex-col">
                    <div class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </div>
                    <div class="flex-none w-96 h-20">
                      <h2 class="text-gray-900 text-3xl title-font font-medium mb-3">Vishal Bajpai</h2>
                      <p class="leading-relaxed text-base font-semibold">Founder and Developer of Won Peace</p>
                      <p class="leading-relaxed text-base font-semibold">at 
                      <a href="mailto:vishalab_is20.rvitm@rvei.edu.in">vishalab_is20.rvitm@rvei.edu.in</a></p>
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
        </section>
        </div>
        </div>
        </div>
        </div>
    </div>
  </div>
</body>
</div>
          </div>
</html>
