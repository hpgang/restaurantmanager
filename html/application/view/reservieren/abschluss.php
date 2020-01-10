<head>
<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/tischreservierung/abschluss.css" />
</head>
<body>
<p>&nbsp;</p>
<h2>Deine Reservierung</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Informationsübersicht</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Name</td>
              <td></td>
            </tr>
            <tr>
              <td>Datum</td>
              <td></td>
            </tr>
            <tr>
              <td>Tisch</td>
              <td></td>
            </tr>
            <tr>
              <td>Personenanzahl</td>
              <td></td>
            </tr>
            <tr>
              <td>Russia</td>
              <td></td>
            </tr>
            <tr>
              <td>Sweden</td>
              <td></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>

<style>
h2 {
    text-align: center;
  }
  
  table caption {
      padding: .5em 0;
  }
  
  @media screen and (max-width: 767px) {
    table caption {
      border-bottom: 1px solid #ddd;
    }
  }
  
  .p {
    text-align: center;
    padding-top: 140px;
    font-size: 14px;
  }
</style>
</body>