<?php

$link = '';
$input = '';
$output = '';

if (isset($_POST['btnSub1'])) {
  $lines = explode("\n", $_POST['input']);
  $lines = array_map(function ($item) {
    return str_replace(",", '.', trim($item));
  }, $lines);
  $assoc = array();
  foreach (array_chunk($lines, 2) as $pair) {
    list($key, $value) = $pair;
    $assoc[$key] = $value;
    $output .= trim($key . ', ' . $value) . "\n";
  }
  $output = trim($output);

  $input = isset($_POST['input']) ? trim($_POST['input']) : $input;
}

if (isset($_POST['btnSub2'])) {
  $str = trim($_POST['output']);
  $filename = './data/' . (isset($_POST['filename']) ? trim($_POST['filename']) :  md5($str)) . '.txt';

  file_put_contents($filename, $str);
  $link = sprintf('<div class="alert alert-primary mb-2"><a href="%s" target="_blank" class="alert-link">%s</a></div>', $filename, $filename);

  $output = isset($_POST['output']) ? trim($_POST['output']) : $output;

  $lines = explode("\n", $str);

  $new_input = [];
  foreach ($lines as $line) {
    $parts =  explode(",", $line);
    $parts = array_map(function ($item) {
      return trim($item);
    }, $parts);
    $new_input[] = join("\n", $parts);
  }

  $input = join("\n", $new_input);
}



$title = "Toạ độ";
?>
<?php include 'inc/header.php' ?>

<form method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-6 mb-3 mb-lg-0">
      <label for="" class="form-label">Input</label>
      <textarea class="form-control mb-3" name="input" rows="10" cols="80"><?php echo $input; ?></textarea>
      <button name="btnSub1" type="submit" class="btn btn-secondary">Submit #1</button>
    </div>
    <div class="col-lg-6">
      <?php echo $link; ?>
      <label for="" class="form-label">Output</label>
      <textarea class="form-control mb-3" name="output" rows="6" cols="80"><?php echo $output; ?></textarea>
      <input type="text" class="form-control mb-3" name="filename" placeholder="file.txt" required>
      <button name="btnSub2" type="submit" class="btn btn-primary">Submit #2</button>
    </div>
  </div>
</form>
<?php include 'inc/footer.php' ?>