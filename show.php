<?php 
require 'db.php';
$sql = 'SELECT * FROM people ORDER BY id DESC';
$dbpeople = $connection->query($sql);
$results = $dbpeople->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container mt-5">
  <a href="/" class="btn btn-link">Home page</a>
  <table class="table table-bordered">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
    <?php foreach ($results as $result): ?>
        <tr>
          <td><?php echo $result->id ; ?></td>
          <td><?php echo $result->name ; ?></td>
          <td><?php echo $result->email ; ?></td>
        </tr>
    <?php endforeach ; ?>
  </table>

  
</div>
<?php require 'footer.php'; ?>