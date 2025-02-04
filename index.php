<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ravfael Porto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Bootsrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link to my CSS -->
    <link rel="stylesheet" href="style.css" />

    <meta http-equiv="Cache-control" content="no-cache" />
  </head>
  <body id="home">
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top border-secondary" style="background-color: transparent">
      <div class="container">
        <a class="navbar-brand" href="#">Welcome to My Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Nav -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/photoprofil.jpg" alt="Ravfael" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Ravfael Novfito Handoyo</h1>
      <p class="lead"></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,32L80,64C160,96,320,160,480,170.7C640,181,800,139,960,138.7C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Jumbotron -->

    <!-- About -->
    <section id="About">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col" data-aos="fade-down" data-aos-duration="2000">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
            <p>I am Ravfael Novfito Handoyo, an informatics student at Universitas Islam Indonesia. I have a strong interest in technology, programming, and developing efficient digital solutions that benefit society.</p>
          </div>
          <div class="col-md-4" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200">
            <p>I’m always eager to learn new things, sharpen my skills in technology, and open to collaboration to create meaningful and sustainable progress.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#748d92"
          fill-opacity="1"
          d="M0,96L60,101.3C120,107,240,117,360,149.3C480,181,600,235,720,229.3C840,224,960,160,1080,122.7C1200,85,1320,75,1380,69.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- About -->

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>My Favorite Tools</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="project/fav1.png" class="card-img-top" alt="project 1" />
                <div class="card-body">
                  <p class="card-text">Token Terminal</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
                <img src="project/fav2.png" class="card-img-top" alt="project 2" />
                <div class="card-body">
                  <p class="card-text">Messari</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
                <img src="project/fav3.png" class="card-img-top" alt="project 3" />
                <div class="card-body">
                  <p class="card-text">Dune Analytics</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="300">
                <img src="project/fav4.png" class="card-img-top" alt="project 4" />
                <div class="card-body">
                  <p class="card-text">The Block</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card" data-aos="flip-left" data-aos-duration="500" data-aos-delay="400">
                <img src="project/fav5.png" class="card-img-top" alt="project 5" />
                <div class="card-body">
                  <p class="card-text">Bitget</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- TES -->
        <!-- <section id="my-keyboard">
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h2>My Keyboard</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="keyboard-box">
                  <h4 class="keyboard-name">Keychorn K2</h4>
                  <a href="" class="btn btn-light keyboard-detail-button">Show Detail</a>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- TES -->
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L60,176C120,160,240,128,360,149.3C480,171,600,245,720,250.7C840,256,960,192,1080,176C1200,160,1320,192,1380,208L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Projects -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <!-- alert after user input form -->
            <!-- <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Thanks for subimitting dude!</strong> I've already received your message.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->
            <!-- alert after user input form -->

            <form name="contact-form" method="POST" action="process_contact.php">
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required />
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required />
              </div>

              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
              </div>

              <button type="submit" class="btn-submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#748d92"
          fill-opacity="1"
          d="M0,96L60,128C120,160,240,224,360,229.3C480,235,600,181,720,144C840,107,960,85,1080,101.3C1200,117,1320,171,1380,197.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Contact -->

    <!-- Footer -->
    <footer style="background-color: #748d92" class="text-center pb-5">
      <p>Created By Ravnov <i class="bi bi-emoji-smile-fill text-warning"></i> <a href="https://www.instagram.com/ravnov11/" class="text-white fw-bold">Ravfael Novfito Handoyo</a></p>
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: false,
      });
    </script>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to(".lead", { duration: 2, delay: 1.5, text: "Informatics Student | Universitas Islam Indonesia" });
      gsap.from(".jumbotron img", { duration: 1, y: -100, opacity: 0 });
      gsap.from(".navbar", { duration: 1.5, y: "-100%", opacity: 0, ease: "bounce" });
      gsap.from(".display-4", { duration: 1.5, x: -50, opacity: 0, delay: 0.5 });
    </script>
    <!-- GSAP -->
     
    <!-- 
    <script>
      const scriptURL = "process_contact.php";
      const form = document.forms["contact-form"];
      const btnSubmit = document.querySelector(".btn-submit");
      const btnLoading = document.querySelector(".btn-loading");
      const myAlert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // show loading

        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // show sbubmit, and hide loading
            btnLoading.classList.toggle("d-none");
            btnSubmit.classList.toggle("d-none");
            // show alert
            myAlert.classList.toggle("d-none");
            // reset form
            form.reset();
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script> -->
  </body>
</html>
