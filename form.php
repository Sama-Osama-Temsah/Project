<!--
  Every HTML document starts with a DOCTYPE declaration.
  It tells the browser that this is an HTML5 document.
-->

<!DOCTYPE html>

<!--
  The <html> tag wraps all the content of your web page.
-->
<html>

<head>
    <!--
      The <meta charset="UTF-8"> defines the character set for your web page.
      UTF-8 supports almost all characters from all languages(include: English, Arabic).
    -->
    <meta charset="UTF-8">

    <!--
      The description meta tag gives a short summary of your page.
      It is shown in search engine results under the page title.
    -->
    <meta name="description" content="I am a web developer and this is my portfolio">

    <!--
      The keywords meta tag includes important words about your page content.
      Search engines may use it to understand what your site is about.
    -->
    <meta name="keywords" content="web,html,php,css">

    <!--
      The viewport meta tag makes your website look good on all devices (mobile, tablet, desktop).
      "width=device-width" means the page width matches the device screen.
      "initial-scale=1.0" means the default zoom level is 100%.
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
      The robots meta tag tells search engines if they can index this page and follow links.
      "index, follow" means yes to both.
    -->
    <meta name="robots" content="index, follow">

    <!--
      The <title> sets the text that appears in the browser tab or search results.
    -->
    <title>Shaymaa Mohammed</title>

    <!--
      The <link> tag connects external files or resources.
      Here, it links a small icon (favicon) that shows up in the browser tab.
    -->
      <!-- <script>document.writeln("this is internal javascript code")</script> -->
        
   
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/013/313/458/non_2x/html-icon-3d-rendering-illustration-vector.jpg">
   
    <style>
      h2{
        color: red;
      }
    </style>
    <link rel="stylesheet" href="style.css">
    <script src="lab10_obj.js" defer></script>
</head>

<body>

<!--
  The <header> section usually contains introductory content like the website title or navigation bar.
-->
<header>

    
    <h1>Hello, I’m Shaymaa</h1>
    
    <!-- <strong> makes text bold and emphasizes it -->
    <p style="font-weight: 900;">Aspiring <strong>Web Developer</strong></p>
</header>

<!--
  The <main> element holds the main content of the web page.
  It helps screen readers and search engines understand which part is most important.
-->
<main>

    <!-- SECTION 1: ABOUT ME -->
    <section>
	   
        <!-- Section headings should go from <h2> to <h6> depending on importance -->
        <h2 id="first">About Me</h2>
      

        <!-- <article> represents a standalone block of content inside the section -->
        <article>
          
            
            <h3 id="id1">What I enjoy</h3>
            <h3>What I enjoy</h3>
            
            <p>
                I enjoy <em>building websites</em> and learning new technologies.
                <!-- <del> = deleted text, <ins> = newly inserted text -->
                <del>At first, coding felt impossible,</del>  
                <ins>but now I see it as a fun challenge!</ins>
            </p>

                     
            
            <div class="invisible">
                <!-- <q> is for short quotes, <blockquote> is for longer ones -->
                Here’s a <q>quote I love</q><q>qnother one</q>: 
                <blockquote>
                    "The power of the Web is in its universality.
                    Access by everyone regardless of disability is an essential aspect."
                    – Tim Berners-Lee
                </blockquote>
            </div>
                

            
            <script>document.writeln("hello")</script>

            <div id="flex-container">
              <div class="child">Item One</div>
              <div class="child">Item Two</div>
              <div class="child">Item Three</div>
            </div>

          
            

            <p>
                <!-- <sub> = subscript (below text), <sup> = superscript (above text) -->
                Water is H<sub>2</sub>O and the area of a square is x<sup>2</sup>.
            </p>

            <p>
                <!-- <abbr> shows a tooltip when you hover, explaining abbreviations -->
                I use many web technologies like 
                <abbr title="HyperText Markup Language">HTML</abbr> and 
                <abbr title="Cascading Style Sheets">CSS</abbr>.
            </p>

            <p class="overflow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sapiente voluptate accusamus, ullam itaque beatae eum repellendus ex aspernatur inventore laborum modi doloribus, autem molestiae. Expedita aspernatur eos voluptates necessitatibus nesciunt aliquam dignissimos consectetur, magni repellendus inventore sed illum optio culpa ex, accusantium cupiditate tempore. Odit, aperiam sapiente? Optio dolorem libero iure expedita possimus officia asperiores veritatis atque, quaerat magni reiciendis omnis repellendus harum dolorum error fugiat, nesciunt pariatur debitis eius animi ipsa! Autem vero eius excepturi dolorum suscipit praesentium impedit magnam expedita nulla libero blanditiis, ab deserunt fugiat, perspiciatis laudantium est enim facilis? Deleniti minus nihil repellendus. Molestiae, maiores!</p>

            <div class="grid-container">
              <div class="header">My Header</div>
              <div class="sidebar">My Sidebar</div>
              <div class="content">My Content</div>
              <div class="footer">My Footer</div>
              
              
            </div>
        </article>

    </section>

    <section>
        <h2 class="head2">My Skills</h2>
        <!-- class="head2" is the class we use to group elements to add a css style to them -->
        <!-- <ul> is an unordered list (uses bullets). <li> is each list item. -->
        <ul class="head2">
            <li>HTML & CSS</li>
            <li>JavaScript
                <!-- Nested lists show categories or sub-skills -->
                <ul>
                    <li>Angular</li>
                    <li><em>React.js</em></li>
                    <li>Vue.js</li>
                </ul>
            </li>
            <li>PHP</li>
            <li>Python</li>
            <li>Problem Solving</li>
        </ul>
    </section>

   <!-- SECTION 3: PROJECTS -->
    <section>
        <h2>Projects</h2>
        <!-- <ol> is an ordered list. "type='I'" makes Roman numerals (I, II, III...) -->
        <ol type="I">
            <li>Personal Blog using HTML & CSS</li>
            <li id="id1">Calculator App with JavaScript</li>
            <!-- id="id1" we use id when we want to make a unique style for one tag -->

            <li>Portfolio Website</li>
        </ol>
    </section>

    <!-- SECTION 4: CODE EXAMPLE -->
    <section>
        <h2>JavaScript Code Example</h2>

        <!-- <pre> keeps formatting and spacing as written, <code> shows code-style text -->
