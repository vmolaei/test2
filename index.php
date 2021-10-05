<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/cheatsheet.css">
    <style>
        html{
            height: 100%;
        }
        body{
            margin: 0;
            padding: 0;
            background-color: #3dd5f3;
            font-family: giorgia, Serif, sans-serif;
            box-sizing: border-box;
            min-height:100% ;


        }
        button {
            font-family: Verdana, Serif, sans-serif;
        }
        label{
            font-family: Verdana, Serif, sans-serif;
            color: whitesmoke;
        }
        span{
            color: #4f5050;
            background-color: navajowhite;
            border: 2px solid red;
            border-radius: 5px 5px 0 0;
            text-align: center;
            font-size: x-large;
            width: 100%;
        }



        .container{
            width: 100%;
            height: auto;
            display:grid;


        }


       .form{
           background-color: #4f5050;
           border: 1px solid darkblue;
           border-radius: 0 0 5px 5px;
           text-align: center;
           margin-top: 1px;

           box-sizing: border-box;

       }
       .label{
           width: 100%;
           display: block;
           color: whitesmoke;
           margin-top: 10px;
           padding: 8px;


       }

       input[type="text"]{
           width: 100%;
           padding: 12px 20px;
           margin: 8px 0;
           box-sizing: border-box;
           font-size: smaller;
           border: 1px solid gray;
           border-radius: 5px;
       }
       .bt{
           background-color: blue;
           color: navajowhite;
           border: 1px solid blue;
           border-radius: 3px;

           width: 20vw;
           height: 40px;
           font-size: large;
           margin-top: 20px;
           margin-bottom: 20px;
       }









        @media only screen and (min-width: 1200px) {
            html{
                height: 100%;
            }
            body{
                margin: 0;
                padding: 0;
                background-color: #3dd5f3;
                font-family: giorgia, Serif, sans-serif;
                box-sizing: border-box;
                min-height:100% ;


            }
            button {
                font-family: Verdana, Serif, sans-serif;
            }
            label{
                font-family: Verdana, Serif, sans-serif;
                color: whitesmoke;
            }
            span{
                color: #4f5050;
                background-color: navajowhite;
                border: 2px solid red;
                border-radius: 5px 5px 0 0;
                text-align: center;
                font-size: xx-large;
                margin-left:40px;
                width: 1000px;
            }



            .container{
                width: 100%;
                height: auto;
                display:grid;
                text-align: center;


            }


            .form{
                background-color: #4f5050;
                border: 1px solid darkblue;
                border-radius: 0 0 5px 5px;
                text-align: center;
                margin-top: 1px;
                margin-left: 40px;
                width: 1000px;
                box-sizing: border-box;
                align-self: center;

            }
            .label{
                width: 100%;
                display: block;
                color: whitesmoke;
                margin-top: 10px;
                padding: 8px;
                font-size: x-large;


            }

            input[type="text"]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                font-size: larger;
                border: 1px solid gray;
                border-radius: 5px;
            }
            .bt{
                background-color: blue;
                color: navajowhite;
                border: 1px solid blue;
                border-radius: 3px;

                width: 20vw;
                height: 40px;
                font-size: x-large;
                margin-top: 20px;
                margin-bottom: 20px;
            }

        }








    </style>
</head>

<body>

<div class="bd-example">
    <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
            <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">new</button>

        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container">
                <span>Save Data</span>
                <form class="form">
                    <label class="label" >Enter your first name
                        <input class="input" type="text" placeholder="Enter your first name">
                    </label>

                    <label class="label" >Enter your last name
                        <input class="input" type="text" placeholder="Enter your last name"/>
                    </label>

                    <button class="bt">Submit</button


                </form>

            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p><strong>2-This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p><strong>3-This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
        </div>
        <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
            <p><strong>4-This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
        </div>
    </div>
</div>



<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>