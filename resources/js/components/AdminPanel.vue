<template>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Panou administrator</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="#!">Proiecte/Lucrari</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Comutare meniu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="/home">Acasa</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <div class="w-100 d-flex justify-content-end my-4">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Adauga
                        proiect</button>
                </div>
                <div class="h2 text-center me-3">Proiectele tale</div>
                <hr>
                <div class="container">
                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titlu</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actiuni</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <i class="fas fa-edit me-3 cursor-pointer" style="color: blue;" role="button"></i>
                                    <i class="fas fa-trash" role="button" style="color: red"></i>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adauga o lucrare noua</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Titlu</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Adauga titlul lucrarii</div>
                        </div>
                        <div class="mb-3">
                        
                            <div id="passwordHelp" class="form-text">Adauga descrierea lucrarii</div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Lucrarea este vizibila in
                                pagina</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Iesi</button>
                    <button type="button" class="btn btn-primary">Salveaza</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'AdminPanel',
    data() {
        return {
            services: [],
            service: {
                title: '',
                description: '',
                status: false,
            },
            showModal: false,
        }
    },
    mounted() {

    },
    methods: {

    }
}
</script>

<style>
#wrapper {
    overflow-x: hidden;
}

#sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin .25s ease-out;
    -moz-transition: margin .25s ease-out;
    -o-transition: margin .25s ease-out;
    transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
    width: 15rem;
}

#page-content-wrapper {
    min-width: 100vw;
}

body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
    margin-left: 0;
}

@media (min-width: 768px) {
    #sidebar-wrapper {
        margin-left: 0;
    }

    #page-content-wrapper {
        min-width: 0;
        width: 100%;
    }

    body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
        margin-left: -15rem;
    }
}
</style>