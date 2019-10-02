<section id="contact">
    <div class="section">
        <div class="top-border left"></div>
        <div class="top-border right"></div>
        <form class="form-horizontal" action="index.php?p=project" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend class="text-center">Création d'un projet</legend>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Title</label>
                    <input id="name" name="name" type="text" placeholder="Project title" class="form-control">
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="description">Description</label>
                    <textarea id="description" name="description" type="text" placeholder="Description of the project" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="stack">stack</label>
                    <input class="form-control" id="stack" name="stack" placeholder="Stack used for the project" rows="5">
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="link">link</label>
                    <input id="link" name="link" type="text" placeholder="Link of the project" class="form-control">
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="github">github</label>
                    <input id="github" name="github" type="text" placeholder="Github link of the project" class="form-control">
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="image">image</label>
                    <input type="file" name="image">
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