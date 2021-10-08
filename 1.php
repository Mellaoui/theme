 
<?php
    get_header(); 
?>

<body class="flex flex-col leading-relaxed tracking-wide gradient">
    <!--Nav-->
    <header class="w-full h-screen bg-center bg-cover" style="background-image: url(https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
        <nav class="bg-white shadow nav-menu dark:bg-gray-800">
            <div class="container px-6 py-4 mx-auto">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="flex items-center justify-between">
                        <div class="text-xl font-semibold text-gray-700">
                            <a class="text-2xl font-bold text-gray-800 brand dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">Belsemchafy</a>
                        </div>

                        <!-- Mobile menu button -->
                        <div class="flex lg:hidden">
                            <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                    <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div class="hidden -mx-4 lg:flex lg:items-center">
                        <a href="#" class="block mx-4 mt-2 text-sm text-gray-700 capitalize items lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Web developers</a>
                        <a href="#" class="block mx-4 mt-2 text-sm text-gray-700 capitalize items lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Web Designers</a>
                        <a href="#" class="block mx-4 mt-2 text-sm text-gray-700 capitalize items lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">UI/UX Designers</a>
                        <a href="#" class="block mx-4 mt-2 text-sm text-gray-700 capitalize items lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="w-full h-screen bg-center bg-cover" >
            <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                <div class="text-center">
                    <h1 id="demo" class="text-2xl font-semibold text-white uppercase lg:text-3xl"><span class="text-blue-400 underline"> BELSEMCHAFY </span></h1>
                    <button class="w-full px-4 py-2 mt-4 text-sm font-medium text-white uppercase transition-colors duration-200 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Start project</button>
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="py-12 bg-white border-b ">
      <div
        class="container flex flex-wrap items-center justify-between pb-12 mx-auto"
      >
        <h2
          class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800 lg:mt-20"
        >
          A propos
        </h2>
        <div class="w-full mb-4">
          <div
            class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"
          ></div>
        </div>

        <div
          class="flex flex-wrap items-center justify-between flex-1 max-w-4xl mx-auto text-xl font-bold text-gray-500 opacity-75"
        >
        <p class="text-center text-red-500">
            FundMe: Raising Capital for New Businesses is 2 days paid training program for public (Inventors,
            Students, Project Holders) to get them prepared with required skills and know-how from experts in
            Business, Innovation and Sciences
        </p>
          
        </div>
      </div>
    </section>

    <section class="py-8 bg-white border-b">
        <div class="container flex flex-col items-center pt-4 pb-12 mx-auto">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Schedule
            </h2>
            <div class="w-full mb-4">
                <div
                class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"
                ></div>
            </div>
            <div class="flex flex-col  md:flex-row">
                    <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                        <div
                        class="flex-1 overflow-hidden bg-red-500 rounded-t rounded-b-none shadow"
                        >
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <p class="w-full px-6 mt-6 text-xs font-bold text-gray-100 md:text-lg">
                            24-09-2021
                            </p>
                            <p class="w-full px-6 text-xl font-bold text-gray-200">
                            Lorem ipsum dolor sit amet.
                            </p>
                            <p class="w-full px-6 text-xl font-bold text-gray-200">
                            Lorem ipsum dolor sit amet.
                            </p>  
                            <p class="w-full px-6 text-xl font-bold text-gray-200">
                            Lorem ipsum dolor sit amet.
                            </p>  
                        </a>
                        </div>
                    </div>
            
                    <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
                        <div
                        class="flex-1 overflow-hidden bg-red-500 rounded-t rounded-b-none shadow"
                        >
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <p class="w-full px-6 mt-6 text-xs font-bold text-gray-100 md:text-lg">
                        25-09-2021
                            </p>
                            <div class="w-full px-6 text-xl font-bold text-gray-200">
                            Lorem ipsum dolor sit amet.
                            </div>
                            <p class="px-6 mb-5 text-base text-gray-200 ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                            at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    <section class="py-8 bg-white border-b">
      <div class="container flex flex-col items-center pt-4 pb-12 mx-auto">
        <h2
          class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
          About the trainer
        </h2>
        <div class="w-full mb-4">
          <div
            class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient"
          ></div>
        </div>

        <div class="flex flex-col flex-grow flex-shrink w-full p-6 md:w-1/3">
          <div
            class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow"
          >
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              
              <img class="flex flex-col" src="http://spacex-co.com/wp-content/uploads/2021/09/logox-1.png" height="400" width="400" alt="image">
            </a>
          </div>
        </div>

        <div class="flex flex-col items-center flex-grow flex-shrink w-full p-6 md:w-2/3">
          <div
            class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow"
          >
            <a href="#" class="flex flex-col items-center no-underline hover:no-underline">
              <div class="w-full px-6 text-xl font-bold text-center text-gray-800">
                Mohammed Abdessamed Amouri
              </div>
              <p class="flex px-12 mb-5 text-base text-gray-600 ">
                - Graduate from the National High School of Management <br> 
                - Master's Degree in Entrepreneurship and Project Management <br>
                - Entrepreneurship Lecturer and Speaker <br> 
                - Member of the Jury of the Competitions , Including Hult Prize Competition <br>
                - In Charge of Incubation at The National Agency for The Promotion and Development of Technology Parks ( ANPT Cyberparcs ) <br>
              </p>
            </a>
          </div>
        </div>

      </div>
    </section>



    <section class="w-full pt-6 pb-12 mx-auto text-center gradient">
        <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-white">
          Register Now
        </h2>
            <div class="flex items-center justify-center w-full mb-4">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScgE5HhBe3YHeLD6tiY3h0XMd6P-gLAFxPEWpl8MEzNn-POXA/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        <button class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 bg-red-500 rounded shadow-lg lg:mx-0 hover:underline">
          Action!
        </button>
    </section>

    <?php
    get_footer();
    ?>