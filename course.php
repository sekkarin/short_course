<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Course
    {
        // Properties
        public $courseName;
        public $dateCcreted;
        public $loaction;
        public $price;
        public $courseDesc;
        public $image;
        // Methods
        function __construct($courseName, $dateCreate, $loaction, $price, $courseDesc)
        {
            $this->courseName = $courseName;
            $this->dateCcreted = $dateCreate;
            $this->loaction = $loaction;
            $this->price = $price;
            $this->courseDesc = $courseDesc;
            $this->image = "./public/images/image1.png";
        }
        function diplay_short()
        {
            printf("<img src='%s' width='250' >",$this->image);
            echo "<h1>"."Hello  method".$this->image ."</h2>";
        }
        function display_detail()
        {
            echo ("Hello  method");

        }
    }
    ?>
    <?php
    $course1 = new Course(
        "ผ้าพิมพ์ลายสีธรรมชาติ (E-coprinting)ย้อมเส้นไหม ฝ้าย สีธรรมชาติ",
        "11.11",
        "มหาวิทยาลัยราชภัฏนครปฐม",
        "69",
        "Hello"
    );
    
    ?>
    <ul>
        <li><?php echo ($course1->diplay_short()); ?></li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>
    <!-- <img src="<?php echo($course1->image) ?>" alt="" srcset=""> -->
</body>

</html>