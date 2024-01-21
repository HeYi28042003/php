<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------------- meta name title ------------  -->
    <title>RESTAURANT | Sing In</title>
    <meta name="title" content="RESTAURANT">
    <meta name="description" content="RESTAURANT description .........">

    <!-- --------------- link logo ------------------- -->
    <link rel="shshortcut icon" href="../article/assets/img/logo1.png">

    <!-- ----------------------- link icons ----------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- -------------- link css --------------------- -->
    <link rel="stylesheet" href="../assets/css/styleform.css">">

    <!-- -------------- link js --------------------- -->

    <!-- -------------- link google fonts ------------------ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>

    <section class="form_book" id="form_book">
        <div class="top_form">
            <h4>___ Reservation</h4>
            <h2>BOOK A TABLE</h2>
        </div>

        <form action="/php/form_book.php" method="post">
            <div class="input_box">
                <input type="text" name="name" placeholder="Your Name:" data-constraints="@LettersOnly @NotEmpty" required>
                <input type="email" name="email" placeholder="Email:" data-constraints="@Email @NotEmpty" required>
            </div>
            <div class="input_box2">
                <input type="number" name="phone" placeholder="Telephone:" data-constraints="@Phone" required>
                <!-- <input type="number" name="persons" placeholder="Persons:" data-constraints="@NumbersOnly @NotEmpty"> -->
                <label for="cities"></label>
                <select id="cities" name="persons" placeholder="Persons:">
                    <option value="1 Persons">1 Persons</option>
                    <option value="2 Persons">2 Persons</option>
                    <option value="3 Persons">3 Persons</option>
                    <option value="4 Persons">4 Persons</option>
                </select>
            </div>
            <div class="input_box2">
                <input type="date" name="date" placeholder="Date:" data-provide="datepicker" data-constraints="@Date @NotEmpty" required>
                <input id="time_input" type="time" name="time" placeholder="Time" data-constraints='@NotEmpty' required>
            </div>
            <textarea name="message" rows="5" placeholder="Message:" data-constraints="@NotEmpty"></textarea>
            <input type="submit" value="BOOK NOW" class="btn_form">
        </form>
    </section>


</body>
</html>