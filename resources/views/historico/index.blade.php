<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>SYSLog</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="img/semge-logo.png">
                    <h2>SYS<span class="danger">Log</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3 class="text-center">Sistemas</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Histórico</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <br><br>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h1>Total de erros</h3>
                            <h3>3333</h1>
                        </div>

                    </div>
                </div>
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h1>Última atualização</h3>
                            <h3>20/10/1203</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <br><br>
                <h2>Histórico Geral</h2>
                <br>
                <table id="myTable">
                    <thead>
                        <tr>
                            <th style="text-align: center">Sistema</th>
                            <th style="text-align: center">Descrição</th>
                            <th style="text-align: center">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                        <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                         <tr>
                            <td>SIGEO
                            <td>API SIGP CAIU MAIS UMA VEZ</td>
                            <td>10-12-2025</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>
            </div>
            <!-- End of Nav -->
            <br>
            <div class="user-profile">
                <div class="logo">
                    <img src="img/semge-logo.png">
                    <h2>SEMGE</h2>
                    <p>Sistema de monitoramento</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Lembretes</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Preparar Reunião Teams</h3>
                            <small class="text_muted">
                                08:00 AM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Ligar para COGEL</h3>
                            <small class="text_muted">
                                12:00 AM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Adicionar Lembrete</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        let table = new DataTable('#myTable', {
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json',
            },
        });
    </script>
    <script src="/js/orders.js"></script>
    <script src="/js/index.js"></script>
</body>

</html>
