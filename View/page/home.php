<section id="home" class="banner">
    <div class="banner-text">
        <h1 class="responsive-headline">Aymeric Magioncalda</h1>
        <h3>Développeur web spécialisé <span>php</span> et <span>symfony</span>. Apprenez en plus à <a class="smoothscroll banner-about" href="#about">propos de moi</a>.</h3>
        <hr />
        <ul class="social">
            <li><a href="https://github.com/Seym9"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/aymeric-magioncalda/"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
    <p class="scrolldown">
        <a class="smoothscroll" href="#about"><i class="fas fa-arrow-down"></i></a>
    </p>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-thumbnail" src="../public/images/profils.png" alt="" />
            </div>
            <div class="col-md-8 ">
                <h2>About Me</h2>
                <p>
                    Passionné par les nouvelles téchnologies et le développement web, je suis toujours à la recherche de nouveaux challenges et de nouvelles choses à apprendre .
                    Je suis très investi dans les projets que j'entreprends, j'apprécie tout particulièrement de travailler côter serveur avec le language Php et le framework Symfony !
                </p>
            </div>
        </div>
    </div>
</section>

<section id="resume" class="container my-5 ">
    <div>
        <h1 class="text-center">Skills</h1>
    </div>
    <div class="col-md-12 my-5 ">
        <ul class="d-flex my-5 col-md-12" id="list-resume">
            <li class="col-md-4 card single-part">
                <h2 class="skill-title text-center">Back-end</h2>
                <div class="icon text-center mb-5">
                    <i class="fas fa-cogs"></i>
                </div>
                <ul class="skill-list">
                    <li>PHP</li>
                    <li><abbr title="Programmation Orientée Object">POO</abbr> / <abbr title="Architecture : Model , View , Controller">MVC</abbr></li>
                    <li>MySQL</li>
                </ul>
            </li>
            <li class="col-md-4 card single-part">
                <h2 class="skill-title text-center">Front-end</h2>
                <div class="icon text-center mb-5">
                    <i class="fas fa-desktop"></i>
                </div>
                <ul class="skill-list">
                    <li>HTML / CSS / SASS</li>
                    <li>JQuery / JavaScript</li>
                    <li>Bootstrap</li>
                </ul>
            </li>
            <li class="col-md-4 card single-part">
                <h2 class="skill-title text-center">Les plus</h2>
                <div class="icon text-center mb-5">
                    <i class="fas fa-folder-plus"></i>
                </div>
                <ul class="skill-list">
                    <li>Symfony 4</li>
                    <li>Anglais technique</li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<div class="transition"></div>

<section id="portfolio">
    <div class="container">
        <h2 class="text-center my-5">Mes projets</h2>

        <div class="row my-5">
            <?php /** @var TYPE_NAME $projects */
            foreach ($projects as $project): ?>
            <div class="col-md-3 mb-2">
                <a data-toggle="modal" href="#myModal<?= $project->getId(); ?>" class="portfolio-box">
                    <img src="../../public/images/portfolio/<?=$project->getImage(); ?>" class="img-responsive col-md-12 img-preview" alt="">
                </a>
            </div>

            <div class="modal fade" id="myModal<?= $project->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titleModal<?= $project->getId(); ?>"><?= $project->getName(); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="../../public/images/portfolio/<?=$project->getImage(); ?>" class="img-responsive col-md-12" alt="">
                            <p class="mt-3"><?= $project->getDescription(); ?></p>
                            <p><span>Technologies utilisées</span> : <?= $project->getStack(); ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= $project->getLink(); ?>" class="btn btn-success">Voir en ligne</a>
                            <?php if ($project->getGithub()) : ?>
                            <a href="https://github.com/Seym9/Projet-3-OCR---location-de-velo" class="btn btn-primary">GitHub</a>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<div class="transition"></div>

<section id="contact">
    <div class="section">
        <div class="top-border left"></div>
        <div class="top-border right"></div>
        <form class="form-horizontal" action="index.php?p=send-message" method="post">
            <fieldset>
                <legend class="text-center">Contactez moi</legend>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="author">Votre nom</label>
                        <input id="author" name="author" type="text" placeholder="Your name" class="form-control">
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="mail">Votre email</label>
                        <input id="mail" name="mail" type="text" placeholder="Your email" class="form-control">
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="content">Votre message</label>
                        <textarea class="form-control" id="content" name="content" placeholder="Please enter your message here..." rows="5"></textarea>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<footer>
    <div class="footer">
        <ul class="social-links">
            <li><a href="https://github.com/Seym9"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/aymeric-magioncalda/"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Copyright 2019 Aymeric</li>
        </ul>
    </div>
    <div id="go-top"><a class="smoothscroll" href="#home"><i class="fas fa-arrow-up"></i></a></div>
</footer>
