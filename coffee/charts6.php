
<?php include "header.php";?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>รายงานยอดขายแบ่งตามการเข้าใช้บริการ</h1>
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


                  <div class="chart-bar">
                   
                    <canvas id="myBarChart" style="min-height: 250px; height: 500px; max-height: 550px; max-width: 100%;"></canvas>
                  </div>

              </div>

            </div>
		  		  
            <?php include "footer.php";?>


<!-- Page level plugins -->

<script src="plugins/chart.js/Chart.min.js"></script>

<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#8B4513'; // สีข้อความ

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Bar Chart Example------------------------------------
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
/*   <?php include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล 
            $sql = "SELECT * FROM inform GROUP BY stat ORDER BY inform.stat ASC"; 			
			$query = $conn->query($sql); 
			while($result = $query->fetch_assoc()){

                switch ($result['stat']) {
                    case "alone": $statuss = "";  break;
                    case "friend": $statuss = "";  break;
                    case "dear": $statuss = "";  break;
                    case "family": $statuss = "";  break;
                   
                    
                    default:
                        echo "ไม่ระบุ";
                }

	     ?>
 */
	
	"<?php echo $statuss;?> <?php echo $result['stat'];?>", 
	
	/*<?php } ?>*/
	
	
	],
    datasets: [{
      label: "จำนวนแก้ว",
      backgroundColor: "#32CD32",
      hoverBackgroundColor: "#90EE90",
      borderColor: "#4e73df",
      data: [



        /*  <?php include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล 
            $sql = "SELECT * FROM inform GROUP BY stat ORDER BY inform.stat ASC"; 			
			$query = $conn->query($sql); 
			while($result = $query->fetch_assoc()){
            $statuss=$result['stat'];
            $sql_sum = "SELECT Count(inform.orderid) As cc FROM inform where stat='$statuss' "; 			
			$query_sum = $conn->query($sql_sum); 
			$result_sum = $query_sum->fetch_assoc();
	        ?>
        */
	
	<?php echo $result_sum['cc'];?>, 
	
	/*<?php } ?>*/  

	  ],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 20,
        top: 20,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 10
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15,
          maxTicksLimit: 30,
          padding: 40,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return ' ' + number_format(value) + ' แก้ว ';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' : ' + number_format(tooltipItem.yLabel) + ' แก้ว ';
        }
      }
    },
  }
});

  </script>