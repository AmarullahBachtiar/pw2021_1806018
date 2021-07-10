<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_1806018');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  $rows = [];
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
