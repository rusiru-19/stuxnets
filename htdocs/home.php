<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HOME</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.png">
        <link rel="stylesheet" href="home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>

  </div>
    </body>
    <h1  style="font-size: 65px;">Axesearch</h1>
    <p  style="font-size: 15px;">The Database Of You Dream....</p><br>

 <div class="container">
        <div class="serviceBox">
            <div class="icon" style="--i: black">
                <img src="\images\favicon.png" height="150px">
            </div>
            <div class="content">
                <h2>Rashmi</h2>
                <p>
                This girl will ruin your life just by texting you. She looks nice but cringe.
                </p>
            </div>
        </div>
        <div class="serviceBox">
            <div class="icon" style="--i: black">
                <img src="\images\favicon.png" height="150px">
            </div>
            <div class="content">
                <h2>Isumi</h2>
                <p>
                    A person who do not take their words back. #Drama qveen
                </p>
            </div>
        </div>
        <div class="serviceBox">
            <div class="icon" style="--i: black">
               <img src="\images\favicon.png" height="150px">

            </div>
            <div class="content">
                <h2>Oshadhi</h2>
                <p>
                    A girl that will answer every single question asked by the teacher.
                </p>
            </div>
        </div>
        <div class="serviceBox">
            <div class="icon" style="--i:black">
                <img src="\images\favicon.png" height="150px">
            </div>
            <div class="content">
                <h2>Sayuni</h2>
                <p>
                    Never been seen by a human eye looks absolutly terable.

                </p>
            </div>
        </div>
        <div class="serviceBox">
            <div class="icon" style="--i:black">
                <img src="\images\favicon.png" height="150px">
            </div>
            <div class="content">
                <h2>Avindhi</h2>
                <p>
                A typical girl who fogets her homework. Annoying most of the time.
                </p>
            </div>
        </div>
        <div class="serviceBox">
            <div class="icon" style="--i: black">
                <img src="\images\favicon.png" height="150px">
            </div>
            <div class="content">
                <h2>Games Development</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo consequuntur laboriosam eveniet id
                    iure quo?
                </p>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <style type="text/css">
 @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
       
.container {
  position: relative;
  width: 1200px;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
  flex-wrap: wrap;
}

.container .serviceBox {
  position: relative;
  width: 350px;
  height: 280px;
  background: black;
  border-radius: 20px;
  overflow: hidden;

}

.container .serviceBox .icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--i);
  transition: 0.5s;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2;
  transition-delay: 0.25s;
}

.container .serviceBox:hover .icon {
  top: 30px;
  left: calc(50% - 40px);
  width: 80px;
  height: 80px;
  border-radius: 50%;
  transition-delay: 0s;
}

.container .serviceBox .icon ion-icon {
  font-size: 5em;
  color: #fff;
  transition: 0.5s;
  transition-delay: 0.25s;
}

.container .serviceBox:hover .icon ion-icon {
  font-size: 2em;
  transition-delay: 0s;
}

.container .serviceBox .content {
  position: relative;
  padding: 20px;
  color: #fff;
  text-align: center;
  margin-top: 100px;
  z-index: 1;
  transform: scale(0);
  transition: 0.5s;
  transition-delay: 0s;
}

.container .serviceBox:hover .content {
  transform: scale(1);
  transition-delay: 0.25s;
}

.container .serviceBox .content h2 {
  margin-top: 10px;
  margin-bottom: 5px;
}

.container .serviceBox .content p {
  font-weight: 300;
  line-height: 1.5em;
}

@media screen and (max-width: 700px) {
  .container .serviceBox .content h2 {
    font-size: 1.25rem;
  }

  .container .serviceBox .content p {
    font-size: 1rem;
    padding-inline: 2rem;
  }
}

@media screen and (max-width: 400px) {
  .container .serviceBox {
    margin-inline: 1rem;
    width: 100%;
    height: auto;
  }

  .container .serviceBox .content p {
    padding-inline: initial;
  }
}
    </style>




</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>