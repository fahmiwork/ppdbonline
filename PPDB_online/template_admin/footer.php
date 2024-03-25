
    
    <!-- Custom template | don't include it in your project! -->

 
  <!--   Core JS Files   -->
  <script src="assets2/js/core/jquery.3.2.1.min.js"></script>
  <script src="assets2/js/core/popper.min.js"></script>
  <script src="assets2/js/core/bootstrap.min.js"></script>
  <!-- jQuery UI -->
  <script src="assets2/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="assets2/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
  
  <!-- jQuery Scrollbar -->
  <script src="assets2/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Datatables -->
  <script src="assets2/js/plugin/datatables/datatables.min.js"></script>
  <script src="assets2/js/plugin/chart.js/chart.min.js"></script>
  <!-- Atlantis JS -->
  <script src="assets2/js/atlantis.min.js"></script>
  <!-- Atlantis DEMO methods, don't include it in your project! -->
  <script src="assets2/js/setting-demo2.js"></script>
  <script >
    $(document).ready(function() {
      $('#basic-datatables').DataTable({
      });

      $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
          this.api().columns().every( function () {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo( $(column.footer()).empty() )
            .on( 'change', function () {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
                );

              column
              .search( val ? '^'+val+'$' : '', true, false )
              .draw();
            } );

            column.data().unique().sort().each( function ( d, j ) {
              select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
          } );
        }
      });

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 5,
      });

      var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action
          ]);
        $('#addRowModal').modal('hide');

      });
    });
  </script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    // membuat data chart dari json yang sudah ada di atas
    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

    // Set options, bisa anda rubah
    var options = {'title':'Data siswa',
             'width':500,
             'height':400};

    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
    </script>
<script>
    var 
    pieChart = document.getElementById('pieChart').getContext('2d'),
    barChart = document.getElementById('barChart').getContext('2d');

    
 <?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE jenis_kelamin='Laki-laki' ORDER BY id_pendaftar asc ");
$jumlah_laki_laki = mysqli_num_rows($sql);

$sql2 = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE jenis_kelamin='Perempuan' ORDER BY id_pendaftar asc ");
$jumlah_perempuan = mysqli_num_rows($sql2);



$sql3 = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE status_pendaftaran='Menunggu pengecekan dokumen'  ");
$jumlah_cek = mysqli_num_rows($sql3);



$sql3 = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE status_pendaftaran='Diterima'  ");
$jumlah_diterima = mysqli_num_rows($sql3);

$sql3 = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE status_pendaftaran='Ditolak'  ");
$jumlah_ditolak = mysqli_num_rows($sql3);
?>



    var myPieChart = new Chart(pieChart, {
      type: 'pie',
      data: {
        datasets: [{
          data: [<?php echo $jumlah_cek; ?>, 
          <?php echo $jumlah_diterima; ?>,<?php echo $jumlah_ditolak; ?>
          ],
          backgroundColor :["#1d7af3","#f3545d","#fdaf4b"],
          borderWidth: 0
        }],
        labels: ["Masih Dicek", "Diterima", "Ditolak"] 
      },
      options : {
        responsive: true, 
        maintainAspectRatio: false,
        legend: {
          position : 'bottom',
          labels : {
            fontColor: 'rgb(154, 154, 154)',
            fontSize: 11,
            usePointStyle : true,
            padding: 20
          }
        },
        pieceLabel: {
          render: 'percentage',
          fontColor: 'white',
          fontSize: 14,
        },
        tooltips: false,
        layout: {
          padding: {
            left: 20,
            right: 20,
            top: 20,
            bottom: 20
          }
        }
      }
    })


var myBarChart = new Chart(barChart, {
      type: 'bar',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets : [{
          label: "Pendaftar",
          backgroundColor: 'rgb(23, 125, 255)',
          borderColor: 'rgb(23, 125, 255)',
          data: [<?php echo $jumlah_laki_laki; ?>, <?php echo $jumlah_perempuan; ?>],
        }],
      },
      options: {
        responsive: true, 
        maintainAspectRatio: false,
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        },
      }
    });


  </script>

  
</body>
</html>