<h1 class="dashboard-title">Trang Quản Trị</h1>

<div class="notifications">
  <ul>
    <li><span class="icon">&#x1F4E6;</span> <strong>2 đơn hàng mới cần xử lý</strong></li>
    <li><span class="icon">&#x1F5C2;</span> <strong>5 bình luận chưa được duyệt</strong></li>
    <li><span class="icon">&#x1F6A8;</span> <strong>3 báo cáo lỗi từ người dùng</strong></li>
  </ul>
</div>

<!-- Tìm kiếm -->


<!-- Phần thống kê -->
<div class="stats-container">
  <h2 class="stats-title">Biểu đồ Thống Kê Shop quần áo Poly</h2>

  <!-- Lưới biểu đồ -->
  <div class="charts-grid">
    <div class="chart-item">
      <canvas id="buyChart1"></canvas>
    </div>
    <div class="chart-item">
      <canvas id="buyChart2"></canvas>
    </div>
    <div class="chart-item">
      <canvas id="buyChart3"></canvas>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Hàm tạo dữ liệu cho biểu đồ
    function createChartData(labels, data, label, colors) {
        return {
            labels: labels,
            datasets: [{
                label: label,
                data: data,
                backgroundColor: colors.map(color => `${color}88`),
                borderColor: colors,
                borderWidth: 2,
                hoverBackgroundColor: colors,
                hoverBorderColor: '#000',
            }]
        };
    }

    // Hàm tạo biểu đồ
    function createChart(ctxId, chartData, chartTitle) {
        const ctx = document.getElementById(ctxId).getContext('2d');
        return new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: chartTitle,
                        color: '#333',
                        font: {
                            size: 16,
                            weight: 'bold'
                        }
                    },
                    legend: {
                        position: 'top',
                        labels: {
                            color: '#555',
                            font: { size: 14 }
                        }
                    },
                },
                scales: {
                    x: { ticks: { color: '#555', font: { size: 12 } }, grid: { color: '#eee' } },
                    y: { ticks: { color: '#555', font: { size: 12 } }, grid: { color: '#eee' } }
                }
            }
        });
    }

    // Dữ liệu và biểu đồ
    const chart1Data = createChartData(
        ['Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
        [150, 200, 120, 180, 250],
        'Số lượng sản phẩm đã mua (Q4)',
        ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
    );
    const chart2Data = createChartData(
        ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5'],
        [100, 150, 130, 170, 210],
        'Số lượng sản phẩm đã mua (Q1)',
        ['#FF9F40', '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
    );
    const chart3Data = createChartData(
        ['Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10'],
        [180, 190, 150, 200, 240],
        'Số lượng sản phẩm đã mua (Q2 + Q3)',
        ['#9966FF', '#FF9F40', '#FF6384', '#36A2EB', '#FFCE56']
    );

    // Tạo biểu đồ
    createChart('buyChart1', chart1Data, 'Thống Kê Mua Hàng Q4');
    createChart('buyChart2', chart2Data, 'Thống Kê Mua Hàng Q1');
    createChart('buyChart3', chart3Data, 'Thống Kê Mua Hàng Q2 + Q3');

    // Tìm kiếm
    document.getElementById('search-input').addEventListener('input', function() {
        let query = this.value.toLowerCase();
        console.log('Tìm kiếm: ' + query);
    });
</script>

<style>
    /* Tiêu đề chính */
    .dashboard-title {
        font-size: 2.5rem;
        text-align: center;
        margin: 20px 0;
        color: #444;
        font-family: 'Arial', sans-serif;
        text-transform: uppercase;
    }

    /* Tiêu đề phần thống kê */
    .stats-title {
        font-size: 1.8rem;
        text-align: center;
        margin-bottom: 20px;
        color: #555;
        font-family: 'Arial', sans-serif;
    }

    /* Lưới biểu đồ */
    .charts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 20px;
        padding: 0 20px;
    }

    /* Khung từng biểu đồ */
    .chart-item {
        background: linear-gradient(to right, #f8f9fa, #e9ecef);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .chart-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Canvas của biểu đồ */
    canvas {
        width: 100% !important;
        height: 300px !important;
    }

    /* Thanh tìm kiếm */
    .search-bar {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .search-bar input {
        padding: 10px;
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
    }

    .search-bar .search-btn {
        padding: 10px 20px;
        background-color: #36A2EB;
        color: #fff;
        border: none;
        border-radius: 5px;
        margin-left: 10px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-bar .search-btn:hover {
        background-color: #2980b9;
    }

    /* Phần thông báo */
    .notifications {
        margin-bottom: 30px;
        font-family: 'Arial', sans-serif;
    }

    .notifications ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .notifications ul li {
        background: #f7f7f7;
        padding: 15px;
        margin: 5px 0;
        border-radius: 5px;
        display: flex;
        align-items: center;
        font-size: 1rem;
    }

    .notifications ul li .icon {
        font-size: 1.5rem;
        margin-right: 15px;
    }

    .notifications ul li strong {
        font-weight: bold;
    }
</style>
