<?php
    require 'header.php';
?>

    <div class="container">
        <div class="page-header">
            <h1>CHARLES</h1>
            <p>Centralised Human Action Robot Leaflet Effects System, investigating the concept of memorability of an interaction between robot and human.</p>
            <a href="https://github.com/Sergeus/HCR" target="_blank" class="btn btn-inverse">View project on GitHub &raquo</a>
        </div>
        
        <h3>How we made CHARLES</h3>
        <div class="row">
            
            <div class="span4">
                <img class="img-polaroid" src="../includes/img/robot_built.jpg"/>
            </div>
            <div class="span8">    
                <p>
                In short, we set out to prove our hypothesis: the more interesting and engaging a robot is, 
                the more people will take a leaflet, and some of those might be interested enough to follow the link to this website.
                We have named this concept the memorability of interaction, where someone will follow up on their interaction at a later time.
                </p>
        
                <p>
                CHARLES uses an ActivMedia PeopleBot as his 'body'. This contains the motors and sensors to enable him to move,
                and the frame upon which he is built. For CHARLES to be able to see, we have used a Kinect (found on the Xbox gaming console).
                For processing the data from the Kinect, CHARLES uses a laptop running some software called ROS (Robot Operating System). CHARLES can also
                print the tickets which he hands out using an NCR receipt printer (as found in many shops). The interface between his 'brain' on the laptop
                and the printer is implemented with a Raspberry Pi, a small, low power, and affordable computer. Finally, his face is implemented on a Lenovo 
                laptop (convertible tablet) which uses a browser for the actual display of the face. CHARLES can speak and understand speech thanks to a microphone
                and some software called Pocket Sphinx.
                </p>
            </div>
        </div>
        
        <hr>
        
        <h3>The Team</h3>
        <div class="row">
            <div class="span12">
            <p>
            We all study Electronic and Information Engineering (formerly Information Systems Engineering) at Imperial College London. The team comprises a wide skill set, from 
            electronics and hardware design, to software engineering and web design. 
            The success of this project is down to the effort of all the team members. Find out more about them below.
            </p>
            </div>
        </div>
        <div class="row">
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/jjonnnyy" target="_blank">Jonathan Ely</a></h5>
                Software engineering expert, knows everything about Linux.
                </p>
                <img src="../includes/img/ely.jpg"/>
            </div>
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/Sergeus" target="_blank">Stuart Holland</a></h5>
                Software engineering expert, hardcore gamer.
                </p>
                <img src="../includes/img/holland.jpg"/>
            </div>
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/georgepil" target="_blank">George Pilikos</a></h5>
                Kinect specialist, professional cage fighter (don't mess).
                </p>
                <img src="../includes/img/pilik2.jpg"/>
            </div>
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/maxrev17" target="_blank">Max Revitt</a></h5>
                Software and web design, often found in a bar somewhere.
                </p>
                <img src="../includes/img/revitt2.jpg"/>
            </div>
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/cs2309" target="_blank">Chris Socha</a></h5>
                Voice recognition man, loves his microphone.
                </p>
                <img src="../includes/img/socha.jpg"/>
            </div>
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/tumblerer" target="_blank">Chris Tory</a></h5>
                Text to speech expert, chilled out at all times.
                </p>
                <img src="../includes/img/tory.jpg"/>
            </div>
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/oliviervg1" target="_blank">Olivier Van-Goethem</a></h5>
                Software developer, bought CHARLES' coat.
                </p>
                <img src="../includes/img/van.jpg"/>
            </div>
            <div class="span3" style="min-height:150px;">
                <p>
                <h5><a href="https://github.com/webbo89" target="_blank">Jonathan Webster</a></h5>
                Software and web design, serial entrepreneur.
                </p>
                <img src="../includes/img/webster.jpg"/>
            </div>
        </div>
        </div> <!-- container -->
    
<?php
    require 'footer.php';
?>  