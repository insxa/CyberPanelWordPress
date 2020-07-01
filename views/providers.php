<?php include("header.php"); ?>

    <div class="container-fluid WPCPContainer">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Configure Cloud Providers</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="provider" class="sr-only">Select Cloud Company</label>
                    <select style="max-width: 100%" class="form-control" id="provider">
                        <option>Select</option>
                        <option>Hetzner</option>
                    </select>
                    <small id="Name" class="form-text text-muted">Select cloud provider from the list.</small>
                </div>
                <div class="form-group">
                    <label for="hostname" class="sr-only">Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Name" required>
                    <small class="form-text text-muted">Give Name to this API.</small>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Token</label>
                    <input type="text" id="token" class="form-control" placeholder="Token" required>
                    <small class="form-text text-muted">Actual API Token From Hetzner</small>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Image ID</label>
                    <input type="text" id="imageID" class="form-control" placeholder="Image ID" required>
                    <small class="form-text text-muted">Image ID that will be used to create the server.</small>
                </div>
                <button id="connectProvider" type="button" class="btn btn-primary">Save</button>
            </form>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include("footer.php"); ?>