 
  <!--Footer-->
  <footer id="contact" class="bg-white ">
      <div class="container mx-auto mt-8 px-8" style="justify-content: space-between;">
        <div class=" w-full flex flex-col md:flex-row py-6">
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">For more details</p>
            <ul class="list-reset mb-6">
              <p class="text-gray-500"> Use our suport email & phone number: </p>
              <a class="text-gray-500" href="tel:0770303612">0770303612</p>
              
            </ul>
          </div>
          
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://web.facebook.com/SX.coworking"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Facebook</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://www.linkedin.com/in/spacexcoworking/?originalSubdomain=dz"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Linkedin</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="https://l.facebook.com/l.php?u=http%3A%2F%2Finstagram.com%2Fsxcoworking.alg%3Ffbclid%3DIwAR1zKiv9iIAJ8VcIAtVzpKRJJB5IcZichako0Lun3T-k0MGVfxEMsRyM5mo&h=AT0sscJ-T1ea4Qnam6HTbJu4UpVigXLHMJ7MDGpWagX1kUNiNT7Obfb02jN2j0d7G7QjUZiYKulTKvukT8zeqW0vlhSPuXcz7KytQcb2LrCgzlsY-UnIziskTH5pvgnVd-UtIA"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Instagram</a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">
              Company
            </p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <img src="http://spacex-co.com/wp-content/uploads/2021/09/l-02.png" height="100" width="200" alt="logo wefund">
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <img src="http://spacex-co.com/wp-content/uploads/2021/09/space-x-training-relifting.png" alt="space x">
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script>

        var i = 0;
        var txt = 'We Take care of your health!'; /* The text */
        var speed = 50; /* The speed/duration of the effect in milliseconds */
        window.onload = typeWriter();
        function typeWriter() {
        if(i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
        }
    </script>
    </body>
    </html>