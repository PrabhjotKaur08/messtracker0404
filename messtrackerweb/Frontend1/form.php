<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Attendance</title>
    <link rel="stylesheet" href="styleattendance.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    
    />
   </head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img class="logo" src="../img/logo2.png" alt="logo" srcset="" />
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index1.html"><button="sand">Home</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index1.html"><button="sand">Team</button></a>
          </li>
          
        </ul>
        <button class="end">
        <li class="nav-item dropdown">
          <a class="nav-link" aria-current="page" href="../backend/logout.php">
            <button="sand"> Logout</button>
          </a>
          
        </li>
      </button>
      </div>
    </div>
  </nav>
  <div class="container">
    
    <div class="title">Attendance</div>
    <div class="content">
    <form action="../backend/formsave.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Serial Number</span>
            <input type="text" placeholder="serial number" required name="serial_number">
          </div>
        </div>
        <div class="meal-details">
          <input type="radio" name="meal" value="breakfast" id="dot-1">
          <input type="radio" name="meal" value="lunch"  id="dot-2">
          <input type="radio" name="meal" value="dinner"  id="dot-3">
          <span class="meal-title">Meal</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="meal">Breakfast</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="meal">Lunch</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="meal">Dinner</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Save" name="save" >
        </div>
       
      </form>
      
    </div>
    <img class=imges src="../img/undraw_financial_data_re_p0fl.svg">
  </div>

</body>
</html>
