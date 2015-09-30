<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My First Form</title>
    </head>
    <body>
        <h1>My First HTML Form</h1>
        <form method="POST" action="/my_first_form.php">
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" autofocus placeholder="Place username here">
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Place Password Here">
            </p>
            <p>
                <button type="submit">Log In</button>
            </p>
        </form>

        <form method="POST" action"/my_first_form.php">
            <p>
                <label for="address">To</label>
                <input id="address" name="address" type="text" Placeholder="Enter Email Address">
            </p>
            <p>

                <label for="address">From</label>
                <input id="address" name="address" type="text" placeholder="Enter Your Email Address">
            </p>
            <p>
                <label for="subject">Subject</label>
                <input id="subject" name="subjet" type="text" placeholder="Enter Subject">
            </p>
            <p>
                <label for="message"></label>
                <textarea id="message" name="message" type="text" placeholder="Compose an Email"></textarea>
            </p>
            <p>
                <input type="checkbox" id="save_copy" name="Save_copy" value="yes">
                <label for="Save Copy">Do You Wish to Save a Copy?</label>
            </p>

            <p>
                <button type="submit">Submit</button>
            </p>
        </form>

        <h2>Multiple Choice Test</h2>
        <form method="POST" action"/my_first_form.php">
            <p>Who is the worst manager at CarMax?</p>
            <p><label><input type="radio" name="q1" value="brandon">Brandon</label></p>
            <p><label><input type="radio" name="q1" value="todd">Todd</label></p>
            <p><label><input type="radio" name="q1" value="finch">Finch</label></p>
            <p><label><input type="radio" name="q1" value="Chis">Chris</label></p>

            <p>
                <button type="submit">Submit</button>
            </p>
        </form>

        <form>
            <p>How Tired am I?</p>
            <p><label><input type="radio" name="q1" value="very">Very</label></p>
            <p><label><input type="radio" name="q1" value="extremely">Extremely</p>
            <p><label><input type="radio" name="q1" value="deathly">Deathly</p>
            <p><label><input type="radio" name="q1" value="awake">Awake</p>

            <p>
                <button type="submit">Submit</button>
            </p>
        </form>

        <form>
            <p>What Operating Systems Have You Used?</p>
            <p><label><input type="checkbox" id="os[]" values="linux"> Linux</label></p>
            <p><label><input type="checkbox" id="os[]" values="osx"> OS X</label></p>
            <p><label><input type="checkbox" id="os[]" values="windows"> Windows</label></p>

            <p>
                <button type="submit">Submit</button>
            </p>
        </form> 

        <form>
            <label for="os">What Teams Do You Watch? </label>
            <select id="os" name="os[]" multiple>
                <p><option value="texans">Texans</option></p>
                <p><option value="astros">Astros</options></p>
                <p><option value="rockets">Rockets</options></p>
            </select>
        </form>


        <form>

        <h2>Select Testing</h2>           
            <label for="transmission">Are You Keeping Up? </label>
            <select id="transmission" name="transmission">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <button type="submit">Submit</button>
        </form>

        

    </body>
</html>