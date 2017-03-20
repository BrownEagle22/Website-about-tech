<?php
/**
 * Created by PhpStorm.
 * User: Eriks
 * Date: 20.03.2017
 * Time: 17:31
 */

class Template {
    function showHeader($tab = "none") {
        $active["home"] = "";
        $active["tech"] = "";
        $active["gallery"] = "";
        $active["cv"] = "";
        $active["sign-up"] = "";

        if (isset($active[$tab])) {
            $active[$tab] = "class='active'";
        }

        echo "
            <nav class='navbar navbar-custom navbar-fixed-top' id='navigation'>
                <div class='container-fluid'>
        
                    <div class='navbar-header'>
                        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                            <span class='icon-bar'></span>
                        </button>
                        <a href='index.php' class='navbar-brand'>
                            <img src='/images/logo.png' alt=''>
                            <span>How Does Tech Works</span>
                        </a>
                    </div>
        
                    <div class='collapse navbar-collapse' id='myNavbar'>
                        <ul class='nav navbar-nav'>
                            <li " . $active["home"] . "><a href='/index.php'>Home</a></li>
                            <li " . $active["tech"] . "><a href='/technology.php'>Technology</a>
                            </li>
                            <li " . $active["gallery"] . "><a href='/gallery/gl_pc_parts.php'>Gallery</a></li>
                            <li " . $active["cv"] . "><a href='/cv.php'>CV</a></li>
                        </ul>
        
                        <ul class='nav navbar-nav navbar-right'>
                            <li " . $active["sign-up"] . ">
                                <a href='/sign_up.php'> <span class='glyphicon glyphicon-pencil'></span> Sign Up</a>
                            </li>
        
                            <li class='dropdown'>
                                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                    <span class='glyphicon glyphicon-log-in'></span> Login
                                </a>
                                <ul class='dropdown-menu login-menu'>
                                    <li>
                                        <div id='login-box'>
                                            <p class='text-center'>(Vēl nestrādā)</p>
                                            <div class='input-group'>
                                                <span class='input-group-addon'>
                                                    <span class='glyphicon glyphicon-user'></span>
                                                </span>
                                                <input type='text' class='form-control' placeholder='Username'>
                                            </div>
                                            <div class='input-group'>
                                                <span class='input-group-addon'>
                                                    <span class='glyphicon glyphicon-lock'></span>
                                                </span>
                                                <input type='password' class='form-control' placeholder='Password'>
                                            </div>
                                            <div id='forget-passw'>
                                                <a href='#'>Forget the password?</a>
                                            </div>
                                            <button class='btn btn-primary'>Login</button>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        ";
    }
    
    function showFooter() {
        echo "
            <div class='container-fluid'>
                <div class='row' id='footer1'>
                    <h3>Want to contact us?</h3>
                    <a href='/contacts.php'>
                        <button type='button' class='btn btn-info'>See Contacts</button>
                    </a>
                </div>
                <div id='footer2'>
                    <div class='row'>
                        <a href='http://www.facebook.com' target='_blank'>
                            <div class='social-btn facebook-btn'></div>
                        </a>
                        <a href='http://www.twitter.com' target='_blank'>
                            <div class='social-btn twitter-btn'></div>
                        </a>
                        <a href='http://plus.google.com' target='_blank'>
                            <div class='social-btn google-btn'></div>
                        </a>
                        <a href='http://www.youtube.com' target='_blank'>
                            <div class='social-btn youtube-btn'></div>
                        </a>
                        <a href='http://www.instagram.com' target='_blank'>
                            <div class='social-btn instagram-btn'></div>
                        </a>
                        <a href='http://www.google.com/gmail' target='_blank'>
                            <div class='social-btn email-btn'></div>
                        </a>
                    </div>
                    <div class='row'>
                        <div class='col-md-6 col-md-offset-3'>
                Have you ever wondered how it is possible to store countless pictures in a one small usb flash or how computer can show you digital data through your monitor with colors and images? <br><br>
                            <strong>This is the real place to find it out!</strong> <br><br>
                Here you can find out how your computer and other technologies works. If you're very knowing about technologies, you can help us by writing your own blogs. <br>
                <a href='/uzdevums/uzd.php'>Apskatīt uzdevumu</a>
                        </div>
                    </div>
                </div>
                <div class='row' id='footer3'>
                    © Developed by Eric Zeibe. All rights reserverd.
                </div>
            </div>
        ";
    }
}