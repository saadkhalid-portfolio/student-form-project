<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .student-info {
            margin-bottom: 20px;
        }
        .student-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <?php
        $sub_names = [];
        if(isset($_POST['submit'])){
            $st_name = $_POST['st_name'] ?? 'no name';
            $f_name = $_POST['f_name'];
            $st_number = $_POST['st_number'];
            $age = $_POST['age'];
            $class = $_POST['class'];
            $sub_names = $_POST['sub_name']??[];
            $sub_marks = $_POST['sub_marks']??[];
            $ob_marks = $_POST['ob_marks']??[];
            $file_name = $_FILES['st_pic']['name'];
            $file_size = $_FILES['st_pic']['size'];
            $file_tmp = $_FILES['st_pic']['tmp_name'];
            $file_type = $_FILES['st_pic']['type'];
            $file_images_name = $_FILES['images']['name']??[];
            $file_images_size = $_FILES['images']['size']??[];
            $file_images_tmp = $_FILES['images']['tmp_name']??[];
            $file_images_type = $_FILES['images']['type']??[];
            // Check if file already exists
            if (file_exists("images/".$file_name)) {
            echo "Sorry, file already exists.";
            
            }
            move_uploaded_file($file_tmp,'images/'.$file_name);

            foreach ($file_images_name as $key => $image_name) {
            $file_name = $image_name;
            $file_size = $file_images_size[$key];
            $file_tmp = $file_images_tmp[$key];
            $file_type = $file_images_type[$key];
            // Check if file already exists
            if (file_exists("images/".$file_name)) {
            echo "Sorry, file already exists.";
            
            }
            move_uploaded_file($file_tmp,'images/'.$file_name);
            }

        }

    ?>

    <h1>Student Marksheet</h1>

    <div class="student-info">
        <p><strong>Student Name:</strong> <?php echo $st_name??'Please Enter Your Nmae'; ?></p>
        <p><strong>Father Name:</strong> <?php echo $f_name??'Please Enter Your Father Name'; ?></p>
        <p><strong>Student Number:</strong> <?php echo $st_number??'Please Enter Your Number'; ?></p>
        <p><strong>Student Age:</strong> <?php echo $age??'Please Enter Your Age'; ?></p>
        <p><strong>Student Class:</strong> <?php echo $class??'Please Enter Your Class'; ?></p>
    </div>

    <table>
        <thead >
            <tr>
                <th >Subject Name</th>
                <th>Subject Marks</th>
                <th>Obtained Marks</th>
            </tr>
        </thead>
        <tbody>
            <?php
               $total_marks = 0;
               $obtain_marks = 0;
               foreach($sub_names as $index => $sub_name) {
               $total_marks = $total_marks + (int)$sub_marks[$index];
               $obtain_marks = $obtain_marks + (int)$ob_marks[$index];
            ?>
            <tr>
                <td><?php echo $sub_name??'Please Enter Your Nmae'; ?></td>
                <td><?php echo $sub_marks[$index]??'Please Enter Your Nmae'; ?></td>
                <td><?php echo $ob_marks[$index]??'Please Enter Your Nmae'; ?></td>                
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="1"><strong>Total Marks:</strong></td>
                <td><strong><?php echo $total_marks ?></strong></td>
                <td><strong><?php echo $obtain_marks ?></strong></td>
            </tr>
        </tfoot>
    </table>

</body>
</html>