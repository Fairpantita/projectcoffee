
<?php include "header.php";?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>รายงานแสดงยอดขายช่วงเช้าและช่วงบ่าย</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
       

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>

                <div class="card-body">
                <div class="chart-pie pt-4">
                    
                    <canvas id="myPieChart" style="min-height: 350px; height: 450px; max-height: 450px; max-width: 200%;"></canvas>
               </div>
                                    
              </div>

              <?php include "footer.php";?>

<!-- Page level plugins -->

<script src="plugins/chart.js/Chart.min.js"></script>

<script src="vendor/chart.js/Chart.min.js"></script>

<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Morning", "Afternoon"],
    datasets: [{

/*  
      <?php include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล   
		 $sql_m = "SELECT COUNT(historytb.history_id) as mm FROM historytb WHERE history_time like '8%' OR history_time like '9%' OR history_time like '10%' OR history_time like '11%' OR history_time like '12%'"; 
         $query_m = $conn->query($sql_m); 
         $result_m = $query_m->fetch_assoc();

         $sql_a = "SELECT COUNT(historytb.history_id) as aa FROM historytb WHERE history_time like '13%' OR history_time like '14%' OR history_time like '15%' OR history_time like '16%' OR history_time like '17%'OR history_time like '18%'OR history_time like '19%'OR history_time like '20%'OR history_time like '21%'OR history_time like '22%'OR history_time like '23%'OR history_time like '24%'"; 
         $query_a = $conn->query($sql_a); 
         $result_a = $query_a->fetch_assoc();
      ?>
 */
        
      data: [
        <?php echo $result_m['mm'];?> , 
        <?php echo $result_a['aa'];?> , 
      ],

      backgroundColor: ['#BA55D3', '#FFD700', '#36b9cc'],
      hoverBackgroundColor: ['#CC99FF', '#FFFF00', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>