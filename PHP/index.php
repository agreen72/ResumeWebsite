<!DOCTYPE html>
<html>

<!-- HEAD ----------------------------------------------------------------------------------->

<head>
    <!-- linking our .css file to our index page, so our webpage knows what style to use -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Here is where we link Bootstrap 4 from MaxCDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<!-- BODY ---------------------------------------------------------------------------------->

<body>

    <!-- JAVASCRIPT Welcome prompt -->
    <script>
        name = prompt("Please enter your name, visitor.");
        time = new Date().getHours();
        if (time < 12) {
            greeting = "Good Morning, ";
        }
        else if (time < 17) {
            greeting = "Good Afternoon, ";
        }
        else {
            greeting = "Good Evening, ";
        }

        window.alert(greeting + name + ", welcome to my website!");
    </script>

    <!-- I created a 'heading' section to hold my links, picture, and basic information.  In many websites
    this is the same on every page -->
    <section class="heading">
        <div id="bio">

            <img id="myimg" src="images/mypic.jpg" alt="Profile Picture of Anthony Greenwood" height="200px">

            <div id="myinfo">
                Anthony Greenwood <br>
                4578 S. Clearview St. Holladay, UT, 84117 <br>
                (385)499-0190 <br>
                Anthony.Greenwood@utah.edu <br>
            </div>

            <!-- Links -->
            <div>
                <ul>
                    <li id="headlinks">
                        <a href="index.php">Home</a>
                    </li>

                    <li id="headlinks">
                        <a href="refpage.php">References</a>
                    </li>

                    <li id="headlinks">
                        <a href="contact_page.php">Contact</a>
                    </li>

                    <li id="headlinks">
                        <a href="files/Resume_AnthonyGreenwood2020.pdf">Download Resume PDF</a>
                    </li>

                    <li id="headlinks">
                        <a href="files/WebDevCapstoneRubric.pdf">Rubric</a>
                    </li>

                    <li id="headlinks">
                        <a href="https://www.linkedin.com/in/anthony-greenwood-09751058/">LinkedIn</a>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- I created a 'content' section to hold all the information for this page. This is where the stuff unique
    to each page in a website is usually kept -->

    <section class="content">

        <h1 style="text-align: center">Resume</h1>
        
        <!-- function for show/hide button -->
        <script>
            function toggleDetails() {
                var element = $('.workDetail');
                element.toggle();
            }
        </script>

        <div id="Experience">
            <h1>Experience</h1>
            <button onclick="toggleDetails()">Show/Hide details</button>
            <div>
                <h2>Instructor and Teaching Aide</h2>
                <h3>Salt Lake Community College</h3>
                <h4>Computers and Web Dev, 08/18 – Current</h4>

                <div class="workDetail">
                    <ul>
                        <li>
                            Teaching students HTML, CSS, Javascript, PHP, MySQL, Wordpress, Word, Excel, Powerpoint, and
                            Windows 10
                        </li>
                        <li>
                            Assist students and instructor in a computer lab classroom environment
                        </li>
                        <li>
                            Lead class lab nights, including additional instruction and exam proctoring
                        </li>
                        <li>
                            Work with refugee populations to overcome language barriers and other obstacles
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <h2>Research Assistant</h2>
                <h3>University of Utah</h3>
                <h4>Dept. of Chemical Engineering, 05/14 – 10/14</h4>

                <div class="workDetail">
                    <ul>
                        <li>
                            Planned experiments with Prof. Trujillo, then prepared, executed, and recorded results of
                            lab
                            experiments
                        </li>
                        <li>
                            Concocted chemical solutions, and safely handled, stored, and disposed of hazardous chemical
                            materials, organized inventory of laboratory chemical and other supplies
                        </li>
                        <li>
                            Utilized, cleaned, and maintained scales, pumps, shake tables, filters, thermometers,
                            sieves,
                            packed bed columns, glassware, and other common lab equipment
                        </li>
                        <li>
                            Operated a gas chromatograph to find the concentration of lead in solution from a set of
                            prepared
                            organized samples produced from experiments
                        </li>
                        <li>
                            Employed digital microscopy to characterize small scale structure of our manufactured
                            charcoal
                            filter gel beads and polymer coatings
                        </li>
                        <li>
                            Implemented and documented meticulous procedures such as isolating filter beads in epoxy and
                            using
                            a diamond tipped micro-saw to gain cross-section slices without destroying internal
                            structure
                        </li>
                        <li>
                            Refined procedures to produce uniform gel beads and polymer coatings including flow rates,
                            concentrations, exposure times, and other variables
                        </li>
                        <li>
                            Created and maintained logs, communications, safety, procedural, data, and presentation
                            documents
                            for use
                            internally and externally
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <h2>Lab Intern</h2>
                <h3>Washington County Water Conservancy District</h3>
                <h4>Quail Creek Water Treatment Plant, 02/12 – 07/12</h4>

                <div class="workDetail">
                    <ul>
                        <li>
                            Characterized common properties of inlet and outlet streams of water daily using titrations,
                            color
                            spectrophotometry, pH meters, and turbidity testing
                        </li>
                        <li>
                            Prepared samples with micro-liters of reagents for use in solid phase micro extraction
                            (SPME)
                            in a
                            Gas
                        </li>
                        <li>
                            Chromatograph Mass Spectrometer (GC/MS) to determine concentrations of Geosmin and other
                            organic
                            contaminants
                        </li>
                        <li>
                            Researched, planned, and executed a study of the dual-media carbon-based filter system,
                            involving
                            filtrate penetration, optimization of flow rate, and separation gradients of media after
                            backwash
                        </li>
                    </ul>
                </div>
            </div>
        </div>




        <h1>Education</h1>
        <h4>GPA: 3.1</h4>
        
        <!-- We use bootstrap here by creating a row and than specifying how many columns to
        fill with the div elements inside the row div element -->
        <div id="Education" class="row">

            <div class="col-6-md">
                <h3>
                    Dixie State College
                </h3>
                St. George, UT<br>
                Associates of Science, Spring 2012<br>
            </div>

            <div class="col-md-6">
                <h3>
                    University of Utah
                </h3>
                Salt Lake City, UT<br>
                B.S. Chemical Engineering, Expected Spring of 2021<br>
            </div>

        </div>
