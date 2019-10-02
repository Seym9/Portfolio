<div class="container pt-5">

<div class="pt-5 text-center">
    <a href="index.php?p=project" class="btn btn-primary">Add a project</a>
</div>
<div class="pt-5 text-center">
    <a href="index.php?p=admin&message=new" class="btn btn-primary">Unread</a>
    <a href="index.php?p=admin&message=read" class="btn btn-primary">Read</a>
    <a href="index.php?p=admin&message=delete" class="btn btn-primary">Delete</a>
</div>

<div class="col-12">
<?php foreach ($messages as $message) :?>
    <div class="card text-white bg-dark m-3">
        <div class="card-body">
            <p class="card-header text-center">Who ?</p>
            <p class="card-title text-center"><?= $message->getAuthor();?></p>
            <h4 class="card-header text-center">Mail</h4>
            <h4 class="card-title text-center"><?= $message->getMail();?></h4>
            <p class="card-header text-center">What ?</p>
            <p class="card-text text-center"><?= $message->getContent();?></p>
            <p class="card-header text-center">When ?</p>
            <p class="card-text text-center"><?= $message->getDate();?></p>
        </div>
        <div class="text-center pb-1">
            <a href="index.php?p=update-message&status=2&id=<?=$message->getId() ?>" class="btn btn-info">Mark as read</a>
            <a href="index.php?p=update-message&status=3&id=<?=$message->getId() ?>" class="btn btn-warning">Delete</a>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div>