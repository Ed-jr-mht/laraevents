<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css"  href="{{asset('css/sb-admin-2.min.css') }}">
</head>
<body>

<h1 class="text-center my-4">Criar conta</h1>

<div class="card shadow my-5 w-75 mx-auto">
    <div class="card-body">
        <form action="{{ route('auth.register.store') }}" method='post'>
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input
                            type="text"
                            name="user[name]";
                            class="form-control"
                            placeholder="Nome"
                        >
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="form-group">
                        <input
                            type="email"
                            name="user[email]"
                            class="form-control"
                            placeholder="E-mail"
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input
                            type="text"
                            name="user[cpf]"
                            class="form-control"
                            placeholder="CPF"
                        >
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <input
                            type="password"
                            name="user[password]"
                            class="form-control"
                            placeholder="Senha"
                        >
                    </div>
                </div>
            </div>

            <hr>




                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input
                                type="text"
                                name="address[cep]"
                                class="form-control"
                                placeholder="CEP"
                            >
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input
                                type="text"
                                name="address[uf]"
                                class="form-control"
                                placeholder="UF"
                            >
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input
                                type="text"
                                name="address[city]"
                                class="form-control"
                                placeholder="Cidade"
                            >
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input
                                type="text"
                                name="address[street]"
                                class="form-control"
                                placeholder="Logradouro"
                            >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input
                                type="text"
                                name="address[number]"
                                class="form-control"
                                placeholder="Número"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                name="address[district]"
                                class="form-control"
                                placeholder="Bairro"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input
                                type="text"
                                name="address[complement]"
                                class="form-control"
                                placeholder="Complemento"
                            >
                        </div>
                    </div>
                </div>


                <hr>




                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="phones[0][number]"
                                    class="form-control"
                                    placeholder="Telefone"
                                >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="phones[1][number]"
                                    class="form-control"
                                    placeholder="Celular"
                                >
                            </div>
                        </div>
                    </div>


            <button type="submit" class="btn btn-sucess btn-block mt-3">

            </button>
        </form>
    </div>
</div>


</body>
</html>