<!--This is my skills section, here im going to make a function to list my skills-->
        <div id="Skills">
			
			<?php
			// start the function -------------------------------------------------------
			function createList($x){
				$y = "";
				$i = 0;
				while($x[$i]){
					$y .= "<li>" . $x[$i] . "</li>";
					$i++;
				}
				return $y;
			}
			// end the function ---------------------------------------------------------
			
			// create an array containing skills to feed to createList()-----------------
			$skills = array(
				"Gas Chromatography", 
				"Mass Spectrometry",
				"Titrations",
				"Solution Preparation",
				"Equipment Cleaning and Maintenance",
				"Safety SOP Creation",
				"Sample Control",
				"Experiment Execution"
				);
			//end skills array -----------------
			
			// feed createList() the $skills array -----------------------
			$out = createList($skills);
			
			?>
			
            <h1> Skills </h1>

            <div>
                <h3>
                    Laboratory
                </h3>
                Intermediate
				
				<?php 
				echo "<ul>" . $out . "</ul>";
				?>
                
<!--
				<ul>
                    <li>
                        Gas Chromatography
                    </li>
                    <li>
                        Mass Spectrometry
                    </li>
                    <li>
                        Titrations
                    </li>
                    <li>
                        Solution Preparation
                    </li>
                    <li>
                        Equipment Cleaning and Maintenance
                    </li>
                    <li>
                        Safety SOP Creation
                    </li>
                    <li>
                        Sample Control
                    </li>
                    <li>
                        Experiment Execution
                    </li>
                </ul>
-->
            </div>

            <div>
                <h3>
                    Fabrication
                </h3>
                Intermediate
                <ul>
                    <li>
                        Steel welding
                    </li>
                    <li>
                        Fabrication of load-bearing structures
                    </li>
                    <li>
                        Device Prototyping
                    </li>
                    <li>
                        Agricultural Tool and Vehicle repair
                    </li>
                </ul>
            </div>

            <div>
                <h3>
                    Programming
                </h3>
                Basic
                <ul>
                    <li>
                        HTML
                    </li>
                    <li>
                        CSS
                    </li>
                    <li>
                        Javascript
                    </li>
                    <li>
                        PHP
                    </li>
                    <li>
                        MySQL
                    </li>
                    <li>
                        Wordpress
                    </li>
                    <li>
                        Java
                    </li>
                    <li>
                        Python
                    </li>
                    <li>
                        R
                    </li>
                    <li>
                        MatLab
                    </li>
                    <li>
                        Papyrus
                    </li>
                    <li>
                        XML
                    </li>
                </ul>
            </div>

            <div>
                <h3>
                    Prototyping
                </h3>
                Basic
                <ul>
                    <li>
                        Design
                    </li>
                    <li>
                        Proof of Concept
                    </li>
                    <li>
                        Device programming and testing
                    </li>
                </ul>
            </div>

            <div>
                <h3>
                    Wilderness Survival
                </h3>
                Basic
                <ul>
                    <li>
                        Eagle Scout
                    </li>
                </ul>
            </div>
        </div>

    </section>
</body>

</html>