<?php
session_start();
if (!isset($_SESSION['page_visits'])) {
    $_SESSION['page_visits'] = 1;
} else {
    $_SESSION['page_visits']++;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML5 Canvas Tutorial</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <button id="alert-btn" style="margin: 20px">
      Click Me for a Surprise!
    </button>

    <header>
      <div id="current-time" style="margin: 20px; font-size: 1.5em"></div>

      <h1>Welcome to the HTML5 Canvas Tutorial</h1>
      <p>
        <?php
            
            echo "Welcome to our HTML5 Canvas Tutorial! We're glad you're here.";
            ?>
      </p>
      <p>
        <?php
            
            echo "Today's date is: " . date("F j, Y");
            ?>
      </p>
    </header>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="link.html">Useful Links</a></li>
        <li><a href="form.html">Feedback form</a></li>
      </ul>
    </nav>

    <section>
        <h2>About HTML5 Canvas</h2>
        <p>The HTML5 canvas element can be used to draw graphics and animations via JavaScript. It offers a versatile way to handle graphical content in web development. HTML5 represents the future of web development, offering a comprehensive suite of features that empower developers to build dynamic, engaging, and fully interactive websites and applications. As the fifth and latest major revision of HTML, it brings with it significant advancements in multimedia handling, allowing for the integration of high-quality video, audio, and graphics without relying on external plugins like Flash. This makes websites faster, more secure, and better optimized for modern browsers and devices. HTML5 allows for the creation of modern web experiences, providing the tools to craft experiences that are faster, more interactive, and more powerful than ever before.</p>
        
        <h2>The Evolution of HTML5</h2>
        <p>Since its release, HTML5 has been a game changer in web development, addressing the growing demands of modern web users and developers alike. With its robust structure and feature set, HTML5 marks a significant departure from earlier versions of HTML. It introduces semantic elements, better multimedia handling, and improved accessibility, making it easier for both humans and machines to interpret web content. The clean, organized structure it offers enables more efficient coding practices, ultimately leading to faster, more secure websites that provide a better user experience.</p>
        
        <h2>Why Choose HTML5?</h2>
        <p>HTML5 isn’t just a standard; it’s the backbone of modern web applications. For developers, the ability to natively embed video, audio, and scalable vector graphics (SVG) without third-party plugins reduces complexity and enhances performance. On the front end, HTML5 ensures cross-browser compatibility, making web pages accessible across different devices, from desktops to tablets to smartphones. This mobile-first approach is crucial in a world where mobile internet usage has surpassed desktop browsing, ensuring that HTML5-based websites remain responsive, fast, and adaptive.</p>
        
        <h2>HTML5 and Web Performance</h2>
        <p>In today’s fast-paced world, website performance is critical. Users expect fast loading times and smooth browsing experiences, and HTML5 helps achieve that through various performance optimizations. It supports offline browsing, using caching techniques like <strong>Application Cache</strong> and <strong>Web Storage</strong> to ensure that users can access certain web pages without an active internet connection. Additionally, the <strong>Web Workers</strong> API allows complex scripts to run in the background, without blocking the user interface, resulting in faster and more responsive websites.</p>
        
        <h2>Building Rich User Experiences with HTML5</h2>
        <p>HTML5's range of new elements and APIs allow developers to create more immersive and engaging websites. For example, the <strong>Geolocation API</strong> lets developers create location-aware web apps, while the <strong>Canvas API</strong> supports dynamic rendering of images and graphics directly in the browser. These features enable the development of highly interactive websites and applications, from real-time mapping services to rich media experiences that rival traditional desktop applications. The possibilities with HTML5 are virtually endless, paving the way for the next generation of web-based solutions.</p>
        
        <h2>Future of HTML5</h2>
        <p>The web is constantly evolving, and HTML5 continues to be the driving force behind that evolution. With support for <strong>WebAssembly</strong> and other advanced features, HTML5 enables web developers to build powerful applications that were once possible only in desktop environments. The combination of modern APIs, improved multimedia capabilities, and support for offline functionality ensures that HTML5 remains at the forefront of the internet's growth, adapting to the ever-changing demands of users and technology alike.</p>
    </section>
    <footer>
      <p>
        <?php
            // Display the number of visits
            echo "You have visited this page " . $_SESSION['page_visits'] . " times.";
            ?>
      </p>
      <p>&copy; 2024 HTML5 Canvas Tutorial. All rights reserved.</p>
    </footer>

    <button
      id="back-to-top"
      style="
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #f4a261;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      "
    >
      Back to Top
    </button>

    <script>
      // Alert Button
      document.getElementById("alert-btn").addEventListener("click", () => {
        alert("Surprise! Keep exploring HTML5 Canvas!");
      });

      // Update Date and Time
      function updateDateTime() {
        const now = new Date();
        document.getElementById(
          "current-time"
        ).innerText = `Current Time: ${now.toLocaleTimeString()}`;
      }
      setInterval(updateDateTime, 1000);

      // Back to Top Button
      const backToTopBtn = document.getElementById("back-to-top");
      window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
          backToTopBtn.style.display = "block";
        } else {
          backToTopBtn.style.display = "none";
        }
      });

      backToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    </script>
  </body>
</html>
