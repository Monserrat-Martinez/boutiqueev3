<?php
require 'header.php';
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';
    
    if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
        if (isset( $_REQUEST['recip'], $_REQUEST['messages'] ) &&
            !empty( $_REQUEST['recip'] )) 
        {
            $message = wordwrap( $_REQUEST['messages'], 70 );
            $send = $_REQUEST['recip'];
            $result = @mail( $send, '', $message );
            print 'Message was to sent  ';
            $time = time();


            
            DB::table('messages')->insert(['messages' => $_POST['messages']]);
            DB::table('messages')->insert(['recip' => $_POST['recip']]);

            
        } else {
            print 'Not all information was submitted.';
        }
    }
?>
<!DOCTYPE html>
    <head>
        
        <style>
            body {
                margin: 0;
                padding:0;
            }
 
            #container {
                width: 700px;
                background: #fff;
                color: #555;
                border: 3px solid;
                padding: 1em 2em;
                margin: 0 auto;
                font-style: italic;
            }
 
            ul {
                list-style: none;
                padding: 0;
            }
 
            ul > li {
                padding: 0.12em;
            }
 
            label {
                display: block;
                float: left;
                width: 130px;
            }
 
            input, textarea {
            }
        </style>
    </head>
    <body >
        <div id="container">
            <h1>MENSAJES</h1>
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="recip" id="Nombre" placeholder="Maria Ruiz"/>
                    </li>
                    <li>
                        <label for="messages">Message</label>
                        <textarea name="messages" id="message" cols="45" rows="15"></textarea>
                    </li>
                    <li>
                        <input type="submit" name="sendMessage" id="sendMessage" value="Send Message" />
                    </li>
                </ul>
            </form>
        </div>
    </body>
</html>