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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <hr>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAddUser">
            <i class="fas fa-user-plus users"></i>Add User
        </button>

        <button class="btn btn-primary" id="modelEditUser" data-toggle="modal" data-target="#modalEditUser"><i
                class="fas fa-user-edit users"></i>Edit </button>

        <button class="btn btn-danger"><i class="fas fa-user-times users"></i>Delete</button>
        <hr>

        {{-- {{ dd($users) }} --}}

        <table class="table" id="tableUser">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">DOCUMENT</th>
                    <th scope="col">BIRTH DATE</th>
                    <th scope="col">E-MAIL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="user" value="{{ $user->id }}" type="radio"
                                    id="users{{ $user->id }}" @if ($key == 0) checked @endif>
                            </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastName }}</td>
                        <td>{{ $user->birthDate }}</td>
                        <td>{{ $user->document }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
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
                    <form id="formAddUser" name="formAddUser">
                        @csrf
                        <div class="form-group">
                            <label for="nameUser" class="col-form-label text-white">Name:</label>
                            <input type="text" class="form-control" id="nameUser" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="lastNameUser" class="col-form-label text-white">Last Name:</label>
                            <input type="text" class="form-control" id="lastNameUser" name="lastName">
                        </div>

                        <div class="form-group">
                            <label for="documentUser" class="col-form-label text-white">Document:</label>
                            <input type="text" class="form-control" id="documentUser" name="document" required>
                        </div>

                        <div class="form-group">
                            <label for="birthDateUser" class="col-form-label text-white">Birth Date:</label>
                            <input type="date" class="form-control" id="birthDateUser" name="birthDate" required>
                        </div>

                        <div class="form-group">
                            <label for="emailUser" class="col-form-label text-white">Email:</label>
                            <input type="email" class="form-control" id="emailUser" name="email" required>
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

    {{-- Modal Edit User --}}
    <div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="modalEditUser"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header imagens-modal">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body imagens-modal">
                    <form id="formEditUser" name="formEditUser">
                        @csrf
                        <div class="form-group">
                            <label for="nameUser" class="col-form-label text-white">Name:</label>
                            <input type="text" class="form-control" id="editNameUser" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="lastNameUser" class="col-form-label text-white">Last Name:</label>
                            <input type="text" class="form-control" id="editLastNameUser" name="lastName">
                        </div>

                        <div class="form-group">
                            <label for="documentUser" class="col-form-label text-white">Document:</label>
                            <input type="text" class="form-control" id="editDocumentUser" name="document" required>
                        </div>

                        <div class="form-group">
                            <label for="birthDateUser" class="col-form-label text-white">Birth Date:</label>
                            <input type="date" class="form-control" id="editBirthDateUser" name="birthDate" required>
                        </div>

                        <div class="form-group">
                            <label for="emailUser" class="col-form-label text-white">Email:</label>
                            <input type="email" class="form-control" id="editEmailUser" name="email" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer imagens-modal">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-success" form="formEditUser">FINISH</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <script>
        $(function() {
            $('form[name="formAddUser"]').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('app-form.store') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(result) {
                        var dados = result["dados"];
                        var newRow = $("<tr>");
                        var cols = "";
                        cols +=
                            '<td><div class="form-check"><input class="form-check-input" name="user" value="' +
                            dados["id"] + '"type="radio" id="users' + dados["id"] +
                            '"></div></td>';
                        cols += '<td>' + dados["name"] + '</td>';
                        cols += '<td>' + dados["lastName"] + '</td>';
                        cols += '<td>' + dados["document"] + '</td>';
                        cols += '<td>' + dados["birthDate"] + '</td>';
                        cols += '<td>' + dados["email"] + '</td>';
                        newRow.append(cols);

                        $("#tableUser").append(newRow);
                        $('#modalAddUser').modal('toggle');
                        $('#formAddUser').trigger("reset");
                    }
                });
            });
        })

    </script>

    <script>
        $('#modelEditUser').click(function() {
            var idUser = 0;
            idUser = $('input[name="user"]:checked').val();

            if (idUser != 0) {
                $('#modalEditUser').trigger("reset");

                $.ajax({
                    url: "{{ route('app-form.show', '') }}" + "/" + idUser,
                    type: "GET",
                    dataType: 'json',
                    success: function(result) {
                        var dados = result["dados"];
                        $('#editNameUser').val(dados["name"]);
                        $('#editLastNameUser').val(dados["lastName"]);
                        $('#editDocumentUser').val(dados["document"]);
                        $('#editBirthDateUser').val(dados["birthDate"]);
                        $('#editEmailUser').val(dados["email"]);
                    }
                });
            }
        });

    </script>
</body>

</html>
