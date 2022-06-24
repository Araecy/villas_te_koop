<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.min.css">
    <script src="./js/nav.js"></script>
    <title>Filla te koop</title>
</head>

<body>

<!-- nav -->
<nav id='menu'>
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a href='http://'>Home</a></li>
    <li><a class='dropdown-arrow' href='http://'>Villa's</a>
      <ul class='sub-menus'>
        <li><a href='./baambrugse.php'>villa 1</a></li>
        <li><a href='./buurtweg.php'>villa 2</a></li>
        <li><a href='./minervalaan.php'>villa 3</a></li>
      </ul>
    </li>
    <li><a href='./aboutus.php'>About Us</a></li>
  </ul>
</nav>

<!-- wave -->
<div class="custom-shape-divider-top-1653318248">

    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>


<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="./baambrugse.php">
                    <img alt="Placeholder" class="block h-auto w-full" src="./img/baambrugse1.jpg">
                </a>

                <header class="flex items-center justify-betweeny leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="./baambrugse.php">
                        Baambrugse Zuwe 163 b
                        </a>
                    </h1>
            
                </header>

                <footer class="flex items-center justify-between w-full leading-none p-2 md:p-4">
                    <a class="flex items-center flex-end no-underline text-black" href="./baambrugse.php">
                        <p class="ml-2 text-sm">
                        € 2,495,000 k.k.
                        </p>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="./img/buurtweg1.jpg">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                        Buurtweg 87 2244 AB Wassenaar
                        </a>
                    </h1>
                  
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center flex-end no-underline text-black" href="#">
                        <p class="ml-2 text-sm">
                            € 7,350,000 k.k.
                        </p>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="./img/minervalaan1.jpg">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                        Minervalaan 116 1077 PM Amsterdam
                        </a>
                    </h1>
        
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
            
                    </a>
                    <a class="flex items-center flex-end no-underline text-black" href="#">
                        <p class="ml-2 text-sm">
                        € 5,250,000 k.k
                        </p>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="./img/palestrinalaan1.jpg">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                        Palestrinalaan 11 1217 CD Hilversum
                        </a>
                    </h1>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center flex-end no-underline text-black" href="#">
                        <p class="ml-2 text-sm">
                        € 5.875.000 k.k.
                        </p>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="./img/eeuwigelaan1.jpg">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                        Eeuwigelaan 49 1861 CL Bergen (NH) 
                        </a>
                    </h1>
             
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">

                    <a class="flex items-center flex-end no-underline text-black" href="#">
                        <p class="ml-2 text-sm">
                        € 5.750.000 k.k.
                        </p>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="./img/hazelaan1.jpg">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                        Hazelaan 8 2243 EJ Wassenaar
                        </a>
                    </h1>
                 
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                   
                    <a class="flex items-center flex-end no-underline text-black" href="#">
                        <p class="ml-2 text-sm">
                        € 6.450.000 k.k.

                        </p>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

    </div>
</div>
</body>

</html>