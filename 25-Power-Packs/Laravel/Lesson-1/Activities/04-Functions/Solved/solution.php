<?php

require './helpers.php';

$students_array = [
  'Peleke' => ['Sengstacke', 23, 'Syracuse'],
  'Julius' => ['Caesar', 2116, 'Rome']
];

foreach ($students_array as $student => $data) {
  introduce_student($student, $data[0]);

  drinks_sake($data[1]);

  separate();
}
