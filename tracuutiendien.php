<?php include('header.php'); ?>
<div class="block_g uk-section-large uk-background-cover" style="background-image: url('imgs/bg/1-23.jpg')">
    <div class="uk-container">
        <h1 class="title uk-text-uppercase uk-h2 uk-text-white">tra cứu</h1>
        <ul class="uk-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><span>Tra cứu</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small bg-white">
    <div class="uk-container">
        <div class="uk-grid" uk-margin>
            <div class="uk-width-2-3@m">
                <h3 class="title_c uk-text-uppercase uk-margin">tra cứu tiền điện</h3>
                <div class="uk-grid-small uk-form-stacked uk-margin form1" uk-grid>
                    <div class="uk-width-1-1">
                        <div class="uk-margin">
                            <div class="uk-form-label" for="form-stacked-text">Chọn năm</div>
                            <div class="uk-grid uk-flex-between">
                                <div class="uk-width-1-3">
                                    <div class=" uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">2018</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="uk-button uk-button-default uk-width-1-1 uk-text-capitalize uk-padding-small uk-padding-remove-top uk-padding-remove-bottom" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="uk-button uk-button-primary btn-send-contact">tra cứu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <ul class="tab_acc tab_tracuu uk-subnav uk-subnav-pill uk-margin-remove" uk-switcher>
                    <li id="randomizeData" class="uk-padding-remove uk-active"><a href="#">Biểu đồ</a></li>
                    <li class="uk-padding-remove"><a href="#">Chỉ số</a></li>
                </ul>

                <div class="uk-switcher uk-margin">
                    <div>
                        <canvas id="chart-0"></canvas>
                        <div class="uk-width-1-1 uk-flex uk-flex-right uk-margin">
                            <a href="#" class="uk-button uk-button-primary btn-send-contact">xem lịch sử thanh toán</a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-middle uk-table-divider table2">
                                <thead>
                                <tr>
                                    <th>Mã khách hàng</th>
                                    <th>BCS</th>
                                    <th>Số tiền (VNĐ)</th>
                                    <th>Tháng</th>
                                    <th>Năm</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>P112221</td>
                                    <td>KT</td>
                                    <td>1.050.382</td>
                                    <td>12</td>
                                    <td>2018</td>
                                    <td><a href="#" class="uk-button uk-button-primary btn-send-contact">xem công tơ</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <script>

                    var barChartData = {
                        labels: ["T1", "T12", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
                        datasets: [{
                            label: '2017',
                            backgroundColor: window.chartColors.grey,
                            stack: 'Stack 0',
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                            ]
                        }, {
                            label: '2018',
                            backgroundColor: window.chartColors.yellow,
                            stack: 'Stack 1',
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                            ]
                        }]

                    };
                    window.onload = function() {
                        var ctx = document.getElementById("chart-0").getContext("2d");
                        window.myBar = new Chart(ctx, {
                            type: 'bar',
                            data: barChartData,
                            options: {
                                title:{
                                    display:true,
                                    text:"THỐNG KÊ SẢN LƯỢNG"
                                },
                                tooltips: {
                                    mode: 'index',
                                    intersect: false
                                },
                                responsive: true,
                                scales: {
                                    xAxes: [{
                                        stacked: true,
                                    }],
                                    yAxes: [{
                                        stacked: true
                                    }]
                                }
                            }
                        });
                    };

                    document.getElementById('randomizeData').addEventListener('click', function() {
                        barChartData.datasets.forEach(function(dataset, i) {
                            dataset.data = dataset.data.map(function() {
                                return randomScalingFactor();
                            });
                        });
                        window.myBar.update();
                    });

                </script>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <?php include('sidebar-tracuu.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>