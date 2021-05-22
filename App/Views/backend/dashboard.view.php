<div style="min-height:100vh" class="container pt-5 mt-5">

    <div class="pb-3">

        <form method="POST" action="create-project" class="mb-5">
            <div class="mb-3 col-11 col-md-9 col-lg-6">
                <label for="formGroupExampleInput" class="form-label">Titre du projet</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title"
                    placeholder="titre du projet">
            </div>
            <div class="mb-3 col-11 col-md-9 col-lg-6">
                <label for="formGroupExampleInput2" class="form-label">Techno utiliser</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="techno" placeholder="techno">
            </div>
            <div class="mb-3 col-6 col-md-5 col-lg-3">
                <input type="file" class="form-control" id="formGroupExampleInput2" name="image">
            </div>
            <button type="submit" class="btn btn-secondary">valider</button>
        </form>
    </div>
    <div class="col-12 mx-auto">
        <div class="table-responsive mt-5 mx-auto">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Titre</th>
                        <th>Techno</th>
                        <th>Images</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $project): ?>
                        <tr>
                            <td><?=$project->id ?></td>
                            <td><?=$project->title ?></td>
                            <td><?=$project->techno ?></td>
                            <td><?=$project->picture ?></td>
                            <td>
                                <a id="<?=$project->id ?>" class="update btn btn-secondary mx-1" href="update/<?=$project->id ?>">Modifier</a>
                                <a id="#envoyer" class="btn btn-danger mx-1" href="delete-project/<?=$project->id ?>">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
