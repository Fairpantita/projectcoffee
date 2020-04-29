<?php include "header.php";?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>เพศ
          </h1>
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
    labels: ["male", "female"],
    datasets: [{

/*  
      <?php include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล   
		 $sql_male = "SELECT COUNT(inform.sex) as malee FROM inform WHERE inform.sex='male'  "; 
         $query_male = $conn->query($sql_male); 
         $result_male = $query_male->fetch_assoc();
         
        
         
         $sql_female = "SELECT COUNT(inform.sex) as femalee FROM inform WHERE inform.sex='female' "; 
         $query_female = $conn->query($sql_female); 
         $result_female = $query_female->fetch_assoc();
      ?>
 */
        
      data: [
        <?php echo $result_male['malee'];?> , 
        <?php echo $result_female['femalee'];?> , 
      ],

      backgroundColor: ['	#FF6347', '#48D1CC'],
      hoverBackgroundColor: ['#FF9966', '#B0C4DE'],
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