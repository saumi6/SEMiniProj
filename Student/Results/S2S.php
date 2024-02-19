<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./results.css">
    <link rel="stylesheet" href="../../Utils.css">
</head>
<body>
<?php
    session_start();
    try{
    require_once "../../dbh.inc.php";
    $user = $_SESSION["user"];
    $query = "SELECT * FROM s2mark where rollno=$user;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if (empty($results)){
        $s=["-","-","-","-","-","-"];
    }else{
        $s=[$results["rollno"],$results["s1"],$results["s2"],$results["s3"],$results["s4"],$results["s5"]];
    }
    } catch (PDOException $e)
    {
        die("Query failed" . $e->getmessage());
    }
?>
  <div class="resultS2S">
  <aside class="left-side sidebar-offcanvas">
    <div class="d-flexone flex-column flex-shrink-0 p-3 bg-body-" style="width: 280px;">
    <a href="../Main/Main.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
      </svg><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-3">Academic Tracker</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="#" class="nav-link link-body-emphasis" class="btn">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <a href="../Assignment(S)/Assgn.html"class="btn btn-warning" id="trialOne"> Assignments Overview</a>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <a href="../Attendance/attendance.html"class="btn btn-warning" id="trialOne">View Attendance</a>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          <a href="../Results/results.html"class="btn btn-warning" id="trialOne">Results</a>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          <a href="../Timetable/timetable.html"class="btn btn-warning" id="trialOne">Timetable</a>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          <a href="../Notice/notice.html"class="btn btn-warning" id="trialOne">Notice</a>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          <a href="../Main/UpdatedSchedule.html"class="btn btn-warning" id="trialOne" style="text-align: left;">Completed Syllabus</a>
        </a>
      </li> 
    </ul>
    <hr>
</aside>  
    <div class="ResultTabS2S">
        <h1 style="color: white;">Results</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="./S1S.html">Sem 1</a>
                  <a class="nav-link active" aria-current="page" href="./S2S.html">Sem 2</a>
                  <!--<a class="nav-link" href="./S3S.html">Sem 3</a>-->
                </div>
                <div class="dropdown py-2">
                  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="testselect">
                    Select test
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./S2U1.html">Unit test 1</a></li>
                    <li><a class="dropdown-item" href="./S2U2.html">Unit test 2</a></li>
                    <li><a class="dropdown-item" href="./S2S.html">Semester exam</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
          <div id="marks">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Subject</th>
                <th scope="col">Marks obtained</th>
                <th scope="col">Max Marks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Physics</td>
                <td><?php echo $s[1]?></td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Chemistry</td>
                <td><?php echo $s[2]?></td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Maths</td>
                <td><?php echo $s[3]?></td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Drawing</td>
                <td><?php echo $s[4]?></td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>C Prog</td>
                <td><?php echo $s[5]?></td>
                <td>100</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <a href="#" class="nav-link link-body-emphasis">
      <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
      <a href="../../LoginPage.html"class="btn btn-danger" style="text-align: left;width: 150px;height: 50px;">Log-Out</a>
    </a>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>