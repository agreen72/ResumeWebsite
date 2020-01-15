<!DOCTYPE html>
<html>

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

<body>
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

        <div id="references" class="content">
            <h2>References</h2>
            <!-- <table style="width:100%">
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>Lorna Gwilliam</td>
                    <td>Program Manager</td>
                    <td>Salt Lake Community College</td>
                    <td>lorna.gwilliam@slcc.edu</td>
                </tr>
                <tr>
                    <td>Edward Trujillo</td>
                    <td>Associate Professor Emeritus (retired)</td>
                    <td>University of Utah</td>
                    <td>edward.trujillo@utah.edu</td>
                </tr>
                <tr>
                    <td>Brie Thompson</td>
                    <td>Associate General Manager, Field Operations</td>
                    <td>Washington County Water Conservancy</td>
                    <td>brie@wcwcd.org</td>
                </tr>
            </table> -->

        </div>

        <script>
            var refNames = ["Lorna Gwilliam",
                "Edward Trujillo",
                "Brie Thompson"];
            var refPos = ["Program Manager",
                "Associate Professor Emeritus (retired)",
                "Associate General Manager, Field Operations"];
            var refComp = ["Salt Lake Community College",
                "University of Utah",
                "Washington County Water Conservancy"];
            var refEmail = ["lorna.gwilliam@slcc.edu",
                "edward.trujillo@utah.edu",
                "brie@wcwcd.org"];

            var i = 0;
            var txt = "";
            txt += "<table style=\"width:100%\">";
            txt += "<tr>";
            txt += "<th>Name</th>";
            txt += "<th>Position</th>";
            txt += "<th>Company</th>";
            txt += "<th>Email</th>";
            txt += "</tr>";

            while (i < refNames.length) {
                txt += "<tr> <td>" + refNames[i] + "</td><td>"
                    + refPos[i] + "</td> <td>"
                    + refComp[i] + "</td> <td>"
                    + refEmail[i] + "</td> </tr>";
                i++;
            }
            txt += "</table>";

            document.getElementById("references").innerHTML += txt;
        </script>
    </section>
</body>

</html>