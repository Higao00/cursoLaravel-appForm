<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App - Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control" id="userSearch" placeholder="Pesquise Aqui...">
                </div>
            </div>

            <div class="col-md" style="display: flex; justify-content: flex-end;">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAddUser"><i
                        class="fas fa-user-plus users"></i>Add</button>&nbsp;&nbsp;

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditUser"
                    id="editUser"><i class="fas fa-user-edit users"></i>Edit</button>&nbsp;&nbsp;

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDeleteUser"
                    id="deleteUser"><i class="fas fa-user-times users"></i>Delete</button>
            </div>
        </div>
        <hr>

        <table class="table" id="tableUsers">
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

                    <tr id="{{ $user->id }}">
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="user" value="{{ $user->id }}" type="radio"
                                    id="users{{ $user->id }}" @if ($key == 0) checked @endif>
                            </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastName }}</td>
                        <td class="documentTable">{{ $user->document }}</td>
                        <td class="birthDateTable">{{ $user->birthDate }}</td>
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
                    <button type="submit" class="btn btn-success" form="formAddUser" name="formAddUser">FINISH</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal edit  User --}}
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
                    <button type="submit" class="btn btn-success" form="formEditUser"
                        name="formEditUser">FINISH</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal delete User --}}
    <div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="modalDeleteUser"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header imagens-modal">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body imagens-modal">
                    <form id="formDeleteUser" name="formDeleteUser">
                        @csrf
                        <div class="form-group">
                            <h5 class="text-center text-danger">Deseja Excluir este Usu??rio??</h5>
                        </div>
                    </form>
                </div>
                <div class="modal-footer imagens-modal">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-success" form="formDeleteUser"
                        name="formDeleteUser">FINISH</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"
        integrity="sha512-bwanfE29Vxh7VGuxx44U2WkSG9944fjpYRTC3GDUjh0UJ5FOdCQxMJgKWBnlxP5hHKpFJKmawufWEyr5pvwYVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- inicio ajax --}}

    <script>
        // Mascara do documento.
        $('#documentUser').mask('999.999.999-99');
        $('.documentTable').mask('999.999.999-99');

        //  requisi????o criar usu??rio
        $('form[name="formAddUser"]').submit(function(event) {
            event.preventDefault(); //Cancela o evento se for cancel??vel, sem parar a propaga????o do mesmo obs 
            $.ajax({
                method: "POST",
                url: "{{ route('app-form.store') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(result) {
                    console.log(result)
                    if (result['success'] == true) {
                        var dados = result["dados"];
                        var newRow = $('<tr id="' + dados["id"] + '" >');
                        var cols = "";
                        cols +=
                            '<td><div class="form-check"><input class="form-check-input" name="user" value="' +
                            dados["id"] + '"type="radio" id="users' +
                            dados["id"] + '" checked></div></td>';
                        cols += '<td>' + dados["name"] + '</td>';
                        cols += '<td>' + dados["lastName"] + '</td>';
                        cols += '<td>' + dados["document"] + '</td>';
                        cols += '<td>' + dados["birthDate"] + '</td>';
                        cols += '<td>' + dados["email"] + '</td>';
                        newRow.append(cols);
                        $("#tableUsers").append(newRow);
                        $('#modalAddUser').modal('toggle');
                        $('#formAddUser').trigger(
                            "reset"); //coloca todos valores de todos inputs do form como vazio
                    } else {

                    }
                }
            });
        });

        // requi????o captarar usuario especifico
        $('#editUser').click(function() {
            var idUser = 0; //iniciando var com 0
            idUser = $('input[name="user"]:checked').val(); // pegando o valor do input checado

            if (idUser != 0) {
                $.ajax({
                    method: "GET",
                    url: "{{ route('app-form.show', '') }}" + "/" + idUser,
                    dataType: "json",
                    success: function(result) {
                        var dados = result["dados"]
                        //  document.getElementById('editNameUser').value = dados["name"] 
                        // usando JS puro atribuir valor a uma tag
                        $('#editNameUser').val(dados["name"]) //usando jquery
                        $('#editLastNameUser').val(dados["lastName"])
                        $('#editDocumentUser').val(dados["document"])
                        $('#editBirthDateUser').val(dados["birthDate"])
                        $('#editEmailUser').val(dados["email"])

                    }
                });
            }
        });

        // requisi????o editar (update) usu??rio'
        $('form[name="formEditUser"]').submit(function(event) {
            event.preventDefault(); //Cancela o evento se for cancel??vel, sem parar a propaga????o do mesmo obs 
            var idUser = 0; //iniciando var com 0
            idUser = $('input[name="user"]:checked').val(); // pegando o valor do input checado
            $.ajax({
                method: "PUT",
                url: "{{ route('app-form.update', '') }}" + "/" + idUser,
                data: $(this).serialize(),
                dataType: "json",
                success: function(result) {
                    var dados = result["dados"];
                    var newRow = $('<tr id="' + dados["id"] + '" >');
                    var cols = "";
                    cols +=
                        '<td><div class="form-check"><input class="form-check-input" name="user" checked  value="' +
                        dados["id"] + '"type="radio" id="users' +
                        dados["id"] + '"></div></td>';
                    cols += '<td>' + dados["name"] + '</td>';
                    cols += '<td>' + dados["lastName"] + '</td>';
                    cols += '<td>' + dados["document"] + '</td>';
                    cols += '<td>' + dados["birthDate"] + '</td>';
                    cols += '<td>' + dados["email"] + '</td>';
                    newRow.append(cols);

                    $("#" + idUser).remove();
                    $("#tableUsers").append(newRow);
                    $('#modalEditUser').modal('toggle');
                    $('#formEditUser').trigger(
                        "reset"); //coloca todos valores de todos inputs do form como vazio
                }
            });
        });

        // requisi????o de deletar o usuario.
        $('form[name="formDeleteUser"]').submit(function(event) {
            event.preventDefault(); //Cancela o evento se for cancel??vel, sem parar a propaga????o do mesmo obs 

            var idUser = 0;
            idUser = $('input[name="user"]:checked').val();

            if (idUser != 0) {
                $.ajax({
                    method: "DELETE",
                    url: "{{ route('app-form.destroy', '') }}" + "/" + idUser,
                    dataType: "json",
                    data: $(this).serialize(),
                    success: function(result) {
                        $("#" + idUser).remove();
                        $('input[name="user"]').prop('checked', true);
                        $('#modalDeleteUser').modal('toggle');
                    }
                });
            }
        });

        // requisi????o de pesquisa so usuario na tabela.
        $('#userSearch').keyup(function(event) {
            var texto = this.value;
            $("#tableUsers tbody tr").css("display", "table-row");
            $("#tableUsers tbody tr").each(function() {
                if ($(this).text().toUpperCase().indexOf(texto.toUpperCase()) < 0) {
                    $(this).css("display", "none");
                }
            })
        });
    </script>
</body>

</html>
