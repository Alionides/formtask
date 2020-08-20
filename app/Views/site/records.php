  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Records
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Home</a>
      </li>
      <li class="breadcrumb-item active">Records</li>
    </ol>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($alldata as $d){ ?>
    <tr>
      <td><?= $d->name ?></td>
      <td><?= $d->phone ?></td>
      <td><?= $d->email ?></td>
      <td><?= $d->message ?></td>
    </tr>   
  <?php } ?>
  </tbody>
</table>

  </div>
  <!-- /.container -->