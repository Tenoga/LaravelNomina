@extends('layouts.appLayout')
@section('content')
<div class="container listTable">
            <table class="table">
                <h1 class="display-3" style="text-align: center; padding-top: 15px;">Lista de Trabajadores</h1>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <c:forEach items="${user}" var="user"  >
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                                <td>
                                    <a href="updateCliente.htm?id=${user.id}&fotoOld=${user.fotoOld}" class="btn btn-warning" style="border-radius: 13px;"><img src="https://img.icons8.com/ios/50/000000/pencil.png" width="25px"/></a>
                                    <a href="deleteUsuario.htm?id=${user.id}&foto=${user.foto}" class="btn btn-danger" style="border-radius: 13px;"><img  src="https://img.icons8.com/ios/50/000000/delete--v1.png" width="25px" /></a>
                            </td>
                        </tr>    
                    </c:forEach>
                    <tr>
                        <td><a href="formUsuario.htm" class="rounded-circle"><img src="public/img/iconAdd.png"/></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection