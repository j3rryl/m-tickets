    <?php
        include("../templates/eorg_header.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="/assets/css/eorg/track.css">

    <main>
        <div class="dropdown">
            <button class="dropbtn">Monitoring</button>
            <ol class="fa-ul dropdown-content">
                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Choose Event</li>
                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Show Graph</li>
                <li><span class="fa-li"><i class="fas fa-spinner fa-pulse"></i></span>Show Table</li>
                <li><span class="fa-li"><i class="far fa-square"></i></span>Other</li>
            </ol>
        </div>
        <div class="content">
            <!-- <div id="wrapper">
                <div class="chart">
                    <h3>Amount of tickets sold for the selected event</h3>
                    <table id="data-table" border="1" cellpadding="10" cellspacing="0"
                    summary="Monthly monitoring of the evolution of tickets pricing and market sales of the selected event till the day x of the event ">
                    <caption>Tickets sold in thousands</caption>
                    <thead>
                        <tr>
                            <td>&nbsp;</td>
                            <th scope="col">Week 4</th>
                            <th scope="col">Week 3</th>
                            <th scope="col">Week 2</th>
                            <th scope="col">Week 1</th>
                            <th scope="col">Day X</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">VIP Tickets</th>
                            <td>4080</td>
                            <td>6080</td>
                            <td>6240</td>
                            <td>3520</td>
                            <td>2240</td>
                        </tr>
                        <tr>
                            <th scope="row">Normal Tickets</th>
                            <td>5680</td>
                            <td>6880</td>
                            <td>6240</td>
                            <td>5120</td>
                            <td>2640</td>
                        </tr>
                        <tr>
                            <th scope="row">Extra Services</th>
                            <td>1040</td>
                            <td>1760</td>
                            <td>2880</td>
                            <td>4720</td>
                            <td>7520</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div> -->
        </div>
    </main>
    <?php
        include("../templates/eorg_footer.php");
    ?>