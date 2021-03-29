<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App - Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <hr>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAddUser">ADD
            USER</button>
        <hr>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">DOCUMENT</th>
                    <th scope="col">BIRTH DATE</th>
                    <th scope="col">E-MAIL</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    {{-- Modal Add User --}}
    <div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="modalAddUser"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header imagens-modal">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body imagens-modal">
                    <form action="{{ route('addUserRoute.store') }}" id="formAddUser" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nameUser" class="col-form-label text-white">Name:</label>
                            <input type="text" class="form-control" id="nameUser" name="nameUser" required>
                        </div>

                        <div class="form-group">
                            <label for="lastNameUser" class="col-form-label text-white">Last Name:</label>
                            <input type="text" class="form-control" id="lastNameUser" name="lastNameUser">
                        </div>

                        <div class="form-group">
                            <label for="documentUser" class="col-form-label text-white">Document:</label>
                            <input type="text" class="form-control" id="documentUser" name="documentUser" required>
                        </div>

                        <div class="form-group">
                            <label for="birthDateUser" class="col-form-label text-white">Birth Date:</label>
                            <input type="date" class="form-control" id="birthDateUser" name="birthDateUser" required>
                        </div>

                        <div class="form-group">
                            <label for="emailUser" class="col-form-label text-white">Email:</label>
                            <input type="email" class="form-control" id="emailUser" name="emailUser" required>
                        </div>

                    </form>
                </div>
                <div class="modal-footer imagens-modal">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-success" form="formAddUser">FINISH</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
