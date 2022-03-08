  <?php
  function kelulusan($nilai_total)
  {
    if ($nilai_total > 55) {
      return "LULUS";
    } else {
      return "Tidak LULUS";
    }
  }

  function grade($nilai_total)
  {
    // Grade Nilai
    if ($nilai_total > 100 or $nilai_total < 0) {
      return "I";
    } elseif ($nilai_total >= 85) {
      return "A";
    } elseif ($nilai_total >= 70) {
      return "B";
    } elseif ($nilai_total >= 56) {
      return "C";
    } elseif ($nilai_total >= 36) {
      return "C";
    } elseif ($nilai_total >= 0) {
      return "E";
    }
  }


  function predikat($grade)
  {
    $grades = $grade;

    switch ($grade) {
      case "A":
        return  "Sangat Memuaskan";
        break;
      case "B":
        return "Memuaskan";
        break;
      case "C":
        return "Cukup";
        break;
      case "D":
        return "Kurang";
        break;
      case "I":
        return  "Tidak Ada";
        break;
      default:
        echo "Tidak ada Nilai";
    }
  }
