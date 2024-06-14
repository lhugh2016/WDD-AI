<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];

    // Connect to the database
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "database_tba";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the survey data into the Camp_Survey table
    $sql = "INSERT INTO Camp_Survey (question1, question2, question3) VALUES ('$question1', '$question2', '$question3')";

    if ($conn->query($sql) === TRUE) {
        echo "Survey submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer Camp Survey</title>
        <link rel="stylesheet" href="./myFramework-typography.css">
        <link rel="stylesheet" href="./myFramework-container.css">
        <link rel="stylesheet" href="./myFramework-rowColumn.css">
        <link rel="stylesheet" href="./myFramework-border.css">
        <link rel="stylesheet" href="./myFramework-corner.css">
        <link rel="stylesheet" href="./myFramework-margin.css">
        <link rel="stylesheet" href="./myFramework-padding.css">
        <link rel="stylesheet" href="./myFramework-widthHeight.css">
        <link rel="stylesheet" href="./myFramework-text.css">
        <link rel="stylesheet" href="./myFramework-backgroundColor.css">
        <link rel="stylesheet" href="./myFramework-shadow.css">
        <link rel="stylesheet" href="./myFramework-navigation.css">

</head>
<body>
    <h1 class="container-fluid border border-3 text-center text-capitalize text-success bg-info shadow-lg">
    Albany State University 2024 Summer Camp "Web Design and Development Using AI" <br>   
     Survey</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="question1">
            <b>Question 1:</b> What is your grade?
        </label>
        <br>
        <select name="question1">
            <option value="1">6</option>
            <option value="2">7</option>
            <option value="3">8</option>
            <option value="4">9</option>
            <option value="5">10</option>
            <option value="6">11</option>
            <option value="7">12</option>
        </select>
        <br><br>

        <label for="question2">
        <b>Question 2:</b> What is your age?
        </label>
        <br>
        <select name="question2">
            <option value="1">10</option>
            <option value="2">11</option>
            <option value="3">12</option>
            <option value="4">13</option>
            <option value="5">14</option>
            <option value="6">15</option>
            <option value="7">16</option>
            <option value="8">17</option>
            <option value="9">18</option>
            <option value="10">19 or above</option>
        </select>
        <br><br>

        <label for="question3">
        <b>Question 3:</b> Who sign up for the camp?
        </label>
        <br>
        <select name="question3">
            <option value="1">Myself</option>
            <option value="2">My dad</option>
            <option value="3">My mom</option>
            <option value="4">My grand parent</option>
        </select>
        <br><br>

        <label for="question4">
        <b>Question 4:</b> What is your purpose for attending this camp?    
        </label>
        <br>
        <select name="question4">
            <option value="1">Learn AI</option>
            <option value="2">Learn Web Design</option>
            <option value="3">Play computer game</option>
            <option value="4">Have free lunch</option>
            <option value="5">Stay somewhere for daycare</option>

        </select>
        <br><br>

        <label for="question5">
        <b>Question 5:</b> The camp taught how to install GIT+GITHUB in the first week. 
            Do you agree that you have learned how to install GIT+Visual Studio for Coding?
        </label>
        <br>
        <select name="question5">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>

        <label for="question6">
        <b>Question 6:</b> The camp taught how to setup Visual Studo for Coding to use OpenAI chatGPT.
            Do you agree that you have learned how to setup your computer to use OpenAI?
        </label>
        <br>
        <select name="question6">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10"  selected>Completely Agree</option>
        </select>
        <br><br>

        <label for="question7">
        <b>Question 7:</b> In the first and the second weeks, the camp taught how to use AI prompts
            to create webpage. Do you agree that you have learned how to 
            write a good AI prompts to create your webpage?
        
        </label>
        <br>
        <select name="question7">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10"  selected>Completely Agree</option>
        </select>
        <br><br>


        <label for="question8">
        <b>Question 8:</b> The camp taught in the first and second week, how to communicate effectively
             with AI.
            Do you agree that you have learned how to 
            communicate effectively with AI?
        
        </label>
        <br>
        <select name="question8">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>


        <label for="question9">
        <b>Question 9:</b> In the second week, the camp taught about the concepts "Loss", "Cost Function",
            "Linear regression". Do you agree that you understand those concepts?
        </label>
        <br>
        <select name="question9">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>

        <label for="question10">
        <b>Question 10:</b> In the second week, the camp taught about the so-called "Artificial Neuron", and
           the represention of linear function by an artificial neuron. 
           Do you agree that you understand that represention clearly?</label>
           <br>
           <select name="question10">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>


        <label for="question11">
        <b>Question 11:</b>  In the second week, the camp taught about the so-called "Artificial Neural Network", and
           and the layered structure of an artificial neural network. 
           Do you agree that you understand that layered structure clearly?</label>
           <br>
           <select name="question11">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>


        <label for="question11">
        <b>Question 12:</b> In the second week, the camp taught about the so-called "Artificial Neuron", and
           the represention of linear function by an artificial neuron. 
           Do you agree that you understand that represention clearly?</label>
           <br>
           <select name="question11">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>

<!--
        <label for="question12">
           In the second week, the camp taught about the so-called "Artificial Neuron", and
           the represention of linear function by an artificial neuron. 
           Do you agree that you understand that represention clearly?</label>
        <br>
           <select name="question12">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>


        <label for="question13">
           In the second week, the camp taught about the so-called "Artificial Neuron", and
           the represention of linear function by an artificial neuron. 
           Do you agree that you understand that represention clearly?</label>
        <br>
           <select name="question13">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>


        <label for="question14">
           In the second week, the camp taught about the so-called "Artificial Neuron", and
           the represention of linear function by an artificial neuron. 
           Do you agree that you understand that represention clearly?</label>
            <br>
           <select name="question14">
            <option value="1">Disagree</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10" selected>Completely Agree</option>
        </select>
        <br><br>
-->
        <input type="submit" value="Submit">
    </form>
</body>
</html>