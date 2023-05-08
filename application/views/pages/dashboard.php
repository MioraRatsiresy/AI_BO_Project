<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Accueil contenant la liste des actualités et évenements de AI">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
  <style type="text/css">
		#carteId{
			height: 100%;
		}
	</style>
  <title>
    IA~Project-Accueil
  </title>
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url('assets/css/material-dashboard.css?v=3.1.0'); ?>" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		function initialize() {
			var mapOptions = {
				center: new google.maps.LatLng(-18.397232, 45.644123),  // la latitude et la longitude de la carte
				zoom: 6, // le zoom sur l'image
			};
			var carte = new google.maps.Map(document.getElementById("carteId"), mapOptions); // dessiner la carte
			var location = new google.maps.LatLng(-18.397232, 45.644123); // mettre un point sur la carte
			var marker = new google.maps.Marker({
				position: location, // mettre la position du marker sur la carte
				draggable: true, // le point peut etre deplace
				map: carte // la carte par defaut
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  bg-transparent"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
        target="_blank">
        <img src="<?php echo base_url('assets/img/logo-ct.png" class="navbar-brand-img h-100'); ?>" alt="main_logo">
        <span class="ms-1 font-weight-bold text-dark">IA~Project</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark active bg-gradient-primary" href="<?php echo base_url('IA-News'); ?>">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">IA~News</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="<?php echo base_url('IA-News?event=1'); ?>">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">IA~Event</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="<?php echo base_url('IA-Category-list'); ?>">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Category</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="../pages/profile.html">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="<?php echo base_url('Administrateur/logout'); ?>">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">IA~Project</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">News</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">News</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item px-3 d-flex align-items-center">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal">
                Ajouter un article
              </button>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="row mt-4">
    <div id="carteId">
    </div>
      <?php foreach ($actualite as $actualite) { ?>
        <a href="<?php echo base_url('Actualites/'.$actualite['grandtitre'].'/'.$actualite['idactualite'])?>"><div class="col-lg-4 col-md-6 mt-4 mb-4" >
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <img src="<?php echo base_url('assets/img/upload/'.$actualite['photoillustration']); ?>" alt="<?php echo $actualite['grandtitre']; ?>" width="350px" height="100px">
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">
                <?php echo $actualite['grandtitre']; ?>
              </h6>
              <p class="text-sm ">
                <?php echo $actualite['descriptionactualite']; ?>
              </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">
                  <?php echo $actualite['datepublication']; ?>
                </p>
              </div>
            </div>
          </div>
        </div></a>
      <?php } ?>
    </div>
  </main>
  <script>
    function choosetypearticle(){
      console.log(document.getElementById('typearticle').value);
      if(document.getElementById('typearticle').value==2){
       document.getElementById('datedebut').style.display="block";
       document.getElementById('datefin').style.display="block";
       document.getElementById('lieuevenement').style.display="block";
      }
      else{
        document.getElementById('datedebut').style.display="none";
       document.getElementById('datefin').style.display="none";
       document.getElementById('lieuevenement').style.display="none";
      }
    }
  </script>
  <!-- Modal -->
  <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="articleModalLabel">Ajouter un article</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Administrateur/ajoutArticle');?>">
            <div class="mb-3">
            <label for="Type d'article" class="form-label">Type d'article</label>
              <select id="typearticle" class="form-control" name="typeactualite" onchange="choosetypearticle()">
               <?php foreach ($type as $type) {?>
                <option value="<?php echo $type['idtypeactualite'];?>"><?php echo $type['typeactualite'];?></option>
               <?php } ?>  
              </select>
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Titre</label>
              <input type="text" class="form-control" id="title" name="grandtitre" required>
            </div>
            <div class="mb-3">
            <input class="form-control" required  type="file" name="photo">
            </div>
            <div class="mb-3" id="datedebut" style="display:none;">
            <label for="Lieu" class="form-label">Date début</label>
              <input type="datetime-local" class="form-control" name="datedebut">
            </div>
            <div class="mb-3" id="datefin" style="display:none;">
            <label for="Lieu" class="form-label">Date fin</label>
              <input type="datetime-local" class="form-control" name="datefin">
            </div>
            <div class="mb-3" id="lieuevenement" style="display:none;">
            <label for="Lieu" class="form-label">Lieu évènement</label>
              <input type="text" class="form-control" name="lieuevenement">
            </div>
            <div class="mb-3">
              <label for="contenu" class="form-label">Description</label>
              <textarea class="form-control" id="contenu" name="description" required></textarea>
              <script>
                CKEDITOR.replace('contenu');
              </script>
            </div>
            <button onclick="submitArticle();" class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    function submitArticle() {
      CKEDITOR.instances["contenu"].updateElement();
    }
  </script>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/smooth-scrollbar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/chartjs.min.js'); ?>"></script>
  <script>
    
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        },],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/js/material-dashboard.min.js?v=3.1.0'); ?>"></script>
</body>

</html>