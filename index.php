<?php
// $request = $_SERVER['REQUEST_URI'];

// switch ($request) {
//     case '/index':
//         require 'index.php';
//         break;
//     case '/blog':
//         require 'blog.php';
//         break;
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <style>
        /* sessoion 1 */
        .main_div {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .main_div_sub {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row-reverse;
        }

        .text_div {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
        }

        img.image_home {
            width: 100em;
            border-radius: 2em;

        }

        .text_div {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding: 25px;
        }

        /* session 2 */

        .main_div_1a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .main_div_sub_1a {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text_div_1a {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
        }

        img.image_home_1a {
            width: 100em;
            border-radius: 2em;

        }

        .text_div_1a {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding: 25px;
        }


        /* session 3 */
        .main_div_2a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .main_div_sub_2a {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row-reverse;
        }

        .text_div_2a {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
        }

        img.image_home_2a {
            width: 100em;
            border-radius: 2em;

        }

        .text_div_2a {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding: 25px;
        }


        h1 {
            font-size: xxx-large;
            font-family: serif;
            font-weight: bolder;
        }
    </style>

    <?php require 'templates/navbar.php' ?>


    <header>
    </header>
    <!-- <h1>Welcome to our website!</h1>

    <main>
        <section class="hero">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </section>
    </main> -->
    <section class="1">
        <div class="main_div">

            <div class="main_div_sub">
                <div class="text_div">

                    <h1>The Fellowship of the Ring</h1>

                    <p>
                        The Fellowship of the Ring is the first of three volumes of the epic novel The Lord of the Rings by the English author J. R. R. Tolkien. It is followed by The Two Towers and The Return of the King. The action takes place in the fictional universe of Middle-earth.
                    </p>



                </div>
                <div class="div_img">

                    <img class="image_home" src="/images/644699.png" alt="home">
                </div>
            </div>

        </div>
    </section>
    <section class="2">
        <div class="main_div_1a">

            <div class="main_div_sub_1a">
                <div class="text_div_1a">

                    <h1>A Game of Thrones</h1>

                    <p>
                        A Game of Thrones is the first novel in A Song of Ice and Fire, a series of fantasy novels by American author George R. R. Martin. It was first published on August 1, 1996. The novel won the 1997 Locus Award and was nominated for both the 1997 Nebula Award and the 1997 World Fantasy Award.
                    </p>



                </div>
                <div class="div_img_1a">

                    <img class="image_home_1a" src="/images/dc9a92d3f52ce828e1d77e859b9d3c37e1173c997c50760d596714ee09889c5d.jpg" alt="home">
                </div>
            </div>

        </div>
    </section>


    <section class="3">
        <div class="main_div_2a">

            <div class="main_div_sub_2a">
                <div class="text_div_2a">

                    <h1>Harry Potter and the Cursed Child</h1>

                    <p>
                        Harry Potter and the Cursed Child is a play written by Jack Thorne from an original story written by J. K. Rowling, Thorne and John Tiffany. The story is set nineteen years after the events of the 2007 novel Harry Potter and the Deathly Hallows by Rowling.
                    </p>



                </div>
                <div class="div_img_2a">

                    <img class="image_home_2a" src="/images/1_6RrXYDX5gAWZnvGe83vWiA.jpg" alt="home">
                </div>
            </div>

        </div>
    </section>
    <?php require 'templates/footer.php' ?>


</body>

</html>