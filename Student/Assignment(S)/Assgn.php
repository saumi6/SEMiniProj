<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./Assgn.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Utils.css">
    <title>Assignment</title>
</head>

<body class="bodyAssgn">
<?php
    try{
    require_once "../../dbh.inc.php";
    $query = "SELECT link FROM assignments;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e)
    {
        die("Query failed" . $e->getmessage());
    }
?>
    <div class="mainCard"><!--Assignments-->
        <aside class="left-side sidebar-offcanvas">
            <div class="d-flexone flex-column flex-shrink-0 p-3 bg-body-#053B50" style="width: 280px;">
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
              <!--<li>
                <a href="#" class="nav-link link-body-emphasis" class="btn">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  <a class="btn btn-warning" id="trialOne"> Assignments</a>
                </a>
              </li>-->
              <li>
                <a href="../Main/Main.html" class="nav-link link-body-emphasis">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                <a href="../Main/Main.html" class="btn btn-warning" id="trialOne">Assignments Overview</a>
                </a>
            </li>  
              <li>
                <a href="../Attendance/attendance.html" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  <a href="../Attendance/attendance.html" class="btn btn-warning" id="trialOne">View Attendance</a>
                </a>
              </li>
              <li>
                <a href="../Results/results.html" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  <a  href="../Results/results.html" class="btn btn-warning" id="trialOne">Results</a>
                </a>
              </li>
              <li>
                <a href="../Timetable/timetable.html" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  <a href="../Timetable/timetable.html" class="btn btn-warning" id="trialOne">Timetable</a>
                </a>
              </li>
                <li>
                    <a href="../Notice/notice.html" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    <a href="../Notice/notice.html" class="btn btn-warning" id="trialOne">Notice</a>
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

    </div>

<div class="rightPage">
        <!--<div class="topBar">
            <nav class="navbar bg-body-tertiary">
                <form class="container-fluid justify-content-start">
                <button class="btn btn-outline-success me-2" type="button">Submitted</button>
                <button class="btn btn-outline-success me-2" type="button">Assigned</button>
                <button class="btn btn-outline-success me-2" type="button">To Be Submitted</button>
                </form>
            </nav>
        </div>-->
    
    <div class="rightCont">
        <div id="Submitted">
            <p>
                <button class="btn btn-primary" type="button"  id="submit" onclick="dropdownID_S" data-bs-toggle="collapse" data-bs-target="#collapseSubmitted" aria-expanded="false" aria-controls="collapseWidthExample">
                    Submitted
                </button>
            </p>
            <div class="contentRight">
            <div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseSubmitted">
                <div class="card card-body" style="width: 800px; height: 200px;">
                    Submitted:5
                </div>
                </div>
            </div>
            <!--<div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                <div class="card card-body" style="width: 200px;">
                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                </div>
                </div>
            </div>
            <div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                <div class="card card-body" style="width: 200px;">
                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                </div>
                </div>
            </div>-->
            </div>
        </div>

        <div>
            <p>
                <button class="btn btn-primary" type="button"  id="submit" data-bs-toggle="collapse" data-bs-target="#collapseAssigned" aria-expanded="false" aria-controls="collapseWidthExample">
                    Assigned
                </button>
            </p>
            <div class="contentRight">
            <div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseAssigned">
                <div class="card card-body" style="width: 800px;height: 200px;">
                <?php
                        if(empty($results)){
                            echo "No assignments due";
                        }
                    
                    else {
                        foreach ($results as $row){
                            $link = $row["link"];
                            echo "<a href=$link> $link </a>";
                            echo "<br>";
                        }
                    }
                    ?>
                </div>
                </div>
            </div>
            <!--<div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                <div class="card card-body" style="width: 200px;">
                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                </div>
                </div>
            </div>
            <div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                <div class="card card-body" style="width: 200px;">
                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                </div>
                </div>
            </div>-->
            </div>
        </div>

        <div>
            <p>
                <button class="btn btn-primary" type="button" id="ToBe" onclick="dropdownID_M" data-bs-toggle="collapse" data-bs-target="#collapseMissing" aria-expanded="false" aria-controls="collapseWidthExample">
                    Missing
                </button>
            </p>
            <div class="contentRight">
            <div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseMissing">
                <div class="card card-body" style="width: 800px;height: 200px;">
                    Missing:0
                </div>
                </div>
            </div>
            <!--<div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                <div class="card card-body" style="width: 200px;">
                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                </div>
                </div>
            </div>
            <div style="min-height: 120px;">
                <div class="collapse collapse-vertical" id="collapseWidthExample">
                <div class="card card-body" style="width: 200px;">
                    This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                </div>
                </div>
            </div>-->
            </div>
        </div>
        <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            <a href="../../LoginPage.html"class="btn btn-danger" style="text-align: left;width: 150px;height: 50px;">Log-Out</a>
          </a>
    </div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            let buttons = document.querySelectorAll('.btn');

            buttons.forEach((button) => {
                button.addEventListener('click', () => {
                    let targetId = button.getAttribute('data-bs-target');
                    let targetCollapse = new bootstrap.Collapse(document.getElementById(targetId.substring(2))); // Remove the '#' from the ID

                    // Hide all other collapse elements
                    buttons.forEach((otherButton) => {
                        if (otherButton !== button) {
                            let otherTargetId = otherButton.getAttribute('data-bs-target');
                            let otherCollapse = new bootstrap.Collapse(document.getElementById(otherTargetId.substring(1)));
                            otherCollapse.hide();
                        }
                    });

                    // Toggle the collapse for the clicked button
                    targetCollapse.toggle();
                });
            });
        });
</script>
</body>

</html>