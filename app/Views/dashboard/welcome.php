<div class="content" id="dashboard_welcome">

    <!-- chart Movements by month  -->
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Movimentações</h5>
                            <h2 class="card-title">Mensalmente</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartMonthlySpend"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- charts movements by category  -->
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Movimentos</h5>
                    <h3 class="card-title"><i class="tim-icons icon-calendar-60 text-primary"></i> Categoria</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="ChartBarChartCategory"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- chart movements by account  -->
        <div class="col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Movimentos</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bank text-info"></i> Contas</h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="ChartBarChartAccount"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Ultimas transações</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Conta
                                    </th>
                                    <th>
                                        Categoria
                                    </th>
                                    <th>
                                        Descrição
                                    </th>
                                    <th>
                                        Tipo
                                    </th>
                                    <th>
                                        Valor
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

