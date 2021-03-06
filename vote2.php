<?php
session_start();
if(!isset($_SESSION["authenticated"])|| (time() - $_SESSION['authenticated']) > 600 )
{
    $redir = "login.php";
    header("Location: $redir");
    exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Nunito');
        @import url('https://fonts.googleapis.com/css?family=Poiret+One');

        body, html {
            height: 100%;
            background-repeat: no-repeat; /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
            background: black;
            position: relative;
        }

        #login-box {
            position: absolute;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            width: 600px;
            margin: 0 auto;
            border: 1px solid black;
            background: rgba(48, 46, 45, 1);
            min-height: 300px;
            padding: 40px;
            z-index: 9999;
        }

        #login-box .logo .logo-caption {
            font-family: 'Poiret One', cursive;
            color: white;
            text-align: center;
            margin-bottom: 0px;
        }

        #login-box .logo .tweak {
            color: #ff5252;
        }

        #login-box .controls {
            padding-top: 30px;
        }

        #login-box .controls input {
            border-radius: 0px;
            background: lightskyblue;
            border: 0px;
            color: white;
            font-family: 'Nunito', sans-serif;
        }

        #login-box .controls input:focus {
            box-shadow: none;
        }

        #login-box .controls input:first-child {
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
        }

        #login-box .controls input:last-child {
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
        }

        #login-box button.btn-custom {
            border-radius: 12px;
            margin-top: 30px;
            background: #ff5252;
            border-color: rgba(48, 46, 45, 1);
            color: black;
            font-family: 'Nunito', sans-serif;
        }

        #login-box button.btn-custom:hover {
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
            background: rgba(48, 46, 45, 1);
            border-color: #ff5252;
        }

        #particles-js {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: 50% 50%;
            position: fixed;
            top: 0px;
            z-index: 1;
        }
        h2 {
            font: bold 25px Verdana, Arial, Helvetica, sans-serif;
            color: whitesmoke;
            margin: 0px;
            padding: 0px 0px 0px 15px;
        }
    </style>
    <title>畢業旅行投票</title>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function () {
        };
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }

        $(document).ready(function () {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
<div class="container">
    <div id="login-box">
        <div class="logo">
            <img src="landscape_tree_black_92070_3840x2400.jpg"
                 class="img img-responsive img-circle center-block">
            <h1 class="logo-caption"><span class="tweak">畢業</span>旅行投票</h1>
        </div><!-- /.logo -->
        <div class="controls" style="background: lightgoldenrodyellow">
            <form method='post' action='confirm2.php'>


                <table width='100%' id='table1'>
                    <tr>
                        <td align='right' width='400'>學號</td>
                        <td><input type='text' name='SID' size='50'>　</td>
                    </tr>
                    <tr>
                        <td align='right' width='200'>姓名</td>
                        <td><input type='text' name='SName' size='50'>　</td>
                    </tr>
                    <tr>
                        <td align='right' width='200'>身份證末四碼</td>
                        <td><input type='text' name='SCode' size='50'></td>
                    </tr>
                    <tr>
                        <td align='right' width='200'>選擇地點</td>
                        <td><input type='radio' value='澎湖' name='SLoc'>澎湖
                            <input type='radio' value='花蓮' name='SLoc'>花蓮
                            <input type='radio' value='泰國' name='SLoc'>泰國</td>
                    </tr>
                    <tr>
                        <td align='right' width='200'>意見</td>
                        <td><input type='text' name='SComment' size='50'>　</td>
                    </tr>
                    <tr>
                        <td align='right' width='200'>　</td>
                        <td><BUTTON style="width: 30%" type='submit' name='Submit'>投票</BUTTON>　</td>
                    </tr>
                </table>
            </form>
        </div><!-- /.controls -->
    </div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js">
    <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1280" height="1707"></canvas>
</div>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->
<script type="text/javascript">
    $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function () {
        particlesJS('particles-js',
            {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            }
        );

    });


</script>


</body>
</html>