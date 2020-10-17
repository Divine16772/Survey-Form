<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>survey form</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <section id="answer_section">
        <div class="php-section">
                <?php 
                    if(isset($_POST['submit'])){
                        echo "Hello " .$_POST["name"]. "! thank you for filling out our form.";
                        echo "Your email is:" .$_POST["email"]."</br>";
                        echo "Phone number:" .$_POST["number"]."</br>";
                        echo "You are " .$_POST["age"]. " years old.</br>";

                        $selected = $_POST['option'];
                        echo "First time playing our game? :" .$selected."</br>";

                        if(!empty($_POST['games'])){
                            // loop to store and display values of individual checked boxes
                            foreach($_POST['games'] as $checked){
                                echo "Type(s) of games you play:" .$checked."</br>";
                            }
                        }

                        echo "Your comment is " .$_POST["comment"];
                    }
                ?>
            </div>
        </section>
    </body>
</html>