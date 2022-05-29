<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy.com.vn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php
      include_once ('./app/system/lbs/main.php');
      include_once ('./app/system/lbs/Pcontroller.php');
      include_once ('./app/system/lbs/Database.php');
      include_once ('./app/system/lbs/DModel.php');
      include_once ('./app/system/lbs/Load.php');


      $controller = $_REQUEST['controller'];
      $action = $_REQUEST['action'];
      
      
      switch ($controller) {
          case 'category':
              include_once './app/controller/category.php';
              $objController = new category();
              break;
        //   case 'teacher':
        //       include_once './controllers/teacherController.php';
        //       $objController = new teacherController();
        //       break;
        //   case 'student':
        //       include_once './controllers/studentController.php';
        //       $objController = new studentController();
        //       break;
          default:
              break;
      }
      
      switch ($action) {
            //   case 'homepage':
            //       $objController->homepage();
            //       break;
          case 'product':
              $objController->list_category();
              break;
          case 'catebyid':
              $objController->catebyid();
              break;
        //   case 'delete':
        //       $objController->delete();
        //       break;
        //   case 'show':
        //       $objController->show();
        //       break;
        //   case 'search':
        //       $objController->search_name();
        //       break;
          default:
              $objController->list_category();
              break;
      }
        include_once './app/controller/index.php';
        $index = new index();
        $index->homepage();
    // }
    ?>

</body>
</html>