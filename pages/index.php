<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpot" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="best survey form to fill out and get quick resposes.">
        <meta name="keywords" content="web design, affordable designs">
        <meta name="author" content="Divine">
        <title>survey form</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <h1>Survey Form</h1>
        <section id="section">
            <h3>Let us know how we can improve our services</h3>
            <form action="index.php" method="POST">
                <fieldset>
                    <label>Name:</label>
                    <input class="input" type="text" name="name" placeholder="name">
                </fieldset>
                <fieldset>
                    <label>Email:</label>
                    <input class="input" type="email" name="email" placeholder="email">
                </fieldset>
                <fieldset>
                    <label>Age:</label>
                    <input class="input" type="number" name="age" placeholder="age">
                </fieldset>
                <fieldset>
                    <label>Phone:</label>
                   <input class="input" type="number" name="number" placeholder="Phone number">
                </fieldset>
                <fieldset>
                    <label>First time playing escape room?</label>
                    <select id="list" name="option">
                        <option>select an option</option>
                        <option value="yes" name="yes">Yes</option>
                        <option value="no" name="no">No</option>
                        <option value="not_really" name="not_really">Not Really</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label>Which game do you play?</label><br>
                    <input type="checkbox" name="games[]" value="Alcatraz"><label>Alcatraz</label><br>
                    <input type="checkbox" name="games[]" value="Aokigahara"><label>Aokigahara</label><br>
                    <input type="checkbox" name="games[]" value="Mausoleum"><label>Mausoleum</label><br>
                    <input type="checkbox" name="games[]" value="Castiglione"><label>Castiglione</label><br>
                </fieldset>
                <fieldset>
                    <label>Will you recommend the game to your friends?</label><br>
                    <input type="radio" name="answer" value="Definitely"><label>Definitely</label><br>
                    <input type="radio" name="answer" value="Maybe"><label>Maybe</label><br>
                    <input type="radio" name="answer" value="No"><label>No</label><br>
                </fieldset>
                <fieldset>
                    <label>Any comments or suggestions?</label><br>
                    <textarea name="comment" placeholder="Enter your comment here..."></textarea>
                </fieldset>
                <fieldset>
                    <input class="submit" type="submit" name="submit" value="submit">
                </fieldset>
            </form>
        </section>
        <section>
            <?php 
                if(isset($_POST['submit'])){
                    include 'php.php';
                }
            ?>
        </section>
    </body>
</html>