<pre><code>
    function hello(){
        console.log("hello");
    }

    hello();
</code></pre>
    </section>


    <!-- SECTION 5: TABLE EXAMPLE -->
<section>
  <h2>My Projects Table</h2>

  <!--
    <table> is used to organize data into rows and columns.
    border="1" adds borders around cells.
    width="60%" makes the table take 60% of the page width.
  -->
  <table border="1" width=60%>
    <caption><strong>Portfolio Projects Summary</strong></caption>

    <!-- Table Header Row -->
    <tr>
      <th>Project Name</th>
      <th>Type</th>
      <th colspan="2">Technologies</th>
      <th>Status</th>
    </tr>

    <!-- Table Data Rows -->
    <tr>
      <td>Portfolio Website</td>
      <td>Frontend</td>
      <td>HTML</td>
      <td>CSS</td>
      <td>Completed</td>
    </tr>

    <tr>
      <td>Blog Platform</td>
      <!-- rowspan="2" merges the cell vertically with the next row -->
      <td rowspan="2">Full Stack</td>
      <td>HTML, JS</td>
      <td>PHP, MySQL</td>
      <td>In Progress</td>
    </tr>

    <tr>
      <td>Task Manager App</td>
      <td>React</td>
      <td>Node.js</td>
      <td>Testing</td>
    </tr>

    <tr>
      <td>Weather App</td>
      <td>Frontend</td>
      <!-- colspan="2" merges two cells horizontally -->
      <td colspan="2">HTML, CSS, JavaScript</td>
      <td>Completed</td>
    </tr>
  </table>


</section>

    <!-- SECTION 6: EMBEDDED CONTENT -->
    <section>
        <h2>Embedded Content</h2>

        <!-- <iframe> embeds another web page into this one -->
        <iframe width="500" height="500" src="https://gazijarin.com/"></iframe>

        <hr> <!-- <hr> adds a horizontal line for separation -->

        <!-- <video> embeds a video file. The 'controls' attribute adds play/pause buttons -->
        <video src="facebook_login.mp4" width="500" controls></video>
    </section>

    <!-- SECTION 7: CONTACT FORM -->
    <section>
        <h2>Contact Me</h2>

        <!-- Forms are used to collect user input -->
<form method="post" action="submit.php" id="contactForm">
    <label>Name:</label><br>
    <input type="text" name="name" placeholder="Enter your name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" placeholder="Enter your email" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" placeholder="Write your message here"></textarea><br><br>

    <input type="submit" value="Send">
</form>
    </section>

  

    <!-- SECTION 8: COPYRIGHT -->
    <section>
        <h4>Copyright</h4>
        <!--
          &copy; displays the © symbol
          &reg; displays the ® symbol
        -->
        <p>Copyright &copy; 2025 Shaymaa Mohammed</p>
        <p>Registered Trademark &reg; Web Portfolio</p>
    </section>

    <script>console.log(a);

     let a = 10;</script>
    

</main>

<!-- FOOTER: contains links to external profiles -->
<footer>
    <h2>Find Me Online:</h2>
    <!-- <nav> defines navigation links -->
    <nav>
        <!-- target="_blank" opens the link in a new tab -->
        <a href="https://github.com/" target="_blank" class="link1">GitHub</a> | 
        <a href="https://github.com/" target="_blank" class="link1">Linkedin</a> |
        <a href="https://twitter.com/" target="_blank">Twitter</a> 
       
        
        
        
    </nav>

        <!-- SECTION 9: div -->
    <!--
      This <div> element is used to group related content together.
      It can hold text, images, or even other HTML elements.
      The class "div1" will let us style it separately in CSS.
    -->
    <div id="div1">
        
        <h2 id="div1h2">Did You Know?</h2>

        <p>
            The <strong>&lt;div&gt;</strong> tag is short for "division" and is one of the most 
            commonly used HTML elements. It doesn't add any visual change by itself 
            but helps organize and style sections of your webpage using CSS.
        </p>

        <ul>
            <li>It helps group content logically.</li>
            <li>We can give it a class or id to apply custom CSS styles.</li>
            <li>It's very useful when building page layouts.</li>
        </ul>
    </div>


</footer>

</body>
</html>
